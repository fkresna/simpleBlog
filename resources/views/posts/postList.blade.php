@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Article List</h1>
    </div>

    @if (count($posts))
    @foreach ($posts as $post)
        <div class="row">
            <strong><a href="/posts/{{ $post->id }}">{{ $post->title }}</a> </strong>
        </div>
        <div class="row">
            <p>
            <a href="/posts/{{$post->id }}/edit">Edit</a> <a href="/posts/{{$post->id }}/delete">Delete</a>
            </p>
        </div>
    @endforeach
    @endif
    <div class="row">
        <a href="/posts/create">Create an articles</a>
    </div>
    
</div>
@endsection