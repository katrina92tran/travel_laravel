@extends('admin.layout')
@section('content')
    <div class="page-header">
		<h1>
			Danh sách danh mục
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Chỉnh sửa
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
			{{Form::open(array('url'=>'admin/category/edit','class'=>'form-horizontal','files'=>true))}}
				{{Form::hidden('id',$category->id)}}
				<div class="form-group">
					{{Form::label('name','Tên',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('name',$category->name,array('class'=>'col-xs-10 col-sm-5','placeholder'=>'name'))}}
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						{{Form::submit('Edit',array('class'=>'btn btn-info'))}}
						&nbsp; &nbsp; &nbsp;
						{{Form::reset('Reset',array('class'=>'btn'))}}
					</div>
				</div>
			{{Form::close()}}
			
		</div>
	</div>
@stop