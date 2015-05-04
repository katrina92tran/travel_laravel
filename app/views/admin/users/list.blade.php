@extends('admin.layout')
@section('content')
    <div class="page-header">
		<h1>
			Danh sách user
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Tạo mới
			</small>
		</h1>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<a class="btn btn-pink" href="{{URL::to('admin/user/add')}}" >Create user</a>
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>UserName</th>
							<th>Email</th>
							<th>Address</th>
							<th>Avatar</th>
							<th>Role</th>
							<th>Active</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>
								<a href="#">{{$user->name}}</a>
							</td>
							<td>
								{{$user->username}}
							</td>
							<td>
								{{$user->email}}
							</td>
							<td>
								{{$user->address}}
							</td>
							<td>
								<div class="col-xs-6 col-md-3">
									<img src="{{asset($user->avatar)}}" alt="" class="img-thumbnail" />
								</div>
							</td>
							<td>
								
							</td>
							<td>
								{{$user->active==true?'active':'no active'}}
							</td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons edit-role">
									<a class="blue" href="#">
										<i class="ace-icon fa fa-search-plus bigger-130"></i>
									</a>

									<a class="green edit-role-link" href="{{URL::to('admin/user/edit/'.$user->id)}}" rel="{{$user->id}}" >
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a>

									<a class="red" href="{{URL::to('admin/user/roles/delete/'.$user->id)}}">
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
												<a href="{{URL::to('admin/user/roles/list/'.$user->id)}}" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="{{URL::to('admin/user/roles/delete/'.$user->id)}}" class="tooltip-error" data-rel="tooltip" title="Delete">
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
				<div class="dataTables_paginate paging_simple_numbers">
					<?php $adjacents = 2;
			            $page = 1;
			            $lastpage = $users->getLastPage();
			            $page = ($users->getCurrentPage() == 1 ? 1 : $users->getCurrentPage());
			        ?>
			        @if ($users->getLastPage() > 1)
			        <?php $previousPage = ($users->getCurrentPage() > 1) ? $users->getCurrentPage() - 1 : 1; ?>  
			        <ul class="pagination">
			            <li>
			                <a href="{{ $users->getUrl($previousPage) }}"
			                class="item{{ ($users->getCurrentPage() == 1) ? ' disabled' : '' }}">
			                <i class="icon left arrow"></i> «
			              </a>
			            </li>
			          @if($lastpage < 7 + ($adjacents * 2))
			            @for($i = 1; $i <= $lastpage; $i++ )
			                <li>
			                    <a href="{{ $users->getUrl($i) }}"
			                    class="item{{ ($users->getCurrentPage() == $i) ? ' active' : '' }}">
			                      {{ $i }}
			                  </a>
			                </li>
			            @endfor
			           @elseif($lastpage > 5 + ($adjacents * 2))
			              @if($page < 1 + ($adjacents * 2))
			               @for($i = 1; $i< 4 + ($adjacents * 2); $i++ )
			               <li>
			                <a href="{{ $users->getUrl($i) }}"
			                class="item{{ ($users->getCurrentPage() == $i) ? ' active' : '' }}">
			                  {{ $i }}
			                </a>
			                </li>
			               @endfor
			               <li><span>...</span></li>
			               <li><a href="{{$users->getUrl($lastpage - 1)}}">{{$lastpage - 1}}</a></li>
			               <li><a href="{{$users->getUrl($lastpage)}}">{{$lastpage}}</a></li>
			             @elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			               <li><a href="{{$users->getUrl(1)}}">1</a></li>
			               <li><a href="{{$users->getUrl(2)}}">2</a></li>
			               <li><span>...</span></li>
			               @for($i = $page-$adjacents; $i<=$page+$adjacents; $i++ )
			                <li><a href="{{ $users->getUrl($i) }}"
			                class="item{{ ($users->getCurrentPage() == $i) ? ' active' : '' }}">
			                  {{ $i }}
			                </a></li>
			               @endfor
			               <li><span>...</span></li>
			               <li><a href="{{$users->getUrl($lastpage - 1)}}">{{$lastpage - 1}}</a></li>
			               <li><a href="{{$users->getUrl($lastpage)}}">{{$lastpage}}</a></li>
			             @else
			                <li><a href="{{$users->getUrl(1)}}">1</a></li>
			                <li><a href="{{$users->getUrl(2)}}">2</a></li>
			                <li><span>...</span></li>
			                @for($i = $lastpage - (2 + ($adjacents * 2));$i <= $lastpage; $i++ )
			                  <li><a href="{{ $users->getUrl($i) }}"
			                class="item{{ ($users->getCurrentPage() == $i) ? ' active' : '' }}">
			                  {{ $i }}
			                </a> </li>
			                @endfor
			             @endif
			           @endif
			          

			          
			          <li><a href="{{ $users->getUrl($users->getCurrentPage()+1) }}"
			            class="item{{ ($users->getCurrentPage() == $users->getLastPage()) ? ' disabled' : '' }}">
			            » <i class="icon right arrow"></i>
			          </a></li>
			        </ul>  
			        @endif
				</div>
			</div>
		</div>
	</div>
@stop