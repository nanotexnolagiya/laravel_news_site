@extends('layouts.admin.app')


@section('content')
<div class="row">
	<div class="col s12">
		<a href="{{ route('createCatTemp') }}" class="add waves-effect waves-light btn-large"><i class="material-icons right">add</i>Add Category</a>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<table class="striped responsive-table">
			<tr>
				<td>#ID</td>
				<td>Name</td>
				<td>Created date</td>
				<td>Actions</td>
			</tr>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ date('d-m-Y', strtotime($category->created_at)) }}</td>
				<td>
					<a href="{{ route('editCatTemp', ['id' => $category->id]) }}">
						<i class="fa fa-edit"></i>
					</a>
					&nbsp;&nbsp;
					<a href="javascript:void(0);" class="catDelete" data-token="{{ csrf_token() }}" data-id="{{ $category->id }}">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@endsection