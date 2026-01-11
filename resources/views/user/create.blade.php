@extends("admin.layout")
@section("content")
<form method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create User</h1>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Create User</button>
            </div>
        </div>
    </div>
</form>
@endsection
