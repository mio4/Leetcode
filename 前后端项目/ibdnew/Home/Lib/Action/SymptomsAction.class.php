<?php
	class SymptomsAction extends BaseAction
	{  
		public function redirect()
		{
		} 
		
		public function Symptoms ()
		{
			if ($this->CheckLogin())
			{   
				$this->display();
			}
			else
			{
				$this->redirect();
			}
		} 
		public function save_sym ()
		{
			if ($this->CheckLogin())
			{   
				$m=M("symptoms");
				$other=M("sym_other"); 
				$list=array("cnum" ,"check_time","symptom","signs","smoke","drink","lactose","abdomen","pregnancy","colon");
				foreach($list as $k){
					if($k==symptom){
						$list[$k]=$_POST[$k]; 
					}
					else $list[$k]=$_POST[$k]; 
				}
				$sym_other=array(
						"cnum"=>$_POST['cnum'],
						"check_time"=>$_POST['check_time'],
						"symptom_other"=>$_POST['symptom_other'],
						"signs_other"=>$_POST['signs_other'],
						"app_input"=>$_POST['app_input']
						);
				$if_exist=$m->where('cnum = "%s" and check_time="%s"',array($_POST['cnum'],$_POST['check_time']))->select();
				
				if($if_exist==null){
					$m->add($list);
					if(($_POST['symptom_other']!=null)|($_POST['signs_other']!=null)|($_POST['app_input']!=null)){
						$other->add($sym_other); 
					}
				}
				else{
					$this->ajaxReturn(array("status"=>"failed","reason"=>"该体征症状信息已存在"));
				}
			}
			else
			{
				$this->redirect();
			}
		} 
		
		 
	}
?>