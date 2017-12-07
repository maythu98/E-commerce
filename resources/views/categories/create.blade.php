@extends('layout')

@section('content')

	{{
		Form::open([
		"action" => "CategoryController@store",
		"method" => "POST"])
	}}
	
		@include('categories.form')

		<button class="btn btn-primary">Create Category</button>

	{{
		Form::close()
	}}
@endsection


