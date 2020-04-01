@extends('layout')
@section('content')
	<div class="card" style="width: 350px">
		@foreach($posts as $post)
		<img class="card-img-top" src="https://via.placeholder.com/350x350={{$post->author}}" alt="">
		<div class="card-body">
			<div class="card-title">{{$post->name}}</div>
			<div class="card-text">{{$post->author}}</div>
			<a href="{{action('PostController@index')}}" class="btn btn-primary">Back</a>
		</div>
		@endforeach
	</div>
@endsection