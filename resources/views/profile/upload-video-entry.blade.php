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
                                <br><span>
                                    Ensure your videos are taken in rooms that are well lit and background noise is greatly reduced.
                                   <br> We do not expect them to be professionally shot but we expect that you give it your best.
                                </span>
                                <br><span>
                                    Best of Luck!!!
                                </span>
                            </article>
                            <hr>
                    <form class="forms-sample" method="POST" action="{{ url('/profile/upload-video-entry') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
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