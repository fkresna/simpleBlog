@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Article List</h1>
    </div>
    @foreach ($posts as @post)
        <div class="row">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
    
</div>
@endsection