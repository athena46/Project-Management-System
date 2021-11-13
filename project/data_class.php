<?php
include("db.php");
session_start();


class data extends db{

    private $projectname;
    private $projectstartdate;
    private $projectenddate;
    private $projectprogrss;
    private $projctdetails;




    function __construct(){
        //echo "working";
    }


function userlogin($t1,$t2)
{
    $q="SELECT * FROM login where username='$t1' and password='$t2' ";
$recordSet=$this->connection->query($q);
$result=$recordSet->rowCount();

if($result>0)
{
    foreach($recordSet->fetchAll() as $row)
    {
        $logid=$row['id'];
        $_SESSION["userid"]=$logid;
        header("Location:user_service_dashboard.php");
    }
    
}
elseif($result<=0)
{
    echo "Invalid Credentials";
    header("Location:index.php?msg=Invalid Credentials");
    
}
}

function register($name,$username,$email,$password)
{
    $this->name=$name;
    $this->username=$username;
    $this->email=$email;
    $this->password=$password;

    $s="SELECT * FROM login WHERE username='$username'";
    $recordSet=$this->connection->query($s);
    $num=$recordSet->rowCount();
    if($num==1)
    {
        echo "username already taken";
        hader("Location:index.php?msg=username already taken");

    }
    else
    {
        $q="INSERT INTO login(id, name, username, email, password) VALUES('','$name','$username','$email','$password')";
    if($this->connection->exec($q))
    {
        header("Location:index.php?msg=Register done");
    }
    else{
        header("Location:index.php?msg=Register fail");
    }
    }

    

}

function addnewuser($name,$company,$title,$phone,$email,$add,$city,$state,$pin,$projects,$details)
{
    $this->name=$name;
    $this->company=$company;
    $this->title=$title;
    $this->phone=$phone;
    $this->email=$email;
    $this->add=$add;
    $this->city=$city;
    $this->state=$state;
    $this->pin=$pin;
    $this->projects=$projects;
    $this->details=$details;

    $q="INSERT INTO clientdata(id, name, company, title, phone, email, address, city, state, pincode, projects, details) VALUES('','$name','$company','$title',$phone,'$email','$add','$city','$state',$pin,'$projects','$details')";
    if($this->connection->exec($q))
    {
        header("Location:user_service_dashboard.php?msg=New ADD done");
    }
    else{
        header("Location:user_service_dashboard.php?msg=Register fail");
    }

}

function addproject($projectname,$technologies,$startdate,$enddate,$status,$details)
{
    $this->projectname=$projectname;
    $this->technologies=$technologies;
    $this->startdate=$startdate;
    $this->enddate=$enddate;
    $this->status=$status;
    $this->details=$details;

    $q="INSERT INTO projectdata(id, projectname, technologies, startdate, enddate, status, details) VALUES('','$projectname','$technologies','$startdate','$enddate','$status','$details')";

    if($this->connection->exec($q))
    {
        header("Location:user_service_dashboard.php?msg=done");
    }
    else{
        header("Location:user_service_dashboard.php?msg=fail");
    }
}

function cancelproject($project,$reason)
{
    $this->project=$project;
    $this->reason=$reason;
    $q="UPDATE projectdata SET status='Cancelled', Reason_for_Cancellation='$reason' WHERE projectname='$project'";

    if($this->connection->exec($q))
    {
        header("Location:user_service_dashboard.php?msg=done");
    }
    else{
        header("Location:user_service_dashboard.php?msg=fail");
    }
}

function clientdata()
{
    $q="SELECT * FROM clientdata";
    $data=$this->connection->query($q);
    return $data;

}

function projectdata()
{
    $q="SELECT * FROM projectdata";
    $data=$this->connection->query($q);
    return $data;

}

function getproject(){
    $q="SELECT * FROM projectdata";
    $data=$this->connection->query($q);
    return $data;
}

function deleteclientdata($id)
{
    $q="DELETE FROM clientdata WHERE id='$id'";
    if($this->connection->exec($q))
    {
        header("Location:user_service_dashboard.php?msg=done");
    }
    else{
        header("Location:user_service_dashboard.php?msg=fail");
    }

}
} 



