@extends('layouts.layout')
@section('main')
<h1>Edit Article</h1>
<form action="{{ route('articles.update', $article->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input type="number" class="form-control"value="{{$article->id}}" name="id">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control"value="{{$article->title}}" name="title">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Content</label>
    <textarea class="form-control" name="content">{{$article->content}}</textarea>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" class="form-control" value="{{$article->author}}" name="author">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
