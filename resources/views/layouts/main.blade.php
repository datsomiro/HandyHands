<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

{{-- <div class= "navbar-dark bg-primary d-flex ">
    
    <form action="{{ route('logout') }}" method="post">
    
        @csrf
    
        <button class="btn btn-warning" >Logout</button>
    
    </form>
    
    <form action="{{ route('login') }}" method="post">
    
        @csrf
    
        <button class="btn btn-warning" >Login</button>
    
    </form>
    <form action="{{ route('register') }}" method="post">
    
        @csrf
    
        <button class="btn btn-warning" >Register</button>
    
    </form>
</div> --}}

<div id="app"></div> 
    @yield('content')

</body>
</html>
