@extends('layouts.guest.app')



@section('content')
	<div class="col s12 m8">
		<div class="row">
			@foreach($category_posts as $category_post)
			<div class="col s12 m6">
				<div class="card sticky-action">
		              <div class="card-image waves-effect waves-block waves-light">
		                <img class="activator" src="{{ asset('assets/'.$category_post->image) }}">
		              </div>
		              <div class="card-content">
		                <span class="card-title activator grey-text text-darken-4">
		                	<a href="{{ route('getPost', ['id' => $category_post->id]) }}">
		                		{{ $category_post->title }}
		                	</a>
		                	<i class="material-icons right">more_vert</i>
		                </span>
		              </div>

		              <div class="card-action">
		                <a>
		                	<i class="fa fa-clock-o"></i>
		                	{{ date('d-m-Y', strtotime($category_post->created_at)) }}
		                </a>
		                <a>
		                	<i class="fa fa-eye"></i>
		                	{{ $category_post->views }}
		                </a>
		              </div>

		              <div class="card-reveal">
		                <span class="card-title grey-text text-darken-4">

		                	<i class="material-icons right">close</i>
		                </span>
		                <p class="post-excerpt">
		                	@php
		                		mb_internal_encoding("UTF-8");
								$excerpt = mb_substr($category_post['content'], 0, 100);
								echo $excerpt.'..'; 
		                	@endphp
						</p>
		              </div>
		            </div>
			</div>
			@endforeach
		</div>
	</div>
@endsection