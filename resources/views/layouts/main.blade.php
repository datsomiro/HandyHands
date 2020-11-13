<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Welcome' }} | Laravel HandyHands project</title>

    <link rel="stylesheet" href='css/app.css'>
</head>
<body>
<div class="nav-bar">
    
    <form action="{{ route('logout') }}" method="post">
    
        @csrf
    
        <button>Logout</button>
    
    </form>
    
    <form action="{{ route('login') }}" method="post">
    
        @csrf
    
        <button>Login</button>
    
    </form>
    <form action="{{ route('register') }}" method="post">
    
        @csrf
    
        <button>Register</button>
    
    </form>
</div>


@yield('content')

    
</body>
</html>