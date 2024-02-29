<?php 
//require_once 'class/User.php';
require_once 'autoload.php';
$user = new User('aymen', 'pwd');
echo $user->username;