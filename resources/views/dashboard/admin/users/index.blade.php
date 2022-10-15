@extends('dashboard.master')
@section('content')
    {{-- @dd($users) --}}

    {{-- {{dd();}} --}}
    <div class="row col-md-6">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('users.create') }}">
                            Add User
                        </a>
                    </div>
                </div>
                <h3 class="card-title">List of users</h3>

                {{-- <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($users[6]->profile->phone) --}}
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><img width="40px" height="40px" alt="Avatar" class="rounded" src="{{ asset('storage/'. $user->avatar) }}"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ optional($user->profile)->phone }}</td>
                                <td>{{ $user->type == 1 ? 'Admin' : 'User' }}</td>
                                <td>
                                    {{-- {{route('users.show')}} --}}
                                    <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}">
                                        Show
                                    </a>
                                    {{-- {{route('users.edit')}} --}}
                                    <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
                                        Edit
                                    </a>
                                    {{-- {{route('users.destroy')}} --}}
                                    <form action="{{route('users.destroy', $user->id)}}" method="POST" onsubmit="return confirm('Are you sure?');"
                                        style="display: inline-block;">
                                        @method('DELETE')
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div>No data found</div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        {{$users->links()}}
    </div>
@endsection
