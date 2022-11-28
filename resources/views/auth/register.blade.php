<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> Register  </title>

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
        <h3>Sign Up Now</h3>
            <form action="{{url('/register')}}" method="post">
                @csrf
                <input type="text" class="input-box" name="name" placeholder="Names">
                <input type="email" class="input-box" name="email" placeholder="Email">
                <input type="password" class="input-box" name="password" placeholder="Password">
                <input type="password" class="input-box" name="password_confirmation" placeholder="Confirm Password">
                <p> <span><input type="checkbox"></span> I agree to the terms of service</p>
                <!-- <button type="button" class="signup-btn">Sign Up</button> -->
                <!-- <hr>
                <p class="or">OR</p> -->
                <button type="submit" class="login-btn">Register</button>
                <p>Do have an account ? <a href="{{route('login')}}">Sign in</a></p>
            </form>
     </div>

  </body>
</html>
