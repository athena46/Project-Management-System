<?php

include("data_class.php");


$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$obj=new data();
$obj->setconnection();
$obj->register($name,$username,$email,$password);
