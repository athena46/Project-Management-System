<?php
include("data_class.php");


$userid= $_SESSION["userid"];

?>

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
        <div class="container";>
        <div class="form-box1">
        <div class="innerdiv">
            <div class="row">
                <h1 id="header">Project Management System</h1>
            </div>
            <div class="leftinnerdiv">
                <button class="btn">WELCOME</button>
                <button class="btn" onclick="openpart('addproject')">ADD PROJECT</button>
                <button class="btn" onclick="openpart('viewproject')">VIEW PROJECTS</button>
                <button class="btn" onclick="openpart('cancelproject')">CANCEL PROJECT</button>
                <button class="btn" onclick="openpart('addclient')">ADD CLIENT</button>
                <button class="btn" onclick="openpart('viewclient')">VIEW CLIENT</button>
                <a href="index.php"><button class="btn">LOGOUT</button></a>
            </div>

            <!--Add project-->
            <div class="rightinnerdiv">
                <div id="addproject" class="innerright portion" style="display: none;">
                    <button class="btn">ADD NEW PROJECT</button>
                    <form action="addprojectserver_page.php" method="post" enctype="multipart/form-data">
                        
                        <label>Project Name:</label><input type="text" name="projectname" class="input-field1">
                        <br><br>
                        <label>Technologies used:</label><input type="text" name="technologies" class="input-field1">
                        <br><br>
                        <label>Start Date:</label><input type="date" name="startdate" >
                        <br><br>
                        <label>End Date:</label><input type="date" name="enddate">
                        <br><br>
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="input-field1">
                            <option value="Inqueue">In Queue</option>
                            <option value="Inprogress">In Progress</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select><br><br>
                        <label>Project Details:</label><textarea name="details" class="input-field1"></textarea><br><br>
                        <input type="submit" value="SUBMIT" class="submit-btn"><br><br>
                    </form>
                </div>
                </div>

                <!--View Project section-->
                <div class="rightinnerdiv">
                    <div id="viewproject" class="innerright portion" style="display: none;">
                        <button class="btn">VIEW PROJECT</button>
                      <?php
                        $u=new data;
                        $u->setconnection();
                        $u->projectdata();
                        $recordset=$u->projectdata();

                        $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid black;
            padding: 8px;'>Project Name</th><th>Technologies used</th><th>Start Date</th><th>End Date</th><th>Status</th><th>Project Details</th><th>Reason for Cancellation</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>";
                //$table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>
                        
         </div>
 </div>


                


            <!--Add Client-->
            <div class="rightinnerdiv">
                <div id="addclient" class="innerright portion" style="display: none;">
                    <div class="client">
                    <button class="btn">ADD CLIENT</button>
                    <form action="addclientserver_page.php" method="post" enctype="multipart/form-data">
                        <label>Name:</label><input type="text" name="addname" class="input-field1"><br>
                        <label>Company:</label><input type="text" name="company" class="input-field1"><br>
                        <label>Title:</label><input type="text" name="title" class="input-field1"><br>
                        <label>Phone:</label><input type="text" name="addphone" class="input-field1">
                        <label>Email:</label><input type="email" name="addemail" class="input-field1"><br>
                        <label>Address:</label><textarea name="address" class="input-field1"></textarea><br>
                        <label>City:</label><input type="text" name="city" size="10" class="input-field1">
                        <label>State:</label><input type="text" name="state" size="10" class="input-field1"><br>
                        <label>PIN CODE:</label><input type="text" name="pincode" size="6" class="input-field1"><br>
                        <label for="project">Projects:</label>
                        <select name="project" id="project" size="2" class="input-field1" multiple>
                        <?php
            $u=new data;
            $u->setconnection();
            $u->getproject();
            $recordset=$u->getproject();
            foreach($recordset as $row){

                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
        
            }            
            ?>

                            
                        </select>
                        <label>Additional Details:</label><textarea name="clientdetails" class="input-field1"></textarea><br><br>
                        <input type="submit" value="SUBMIT" class="submit-btn"><br><br>
                    </form>
                </div>
                </div>
            </div>

             <!--View Client-->
             <div class="rightinnerdiv">
                <div id="viewclient" class="innerright portion" style="display: none;">
                    <button class="btn">View Client</button>
                    <?php
            $u=new data;
            $u->setconnection();
            $u->clientdata();
            $recordset=$u->clientdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  border: 1px solid black;
            padding: 8px;'> Name</th><th>Company</th><th>Title</th><th>Phone</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>Pincode</th><th>Projects</th><th>Details</th>><th>Delete</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                $table.="<td>$row[9]</td>";
                $table.="<td>$row[10]</td>";
                $table.="<td>$row[11]</td>";
                $table.="<td><a href='deleteclient.php?clientiddelete=$row[0]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>
                </div>
            </div>


            <!--issue book-->
            <div class="rightinnerdiv">
                <div id="cancelproject" class="innerright portion" style="display: none;">
                    <button class="btn">CANCEL PROJECT</button>
                    <form action="cancelprojectserver_page.php" method="post " enctype="multipart/form-data">
                        <br><br>
                        <label for="project">Project Name:</label>
                        <select name="project" id="project" class="input-field1">
                        <?php
            $u=new data;
            $u->setconnection();
            $u->getproject();
            $recordset=$u->getproject();
            foreach($recordset as $row){

                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
        
            }            
            ?>
                        </select><br><br>
                        <br><br>
                        <label>Reason for Cancellation:</label><textarea name="reason" rows="4" cols="24" class="input-field1"></textarea><br><br>
                        <input type="submit" value="Cancel Project" class="submit-btn"><br><br>

                    </form>
                </div>
            </div>

        <h4>PROJECT DONE BY:<cite>Athena Rodrigues</cite></h4></div>
    </div>

</div>
    <script>
        function openpart(portion)
        {
            var i;
            var x=document.getElementsByClassName("portion");
            for(i=0;i<x.length;i++)
            {
                x[i].style.display="none";
            }
            document.getElementById(portion).style.display="block";
        }
    </script>

        <script src="" async defer></script>
    </body>
</html>