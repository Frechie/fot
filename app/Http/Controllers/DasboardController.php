<?php

namespace App\Http\Controllers;

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

        $entry = UserUploads::where('user_id',  $request->user()->user_id)
                            ->where('upload_type', 'video')
                            ->orderBy('created_at', 'desc')
                            ->take(3)
                            ->get();

        $profilePix = UserUploads::where('upload_type', 'profile_pix')
                                ->orderBy('created_at', 'desc')
                                ->get('upload_dir')
                                ->first();

        return view('home')->with(['userEntries' => $entry, 'profile' => $profilePix]);
    }
}
