@extends('layouts.app')
@section('content')
<section class="container-fluid">
    <div class="row" style="margin-top: 15px;">
        <div class="col-12 grid-margin">
            @if( $userUploads->count() === 0 )
            <h4 class="alert alert-danger">No Competition Entry found!!</h4>
            <a href="{{ url('/profile/upload-video-entry') }}" class="btn btn-info">Upload your competition entry</a>
        </div>
        @else
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-bold">All Cases</h2>
                <div class="row">
                    @foreach($userUploads as $userUpload)
                    <div class="col-md-3">
                        <video src=""></video>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endif
@endsection