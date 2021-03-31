@extends('layouts.auth')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<main class="form-signin text-center">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <a href="{{url('/') }}">
            <img class="img-fluid" src="{{asset('assets/admin/img/icon/hyppLogo.jpeg') }}" style="width: 70px; height:70px" alt="Hypp Logo">
        </a>
        <h1 class="h3 mb-3 text-white text-bold"><strong>{{ __('Reset Password') }}</strong></h1>

        <div class="form-floating">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
            <label for="email" class="text-dark">E-mail Address:</label>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-success"> {{ __('Send Password Reset Link') }}</button>
    </form>
</main>
@endsection