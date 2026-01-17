@extends('layouts.auth')

@section('content')

<!--Content-->

<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="tw-login-card">

        <!-- Logo -->
        <div class="text-center mb-4">
            <a href="/">
                <img
                    src="/images/logo/Central_Avenue_Main_Logo_-_Copy__2_-removebg-preview.png"
                    alt="Central Avenue"
                    class="tw-logo">
            </a>

        </div>

        <h2 class="tw-title text-center mb-1">Sign in to your account</h2>
        <p class="tw-subtitle text-center mb-4">
            Welcome back to Central Avenue
        </p>

        <!-- Login Form -->
        <form method="POST" action="/login" class="tw-form">
            @csrf

            <div class="mb-3">
                <label>Email address</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->all() )
                @foreach($errors->all() as $error)
                <span class="error">
                    <strong class="text-danger">{{ $error }}</strong>
                </span>
                @endforeach
                @endif
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="tw-checkbox">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>

                <a href="/forgot-password" class="tw-link">
                    Forgot password?
                </a>
            </div>

            <button type="submit" class="tw-btn">
                Sign in
            </button>
        </form>

    </div>
</div>



<div style="height: 150px;"></div>

<!--End Content-->
@endsection