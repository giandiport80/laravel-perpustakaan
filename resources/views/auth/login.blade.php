@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-block mb-2">
        {{ __('Login') }}
    </button>
    
    <div class="d-flex justify-content-between">
        @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        <a href="{{ route('register') }}" class="btn btn-link">Regsister</a>
        @endif
    </div>

</form>
@endsection