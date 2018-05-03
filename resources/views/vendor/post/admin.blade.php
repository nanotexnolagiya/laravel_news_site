@extends('layouts.admin.app')


@section('content')
<div class="row">
	<div class="col s12">
		<a href="{{ route('createPostTemp') }}" class="add waves-effect waves-light btn-large"><i class="material-icons right">add</i>Add Post</a>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<table class="striped responsive-table">
			<tr>
				<td>#ID</td>
				<td>Image</td>
				<td>Title</td>
				<td>Category</td>
				<td>Views</td>
				<td>Created</td>
				<td>Actions</td>
			</tr>
			@foreach($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td><img src="{{ asset('assets/'.$post->image) }}" style="width: 100px;"></td>
				<td>{{ $post->title }}</td>
				<td>
					@foreach($categories as $category)
						@if($post->category_id == $category->id)
							{{ $category->name }}
						@endif
					@endforeach
				</td>
				<td>{{ $post->views }}</td>
				<td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
				<td>
					<a href="{{ route('editPostTemp', ['id' => $post->id]) }}">
						<i class="fa fa-edit"></i>
					</a>
					&nbsp;&nbsp;
					<a href="javascript:void(0);" class="postDelete" data-token="{{ csrf_token() }}" data-id="{{ $post->id }}">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection