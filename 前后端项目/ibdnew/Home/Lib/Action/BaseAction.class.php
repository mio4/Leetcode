<?php
	class BaseAction extends Action
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
		 
	}
?>