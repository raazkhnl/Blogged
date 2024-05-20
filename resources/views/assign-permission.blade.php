<html>
<head>
    <title>Assign Permission</title>
</head>
<body>
    <h2>Assign Permission</h2>
    <form action="/roles/{{ $roleId }}/assign-permission" method="POST">
        @csrf
        <label for="permission_id">Select Permission:</label>
        <select name="permission_id">
            @foreach ($permissions as $permission)
                <option value="{{ $permission->permission_id }}">{{ $permission->name }}</option>
            @endforeach
        </select>
        <button type="submit">Assign Permission</button>
    </form>
</body>
</html>