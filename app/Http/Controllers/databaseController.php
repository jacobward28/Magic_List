<?php

// Jacob Ward
// CST-256
// 1/19/2020
// This assignment was completed in collaboration with Harpeet Sidhu.
// This is our own code

namespace App\Http\Controllers;


class databaseController
{
    /**
     * set variables equal to database information
     */
    private $dbservername = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $dbusername = "v9p1xgjgbyg4sq8q";
    private $dbpassword = "oibm4ktzb87wakal";
    private $dbname = "y6q18gzmc4451iod";
    
    /**
     *  function to connect to the database using set variables that can be called in other files
     */
    function connect() {
        $connection = mysqli_connect($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        
        if ($connection->connect_error) {
            echo "Connection failed " .$connection->connect_error . "<br>";
        }
        else {
            return $connection;
        }
    }
}
