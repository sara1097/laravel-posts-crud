@extends('layouts.app')
@section('title','create')
    

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
      <div class="mb-3">
        <label class="form-label">title</label>
        <input name="title" type="text"  class="form-control" placeholder="input">
      </div>
      <div class="mb-3">
        <label class="form-label">discreption</label>
        <textarea name="discribtion" class="form-control" placeholder="input" rows="3"></textarea>
      </div>

      <div class="mb-3">
          <label class="forml-label">post creator</label>
          <select name="user" class="form-control">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user['name']}}</option>
            @endforeach
          </select>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    
  </form>

@endsection