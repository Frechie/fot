@extends('layouts.auth')
@section('content')

<main class="form-signin text-center">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
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
        <div class="form-floating">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <label for="password" class="text-dark"> Password: </label>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-floating">
            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
            <label for="password-confirm" class="text-dark"> Confirm Password: </label>
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary"> {{ __('Reset Password') }}</button>
    </form>
</main>
@endsection