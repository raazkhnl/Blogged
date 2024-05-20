<h1>User Roles</h1>
<p>User: {{ $user->name }}</p>
<p>Roles:</p>
<ul>
@foreach ($roles as $role)
    <li>{{ $role->name }}</li>
@endforeach
</ul>
