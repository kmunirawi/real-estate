@extends('dashboard.master')
@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add new user:</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('dashboard.admin.users._user_form')
            </form>
        </div>
    </div>
@endsection
