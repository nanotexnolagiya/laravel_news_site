<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="footer-menu">
						<ul>
							<li><a href="{{ url('/') }}" class="flow-text">Home</a></li>

	                        @foreach($categories as $category)

	                        <li>
	                        	<a href="{{ route('getCategory', ['id' => $category->id]) }}" class="flow-text">
	                        		{{ $category->name }}
	                        	</a>
	                        </li>

	                        @endforeach
						</ul>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="copyright">
						&copy; Copyright 2018
					</div>
				</div>
				<div class="col s12 m6">
					<div class="created-by right">
						@nanotexnolagiya
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end -->