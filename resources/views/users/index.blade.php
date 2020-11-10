<h1>Users Management</h1>

<a href="{{ action('UsersController@create') }}">Create new user</a>
@foreach($users as $user)
    <p>
        <a href="{{ action('UsersController@show', $users->id) }}">
            <strong>{{ $user->first_name }}</strong>
        </a>

    </p>
@endforeach