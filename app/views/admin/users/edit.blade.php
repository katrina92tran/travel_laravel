@extends('admin.layout')
@section('content')
    <div class="page-header">
		<h1>
			Danh sách user
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Quyền user
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
			{{Form::open(array('url'=>'admin/user/edit','class'=>'form-horizontal','files'=>true))}}
				{{Form::hidden('id',$user->id)}}
				<div class="form-group">
					{{Form::label('username','Tên đăng nhập',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('username',$user->username,array('class'=>'col-xs-10 col-sm-5','placeholder'=>'username','re'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('name','Họ và tên',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('name',$user->name,array('class'=>'col-xs-10 col-sm-5','placeholder'=>'name'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('email','Email',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::email('email',$user->email,array('class'=>'col-xs-10 col-sm-5','placeholder'=>'Email'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('address','Địa chỉ',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('address',$user->address,array('class'=>'col-xs-10 col-sm-5','placeholder'=>'address'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('avatar','Hình đại diện',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						<div class="col-xs-6 col-md-3">
							<img src="{{asset($user->avatar)}}" class="thumbnail blah" />
						</div>
						<div>
							{{Form::file('avatar',array('class'=>'imgInp'))}}
						</div>
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						{{Form::submit('Edit',array('class'=>'btn btn-info'))}}
					</div>
				</div>
			{{Form::close()}}
			
		</div>
	</div>
@stop