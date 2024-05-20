<h1 >Your All Permissions</h1>
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name of Permission</th>
                    <th>Descriptions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->permission_id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->desc }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h1 >Assign Permissions To Roles</h1>
        
        <form method="POST">
            @csrf
            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role">
                    <option value="1">admin</option>
                    <option value="2">agent</option>
                    <option value="3">user</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="permission">Permission:</label>
                <select class="form-control" id="permission">
                    <option value="1">add_user</option>
                    <option value="2">view_user</option>
                    <option value="3">edit_user</option>
                    <option value="4">delete_user</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" onclick="window.location.href='/add/' + document.getElementById('role').value + '/' + document.getElementById('permission').value; return false;">Assign Permissions</button>
        </form>
        
        
    </div>
    
</div>