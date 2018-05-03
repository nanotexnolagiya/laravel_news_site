@extends('layouts.admin.app')


@section('content')
<div class="row">
	<div class="col s12">
		<form id="postAdd">
			{{ csrf_field() }}
			<div class="input-field">
	          <input id="title" name="title" type="text" class="validate">
	          <label for="title">Title</label>
	        </div>
	         <div class="input-field">
			    <select name="category">
			    	<option selected disabled>Select Category</option>
			    	@foreach($categories as $category)
			      	<option value="{{ $category->id }}">{{ $category->name }}</option>
			      	@endforeach

			    </select>
			    <label>Categories</label>
			  </div>
	        <div class="input-field">
	        	<textarea id="content" name="content" class="materialize-textarea" placeholder="Content">
	        	</textarea>
	        	<label for="content">Content</label>
	        </div>
	        <div class="file-field input-field">
	        	<div class="btn">
			        <span>
			        	Image
			        </span>
			        <input type="file">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" name="image" type="text" >
			      </div>
	        </div>
	        <div class="input-field">
	        	<button class="btn waves-effect waves-light" type="submit" name="action">Save
				    <i class="material-icons right">send</i>
				  </button>
	        </div>
		</form>
	</div>
</div>
@endsection