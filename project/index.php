<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <?php
 $usermsg="";
 $pasdmsg="";
 $namemsg="";
 $emailmsg="";
 $msg="";

 $adusermsg="";
 $adpasdmsg="";
 $ademailmsg="";
 $adnamemsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adnamemsg'])){
    $adnamemsg=$_REQUEST['adnamemsg'];
 }

 if(!empty($_REQUEST['adusermsg'])){
    $adusermsg=$_REQUEST['adusermsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['usermsg'])){
    $usermsg=$_REQUEST['usermsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['namemsg'])){
    $namemsg=$_REQUEST['namemsg'];
  }

  if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
  }

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>

<div class="hero">
        <div class="header"><h1>Project Management System</h1></div>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group" action="login_server_page.php" method="get">
                <input type="text" class="input-field" name="username" placeholder="User Id" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>
            <form id="register" class="input-group" action="registration_server_page.php" method="post">
                <input type="text" class="input-field" placeholder="Name" name="name" required>
                <input type="text" class="input-field" placeholder="User Id"  name="username" required>
                <input type="email" class="input-field" placeholder="Email Id" name="email" required>
                <input type="password" class="input-field" placeholder="Enter Password" name="password" required>
                <input type="checkbox" class="check-box" required><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
        
    </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0";
        }
    </script>








<!--<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Your Username *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $usermsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $pasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Registration</h3>
                    <form action="registration_server_page.php" method="get">
                    <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adnamemsg?></label>
                    <div class="form-group">
                            <input type="text" class="form-control" name="usename" placeholder="Your Username *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adusermsg?></label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"  placeholder="Your Password *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>-->



        
        <script src="" async defer></script>
    </body>
</html>