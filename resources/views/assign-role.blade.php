<html>
<head>
    <title>Assign Role</title>
</head>
<body>
    <h2>Assign Role</h2>
    <form action="/users/{{ $userId }}/assign-role" method="POST">
        @csrf
        <label for="role_id">Select Role:</label>
        <select name="role_id">
            @foreach ($roles as $role)
                <option value="{{ $role->role_id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <button type="submit">Assign Role</button>
    </form>
</body>
</html>