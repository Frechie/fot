@extends('layouts.auth')
@section('content')
<main class="form-signin text-center">
    <form method="POST" class="pt-3" action="{{ route('register') }}">
        @csrf
        <a href="{{url('/') }}">
            <img class="img-fluid" src="{{asset('assets/admin/img/icon/hyppLogo.jpeg') }}" style="width: 70px; height:70px" alt="Hypp Logo">
        </a>
        <h1 class="h3 mb-3 text-white text-bold"><strong>Register</strong></h1>
        <div class="form-floating">
            <input id="name" type="text" placeholder="UserName" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label for="name" class="text-dark">Username:</label>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
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
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
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
        <div class="mt-3">
            <button type="submit" class="btn btn-primary w-100 btn-lg auth-form-btn">
                {{ __('Register') }}
            </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            @if (Route::has('login'))
            <a href="{{ route('login') }} " class="btn-link text-primary">Login</a>
            @endif
        </div>
    </form>
</main>
@endsection