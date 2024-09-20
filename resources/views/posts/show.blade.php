@extends('layouts.app')
@section('title')
    show
@endsection
@section('content')
    

<div class="container mt-4">
    <div class="card">
        <h5 class="card-header">post info</h5>
        <div class="card-body">
          <h5 class="card-title">Title:{{$Post['title']}}</h5>
          <p class="card-text">description:{{$Post['discribtion']}}</p>
        </div>
      </div>

</div>

<div class="container mt-4">
    <div class="card">
        <h5 class="card-header">Post Creator Info</h5>
        <div class="card-body">
          <h5 class="card-title">Name:sara</h5>
          <p class="card-text">Email:sara.mohamed1097@gmail.com</p>
          <p class="card-text">created at : {{$Post->created_at}}</p>
        </div>
      </div>

</div>

@endsection

    