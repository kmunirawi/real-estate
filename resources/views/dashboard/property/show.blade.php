@extends('dashboard.master')
@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Property details</h3>
            </div>
            <div class="card-body">
                <h4 class="">Name: {{$property->name}}</h4>
                <h4 class="">City: {{optional($property->city)->name}}</h4>
                <h4 class="">Owner: {{optional($property->user)->name}}</h4>
                <h4 class="">Type: {{optional($property->type)->name}}</h4>
                <h4 class="">Area: {{$property->area}}</h4>
                <h4 class="">Kind: {{ $property->kind == 1 ? 'SALE' : 'RENT'}}</h4>
                <h4 class="">Rooms: {{$property->room}}</h4>
                <h4 class="">Price: {{$property->price}}</h4>
            </div>

@endsection
