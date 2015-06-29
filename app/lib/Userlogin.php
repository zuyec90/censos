<?php


include ('../Controller/UserController.php');

$User = new User;

 $User->login($_POST);


?>