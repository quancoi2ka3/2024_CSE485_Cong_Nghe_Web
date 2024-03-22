@extends('layouts.layout')
@section('title','Trường Đại Học Thủy Lợi')
@section('main')
<h1 class="text-center">Article List</h1>
<a href="{{route('articles.create')}}" class="btn btn-success">Add</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Author</th>
      <th scope="col" colspan="4" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td>{{$article->title}}</td>
      <td>{{$article->content}}</td>
      <td>{{$article->author}}</td>
      <td><a href="{{route('articles.show', $article->id)}}"><i class="fa-solid fa-eye"></i></a></td>
      <td><a href="{{route('articles.edit', $article->id)}}"><i class="fa-solid fa-pen"></i></a></td>
      
      <td>
        <button type="button" onclick="confirmDelete('{{$article->id}}')"><i class="fa-solid fa-trash"></i></button>
        <form id="deleteForm{{$article->id}}" action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="">{{ $articles->links() }}</div>
<script>
  function confirmDelete(articleId) {
    if (confirm('Are you sure you want to delete this article?')) {
      event.preventDefault();
      document.getElementById('deleteForm' + articleId).submit();
    }
  }
</script>

@endsection
