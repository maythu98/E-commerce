<div class="form-group">
	<label>Name</label>
	{{ Form::text('name', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Price</label>
	{{ Form::number('price', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Stock</label>
	{{ Form::number('stock', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Description</label>
	{{ Form::textarea('description', null, ["class" => "form-control"]) }}
</div>

<div class="form-group">
	<label>Image 1</label>
	{{ Form::file('image1', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Image 2</label>
	{{ Form::file('image2', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Image 3</label>
	{{ Form::file('image3', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Featured Image</label>
	{{ Form::file('image1', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Is Image</label>
	{{ Form::number('is_featured', null, ['class' => "form-control"]) }}
</div>