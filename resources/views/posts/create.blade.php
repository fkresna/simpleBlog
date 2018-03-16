@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	<h1>Create an Article</h1>
	</div>
	<form method="POST" action="/posts">
		{{ csrf_field() }}
	  	<div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" >
	  	</div>
	  	<div class="form-group">
	    	<label for="content">Content</label>
	    	<textarea class="form-control" id="content" name="content" placeholder="Please enter an article" ></textarea>
	  	</div>
	  	<div class="form-group">
	  		<button type="submit" class="btn btn-primary">Submit</button>
	  	</div>

	  	@include('layouts.error')
	</form>
</div>
@endsection