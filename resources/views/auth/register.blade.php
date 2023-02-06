@extends('layout.single') 

@section('content')
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

    <!-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>{{ __('Name') }}</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
        </div>

        <div>
            <label>{{ __('Email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required />
        </div>

        <div>
            <label>{{ __('Password') }}</label>
            <input type="password" name="password" required autocomplete="new-password" />
        </div>

        <div>
            <label>{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <a href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <div>
            <button type="submit">
                {{ __('Register') }}
            </button>
        </div>
    </form> -->

    <div class="card-body"> <style>.body{height: auto} </style>

        <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
        <p class="text-center small">Enter your personal details to create account</p>
        </div>

        <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}" validate>
            @csrf

            <div class="col-12">
                <label for="yourName" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus autocomplete="name">
                <div class="invalid-feedback">Please, enter your name!</div>
            </div>

            <div class="col-12">
                <label for="yourPhone" class="form-label">Your Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required >
                <div class="invalid-feedback">Please, enter your Phone Number!!!!</div>
            </div>
            

            <div class="col-12">
                <label for="yourEmail" class="form-label">Your Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required >
                <div class="invalid-feedback">Please enter a valid email adddress!</div>
            </div>

            <!-- <div class="col-12">
                <label for="yourUsername" class="form-label">Username</label>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" name="username" class="form-control" id="yourUsername" required>
                <div class="invalid-feedback">Please choose a username.</div>
                </div>
            </div> -->

            <div class="col-12">
                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required autocomplete="new-password" >
                <div class="invalid-feedback">Please enter your password!</div>
            </div>

            <div class="col-12">
                <label for="yourPassword" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" required autocomplete="new-password" >
                <div class="invalid-feedback">Please enter your confirm password!</div>
            </div>

            <!-- <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
            </div> -->

            <div class="col-12">
                
                <button class="btn btn-primary w-100 active" type="submit">Create Account</button>
            </div>

            <div class="col-12">
                <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
            </div>
        </form>

    </div>

@endsection


<style>
    
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}
	
body {

  background-size: 200% 200%;
  animation: gradient 30s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}



.container {
    margin: 50px auto;
}

.body {
    position: relative;
    width: 720px;
    height: 440px;
    margin: 20px auto;
    border: 1px solid #dddd;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.box-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.box-2 {
    padding: 10px;
}

.box-1,
.box-2 {
    width: 50%;
    background-color: aliceblue;
}

.h-1 {
    font-size: 24px;
    font-weight: 700;
}

.text-muted {
    font-size: 14px;
}

.container .box {
    width: 100px;
    height: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid transparent;
    text-decoration: none;
    color: #615f5fdd;
      background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  border-radius: 50%;
}



.box:active{background-color: #3e8e41}
.box:visited {
    border: 3px solid #ee82ee;
}

.box:hover {
    background-color: #3e8e41;
  


}

.btn.btn-primary {
    background-color: transparent;
    color: #ee82ee;
    border: 0px;
    padding: 0px;
    font-size: 14px;
}

.btn.btn-primary .fas.fa-chevron-right {
    font-size: 12px;
}

.footer .p-color {
    color: #ee82ee;
}

.footer.text-muted {
    font-size: 10px;
}

.fas.fa-times {
    position: absolute;
    top: 20px;
    right: 20px;
    height: 20px;
    width: 20px;
    background-color: #f3cff379;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fas.fa-times:hover {
    color: #ff0000;
}

@media (max-width:767px) {
    body {
        padding: 10px;
        background-color: aliceblue;
    }

    .body {
        width: 100%;
        height: 100%;
        background-color: aliceblue;
    }

    .box-1 {
        width: 100%;
        background-color: aliceblue;
    }

    .box-2 {
        width: 100%;
        height: 440px;
        background-color: aliceblue;
    }
}

</style>

<style>

    
    body {
  background-image: url("TemplateGP/assets/img/download.gif");
}


</style>