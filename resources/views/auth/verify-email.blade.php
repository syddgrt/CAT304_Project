@extends('layout.admin') 

@section('content')
    <div>
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div>
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Resend Verification Email') }}
            </button>
        </div> 
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Logout') }}
            </button>
        </div>
        </form>
@endsection
