@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Article List</h1>
    </div>
    @if (count($posts))
    @foreach ($posts as $post)
        <div class="row">
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a> </h2>
        </div>
        <div class="row">
            <p><small class="text-muted"> {{ $post->created_at->toFormattedDateString() }} by <a href="/posts/user/{{ $post->user_id }}">{{ $post->user->name }}</a></small></p>
            
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
    @endif
    
</div>
@endsection