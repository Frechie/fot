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
            <div class="card-header">Competition Entries</div>
            <div class="row">
                    @foreach($userUploads as $userUpload)
                
                    <div class="col-lg-6 col-md-12">
                        <div class="card-body">
                            <video class="bg-muted w-100" height="auto" autoplay muted controls>
                                <source src="{{ asset($userUpload->upload_dir) }}" type="video/mp4">
                            </video>
                            <a href="#" class="btn bg-explore text-white">Download</a>
                        </div>
                    </div>                
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection