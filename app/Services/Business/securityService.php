<?php

// Jacob Ward
// CST-256
// 1/19/2020
// This assignment was completed in collaboration with Pengyu Yin.
// This is our own code

namespace App\Services\Business;

use App\Models\userModel;
use App\http\controllers\databaseController;
use App\Services\Data\dataService;

class securityService {
    
    /**
     * function to manage security of the login controller
     * @param userModel $user
     * @return $result from data service
     */
    public function login(userModel $user)
    {
        $db = new databaseController();
        $connect = $db->connect();
        $connect = null;
        $dao = new dataService($connect);
        $result =$dao->log($user);
        return $result;
    }
}