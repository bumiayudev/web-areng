@extends("admin.layout")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Users</h1>
              <div class="float-right"><a href="{{ route('users.create') }}" class="btn btn-outline-info mb-4">Add User</a></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary">Edit</a>&nbsp;|&nbsp;
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $users->links() }} <!-- Pagination links -->
        </div>
    </div>
</div>
@endsection
