@extends('admin.layout')
@section('content')
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
    <div class="page-header">
		<h1>
			Danh sách bài viết
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Đăng bài
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
			{{Form::open(array('url'=>'admin/post/add','class'=>'form-horizontal','files'=>true))}}
				<div class="form-group">
					{{Form::label('title','Tiêu đề',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::text('title',Input::old('title'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'Title'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('category','Danh mục',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::select('category_id',$categories)}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('description','Mô tả',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::textarea('description',Input::old('description'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'Description'))}}
					</div>
				</div>
				<div class="form-group">
					{{Form::label('content','Nội dung',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						{{Form::textarea('content',Input::old('content'),array('class'=>'col-xs-10 col-sm-5','placeholder'=>'Content','id'=>'content'))}}
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
				<div class="form-group">
					{{Form::label('slider','Slider',array('class'=>'col-sm-3 control-label no-padding-right'))}}
					<div class="col-sm-9">
						<div class="col-xs-6 col-md-3">
							<img src="{{asset('/public/images/no_photo_icon.png')}}" class="thumbnail" width="180px" />
						</div>
						<div>
							{{Form::file('slider')}}
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
	<script type="text/javascript">
		// Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'content',{
    	filebrowserBrowseUrl: '/browser/browse.php',
		filebrowserUploadUrl: '/uploads/'
    });
    CKFinder.setupCKEditor( editor, '/ckfinder/' );
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('content');
	</script>
@stop