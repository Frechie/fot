<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Profile\UserContact;
use App\Models\Profile\UserProfile;
use App\Models\Profile\UserUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
        $user_video = '';
        if (!$request->hasFile('upload')) {
            return Redirect::back()->with('entryVidUploadErrorMessage', 'Kindly upload a video to enter the competition!!!');
         }
         $user_video  = $request->user()->name.'-upload-'.$this->uploadFile($request);

         $user_upload = UserUploads::create([
            'user_id' => $request->user()->user_id,
            'upload_type' => $request['upload_type'],
            'upload_dir' => '/storage/video/'.$request->user()->name.'/'.$user_video
         ]);
      
        if ($user_upload) {
            $request->file('upload')->storeAs('video/'.$request->user()->name, $user_video);
            return redirect('/dashboard')->with('entryVidUploadSuccessMessage', 'Video Entry uploaded successfully!!!');
        }

    }

    public function updateProfilePix(Request $request)  {
        //
        $user_profile_dir = 'assets/admin/img/icon/hyppLogo.jpeg';

        if (!$request->hasFile('upload')) {
            return Redirect::back()->with('profilePicUploadErrorMessage', 'No picture selected');
         }
        
         $user_profile_dir = $request->user()->name.'-profile-img-'.$this->uploadFile($request);

         $user_upload = UserUploads::create([
            'user_id' => $request->user()->user_id,
            'upload_type' => $request['upload_type'],
            'upload_dir' => '/storage/profile/'.$request->user()->name.'/'.$user_profile_dir
         ]);
      
        if ($user_upload) {
            $request->file('upload')->storeAs('profile/'.$request->user()->name, $user_profile_dir);
            return Redirect::back()->with('profilePicUploadSuccessMessage', 'Profile Picture updated successfully!!!');
        }
    }


    public function viewEntry(Request $request){
        $entry = UserUploads::where('user_id',  $request->user()->user_id)
                            ->where('upload_type', 'video')
                            ->orderBy('created_at', 'desc')
                            ->take(4)
                            ->get();

        return view('profile.view-profile')->with('userUploads', $entry);
    }

    public function uploadVideoEntry(){
        return view('profile.upload-video-entry');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewProfile(Request $request) {
        //
        return view('profile.create-profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)     {
        //
        $userProfile = UserProfile::create([
            'user_id' => $request->user()->user_id,
            'user_bio' => $request['user_bio'],
            'user_amazing_talent' => $request['amazing_talent'],
            'upload_id' =>  $request->user()->user_id
        ]);

        if ($userProfile){
            return redirect('/dashboard')
                        ->with('updateProfileSuccessfulMsg', 'Hey '.$request->user()->name.', you have successfully updated your profile!!!');
        }else{
            return Redirect::back()->with('profileUpdateErrorMsg', 'Error with the update. Try some time later!!!');
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactUpdate(Request $request)   {
        //
        $userInfo = UserContact::create([
            'user_id' => $request->user()->user_id,
            'user_country' => $request['user_country'],
            'user_state' => $request['userState'],
            'user_address' => $request['user_address'],
            'user_mobile' => $request['userMobile']
        ]);

        if ($userInfo){
            return Redirect::back()->with('contactSuccessMessage', 'Contact info updated successfully!!!');
        }
       
    }

    public function uploadFile(Request $request){

        $upload =  $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($upload, PATHINFO_FILENAME);
        $uploadExt = $request->file('upload')->extension();

        return $fileName. '-' . time(). '.' . $uploadExt;
    }
}
