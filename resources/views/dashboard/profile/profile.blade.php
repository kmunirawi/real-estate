@extends('dashboard.master')
@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">User Profile</h3>
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
            <form action="{{ route('profile.update'), auth()->user()->id }}" method="post">
                @csrf

                <div class="row">

                    <div class="form-group col-6">
                        <label for="address">Address</label>
                        <input value="{{ old('address') ? old('address') : auth()->user()->profile->address }}"
                            name="address" type="text" class="form-control" id="address" placeholder="Enter address">
                    </div>
                    <div class="form-group col-6">
                        <label for="mobile">Mobile</label>
                        <input value="{{ old('mobile') ? old('mobile') : auth()->user()->profile->mobile }}" name="mobile"
                            type="text" class="form-control" id="mobile" placeholder="Enter Mobile">
                    </div>
                </div>
                <div class="form-group col-6">
                    <label for="dob">Date of Birth</label>
                    <input value="{{ old('dob') ? old('dob') : auth()->user()->profile->dob }}" name="dob"
                        type="date" class="form-control" id="dob" placeholder="Enter Date of Birth">
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
@endsection
