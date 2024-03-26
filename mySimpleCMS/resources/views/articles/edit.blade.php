@extends('layouts.layout')
@section('main')
<h1 class="text-center">Edit Article</h1>
<form method="post" action="{{route('articles.update',$article->id)}}">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" required value="{{$article->id}}">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" required value="{{$article->title}}">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Content</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content" required value="{{$article->content}}">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="author" required value="{{$article->author}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection