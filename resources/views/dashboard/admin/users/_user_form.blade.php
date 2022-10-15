<div class="card-body">
    <div class="form-group">
        <label for="name">User Name</label>
        <input value="{{ old('name') ? old('name') : $user->name }}" name="name" type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input  value="{{ old('email') ? old('email') : $user->email }}" name="email" type="email" class="form-control" id="exampleInputEmail1"
            placeholder="Enter email">
    </div>
    <div class="form-group">
        <input name="avatar" type="file" class="form-control"
            placeholder="Upload avatar .. ">
    </div>
    @if ($user->avatar)
    <img width="40px" height="40px" alt="Avatar" class="rounded" src="{{ asset('storage/'. $user->avatar) }}">
    @endif
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1"
            placeholder="Password">
    </div>

</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Update</button>
</div>