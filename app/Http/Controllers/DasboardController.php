<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DasboardController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()    {
        return view('home');
    }

    public function getUserVideoUpload(Request $request){
        //get User uplaods
        return null;
    }

    public function uploadContestantVideo(Request $request){
        //get the contestant id
        //save the video in the db
        return null;
    }

    // public function validateUpload(Request $request){
    //     if ($request->upload_video->validate(['required', 'mimetypes:video/avi,video/mpeg', 'max:10024'])){
    //     $upload =  $request->file('issue_upload')->getClientOriginalName();
    //     $fileName = pathinfo($upload, PATHINFO_FILENAME);
    //     $uploadExt = $request->file('issue_upload')->extension();
    //     return $fileName.'_'.time().'.'.$uploadExt;
    // }
    
}
