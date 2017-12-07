@extends('layout')

@section('content')

	{{ Form::model($product, [
		'action' => ['ProductsController@update', $product->id],
		'method' => "PUT"
	]) }}

		@include('products.form')
		
		<div class="form-group">
			<label>Category</label>
			{{ Form::select('category_id[]', $categories, $selected_list,
			 ['class' => 'form-control', 'multiple' => 'multiple']) }}		
		</div>

		<button class="btn btn-primary">Update Article</button>
	{{ Form::close()}}
@endsection