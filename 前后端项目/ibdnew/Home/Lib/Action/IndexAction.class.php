<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		isset($_SESSION) or session_start();
		if (isset($_SESSION['username']))
		{
			if ($_SESSION['status'] == 1)
			{
				$this->display("./Home/Tpl/Index/Index.html");
			}
			else 
			{
				$this->display("./Home/Tpl/Index/login.html");
			}
		}
		else
		{
		//	echo "come into display";
			$this->display("./Home/Tpl/Index/login.html");
		}
	}
	
	public function registerPage()
	{
		$this->display();
	}
	
	public function logout()
	{
		session_unset();
		session_destroy();
		$this->ajaxReturn(array("status"=>"success"));
	}
	
}
?>