@extends('layouts.guest.app')



@section('content')
	<div class="col s12 m8">
		<div class="row">
			<div class="col s12">
				<article>
					<div class="post-image">
						<img src="{{ asset('assets/'.$post->image) }}" class="responsive-img">
					</div>
					<div class="post-content">
						<h3 class="post-title">
							<a href="javascript:void(0);">
								{{ $post->title }}
							</a>
						</h3>
						<div class="post-meta">
							<ul>
								<li class="post-date">
									<i class="fa fa-clock-o"></i>
									 {{ date('d-m-Y', strtotime($post->created_at)) }}
								</li>
								<li class="post-views">
									<i class="fa fa-eye"></i>
									{{ $post->views }}
								</li>
							</ul>
						</div>
						<p class="post-excerpt">
							{{ $post->content }}
						</p>
					</div>
				</article>
			</div>
		</div>
	</div>
@endsection