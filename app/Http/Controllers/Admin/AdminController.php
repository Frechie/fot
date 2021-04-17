<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{

    //Ensure only authenticated and verified users log in
    public function showLoginForm(){
        return view('admin.admin-login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        
       
            //return $userDetails;
    }
    
    //load the admin dashboard
    public function loadDashboard(){

        $registeredUsers = User::where('email', '!=', '')->count();
        $verifiedUsers = User::where('email_verified_at', '!=', '')->count();
        $unverifiedUsers = User::where('email_verified_at', '==', '')->count();

       return view('admin.admin-dashboard')->with([
           'registedUsers' => $registeredUsers,
           'unverifiedUsers' => $unverifiedUsers,
           'verifiedUsers' => $verifiedUsers
       ]);
    }
}
