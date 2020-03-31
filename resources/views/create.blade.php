@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">
			@if($mesage = Session::get('danger'))
			<div class="alert alert-danger">
				<strong>{{$mesage}}</strong>
			</div>
			@endif
			<form action="{{ action('PostController@store')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label for="">Detail</label>
					<textarea class="form-control" name="detail" placeholder="Detail"></textarea> 
				</div>
				<div class="form-group">
					<label for="">Author</label>
					<input type="text" class="form-control" name="author" placeholder="Detail">
				</div>
				<button class="btn btn-primary" type="submit">Submit</button>
			</form>
		</div>
	</div>
@endsection()