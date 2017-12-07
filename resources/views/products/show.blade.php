@extends('layout')

@section('content')
	<h3> Product ID -{{ $product->id }}</h3>
	<h3> <b> Prodcut </b> ::{{ $product->name }}</h3>
	<h3> <b> Price </b> ::{{ $product->price }}</h3>
	<h3> <b> Stock </b> ::{{ $product->stock }}</h3>
	<h3>
		<b> Description </b> ::{{ $product->description }}
	</h3>
	<h3> 
		<b> Image 1 </b> <br>
		<img src="{{ URL::asset('uploads/' . '$product->image1')}}" height="100" width="100">
	</h3>
	<h3>
		<b> Image 2 </b> <br>
		<img src="{{ URL::asset('uploads/' . '$product->image2')}}" height="100" width="100">
	</h3>
	<h3> 
		<b> Image 3 </b> <br>
		<img src="{{ URL::asset('uploads/' . '$product->image3')}}" height="100" width="100">
	</h3>
	<h3>
		<b> Featured Image </b>	::<br>
		<img src="{{ URL::asset('uploads/' . '$product->featured_image')}}" height="100" width="100">
	</h3>
	<h3> <b> Is Featured </b> ::{{ $product->is_featured }}</h3>
	<br><br>
	<h3><b>Related Categories</b></h3>
	<br>
	@foreach( $product->categories as $category )
		<a href="{{ action('CategoryController@show', $category->id) }}">
		{{ $category->name }}
		</a>
		<hr>
	@endforeach

	<a href=" {{ action('ProductsController@index')}} " class="btn btn-primary">Go Back</a>
	
@endsection