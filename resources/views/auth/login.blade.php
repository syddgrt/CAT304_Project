@extends('layout.public') 

@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>{{ __('Email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus />
        </div>

        <div>
            <label>{{ __('Password') }}</label>
            <input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div>
            <label>{{ __('Remember me') }}</label>
            <input type="checkbox" name="remember">
        </div>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <div>
            <button type="submit">
               {{ __('Login') }}
            </button>
        </div>
    </form> -->

    <div class="card-body">

        <div class="pt-4 pb-2">
        <h1 class="card-title text-center pb-0 fs-4">ReportTruzz</h5>
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your email & password to login</p>
        </div>

        <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="col-12">
                <label for="yourPassword" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus >
                <div class="invalid-feedback">Please enter your email!</div>
            </div>

            <div class="col-12">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required autocomplete="current-password">
                <div class="invalid-feedback">Please enter your password!</div>
            </div>

            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
            <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
            </div>
        </form>

    </div>


@endsection
