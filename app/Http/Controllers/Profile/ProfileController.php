<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
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
    public function store(Request $request)
    {
        //

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
            'upload_dir' => 'profile/'.$request->user()->name.'/'.$user_profile_dir
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
                            ->take(3)
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadFile(Request $request){

        $upload =  $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($upload, PATHINFO_FILENAME);
        $uploadExt = $request->file('upload')->extension();

        return $fileName. '-' . time(). '.' . $uploadExt;
    }
}
