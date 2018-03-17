@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<h1>{{ $user->name }} Articles</h1>

    </div>
    <div class="row">
    	<p>My best traits is {{ $user->best_traits }}
    </div>
    @if (count($posts))
	    @foreach ($posts as $post)
	        <div class="row">
	            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a> </h2>
	        </div>
	        <div class="row">
	            <p><small class="text-muted"> {{ $post->created_at->toFormattedDateString() }} </small></p>
	            
	            <p>{{ $post->content }}</p>
	        </div>
	    @endforeach
	@else
		<div>
			No articles yet!
		</div>

    @endif
    	
</div>
@endsection