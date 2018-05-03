@extends('layouts.guest.app')




@section('content')
<div class="col s12">
    @include('layouts.guest.slider')
</div>
<div class="col s12 m8">
    
	<!-- Posts by categories start -->
	<div class="posts-by-category">
		<div class="row">
			@foreach($categories_posts as $category_posts)
			<div class="col s12 m6">
				<h2>{{ $category_posts['cat_name'] }}</h2>
				<div class="category-posts">
					<ul>
						@foreach($category_posts['cat_posts'] as $category_post)
						<li>
							<div class="card horizontal">
						      <div class="card-image">
						        <img src="{{ asset('assets/'.$category_post->image) }}">
						      </div>
						      <div class="card-stacked">
						        <div class="card-content">
						          <a href="{{ route('getPost', ['id' => $category_post->id]) }}">
									{{ $category_post->title }}
						          </a>
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

						      </div>
						    </div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- Posts by categories end -->

	<!-- Latest Posts start -->
	<div class="latest-posts">
		<div class="row">
			@foreach($latest_posts as $latest_post)
			<div class="col s12 m4">
				<div class="card sticky-action">
	              <div class="card-image waves-effect waves-block waves-light">
	                <img class="activator" src="{{ asset('assets/'.$latest_post->image) }}">
	              </div>
	              <div class="card-content">
	                <span class="card-title activator grey-text text-darken-4">
	                	<a href="{{ route('getPost', ['id' => $latest_post->id]) }}">
	                		{{ $latest_post->title }}
	                	</a>
	                	<i class="material-icons right">more_vert</i>
	                </span>
	              </div>

	              <div class="card-action">
	                <a>
	                	<i class="fa fa-clock-o"></i>
	                	{{ date('d-m-Y', strtotime($latest_post->created_at)) }}
	                </a>
	                <a>
	                	<i class="fa fa-eye"></i>
	                	{{ $latest_post->views }}
	                </a>
	              </div>

	              <div class="card-reveal">
	                <span class="card-title grey-text text-darken-4">

	                	<i class="material-icons right">close</i>
	                </span>
	                <p class="post-excerpt">
	                	@php
	                		mb_internal_encoding("UTF-8");
							$excerpt = mb_substr($latest_post['content'], 0, 100);
							echo $excerpt.'..'; 
	                	@endphp
					</p>
	              </div>
	            </div>
			</div>
			@endforeach
		</div>
	</div>
	<!-- Latest posts end -->
</div>
@endsection