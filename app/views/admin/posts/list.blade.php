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
				<a class="btn btn-pink" href="{{URL::to('admin/post/add')}}" >Create post</a>
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tiêu đề</th>
							<th>Tóm tắt</th>
							<th>Hình ảnh</th>
							<th>Tác giả</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
					@foreach($posts as $post)
						<tr>
							<td>{{$post->id}}</td>
							<td>
								<a href="#">{{$post->title}}</a>
							</td>
							<td>
								{{strlen($post->description) > 30 ? substr($post->description,0,25).'...' : $post->description}}
							</td>
							<td>
								<img src="{{asset($post->thumbnail)}}" width="120px" />
							</td>
							<td>
								<a href="#">{{$post->user->name}}</a>
							</td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons edit-role">
									<a class="blue" href="#">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>

									<a class="green edit-role-link" href="{{URL::to('admin/post/edit/'.$post->id)}}" rel="{{$post->id}}" >
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red" href="{{URL::to('admin/post/delete/'.$post->id)}}">
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
												<a href="{{URL::to('admin/post/edit/'.$post->id)}}" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="{{URL::to('admin/category/delete/'.$post->id)}}" class="tooltip-error" data-rel="tooltip" title="Delete">
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
				<?php $adjacents = 2;
			            $page = 1;
			            $lastpage = $posts->getLastPage();
			            $page = ($posts->getCurrentPage() == 1 ? 1 : $posts->getCurrentPage());
			        ?>
			        @if ($posts->getLastPage() > 1)
			        <?php $previousPage = ($posts->getCurrentPage() > 1) ? $posts->getCurrentPage() - 1 : 1; ?>  
			        <ul class="pagination">
			            <li>
			                <a href="{{ $posts->getUrl($previousPage) }}"
			                class="item{{ ($posts->getCurrentPage() == 1) ? ' disabled' : '' }}">
			                <i class="icon left arrow"></i> «
			              </a>
			            </li>
			          @if($lastpage < 7 + ($adjacents * 2))
			            @for($i = 1; $i <= $lastpage; $i++ )
			                <li>
			                    <a href="{{ $posts->getUrl($i) }}"
			                    class="item{{ ($posts->getCurrentPage() == $i) ? ' active' : '' }}">
			                      {{ $i }}
			                  </a>
			                </li>
			            @endfor
			           @elseif($lastpage > 5 + ($adjacents * 2))
			              @if($page < 1 + ($adjacents * 2))
			               @for($i = 1; $i< 4 + ($adjacents * 2); $i++ )
			               <li>
			                <a href="{{ $posts->getUrl($i) }}"
			                class="item{{ ($posts->getCurrentPage() == $i) ? ' active' : '' }}">
			                  {{ $i }}
			                </a>
			                </li>
			               @endfor
			               <li><span>...</span></li>
			               <li><a href="{{$posts->getUrl($lastpage - 1)}}">{{$lastpage - 1}}</a></li>
			               <li><a href="{{$posts->getUrl($lastpage)}}">{{$lastpage}}</a></li>
			             @elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			               <li><a href="{{$posts->getUrl(1)}}">1</a></li>
			               <li><a href="{{$posts->getUrl(2)}}">2</a></li>
			               <li><span>...</span></li>
			               @for($i = $page-$adjacents; $i<=$page+$adjacents; $i++ )
			                <li><a href="{{ $posts->getUrl($i) }}"
			                class="item{{ ($posts->getCurrentPage() == $i) ? ' active' : '' }}">
			                  {{ $i }}
			                </a></li>
			               @endfor
			               <li><span>...</span></li>
			               <li><a href="{{$posts->getUrl($lastpage - 1)}}">{{$lastpage - 1}}</a></li>
			               <li><a href="{{$posts->getUrl($lastpage)}}">{{$lastpage}}</a></li>
			             @else
			                <li><a href="{{$posts->getUrl(1)}}">1</a></li>
			                <li><a href="{{$posts->getUrl(2)}}">2</a></li>
			                <li><span>...</span></li>
			                @for($i = $lastpage - (2 + ($adjacents * 2));$i <= $lastpage; $i++ )
			                  <li><a href="{{ $posts->getUrl($i) }}"
			                class="item{{ ($posts->getCurrentPage() == $i) ? ' active' : '' }}">
			                  {{ $i }}
			                </a> </li>
			                @endfor
			             @endif
			           @endif
			          

			          
			          <li><a href="{{ $posts->getUrl($posts->getCurrentPage()+1) }}"
			            class="item{{ ($posts->getCurrentPage() == $posts->getLastPage()) ? ' disabled' : '' }}">
			            » <i class="icon right arrow"></i>
			          </a></li>
			        </ul>  
			        @endif
			</div>
		</div>
	</div>
@stop