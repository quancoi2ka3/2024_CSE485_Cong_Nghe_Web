@extends('layouts.layout')
@section('main')

<h1 class="text-center">Articles Home</h1>
<a href="{{route('articles.create')}}"class="btn btn-success">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Author</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->content}}</td>
      <td>{{$article->author}}</td>
      <td><a href="{{route('articles.edit',$article->id)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href=""><i class="fa-solid fa-eye"></i></a></td>
      <td>
    <a href="{{ route('articles.destroy', $article) }}" 
       onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa bài viết này không?')) { document.getElementById('delete-article-{{ $article->id }}').submit(); }">
        <i class="fa-solid fa-trash"></i>
    </a>

    <form id="delete-article-{{ $article->id }}" 
          action="{{ route('articles.destroy', $article) }}" 
          method="POST" 
          style="display: none;">
        @csrf
        @method('DELETE')
    </form>
</td>
    </tr>
    
    @endforeach
  </tbody>
</table>
@endsection
