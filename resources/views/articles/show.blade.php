@extends('layouts.layout')
@section('main')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('update success'))
<div class="alert alert-success">
        {{ session('update success') }}
    </div>
@endif
    <h1>{{$article->id}}</h1>
    <h1>{{$article->title}}</h1>
    <h1>{{$article->content}}</h1>
    <h1>{{$article->author}}</h1>
<a class="btn btn-primary" href="{{ route('articles.index') }} ">Back to Articles</a>
@endsection
