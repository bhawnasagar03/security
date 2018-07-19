@extends('layouts.app2')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="signupSelection">
					<a href="{{route('customerRegister')}}">Signup as Customer</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="signupSelection">
				<a href="{{route('guardSignup')}}">Signup as Guard</a>
				</div>
		</div>
	</div>
@endsection