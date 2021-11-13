<?php
include("data_class.php");

$deleteclient=$_GET['clientiddelete'];

$obj=new data();
$obj->setconnection();
$obj->deleteclientdata($deleteclient);