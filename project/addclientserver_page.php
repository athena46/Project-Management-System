<?php

include("data_class.php");


$addname=$_POST['addname'];
$company=$_POST['company'];
$title=$_POST['title'];
$addphone=$_POST['addphone'];
$addemail=$_POST['addemail'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$projects=$_POST['project'];
$clientdetails=$_POST['clientdetails'];


$obj=new data();
$obj->setconnection();
$obj->addnewuser($addname,$company,$title,$addphone,$addemail,$address,$city,$state,$pincode,$projects,$clientdetails);