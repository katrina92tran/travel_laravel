<script type="text/javascript">
	try{ace.settings.check('main-container' , 'fixed')}catch(e){}
</script>
<div id="sidebar" class="sidebar responsive" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div>
	<ul class="nav nav-list" style="top: 0px;">
		<li class="active">
			<a href="index.html">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Quản lý user </span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="{{URL::to('admin/user/roles/list') }}">
							Quyền user
					</a>
				</li>
				<li class="">
					<a href="{{URL::to('admin/user/list') }}">
							Danh sách user
					</a>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					Danh mục
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<!-- <li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>

						Layouts
						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="top-menu.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Top Menu
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="two-menu-1.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Two Menus 1
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="two-menu-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Two Menus 2
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="mobile-menu-1.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Default Mobile Menu
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="mobile-menu-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Mobile Menu 2
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="mobile-menu-3.html">
								<i class="menu-icon fa fa-caret-right"></i>
								Mobile Menu 3
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li> -->

				<li class="">
					<a href="{{URL::to('admin/category/add')}}">
						<i class="menu-icon fa fa-caret-right"></i>
						Thêm mới
					</a>

					<b class="arrow"></b>
				</li>
				@include('admin.component.left_category')
				
			</ul>
		</li>
		<li class="">
			<a href="{{URL::to('admin/slider/list')}}">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Slider Index </span>
			</a>

		</li>
		
	</ul>
</div>