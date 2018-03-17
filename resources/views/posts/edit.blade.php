@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	<h1>Edit an Article</h1>
	</div>
	<form method="POST" action="/posts/{{ $post->id }}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
	  	<div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" >
	  	</div>
	  	<div class="form-group">
	    	<label for="content">Content</label>
	    	<textarea class="form-control" id="content" name="content">{{ $post->content }}</textarea>
	  	</div>
	  	<div class="form-group">
	  		<button type="submit" class="btn btn-primary">Submit</button>
	  	</div>

	  	@include('layouts.error')
	</form>
</div>
@endsection