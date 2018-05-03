@extends('layouts.admin.app')


@section('content')
<div class="row">
	<div class="col s12">
		<form id="postEdit">
			{{ csrf_field() }}
			<span><b><i><input type="hidden" name="id" value="{{ $post->id }}"></i></b></span>
			<div class="input-field">
	          <input id="title" value="{{ $post->title }}" name="title" type="text" class="validate">
	          <label for="title">Title</label>
	        </div>
	         <div class="input-field">
			    <select name="category">
			    	@foreach($categories as $category)
			    	@if($category->id == $post->category_id)
			    	<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
			    	@php continue; @endphp
			    	@endif
			      	<option value="{{ $category->id }}">{{ $category->name }}</option>
			      	@endforeach

			    </select>
			    <label>Categories</label>
			  </div>
	        <div class="input-field">
	        	<textarea id="content" name="content" class="materialize-textarea">
	        		{{ $post->content }}
	        	</textarea>
	        	<label for="content">Content</label>
	        </div>
	        <div class="file-field input-field">
	        	<div class="btn" style="background: transparent;box-shadow: none;border-bottom: 1px solid #9e9e9e;">
			        <span>
			        	<img src="{{ asset('assets/'.$post->image) }}" style="width:100px;">
			        </span>
			        <input type="file">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" name="image" type="text" value=" {{ str_replace('images/', '', $post->image) }} ">
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