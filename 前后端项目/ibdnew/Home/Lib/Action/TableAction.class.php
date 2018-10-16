<?php
	class TableAction extends Action
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
		
		public function GetDbConfig()
		{
			return null;
			if ($this->CheckLogin())
			{
				$m = M('user',null,'DB_CONF2');
				$result = $m->where("name='%s'",array($_SESSION['username']))->getField('role');
				if ($result == '1') return 'DB_CONF1';
				else return 'DB_CONF2';
			}
			else 
				return '';
		}
		
		public function Basic()
		{
			isset($_SESSION) or session_start();
			if (isset($_SESSION['username']))
			{
				if ($_SESSION['status'] == 1)
				{
					$this->display("./Home/Tpl/Index/basic_table.html");
					//$this->display("./Home/Tpl/Index/Index.html");
				}
				else 
				{
					//$this->display("./Home/Tpl/Index/basic_table.html");
					$this->display("./Home/Tpl/Index/login.html");
				}
			}
			else
			{
			//	echo "come into display";
					$this->display("./Home/Tpl/Index/login.html");
			}
		}
		public function GetPage()
		{
			
			isset($_SESSION) or session_start();
			if (isset($_SESSION['username']))
			{
				if ($_SESSION['status'] == 1)
				{
					$Num = (int)$_POST['pageNum'];
					$Return['status'] = 'success';
					$m = M('basic');
					$data = $m->order('Num')->limit($Num * 10+1)->getField('Num,Name,Sex');
					$i = 0;
					foreach ($data as $item)
					{
						if ($i >= ($Num - 1) * 10 && $i < min($Num*10,sizeof($data)))
						{
							array_push($Return,$item);
						}
						$i = $i + 1;
					}
					$this->ajaxReturn($Return);
				}
				else 
				{
					$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
				}
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function Search()
		{
			if ($this->CheckLogin())
			{
				$m = M('basic');
				$s = "Num like '%".$_POST['Search']."%' or Name like '%".$_POST['Search']."%'";
				$data = $m->where($s)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function Show($Num)
		{
			if ($this->CheckLogin())
			{
				$m = M('basic');
				$list = $m->where('Num = %s',array($Num))->select();
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function ChangeBasic()
		{
			if ($this->CheckLogin())
			{
				$m = M("basic");
				$str = array('Num','Cnum','Clnum','Name','Sex','Birth','Province','PhoneNum','Ethnic','OnsetTime','ConfirmTime');
				foreach ($str as $value)
				if ($value != '') {
					$data[$value] = $_POST[$value];
				}
				$C = 'Cnum';
				$m->where("Cnum=%s",array($data[$C]))->save($data);
				$this->ajaxReturn(array("status"=>"success"));
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function getDiagnosis($Max)
		{
			if ($this->CheckLogin())
			{
				$m = M("diagnosis");
				if ($Max > 3) $Max = 3;
				if ($Max < 0) $Max = 0;
				$data = $m->where('Cnum=%s',array($_POST['Cnum']))->limit($Max)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		public function showDiagnosis($key)
		{
			if ($this->CheckLogin())
			{
				$m = M("diagnosis");
				$list = $m->select($key);
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		
		public function getPastHistory($Max)
		{
			if ($this->CheckLogin())
			{
				$m = M("pasthistory");
				if ($Max > 3) $Max = 3;
				if ($Max < 0) $Max = 0;
				$data = $m->where('Cnum=%s',array($_POST['Cnum']))->limit($Max)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function showPastHistory($key)
		{
			if ($this->CheckLogin())
			{
				$m = M("pasthistory");
				$list = $m->select($key);
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function ChangePastHistory($key)
		{
			if ($this->CheckLogin())
			{
				$m = M('pasthistory');
				$data = array();
				$str = array('Cnum','SmokingH','QsmokingH','DrinkingH','QdrinkingH','LactoseIntol','OperationH','OperationHTime','MenarcheAge','Menses','Menstruation','Lastmen','PregnancyH','AllergyH','Fhocc');
				foreach ($str as $item)
				{
					$data[$item] = $_POST[$item];
				}
				$data['CreatTime'] = date('Y/m/d');
				$data['key'] = $key;
				$m->save($data);
				$this->ajaxReturn(array("status"=>"success"));
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function getSymptom($Max)
		{
			if ($this->CheckLogin())
			{
				$m = M("symptom");
				if ($Max > 3) $Max = 3;
				if ($Max < 0) $Max = 0;
				$data = $m->where('Cnum=%s',array($_POST['Cnum']))->limit($Max)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function showSymptom($key)
		{
			if ($this->CheckLogin())
			{
				$m = M("symptom");
				$list = $m->select($key);
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function ChangeSymptom($key)
		{
			if ($this->CheckLogin())
			{
				$m = M('Symptom');
				$data = array();
				$str = array('Cnum','Symptoms','Signs');
				foreach ($str as $item)
				{
					$data[$item] = $_POST[$item];
				}
				$data['CreatTime'] = date('Y/m/d');
				$data['key'] = $key;
				$m->save($data);
				$this->ajaxReturn(array("status"=>"success"));
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function getClinical($Max)
		{
			if ($this->CheckLogin())
			{
				$m = M("clinical");
				if ($Max > 3) $Max = 3;
				if ($Max < 0) $Max = 0;
				$data = $m->where('Cnum=%s',array($_POST['Cnum']))->limit($Max)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function showClinical($key)
		{
			if ($this->CheckLogin())
			{
				$m = M("clinical");
				$list = $m->select($key);
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function ChangeClinical($key)
		{
			if ($this->CheckLogin())
			{
				$m = M('clinical');
				$data = array();
				$str = array('Cnum','Weight','Height','Score');
				foreach ($str as $item)
				{
					$data[$item] = $_POST[$item];
				}
				$data['CreatTime'] = date('Y/m/d');
				$data['key'] = $key;
				$m->save($data);
				$this->ajaxReturn(array("status"=>"success"));
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function getEndoScopy($Max)
		{
			if ($this->CheckLogin())
			{
				$m = M("endoscopy");
				if ($Max > 3) $Max = 3;
				if ($Max < 0) $Max = 0;
				$data = $m->where('Cnum=%s',array($_POST['Cnum']))->limit($Max)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function showEndoScopy($key)
		{
			if ($this->CheckLogin())
			{
				$m = M("endoscopy");
				$list = $m->select($key);
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function ChangeEndoScopy($key)
		{
			if ($this->CheckLogin())
			{
				$m = M('endoscopy');
				$data = array();
				$str = array('Cnum','EcTypes','EcTime','EcNum');
				foreach ($str as $item)
				{
					$data[$item] = $_POST[$item];
				}
				$data['CreatTime'] = date('Y/m/d');
				$data['key'] = $key;
				$m->save($data);
				$this->ajaxReturn(array("status"=>"success"));
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function getImage($Max)
		{
			if ($this->CheckLogin())
			{
				$m = M("image");
				if ($Max > 3) $Max = 3;
				if ($Max < 0) $Max = 0;
				$data = $m->where('Cnum=%s',array($_POST['Cnum']))->limit($Max)->select();
				$this->ajaxReturn($data);
			}
			else
			{
				$this->ajaxReturn(array("status"=>"failed","reason"=>"用户未登录"));
			}
		}
		
		public function showImage($key)
		{
			if ($this->CheckLogin())
			{
				$m = M("image");
				$list = $m->select($key);
				$this->assign($list[0]);
			    $this->display();
			}
			else
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		
		public function ChangeImage($key)
		{
			$m = M('image');
			$data = array();
			$str = array('Cnum','ImageTypes','ImageTime','ImageNum');
			foreach ($str as $item)
			{
				$data[$item] = $_POST[$item];
			}
			$data['CreatTime'] = date('Y/m/d');
			$data['key'] = $key;
			$m->save($data);
			
			$this->ajaxReturn(array("status"=>"success"));
		}
	}
	
	
?>