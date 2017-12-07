@extends('layout')

@section('content')	

	{{ Form::open([
		'action'=> "ProductsController@store",
		'enctype'=> "multipart/form-data",
		'method'=> "POST",
		'file'=>TRUE
	]) }}
	
	@include('products.form')

	<div class="form-group">
		<label>Category</label>
		{{ Form::select('category_id[]', $categories, null,
		['class' => 'form-control', 'multiple' => 'multiple']) }}
	</div>

	<button class="btn btn-primary"> Create Products </button>
	{{ Form::close() }}
@endsection
