@extends('layouts.app')
@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-info">
                        <h5 class="card-description text-white">
                            Hello {{Auth::user()->name}}!!! Upload your video to enter the competition!!!
                        </h5>
                    </div>

                    <form class="forms-sample" method="POST" action="{{ url('/profile/') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="subject text-bold">Subject</label>
                                    <input type="text" class="form-control text-dark" id="subject" name="issue_subject" required>
                                </div>
                            </div>
                       
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label for="issue_severity" class="text-dark">
                                    Amazing Talent!!!
                                </label>
                                <select name="issue_severity" class="form-control form-control-sm text-dark" id="issue_severity" required>
                                    <option class="text-purple text-bold" value="Music">Music </option>
                                    <option class="text-purple text-bold" value="Creative Arts">Creative Arts</option>
                                    <option class="text-purple text-bold" value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-group">
                                <label>Select Video </label>
                                <div class="input-group col-xs-12">
                                    <input type="file" name="issue_upload" class="form-control" placeholder="Log Files accepted format(.log, .zip,, .png, .jpg .txt)... " required>
                                </div>
                            </div>
                        </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection