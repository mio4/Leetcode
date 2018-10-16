<?php
class LoginaaAction extends Action
{ 
	public function index()
	{
		
        isset($_SESSION) or session_start();
		$username = $_POST['username'];
		//echo "come Login()";
		$pwd = $_POST['pwd'];
	    $m = new Model("user");
		$realpwd = $m->where('name="%s"',array($username))->getField('passwd');
		$uid = $m->where('name="%s"',array($username))->getField('uid');
		$email = $m->where('name="%s"',array($username))->getField('email'); 
		if ($realpwd == null)
		{
			echo json_encode(array("status" => "failed", "reason" => "该用户不存在"));
		}
		else
		{
			if ($realpwd == $pwd)
			{
				$_SESSION['uid'] = $uid;
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['status'] = 1;
				//
				echo json_encode(array("status" => "success"));
			}
			else
			{
				echo json_encode(array("status" => "failed", "reason" => "密码错误，请重新输入�?));
			}
		}
		//$this->display("./Home/Tpl/Index/lock_screen.html");
	}
}
?>