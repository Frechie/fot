<?php

namespace App\Http\Controllers;

use App\Models\Profile\UserContact;
use App\Models\Profile\UserProfile;
use App\Models\Profile\UserUploads;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DasboardController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)    {

        $user_profile = UserProfile::where('user_id',  $request->user()->user_id)
                                    ->orderBy('created_at', 'desc')
                                    ->first();
    
        $contact_info = UserContact::where('user_id',  $request->user()->user_id)
                                    ->orderBy('created_at', 'desc')
                                    ->first();

        $entry = UserUploads::where('user_id',  $request->user()->user_id)
            ->where('upload_type', 'video')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $profilePix = UserUploads::where('upload_type', 'profile_pix')
            ->where('user_id',  $request->user()->user_id)
            ->orderBy('created_at', 'desc')
            ->first();

        if ($profilePix == null) {
            $profilePix = 'assets/admin/img/icon/hyppLogo.jpeg';
        }
        else{
            
        $profilePix = $profilePix->upload_dir;
}
        return view('home')->with([
            'userEntries' => $entry, 
            'profile' => $profilePix, 
            'contactInfo' => $contact_info,
            'userProfile' => $user_profile
            ]);
    }
}
