@extends('dashboard.master')
@section('content')

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
                        <a class="btn btn-success" href="{{ route('properties.create') }}">
                            Add Property
                        </a>
                    </div>
                </div>
                <h3 class="card-title">List of properties</h3>

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
                            <th>Name</th>
                            <th>Price</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($properties as $property)
                            <tr>
                                <td>{{ $property->id }}</td>
                                <td>{{ $property->name }}</td>
                                <td>{{ $property->price }}</td>
                                <td>{{ optional($property->city)->name }}</td>
                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('properties.show', $property->id) }}">
                                        Show
                                    </a>
                                    <a class="btn btn-xs btn-info" href="{{ route('properties.edit', $property->id) }}">
                                        Edit
                                    </a>
                                    <form action="{{route('properties.destroy', $property->id)}}" method="POST" onsubmit="return confirm('Are you sure?');"
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
        {{$properties->links()}}
    </div>
@endsection
