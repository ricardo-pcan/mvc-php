<?php 
	class HomeController
	{
		public static function index()
		{
			$templates = new League\Plates\Engine("app/views");
			echo $templates->render('');
		}
	}
?>