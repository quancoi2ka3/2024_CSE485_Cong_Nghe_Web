@extends('layouts.layout')

@section('main')
<h1 class="text-center">Create Article</h1>
<form method="post" action="{{route('articles.store')}}">
@csrf 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Content</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="content">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="author">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection