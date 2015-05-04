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
			{{Form::open(array('url'=>'admin/user/add','class'=>'form-horizontal','files'=>true))}}
				<div class="form-group">
					{{Form::label('username','Tên đăng nhập',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('username',Input::old('username'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'username'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('name','Họ và tên',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('name',Input::old('name'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'name'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('password','Mật khẩu',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::password('password',array('class'=>'col-xs-10 col-sm-5','placeholder'=>'password'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('password_confirmation','Nhập lại mật khẩu',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::password('password_confirmation',array('class'=>'col-xs-10 col-sm-5','placeholder'=>'Nhập lại mật khẩu'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('Email','Email',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::email('email',Input::old('email'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'Email'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('address','Địa chỉ',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('address',Input::old('address'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'address'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('avatar','Hình đại diện',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						<div class="col-xs-6 col-md-3">
							<img src="{{asset('/public/images/no_photo_icon.png')}}" class="thumbnail blah" width="120px" />
						</div>
						<div>
							{{Form::file('avatar',array('class'=>'imgInp'))}}
						</div>
					</div>
				</div>
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						{{Form::submit('Submit',array('class'=>'btn btn-info'))}}
						&nbsp; &nbsp; &nbsp;
						{{Form::reset('Reset',array('class'=>'btn'))}}
					</div>
				</div>
			{{Form::close()}}
			
		</div>
	</div>
@stop