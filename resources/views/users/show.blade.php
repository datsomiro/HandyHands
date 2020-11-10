<h1>User Profile </h1>
<h2>Profile picture</h2>
<h2>First Name: {{ $users->first_name }}</h2>

<h2>Last Name: {{ $users->last_name }}</h2>

<h2>Email: {{ $users->email }}</h2>

<h2>Phone number: {{ $users->phone_number }}</h2>
<br/>
<br/>

<h2>About me: {{ $users->about }}</h2>
<h2>What do I need help with?: {{ $users->need_help }}</h2>
<h2>How can I help?: {{ $users->provide_help }}</h2>




<a href="#">Delete</a>
<br/>
<a href="#">Edit Profile</a>
<br/>


<a href="{{ action('UserController@index') }}">Back to index</a>

