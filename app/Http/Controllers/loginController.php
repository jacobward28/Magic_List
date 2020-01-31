<?php
// Jacob Ward
// CST-256
// 1/19/2020
// This assignment was completed in collaboration with Harpeet Sidhu.
// This is our own code


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use App\Services\Business\securityService;

class loginController extends Controller
{
    /**
     * This function is used to manage logins for the app
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function login(Request $request) {
       $user = new userModel(NULL, $request->input('username'), $request->input('password'));
       
       $securityService = new securityService();
       
       $result = $securityService->login($user);
       
                       return view('loggedin');
                        
                    }
            }


