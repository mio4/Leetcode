<?php
class LoginAction extends Action
{
	public function Login()
	{
        isset($_SESSION) or session_start();
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
	//	$this->ajaxReturn("come into model");
		//$this->ajaxReturn($username);
		
		$m = M("user");
		$realpwd = $m->where('name="%s"',array($username))->getField('passwd');
		$uid = $m->where('name="%s"',array($username))->getField('uid');
		$email = $m->where('name="%s"',array($username))->getField('email');
		if ($realpwd == null)
		{
			$this->ajaxReturn(array("status" => "failed", "reason" => "该用户不存在"));
		}
		else
		{
			if ($realpwd == $pwd)
			{
				$_SESSION['uid'] = $uid;
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['status'] = 1;
				$this->ajaxReturn(array("status" => "success"));
			}
			else
			{
				$this->ajaxReturn(array("status" => "failed", "reason" => "密码错误，请重新输入！"));
			}
		}
		//$this->display("./Home/Tpl/Index/lock_screen.html");
	}
}
?>