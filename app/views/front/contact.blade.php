@extends('front.layout')
@section('content')
	<main>
		<div class="container">
			<div class="grid_12">
				<div class="heading">
					<h2>Contact us</h2>
				</div>
			</div>
			<div class="map">
			</div>
			<div class="address-block-wrapper">
				<div class="row">
					<div class="grid_4">
						<div class="address-block">
							<div class="box_inner">
								<h3>Support 1</h3>
								<address>
									<email>thihanh790@gmail.com</email>
									<phone>01265932684</phone>
								</address>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="address-block">
							<div class="box_inner">
								<h3>Support 2</h3>
								<address>
									<email>thihanh790@gmail.com</email>
									<phone>01265932684</phone>
								</address>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="address-block">
							<div class="box_inner">
								<h3>Support 3</h3>
								<address>
									<email>thihanh790@gmail.com</email>
									<phone>01265932684</phone>
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid_12">
				<div class="heading">
					<h2>Contact Form</h2>
				</div>
				<div id="alerta">
				@if($errors->has())
	        <div class="alert alert-danger">
	        	<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
		        
		        </div><!-- end form-errors -->
		    @endif
		    @if (Session::has('success'))
		        <div class="alert alert-block alert-success">
		        	<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
		        {{ Session::get('success') }}</div>
		    @endif
		    </div>
				{{Form::open(array('id'=>'contact-form'))}}
					<fieldset>
						<div class="row">
							<div class="grid_4">
								<label for="">
									{{Form::text('name',Input::old('name'),array('placeholder'=>'name'))}}
								</label>
								<label>
									<ul>
									@foreach($errors->get('name') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						            </ul>
								</label>
							</div>
							<div class="grid_4">
								<label for="">
									{{Form::email('email',Input::old('email'),array('placeholder'=>'email'))}}
								</label>
								<label>
									<ul>
									@foreach($errors->get('email') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						            </ul>
								</label>
							</div>
							<div class="grid_4">
								<label for="">
									{{Form::text('phone',Input::old('phone'),array('placeholder'=>'phone'))}}
								</label>
							</div>
						</div>
						<div class="row">
							<div class="grid_12">
								{{Form::textarea('comment')}}
								<label>
									<ul>
									@foreach($errors->get('comment') as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						            </ul>
								</label>
							</div>
						</div>
						<div class="contact-form-buttons">
							{{Form::submit('submit')}}
						</div>
					</fieldset>
				{{Form::close()}}
				<script type="text/javascript">
					$(document).ready(function(){
						$('form').submit(function(e){
							var formData = {
								'name' : $(this).find('input[name=name]').val(),
								'phone' : $(this).find('input[name=phone]').val(),
								'email' : $(this).find('input[name=email]').val(),
								'comment' : $(this).find('textarea[name=comment]').val(),
							};
						//process the form
						// $.post("{{URL::action('HomeController@sendContant')}}",formData,function(data){

      //                       // console.log(data);
      //                       $('#alerta').append("<div>ods sfj</div>");

      //                   });
						if($(this).find('input[name=name]').val()== "" || $(this).find('input[name=email]').val() == "" || $(this).find('input[name=comment]').val() == ""  ){
								var danger = $("<div class='alert alert-danger'><ul>");
								if($(this).find('input[name=name]').val()== ""){
									danger.append("<li>The name is empty</li>");
								}
								else if($(this).find('input[name=email]').val()== ""){
									danger.append("<li>The email is empty</li>");
								}
								else if($(this).find('input[name=comment]').val()== ""){
									danger.append("<li>The content is empty</li>");
								}
								$("#alerta").append(danger);
								
								// $("#alerta").append("<div class='alert alert-danger'><ul><li></li></ul></div>");
							return false;
						}
						else{
							$.ajax({
								type : 'post',
								url:"{{URL::action('HomeController@sendContant')}}",
								data : formData,
								// datType :'html',
								encode : true,
								success:function(data){
									$("#alerta").append("<div class='alert alert-block alert-success'>Send success</div>");
									document.getElementById("contact-form").reset();
								}
							}
							//using the done promise callback
							
							);
							e.preventDefault();
							}
						});
						
					});
				</script>
			</div>
		</div>
	</main>
@stop