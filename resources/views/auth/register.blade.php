@extends('layouts.adminlayouts')

@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Codex <span class="tx-info">Hunter</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

      
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="form-control" type="text" placeholder="Enter Your Fullname" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" placeholder="Enter Your Email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control" type="password" name="password" placeholder="Password"
                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="form-control" type="password" 
                placeholder="Confirm Password" name="password_confirmation" required />
            </div>
            <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>

        </form>

      <div class="mg-t-40 tx-center">Not yet a member? <a href="{{ route('login') }}" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->
  
@endsection