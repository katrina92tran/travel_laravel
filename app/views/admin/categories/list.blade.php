@extends('admin.layout')
@section('content')
    <div class="page-header">
		<h1>
			Danh mục
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Danh sách
			</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-xs-12">
			@if($errors->has())
	        <div class="alert alert-danger">
	        	<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
		        <ul>
		            @foreach($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		        </div><!-- end form-errors -->
		    @endif
		    @if (Session::has('success'))
		        <div class="alert alert-block alert-success">
		        	<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
		        {{ Session::get('success') }}</div>
		    @endif
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{$category->id}}</td>
							<td>
								<a href="#">{{$category->name}}</a>
							</td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons edit-role">
									<a class="blue" href="#">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>

									<a class="green edit-role-link" href="{{URL::to('admin/category/edit/'.$category->id)}}" rel="{{$category->id}}" >
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red" href="{{URL::to('admin/category/delete/'.$category->id)}}">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>

								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
													<span class="blue">
														<i class="ace-icon fa fa-search-plus bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="{{URL::to('admin/category/edit/'.$category->id)}}" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="{{URL::to('admin/category/delete/'.$category->id)}}" class="tooltip-error" data-rel="tooltip" title="Delete">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop