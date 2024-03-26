@extends('layouts.layout')
@section('main')
<h1 class="text-center">Add Article</h1>
<form action="{{route('articles.store')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required >
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Content</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content" required>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author" required>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection