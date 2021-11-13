<?php

include("data_class.php");


$projectname=$_POST['projectname'];
$technologies=$_POST['technologies'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$status=$_POST['status'];
$details=$_POST['details'];



$obj=new data();
$obj->setconnection();
$obj->addproject($projectname,$technologies,$startdate,$enddate,$status,$details);