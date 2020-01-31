<?php

// Jacob Ward
// CST-256
// 1/19/2020
// This assignment was completed in collaboration with Harpeet Sidhu.
// This is our own code

namespace App\Models;



/**
 * 
 * @author super
 *
 */
class userModel {
    
    private $id;
    private $username;
    private $password;
    
    function __construct($id, $username, $password) {
     $this->id = $id;
     $this->username = $username;
     $this->password = $password;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getusername()
    {
        return $this->username;
    }
    
    public function getpassword()
    {
        return $this->password;
    }
}