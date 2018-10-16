<?php
	class ShowAction extends Action
	{
		public function CheckLogin()
		{
			isset($_SESSION) or session_start();
			if (isset($_SESSION['username']))
			{
				if ($_SESSION['status'] == 1)
				{
					return true;
				}
			}
			return false;
		}
		
		function birthday($birthday){ 
		 $age = strtotime($birthday); 
		 if($age === false){ 
		  return false; 
		 } 
		 list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age)); 
		 $now = strtotime("now"); 
		 list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); 
		 $age = $y2 - $y1; 
		 if((int)($m2.$d2) < (int)($m1.$d1)) 
		  $age -= 1; 
		 return $age; 
		}
		
		public function redirect()
		{
		}
		
		public function digit2type($value)
		{
			$ans = 'Unknown';
			if ($value=='0') $ans='UC';
			else if ($value=='1') $ans='CD';
			else if ($value=='2') $ans='IBDU';
			else if ($value=='3') $ans='IC';
			return $ans;
		}
		
		public function table()
		{
			if ($this->CheckLogin())
			{
				$m = M('basic');
				$data = $m->select();
				$returnData = array();
				foreach ($data as $item)
				{
					$item['type'] = $this->digit2type($item['type']);
					$item['age'] = $this->birthday($item['birth']);
					array_push($returnData,$item);
				}
				$this->assign('data',$returnData);
				$this->display();
			}
			else
			{
				$this->redirect();
			}
		}
		
		public function person()
		{
			if ($this->CheckLogin())
			{
			       $cnum= $_POST['cnum'];
				$m = M('basic');
				$data = $m->where('cnum = "%s"',array($cnum))->select();
				$data[0]['first_type'] = $this->digit2type($data[0]['type']);
				$data[0]['age'] = $this->birthday($data[0]['birth']);
				$m = M('hospital_record');
                            $data[0]['record'] = $m->where('cnum = "%s"',array($cnum))->select();
				$this->ajaxReturn($data[0]);
			}
			else
			{
				$this->redirect();
			}
		}

               public function saveRecord()
               {
                   if ($this->CheckLogin())
                   {
                       $m = M('hospital_record');
                       $isExist = $m->where('cnum = "%s" and recordStime = "%s"',array($_POST['cnum'],$_POST['recordStime']))->select();
                       if(!empty($isExist)){
                           $this->ajaxReturn(array('status' => 'failed','reason' => '该住院信息已经存在'));
                       }
                       $maxTimes = $m->where('cnum = "%s"',array($_POST['cnum']))->getField('times',true);

                       if(empty($maxTimes)){
                           $_POST['times'] = 1;
                       }else{
                           $_POST['times'] = max($maxTimes) + 1;
                       }
                       $m->add($_POST);
                       $this->ajaxReturn(array('status' => 'success','reason' => '添加成功'));
                   }
                   else
                   {
                       $this->redirect();
                   }
               }
	}
?>