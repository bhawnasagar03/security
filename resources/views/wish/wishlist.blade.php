@extends('layouts.app2')
@section('content')
		
		 @if(Session::has('wishlist'))
			<div class="row">
				<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
					<ul class="list-group">
						@foreach($data as $value)
							<li class="list-group-item">
								<strong>{{ $value['guard']['fname'] }}</strong>
								<span class="badge badge-pill badge-dark">{{ $value['qty'] }}</span>
								<!-- <div class="btn-group pull-right">
									<button type="button" class="btn btn-default  btn-xs dropdown-toggle" data-toggle="dropdown">
											Action <span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Reduce One</a></li>
										<li><a href="#">Reduce All</a></li>
									</ul>
								</div> -->
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		@else 
			<div class="row">
				<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
					<h2>No guards in this wishlists</h2>
				</div>
			</div>
		@endif 
@endsection