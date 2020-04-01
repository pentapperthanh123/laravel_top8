@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">
		@if($message = Session::get('danger'))
		<div class="alert alert-danger">
			<strong>{{$message}}</strong>
		</div>
		@endif
		@foreach($posts as $post)
			<form action="{{action('PostController@update',$post->id)}}" method="POST">
				{{csrf_field()}}
				{{method_field('put')}}
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" name="name" class="form-control" value="{{$post->name}}">
				</div>
				<div class="form-group">
					<label for="">Detail</label>
					<textarea name="detail" class="form-control">{{$post->detail}}</textarea>
				</div>
				<div class="form-group">
					<label for="">Author</label>
					<input type="text" name="author" class="form-control" value="{{$post->author}}">
				</div>
				<button class="btn btn-warning" type="submit">Update</button>
				<a href="{{action('PostController@index')}}" class="btn btn-default">Back</a>
			</form>
			@endforeach
			</div>
	</div>
@endsection