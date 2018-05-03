@extends('layouts.admin.app')


@section('content')
<div class="row">
	<div class="col s12">
		<form id="catAdd">
			{{ csrf_field() }}
			<div class="input-field">
	          <input id="name" name="name" type="text" class="validate">
	          <label for="name">Name</label>
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