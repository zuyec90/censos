<?php


include ('../Controller/UserController.php');

$User = new User;
echo $User->login($_POST);
 if($User->login($_POST) == 1){

	header("Location: ../view/home.php");
	}else{
	header("Location: ../view/login.php?auth=no");
	}

?>