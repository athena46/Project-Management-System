<?php

class db
{
    protected $connection;

    function setconnection()
    {
        try
        {
            $this->connection=new PDO("mysql:host=localhost;dbname=project_management_system","root","");
            echo "Connection done";

        }
        catch(PDOException $e)
        {
            echo "Error";



        }
    }
}

