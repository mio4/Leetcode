<?php
	class NewAction extends Action
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
		
		public function newPatient()
		{
			if ($this->CheckLogin())
			{
				$this->display();
			}
			else
			{
				
			}
		}
		
		public function savePatient()
		{
			if ($this->CheckLogin())
			{
				$m = M('basic');
				$is_exist = $m->where('cnum = "%s"',array($_POST['cnum']))->getField('cnum');
				if ($is_exist == null)
				{
					$m->add($_POST);
					$this->ajaxReturn(array("status"=>"success"));
				}
				else
				{
					$this->ajaxReturn(array("status"=>"failed","reason"=>"该病历号已存在"));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
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
		
		public function digit2type($value)
		{
			$ans = 'Unknown';
			if ($value=='0') $ans='UC';
			else if ($value=='1') $ans='CD';
			else if ($value=='2') $ans='IBDU';
			else if ($value=='3') $ans='IC';
			return $ans;
		}
		
		public function lab()
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
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
	}
?>