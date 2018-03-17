@extends('layouts.app')

@section('content')
<div class="container">
    @if(isset($message))
	    <div class="row alert alert-info" role="alert">
	        {{ $message }}
	    </div>
    @endif
    <div class="row">
    	<h1>{{ $post->title }}</h1>
    </div>
    <div class="row">
    	<p><small class="text-muted"> {{ $post->created_at->toFormattedDateString() }} by {{ $post->user->name }}</small></p>
    	{{ $post->content }}
   	</div>
</div>
@endsection