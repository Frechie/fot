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
            <h5 class="">{{ session()->get('successMessage') }}</h5>
        </div>
        @endif
        @if(session()->has('profilePicUploadErrorMessage'))
        <div class="alert alert-danger text-white" role="alert">
            <h5 class="">{{ session()->get('profilePicUploadErrorMessage') }}</h5>
        </div>
        @endif
        <div class="row">

            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-warning card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset($profile->upload_dir) }}" alt="User profile picture">
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
                    <div class="card-body">
                        <strong><i class="icofont icofont-read-book-alt mr-1"></i> Bio</strong>

                        <p class="text-muted">
                            This is just some dummy test that aint good for your profile. Kindly change it to
                            words that represent you in all form...
                        </p>

                        <hr>

                        <strong><i class="icofont icofont-location-pin mr-1"></i> Location</strong>

                        <p class="text-muted">Null, Nigeria</p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header bg-primary">

                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-info">
                        Competition Uploads:
                    </div>
                @if( $userEntries->count() === 0)
                        <div class="card-body bg-muted">                           
                            <h4>No entry for your profile yet!!!</h4>                  
                        </div>
                     @else
                        <div class="card-body card-success">
                            <h4>Your data appears here</h4>
                        </div>        
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection