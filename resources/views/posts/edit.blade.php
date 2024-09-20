@extends('layouts.app')
@section('title')
    edit
@endsection
@section('content')
<form method="POST" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('PUT')
      <div class="mb-3">
        <label class="form-label">title</label>
        <input name="title" type="text" value="{{$post->title}}" class="form-control" placeholder="input">
      </div>
      <div class="mb-3">
        <label class="form-label">discribtion</label>
        <textarea name="discribtion"  class="form-control" placeholder="input" rows="3">{{$post->discribtion}}</textarea>
      </div>

      <div class="mb-3">
          <label class="forml-label">post creator</label>
          <select name="user" class="form-control">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
            
          </select>
      </div>
      <button type="submit" class="btn btn-primary">update</button>
    
  </form>
@endsection