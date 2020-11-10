@extends ('layouts.main')



<form action="{{ route('logout') }}" method="post">

    @csrf

    <button>Logout</button>

</form>