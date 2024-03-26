@extends('layouts.layout')
@section('main')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('edit success'))
<div class="alert alert-success">
        {{ session('edit success') }}
    </div>
@endif
@endsection