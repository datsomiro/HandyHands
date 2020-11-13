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

<<<<<<< HEAD
    @yield('content')

</body>
</html>
{{--<form action="{{ route('logout') }}" method="post">

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

    
</body>
</html>--}}
{{--<form action="{{ route('logout') }}" method="post">

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
=======
>>>>>>> ca3873f973b866268656433567d99f77c31ee0ef

@yield('content')

    
</body>
</html>--}}