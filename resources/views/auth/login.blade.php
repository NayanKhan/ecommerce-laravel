@extends('layouts.adminlayouts')

@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Codex <span class="tx-info">Hunter</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-20">The Admin Template For Perfectionist</div>

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />


      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <x-label for="email" :value="__('Email')" />
            <x-input id="email" class="form-control" placeholder="Enter your Email" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div class="form-group">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="form-control" placeholder="Enter your password" type="password" name="password" 
            required autocomplete="current-password" />
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </div>
    </form>

      <div class="mg-t-20 tx-center">Forget Password? <a href="{{ route('password.request') }}" class="tx-info">Reset Your Password</a></div>
      <div class="mg-t-5 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>

    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

@endsection
