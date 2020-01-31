<?php

// Jacob Ward
// CST-256
// 1/19/2020
// This assignment was completed in collaboration with Harpeet Sidhu.
// This is our own code

namespace App\Services\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\databaseController;
use App\Models\userModel;

class dataService {
    
    /**
     * create function to manage registration
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function reg(userModel $user)
    {
        $db = new databaseController();
        $connect = $db->connect();
        $username = $user->getUsername();
        $password = $user->getPassword();
        $sql_statement = "INSERT INTO `user`(`username`, `password`) VALUES ('$username', '$password');";
        $result = mysqli_query($connect, $sql_statement);
        return $result;
        }
        
        /**
         * create function to manage login
         * @param userModel $user
         */
        public function log(userModel $user) {
            $db = new databaseController();
            $connect = $db->connect();
            $username = $user->getUsername();
            $password = $user->getPassword();
            
            $sql_statement = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password' LIMIT 1";
            $result = mysqli_query($connect, $sql_statement);
            if (mysqli_num_rows($result) == 1) {
                echo "You Logged in With: " . $username . " " . $password;
                echo '<br>';
            }
            else {
                echo "login failed";
            }
        }
        public function read() {
            $db = new databaseController();
            $connect = $db->connect();
            $sql_statement = "SELECT * FROM cards";
            $result = mysqli_query($connect, $sql_statement);
            echo "<table border='30' width='1000' bordercolor='#5F9EA0' style='margin: 0 auto' cellspacing='5' cellpadding='10' >
                
                    <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Type</th>
                    <th>Card Set</th>
                    <th>Cost</th>
                    <th>Ability</th>
                    </tr>";
            
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['Name'] .  "</td>";
                echo "<td>" . $row['Color'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['CardSet'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "<td>" . $row['Ability'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            }
        }

   
    