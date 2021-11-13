<?php

include("data_class.php");


$project=$_POST['project'];
$reason=$_POST['reason'];




$obj=new data();
$obj->setconnection();
$obj->cancelproject($project,$reason);