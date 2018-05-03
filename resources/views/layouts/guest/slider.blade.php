<!-- Slider section start -->
<div class="section-slider">
	<div class="row">
		<div class="col s12 m8">
			<div class="active-post-img">
				<img src="{{ asset('assets/images/test.png') }}" class="responsive-img" />
			</div>
		</div>
		<div class="col s12 m4">
			<div class="slider-posts">
				<ul id="slider-posts">
					@php
					$i = 0;
					@endphp
					@foreach($latest_posts as $latest_post)
					@php
					$i++;
					@endphp
					<li class="{{ $i == 1 ? 'active' : '' }}" data-src="{{ asset('assets/'.$latest_post->image) }}">
						<div class="card">
							<div class="card-content">
					          <a href="{{ route('getPost', ['id' => $latest_post->id]) }}">
					          	{{ $latest_post->title }}
					          </a>
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
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Slider section end -->