<?php


include ('../controller/UserController.php');

$User = new User;

 if($User->login($_POST) == 1){

	header("Location: ../view/home.php");
	}else{
	header("Location: ../view/login.php?auth=no");
	}

?>