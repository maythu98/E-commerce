@extends('layout')

@section('content')
	<h1>{{ $category->name }}</h1>
	<p>
		{{ $category->description }}
	</p>
	
	<a href="{{ action('CategoryController@index') }}" class="btn btn-primary">Go Back</a>

	<br><br>

	<h5>Related Products</h5>
	@foreach( $category->products as $product )
		<a href="{{ action('ProductsController@show', $product->id) }}">{{ $product->name }}</a>
		<hr>
	@endforeach
@endsection