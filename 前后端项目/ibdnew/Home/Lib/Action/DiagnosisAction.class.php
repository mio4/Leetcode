<?php
	class DiagnosisAction extends BaseAction
	{  
		public function redirect()
		{
		} 
		
		public function Diagnosis()
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
		public function save_diag()
		{
			 if ($this->CheckLogin())
			{	  
				$m=M('diagnosis');  
				$list=array("cnum" ,"diag_time","dis_area","mayo","complication","arthritis","eye_inf","liver","skin","embolism","com_dis");
				foreach($list as $k){
					$list[$k]=$_POST[$k]; 
				}
				$condition = new stdClass(); 
				foreach($_POST as $k => $v){
					if(($k!="onset_time")|($k!="skin_other"))$condition->$k = $v;
				} 
				if($_POST["onset_time"]){
					$m1=M('diag_onset');
					$n=$m1->where('cnum="%s"',$_POST["cnum"])->getField("onset_time");
					if(!$n){
						$m1->add(array("cnum"=>$_POST["cnum"],"onset_time"=>$_POST["onset_time"]));
					}
					else{
						$this->ajaxReturn(array("status"=>"failed","reason"=>"已存在该病例的起病时间"));
						return;
					}
				} 
				$if_exist =$m->where($condition)->select();  
				if(!$if_exist){
					$m->add($list);
					if($_POST[skin]=="3"){
					$m2=M('diag_other');
					$n=$m2->add(array("cnum"=>$_POST["cnum"],"diag_time"=>$_POST["diag_time"],"skin_other"=>$_POST["skin_other"]));
					}
					$this->ajaxReturn(array("status"=>"success","reason"=>"已成功添加诊断信息"));
					return;
				}else{
					$this->ajaxReturn(array("status"=>"failed","reason"=>"已存在该诊断信息"));
					return;
				}	
				
				
			}
		} 
		
		 
	}
?>