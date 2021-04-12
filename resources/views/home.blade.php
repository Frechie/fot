@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        @if(session()->has('profilePicUploadSuccessMessage'))
        <div class="alert alert-success text-white" role="alert">
            <h5 class="">{{ session()->get('profilePicUploadSuccessMessage') }}</h5>
        </div>
        @endif
        @if(session()->has('profilePicUploadErrorMessage'))
        <div class="alert alert-danger text-white" role="alert">
            <h5 class="">{{ session()->get('profilePicUploadErrorMessage') }}</h5>
        </div>
        @endif
        @if(session()->has('entryVidUploadSuccessMessage'))
        <div class="alert alert-success text-white" role="alert">
            <h5 class="">{{ session()->get('entryVidUploadSuccessMessage') }}</h5>
        </div>
        @endif
        @if(session()->has('entryVidUploadErrorMessage'))
        <div class="alert alert-danger text-white" role="alert">
            <h5 class="">{{ session()->get('entryVidUploadErrorMessage') }}</h5>
        </div>
        @endif
        @if(session()->has('contactSuccessMessage'))
        <div class="alert alert-success text-white" role="alert">
            <h5 class="">{{ session()->get('contactSuccessMessage') }}</h5>
        </div>
        @endif
        @if(session()->has('updateProfileSuccessfulMsg'))
        <div class="alert alert-success text-white" role="alert">
            <h5 class="">{{ session()->get('updateProfileSuccessfulMsg') }}</h5>
        </div>
        @endif 
        @if(session()->has('profileUpdateErrorMsg'))
        <div class="alert alert-success text-white" role="alert">
            <h5 class="">{{ session()->get('profileUpdateErrorMsg') }}</h5>
        </div>
        @endif        

        <div class="row">

            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-warning card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">

                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($profile) }}" alt="User profile picture">

                            <i class="icofont icofont-ui-edit text-primary" data-toggle="modal" data-target="#profilePix"></i>
                            <div class="modal fade" id="profilePix" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="profileModalLabel">Profile Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('/profile/upload-profile-pix') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <label for="upload_pix">Edit your profile Image:</label><br>
                                                <input type="file" name="upload" class="form-control" placeholder="Accepted format(.png, .jpg, .gif)... " required>
                                                <input type="hidden" name="upload_type" value="profile_pix">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="profile-username text-center">
                            {{ Auth::user()->name  }}
                        </h3>

                        <p class="text-muted text-center">{{ Auth::user()->email  }}</p>
                    </div>
                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    @if($userProfile == null)
                    <div class="card-body">
                        <strong><i class="icofont icofont-read-book-alt mr-1"></i> Bio</strong>

                        <p class="text-muted">
                            This is just some dummy test that aint good for your profile. Kindly change it to
                            words that represent you in all form...
                        </p>
                        <hr>
                        <a href="{{ url('/profile/edit') }}" class="btn btn-info">Update Bio</a>
                        <hr>
                    </div>
                    @else
                    <div class="card-body">
                        <strong><i class="icofont icofont-read-book-alt mr-1"></i> Bio</strong>

                        <p class="text-muted">{{ $userProfile->user_bio }}   </p>
                        <hr>
                        Amazing Talent: <span>{{ $userProfile->user_amazing_talent }}</span>
                        <hr>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary">
                        Contact Info:
                    </div>
                    @if($contactInfo === null)
                    <form action="{{ url('/profile/contact-update') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="user_country" class="form-label">Nationality:</label>
                                                    <select name="user_country" class="form-control form-control-sm text-dark" id="user_country" required>
                                                        <option class="text-purple text-bold" value="Nigeria">Nigeria</option>
                                                        <option class="text-purple text-bold" value="Others">Others</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="userState" class="form-label">State of Residence:</label>
                                                    <select name="userState" class="form-control form-control-sm text-dark" id="issue_severity" required>
                                                        <option class="text-purple text-bold" value="Abia">Abia </option>
                                                        <option class="text-purple text-bold" value="Adamawa">Adamawa</option>
                                                        <option class="text-purple text-bold" value="Akwa-Ibom">Akwa-Ibom</option>
                                                        <option class="text-purple text-bold" value="Anambra">Anambra</option>
                                                        <option class="text-purple text-bold" value="Bauchi">Bauchi</option>
                                                        <option class="text-purple text-bold" value="Bayelsa">Bayelsa </option>
                                                        <option class="text-purple text-bold" value="Benue">Benue </option>
                                                        <option class="text-purple text-bold" value="Borno">Borno</option>
                                                        <option class="text-purple text-bold" value="Cross-River">Cross River</option>
                                                        <option class="text-purple text-bold" value="Delta">Delta</option>

                                                        <option class="text-purple text-bold" value="Ebonyi">Ebonyi </option>
                                                        <option class="text-purple text-bold" value="Edo">Edo</option>
                                                        <option class="text-purple text-bold" value="Ekiti">Ekiti</option>
                                                        <option class="text-purple text-bold" value="Enugu">Enugu</option>

                                                        <option class="text-purple text-bold" value="Gombe">Gombe</option>
                                                        <option class="text-purple text-bold" value="Imo">Imo</option>
                                                        <option class="text-purple text-bold" value="Jigawa">Jigawa</option>
                                                        <option class="text-purple text-bold" value="Kaduna">Kaduna</option>

                                                        <option class="text-purple text-bold" value="Kano">Kano</option>
                                                        <option class="text-purple text-bold" value="Katstina">Katstina</option>
                                                        <option class="text-purple text-bold" value="Kebbi">Kebbi</option>
                                                        <option class="text-purple text-bold" value="Kogi">Kogi</option>
                                                        <option class="text-purple text-bold" value="Kwara">Kwara</option>

                                                        <option class="text-purple text-bold" value="Lagos">Lagos </option>
                                                        <option class="text-purple text-bold" value="PortHarcourt">Port-Harcourt</option>
                                                        <option class="text-purple text-bold" value="Nasarawa">Nasarawa </option>
                                                        <option class="text-purple text-bold" value="Niger">Niger</option>

                                                        <option class="text-purple text-bold" value="Ogun">Ogun</option>
                                                        <option class="text-purple text-bold" value="Ondo">Ogun</option>
                                                        <option class="text-purple text-bold" value="Ondo">Ondo</option>
                                                        <option class="text-purple text-bold" value="Osun">Osun</option>

                                                        <option class="text-purple text-bold" value="Oyo">Oyo</option>
                                                        <option class="text-purple text-bold" value="Plateau">Plateau</option>
                                                        <option class="text-purple text-bold" value="Rivers">Rivers</option>
                                                        <option class="text-purple text-bold" value="Sokoto">Sokoto</option>

                                                        <option class="text-purple text-bold" value="Taraba">Taraba</option>
                                                        <option class="text-purple text-bold" value="Yobe">Yobe</option>
                                                        <option class="text-purple text-bold" value="Zamfara">Zamfara</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="userAddress" class="form-label">

                                                        Address:</label>
                                                    <input type="text" name="user_address" class="form-control" id="userAddress" placeholder="User Home Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="userMobile" class="form-label">

                                                        Mobile:</label>
                                                    <input type="text" name="userMobile" class="form-control" id="userMobile" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="form-control btn bg-explore text-white" type="submit">Update Contact Info</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="user_country" class="form-label">Nationality:
                                                    <i class="icofont icofont-map"> {{ $contactInfo->user_country }}</i>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">State:
                                                 <i class="icofont icofont-ui-map">  {{ $contactInfo->user_state }} </i> </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="userAddress" class="form-label">Address:
                                                    <i class="icofont icofont-location-pin"> {{ $contactInfo->user_address  }} </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="userMobile" class="form-label">Mobile:
                                                    <i class="icofont icofont-iphone"> {{ $contactInfo->user_mobile  }} </i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    @endif
                </div>

                <div class="card">
                    <div class="card-header bg-info">
                        Competition Uploads:
                    </div>
                    @if( $userEntries->count() === 0)
                    <div class="card-body bg-muted">
                        <h4>No entry for your profile yet!!!</h4>
                        <a href="{{ url('/profile/upload-video-entry') }}" class="btn btn-dark">Upload your competition entry</a>

                    </div>
                    @else
                    <div class="card-body card-success">
                        <div class="row">
                            @foreach($userEntries as $userEntry)
                            <div class="col-md-3">
                                <video class="bg-muted w-100" height="auto" preload="metadata">
                                    <source src="{{ asset($userEntry->upload_dir) }}#t=0.7" type="video/mp4">
                                </video>
                                <article>
                                    <p>Uploaded on <span>{{ $userEntry->created_at->format('D, d M Y') }} </span></p>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection