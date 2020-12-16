<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('assest/css/style.css') }}"/>
    <meta charset="utf-8"/>
    <title>
        REG
    </title>
</head>

<body>
<div class="regform">
    <h1>Registration Form</h1>
</div>

<div class= "main">
    <form method="post" action="{{route('my-register')}}">
        @csrf
        <div class = "name">
            <h2 class="name">Name</h2>
            <input class="firstname" type="text" placeholder="First Name" name="first_name"><br>
            @error('first_name')
            <small class="text-danger form-text">{{$message}}</small>
            @enderror
            <input class="lastname" type="text" placeholder="Last Name" name="second_name">
            @error('second_name')
            <small class="text-danger form-text">{{$message}}</small>
            @enderror
        </div>


        <h2 class="name">Email</h2>
        <input class="email" type="text" placeholder="Email" name="email">
        @error('email')
        <small class="text-danger form-text">{{$message}}</small>
        @enderror

        <h2 class="name">Password</h2>
        <input class="password" type="password"  placeholder="Password" name="password" >
        @error('password')
        <small class="text-danger form-text">{{$message}}</small>
        @enderror
        <h2 class="name">Re-Password</h2>
        <input class="re-password" type="password" placeholder="Re-Password" name="password_confirmation">


        <h2 class="name">Phone</h2>
        <input class="code" type="text" placeholder="Area Code" name="area_code">
        @error('area_code')
        <small class="text-danger form-text">{{$message}}</small>
        @enderror
        <input class="number" type="text" placeholder="Phone Number" name="mobile">
        @error('mobile')
        <small class="text-danger form-text">{{$message}}</small>
        @enderror
        <h2 class="name">Gender</h2>
        <select class="option" name="gender">
            <option disabled="disabled" selected="selected" >##Select##</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        @error('gender')
        <small class="text-danger form-text">{{$message}}</small>
        @enderror

        <button type="submit">Register</button>
    </form>
    @if(Session::has('success'))
    <div class="result">
        {{Session::get('success')}}
    </div>
    @endif
</div>


</body>
</html>
