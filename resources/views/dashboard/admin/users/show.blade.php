@extends('dashboard.master')
@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">User details</h3>
            </div>
            <div class="card-body">
                <h4 class="">{{$user->name}}</h4>
                <h4 class="">{{$user->email}}</h4>
            </div>
            <h3 class="badge-light">Articles</h3>
            <div class="card-body">
                @forelse ($user->articles as $article)
                    
                <h4 class="">{{$article->title}}</h4>
                @empty
                <h4 class="">No articles for user {{ $user->name}}</h4>
                @endforelse
            </div>

@endsection
