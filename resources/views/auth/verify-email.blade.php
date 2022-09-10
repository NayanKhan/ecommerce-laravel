@extends('layouts.adminlayouts')

@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Codex <span class="tx-info">Hunter</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-20">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</div>

        @if (session('status') == 'verification-link-sent')
            <div class="tx-center">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Resend Verification Email</button>
                </div>

            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <div class="form-group">
                    <button type="submit" class="btn btn-info btn-block">Log Out</button>
                </div>
            </form>
        </div>

    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

@endsection
