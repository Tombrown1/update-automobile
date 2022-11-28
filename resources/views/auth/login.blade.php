<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> Login  </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('backend/favicon.ico') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/signup_style.css') }}">
  <!-- Google Font: Source Sans Pro -->

</head>
  <body>
     <div class="sign-up-form">
        <img src="{{asset('images/logo3.png')}}" alt="">
        <h3>Sign In</h3>
            <form action="{{route('login')}}" method="post">
                @csrf
                @if(session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif
                <input type="email" class="input-box" name="email" placeholder="Email">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                <input type="password" class="input-box" name="password" placeholder="Password">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
                <!-- <p> <span><input type="checkbox"></span> I agree to the terms of service</p> -->
                <!-- <button type="button" class="signup-btn">Sign Up</button> -->
                <!-- <hr>
                <p class="or">OR</p> -->
                <span><a href="{{route('password.request')}}" class="float-right">Forgot Password</a></span>
                <button type="submit" class="login-btn">Login </button>                  
                <p>Don't have an account ? <a href="{{route('register')}}">Sign up</a></p>
              
            </form>
     </div>

  </body>
</html>
