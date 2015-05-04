@extends('front.layout')
@section('content')
	<main>
		<div class="container">
			@if (Session::has('error'))
			        <div class="alert alert-danger"  >{{ Session::get('error') }}</div>
			    @endif
			<form action="{{ URL::to('resetpassword') }}" method="POST">
			    <input type="hidden" name="token" value="{{ $token }}">
			    <input type="email" name="email" placeholder="email" />
			    <input type="password" name="password" placeholder="password" />
			    <input type="password" name="password_confirmation" placeholder="password_confirmation" />
			    <input type="submit" value="Reset Password">
			</form>
		</div>
	</main>
@stop