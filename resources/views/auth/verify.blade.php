@extends('layouts.auth')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<main class="form-signin text-center">
    <a href="{{url('/') }}">
        <img class="img-fluid" src="{{asset('assets/admin/img/icon/hyppLogo.jpeg') }}" style="width: 50px; height:50px" alt="Hypp Logo">
    </a>
    <h1 class="h3 mb-3 text-white text-bold"><strong>{{ __('Verify Your Email Address') }}</strong></h1>

    @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A new verification link has been sent to your email address.') }}
    </div>
    @endif
    <p class="text-dark"><strong>
            {{ __('Check your email for a verification link.') }}
            {{ __('If you did not receive the email, you can request for another one with the button blow') }}, <br>
        </strong>
    </p>
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-dark btn-fw waves-effect waves-light">
            {{ __('Request Another Link') }}
        </button>.
    </form>
</main>
@endsection