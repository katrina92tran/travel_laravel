<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Login</title>
	{{HTML::style('public/css/login.css')}}
	{{HTML::style('public/css/bootstrap.min.css')}}
	{{HTML::style('public/css/style_admin.css')}}
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
	{{HTML::script('public/js/jquery-1.11.2.min.js')}}
	{{HTML::script('public/js/jquery.validate.min.js')}}
</head>
<body class="login-layout">
	<div class="main-container">
		<div class="main-content">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="login-container">
						<div class="center">
							<h1 class="white">Login</h1>
						</div>
						<div class="space-6"></div>
						<div class="position-relative">
							<div class="login-box visible widget-box no-border" id="login-box">
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header blue lighter bigger">
											<i class="ace-icon fa fa-coffee green"></i>
											Please Enter Your Information
										</h4>
										<div class="space-6"></div>
										@if (Session::has('error'))
								        <div class="alert alert-danger">
								        	<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
									        {{ Session::get('error') }}
									        </div><!-- end form-errors -->
									    @endif
									    @if (Session::has('linkregister'))
										<div class="alert alert-block alert-success">
								        	<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
								        {{ Session::get('linkregister') }}</div>
								        @endif
								        @if (Session::has('slinkregister'))
										<div class="alert alert-block alert-success">
								        	<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
								        {{ Session::get('slinkregister') }}</div>
								        @endif
										{{Form::open(array('url'=>'login'))}}
										
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														{{Form::text('username',Input::old('username'),array('placeholder'=>'Username','class'=>'form-control'))}}
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														{{Form::password('password',array('placeholder'=>'Username','class'=>'form-control'))}}
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>
												<div class="space"></div>
												<div class="clearfix">
													<label class="inline">
														{{Form::checkbox('remember')}}
														<span class="lbl">Remember me</span>
													</label>
													<button class="width-35 pull-right btn btn-sm btn-primary" type="submit">
														<i class="ace-icon fa fa-key"></i>
														<span class="bigger-110">Login</span>
													</button>
												</div>
											</fieldset>
										{{Form::close()}}
										<div class="social-or-login center">
											<span class="bigger-110">Or Login Using</span>
										</div>
										<div class="space-6"></div>
										<div class="social-login center">
											<a class="btn btn-primary">
												<i class="ace-icon fa fa-facebook"></i>
											</a>

											<a class="btn btn-info">
												<i class="ace-icon fa fa-twitter"></i>
											</a>

											<a class="btn btn-danger">
												<i class="ace-icon fa fa-google-plus"></i>
											</a>
										</div>
									</div>
									<div class="toolbar clearfix">
										<div>
											<a class="forgot-password-link" data-target="#forgot-box" href="#">
												<i class="ace-icon fa fa-arrow-left"></i>
												I forgot my password
											</a>
										</div>
										<div>
											<a class="user-signup-link" data-target="#signup-box" href="#">
												I want to register
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="forgot-box widget-box no-border" id="forgot-box">
								<div class="widget-body">
									<div class="widget-main">
										@if (Session::has('error'))
										  {{ trans(Session::get('reason')) }}
										@elseif (Session::has('success'))
										  An email with the password reset has been sent.
										@endif
										<h4 class="header red lighter bigger">
											<i class="ace-icon fa fa-key"></i>
											Retrieve Password
										</h4>

										<div class="space-6"></div>
										<p>
											Enter your email and to receive instructions
										</p>

										{{Form::open(array('url' => 'forgetpassword','id'=>'forgot'))}}
											<fieldset>
												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														{{Form::email('email',Input::old('email'),array('placeholder'=>'Email','class'=>'form-control'))}}
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<div class="clearfix">
													<button class="width-35 pull-right btn btn-sm btn-danger" type="submit">
														<i class="ace-icon fa fa-lightbulb-o"></i>
														<span class="bigger-110">Send Me!</span>
													</button>
												</div>
											</fieldset>
										{{Form::close()}}
									</div><!-- /.widget-main -->

									<div class="toolbar center">
										<a class="back-to-login-link" data-target="#login-box" href="#">
											Back to login
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div>
							<div class="signup-box widget-box no-border" id="signup-box">
								@if (Session::has('register'))
								<div class="alert alert-block alert-success">
						        	<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
						        {{ Session::get('register') }}</div>
						        @endif
						        <div id="alerta">
						        </div>
								<div class="widget-body">
									<div class="widget-main">
										<h4 class="header green lighter bigger">
											<i class="ace-icon fa fa-users blue"></i>
											New User Registration
										</h4>

										<div class="space-6"></div>
										<p> Enter your details to begin: </p>

										{{Form::open(array('url'=>'register','id'=>'register'))}}
											<fieldset>
												<label class="block clearfix form-user">
													<span class="block input-icon input-icon-right">
														{{Form::email('email',Input::old('email'),array('placeholder'=>'Email','class'=>'form-control','id'=>'email'))}}
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>

												<label class="block clearfix form-user">
													<span class="block input-icon input-icon-right">
														{{Form::text('username',Input::old('username'),array('placeholder'=>'Username','class'=>'form-control'))}}
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>

												<label class="block clearfix form-user">
													<span class="block input-icon input-icon-right">
														{{Form::password('password',array('placeholder'=>'Password','class'=>'form-control','id'=>'password'))}}
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>

												<label class="block clearfix">
													<span class="block input-icon input-icon-right">
														{{Form::password('password_confirmation',array('placeholder'=>'Repeat password','class'=>'form-control'))}}
														<i class="ace-icon fa fa-retweet"></i>
													</span>
												</label>

												<label class="block form-user">
													<input type="checkbox" class="ace form-control" name="accept" />
													<span class="lbl">
														I accept the
														<a href="#">User Agreement</a>
													</span>
												</label>

												<div class="space-24"></div>

												<div class="clearfix">
													<button class="width-30 pull-left btn btn-sm" type="reset">
														<i class="ace-icon fa fa-refresh"></i>
														<span class="bigger-110">Reset</span>
													</button>

													<button class="width-65 pull-right btn btn-sm btn-success" type="submit">
														<span class="bigger-110">Register</span>

														<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
													</button>
												</div>
											</fieldset>
										{{Form::close()}}
									</div>

									<div class="toolbar center">
										<a class="back-to-login-link" data-target="#login-box" href="#">
											<i class="ace-icon fa fa-arrow-left"></i>
											Back to login
										</a>
									</div>
								</div><!-- /.widget-body -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
		 $(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
			$('.widget-box.visible').removeClass('visible');//hide others
			$(target).addClass('visible');//show target
		 });
		 $(function(){
		 	$.validator.addMethod("loginRegex", function(value, element) {
		        return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
		    }, "Contain only letters, numbers, or dashes.");
		 	$("#register").validate({
		 		rules:{
		 			email:{
		 				required:true,
		 				email:true
		 			},
		 			password:{
		 				required:true,
		 				minlength:3,
		 				loginRegex:true
		 			},
		 			password_confirmation:{
		 				equalTo:"#password"
		 			},
		 			username:{
		 				required:true,
		 				minlength:5,
		 				maxlength:20,
		 				loginRegex:true
		 			},
		 			accept:{
		 				required:true
		 			}
		 		},
		 		highlight:function(element){
		 			$(element).closest('.form-user').addClass('has-error');
		 		},
		 		unhighlight:function(element){
		 			$(element).closest('.form-user').removeClass('has-error');
		 		},
		 		errorElement:'span',
		 		errorCLass:'help-block',
		 		errorPlacement:function(error,element) {
		 			if(element.parent('.form-control').length){
		 				error.insertAfter(element.parent());
		 			}else{
		 				error.insertAfter(element);
		 			}
		 		}
		 	});
		 });
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(e){
				var formData = {
					'email' : $(this).find('input[name=email]').val(),
					'username' : $(this).find('input[name=username]').val(),
					'password' : $(this).find('input[name=password]').val()
				};
				// if($(this).find('input[name=email]').val() == "" || $(this).find('input[name=username]').val() == "" || $(this).find('input[name=password]').val() == ""){
				// 	return false;
				// }
				else{
				$.ajax({
					type : 'post',
					url:"{{URL::action('UserController@register')}}",
					data : formData,
					encode : true,
					success:function(data){
						$("#alerta").append("<div class='alert alert-block alert-success'>Your register successed! Check email, auth register</div>");
						document.getElementById("register").reset();
					}
				}
				//using the done promise callback
				
				);
				e.preventDefault();
			// }
			});
			
		});
	</script>
</body>