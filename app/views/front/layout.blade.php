<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Template website</title>
	{{HTML::style('public/css/style.css')}}
	{{HTML::style('public/css/bootstrap.min.css')}}
	{{HTML::style('public/css/nivo-slider.css')}}
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Racing+Sans+One">
	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
	{{HTML::script('public/js/jquery-1.11.2.min.js')}}
</head>
<body>
	<div class="big-wrapper">
		<header id="header">
			<div class="info">
				<div class="container">
					<div class="grid_12 clearfix">
						<h1>
							<a href="/">
								<span class="first">Big Palace</span>
								<span class="second">blogs</span>
							</a>
						</h1>
						<form id="search-form">
							<input type="text" name="search" value="" placeholder="Enter key search" />
							<input type="image" name="" value="" src="public/images/search.png" />
						</form>
					</div>
				</div>
			</div>
			<div id="stuck_container">
				<div class="container">
					<div class="grid_12 clearfix">
						<nav>
			              <ul class="sf-menu">
			                <li class="current"><a href="index.html">Main page</a>
			                  <ul>
			                    <li><a href="#">About</a></li>
			                    <li><a href="#">News</a>
			                      <ul>
			                        <li><a href="#">Pellentesque</a></li>
			                        <li><a href="#">Aliquam</a></li>
			                        <li><a href="#">Mauris</a></li>
			                      </ul>
			                    </li>
			                    <li><a href="#">Services</a></li>
			                  </ul>
			                </li>
			                <li><a href="index-1.html">About our theatre</a></li>
			                <li><a href="index-2.html">Our blog</a></li>
			                <li><a href="index-3.html">Events</a></li>
			                <li><a href="index-4.html">Our gallery</a></li>
			                <li><a href="{{URL::to('/contact')}}">Contacts</a></li>
			              </ul>
			            </nav>
					</div>
				</div>
			</div>
		</header><!-- /header -->
		@yield('content')
		
	</div>
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="power">
					 &copy; <span id="copyright-year">2015</span> <a href="index-6.html">Privacy Policy</a>
				</div>
				<div class="socials">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
            			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
            			<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
			</div>
		</div>	
	</footer> <!-- footer -->
	<a class="fa fa-chevron-up" id="toTop" href="#" style="display: block;"></a>
	
	{{HTML::script('public/js/tmstickup.js')}}
	{{HTML::script('public/js/jquery.nivo.slider.js')}}
	{{HTML::script('public/js/superfish.js')}}
	{{HTML::script('public/js/main.js')}}
</body>
</html>