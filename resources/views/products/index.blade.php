@extends('layout')

@section('content')

	<a href="{{ action('ProductsController@create') }}" class="btn btn-primary">Create</a>

	@foreach($products as $product)	
		<h1>Product : {{ $product->name }}</h1>
		<p>Price : {{ $product->price }}</p>
		<p> {{ $image1 = $product->image1 }} </p>

		<img src="{{ URL::asset('uploads/' . '$product->image1')}}" height="200" width="200">

		{{ Form::open([
			'action' => ['ProductsController@destroy', $product->id],
			'method' => "DELETE"
		]) }}
			<a href="{{ action('ProductsController@show', $product->id) }}" class="btn btn-primary">Read More</a>

			<a href="{{ action('ProductsController@edit', $product->id) }}" class="btn btn-info">Edit</a>
			
			<button class="btn btn-danger">Delete</button>
		{{ Form::close() }}
		<hr>
	@endforeach

@endsection