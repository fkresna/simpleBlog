@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<h1>{{ $post->title }}</h1>
    </div>
    <div class="row">
    	<p><small class="text-muted"> {{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</small></p>
    	{{ $post->content }}
   	</div>
</div>
@endsection