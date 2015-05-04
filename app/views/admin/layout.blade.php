<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Blog</title>
		
		{{HTML::style('public/css/bootstrap.min.css')}}
		{{HTML::style('public/css/style_admin.css')}}
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />

	</head>
	<body class="no-skin">
		@include('admin.component.header')
		<div class="main-container" id="main-container">
			@include('admin.component.left')
			<div class="main-content">
				@include('admin.component.breadcrumb')
				<div class="page-content">
					@yield('content')
				</div>
			</div>

		</div>
		{{HTML::script('public/js/jquery-1.11.2.min.js')}}
		{{HTML::script('public/js/bootstrap.min.js')}}
		<!-- {{HTML::script('public/js/npm.js')}} -->
		{{HTML::script('/public/js/main_admin.js')}}
		{{HTML::script('/public/js/jquery-ui.custom.min.js')}}
		{{HTML::script('/public/js/admin.js')}}
	</body>
</html>