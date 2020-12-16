<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('assest/css/style.css') }}"/>
    <link rel="stylesheet" href=""/>
    <meta charset="utf-8"/>
    <title>
        REG
    </title>
</head>

<body>
<div class="regform">
    <h1>Home Page</h1>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button type="submit">logout</button>
    </form>
</div>


</body>
</html>
