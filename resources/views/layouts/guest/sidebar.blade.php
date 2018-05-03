<aside class="sidebar">
	<div class="widget">
		<h2 class="widget-title">Popular</h2>
		<div class="posts-widget">
			<ul>
				@foreach($popular_posts as $popular_post)
				<li>
					<div class="card">
						<div class="card-content">
				          <a href="{{ route('getPost', ['id' => $popular_post->id]) }}">
				          	{{ $popular_post->title }}
				          </a>
				        </div>
				        <div class="card-action">
				          <a>
		                	<i class="fa fa-clock-o"></i>
		                	{{ date('d-m-Y', strtotime($popular_post->created_at)) }}
		                  </a>
		                  <a>
		                	<i class="fa fa-eye"></i>
		                	{{ $popular_post->views }}
		                  </a>
				        </div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="widget">
		<h2 class="widget-title">Interesting</h2>
		<div class="posts-widget">
			<ul>
				@foreach($interest_posts as $interest_post)
				<li>
					<div class="card">
						<div class="card-content">
				          <a href="{{ route('getPost', ['id' => $interest_post->id]) }}">
				          	{{ $interest_post->title }}
				          </a>
				        </div>
				        <div class="card-action">
				          <a>
		                	<i class="fa fa-clock-o"></i>
		                	{{ date('d-m-Y', strtotime($interest_post->created_at)) }}
		                  </a>
		                  <a>
		                	<i class="fa fa-eye"></i>
		                	{{ $interest_post->views }}
		                  </a>
				        </div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</aside>