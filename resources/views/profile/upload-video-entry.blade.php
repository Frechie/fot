@extends('layouts.app')
@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-info">
                        <span class="card-description text-white">
                            Hello {{Auth::user()->name}}!!! Upload your video to enter the competition!!!
                        </span>
                    </div>
                    <article>
                                Kindly note that your entry can make or mar your success level in this competition.
                                <span>
                                    Ensure your videos are taken in rooms that are well lit and background noise is greatly reduced.
                                   <br> We do not expect them to be professionally shot but we expect that you give it your best.
                                </span>
                                <span>
                                    Best of Luck!!!
                                </span>
                            </article>
                    <form class="forms-sample" method="POST" action="{{ url('/profile/upload-video-entry') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label for="amazing_talent" class="text-dark">
                                        Amazing Talent!!!
                                    </label>
                                    <select name="amazing_talent" class="form-control form-control-sm text-dark" id="issue_severity" required>
                                        <option class="text-purple text-bold" value="Music">Music </option>
                                        <option class="text-purple text-bold" value="Creative Arts">Creative Arts</option>
                                        <option class="text-purple text-bold" value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <label>Select Video <span class="text-warning">20MB: Maxixum</span> </label>
                                    <div class="input-group col-xs-12">
                                        <input id="uploadVideo" type="file" name="upload" class="form-control" accept="video/mp4, video/avi" placeholder="Only MP4 is accepted!!! " required>
                                    <input type="hidden" name="upload_type" value="video">
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