@extends('admin.layouts.auth.app')
@section('content')
    <div class="home">
        <div class="login">
            <img src="{{ asset('assets/back/media/logo.png') }}" alt="">
            <h2>Log In </h2>
            <form action="{{ route('login') }}" class="form nobac" method="POST">
                @csrf
                <div class="input">
                    <span>Email :</span>
                    <input type="text" spellcheck="false" placeholder=" Email " name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input">
                    <span>Password :</span>
                    <div class="select">
                        <input type="password" placeholder="Password" name="password">
                        <i class="fa-light fa-eye-slash" id="passwordShow"></i>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="m0a fw500">Log In </button>
            </form>
        </div>
    </div>
@endsection
