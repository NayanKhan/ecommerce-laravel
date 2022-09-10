@extends('layouts.adminlayouts')

@section('body')

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Codex <span class="tx-info">Hunter</span> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-20">This is a secure area of the application. Please confirm your password before continuing.</div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control" type="password" name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block">Confirm</button>
            </div>
        </form>

    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

@endsection
