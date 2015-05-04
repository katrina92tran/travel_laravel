<?php 
	$categories = Category::get();
?>
@foreach($categories as $category)
<li class="">
	<a href="{{asset('admin/post/list/'.$category->id)}}">
		<i class="menu-icon fa fa-caret-right"></i>
		{{$category->name}}
	</a>

	<b class="arrow"></b>
</li>
@endforeach