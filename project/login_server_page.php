<?php

include("data_class.php");
$login_user=$_GET['username'];
$login_pass=$_GET['password'];

if($login_user==null||$login_pass==null)
{
    $usermsg="";
    $passmsg="";
    if($login_user==null)
    {
        $usermsg="Username Empty";
    }
    if($login_pass==null)
    {
        $passmsg="Password Empty";
    }


   header("Location:index.php?adusermsg=$usermsg&adpasdmsg=$passmsg"); 
}
elseif($login_user!=null&&$login_pass!=null)
{
    $obj=new data();
    $obj->setconnection();
    $obj->userlogin($login_user,$login_pass);
}