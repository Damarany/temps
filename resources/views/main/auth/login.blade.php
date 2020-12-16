{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>--}}
{{--    <meta charset="utf-8"/>--}}
{{--    <title>--}}
{{--        REG--}}
{{--    </title>--}}
{{--</head>--}}

{{--<body>--}}
{{--<div class="regform">--}}
{{--    <h1>Registration Form</h1>--}}
{{--</div>--}}

{{--<div class= "main">--}}
{{--    --}}

{{--</div>--}}


{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('assest/css/styleLogin.css') }}">
    <link rel="stylesheet" href="css/all.min.css"/>
    <meta charset="utf-8"/>
    <title>
        Login Page
    </title>
</head>

<body>
<div class="login">
    <h1>Login</h1>
</div>
@include('main.auth.include.sucsses')
@include('main.auth.include.errors')
<div class="main">
    <form action="{{route('my-login')}}" method="post">
@csrf
        <div class="name">

            <h2 class="name">Email</h2>
            <input class="email" type="email" placeholder="Email" name="email" value="{{old('email')}}">
            @error('email')
                <span class="text-danger"> {{$message}} </span>
            @enderror
            <h2 class="name">Password</h2>
            <input class="password" type="password" placeholder="Password" name="password" >
            @error('password')

              <span class="text-danger"> {{$message}} </span>
            @enderror
            <div class="forget">
                <a href="#" >Forget Password ?!!</a>
            </div>
        </div>


        <button type="submit">Login</button>




    </form>
</div>
</body>

</html>
