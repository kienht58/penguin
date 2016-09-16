@extends('layout.layout_after')
@section('body.content')
<style>
	body{
		background-image: url(http://photoservice.gamesao.vn/Resources/Upload/Images/News/76b55bbf-cb08-4f90-a2f7-2d8a5fd4cbd0.jpg);
		background-attachment: fixed;
		background-position: center;
		background-size: 100%;
	}
	td{
		text-align:center; 
		vertical-align:middle;
	}
</style>
<div style="background-color:rgba(236, 240, 241,0.6)">
	<div class="container">
		<div class="searchbar">
			<div class="row">
				<div class="col-md-7">
					<input type="text" class="col-md-5">
					<button class="btn btn-primary"> Search </button>
				</div>
				<div class="col-md-4">
					<div class="sort-box col-md-3">
						<select id="sel1">
							<option>Tìm theo: </option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="button-group">
			<a href="{{URL::to('posts/make')}}" class="btn btn-primary" style="border-radius:0!important"> Tạo bài viết </a>
		</div>
		<div class="space-1"></div>
		<table class="table table-hovered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>SteamID</th>
					<th>Tên</th>
					<th>Giá hiện tại</th>
					<th>Giá gốc</th>
					<th>Trạng thái</th>
					<th colspan="3" class="text-center">Tác vụ</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->appid}}</td>
					<td>{{$p->name}}</td>
					<td>{{$p->current_price}}</td>
					<td>{{$p->origin_price}}
						<td>{{$p->status}}</td>
						<td>
							<a href="{{ URL::to('posts/'.$p->id) }}">
								<button class="btn btn-success">
									View
								</button>
							</a>
						</td>
						<td>
							<a href="{{URL::to('posts/'.$p->id.'/edit')}}">
								<button class="btn btn-primary" style="display:inline">
									Edit
								</button>
							</td>
							<td>
								<button class="btn btn-danger"  data-toggle="modal" data-target="#myModal"> Delete </button>


								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<center>
					{!! $posts->render() !!}
				</center>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Xóa game khỏi dữ liệu ?</h4>
					</div>
					<div class="modal-body">
						<center>
							{!! Form::open([
							'route' => ['posts.destroy', $p->id],
							'method' => 'DELETE',
							'style' =>'display: inline'
							])
							!!}
							<button type="button" style="width:100px;height:50px;" class="btn btn-danger"> Yes </button>
							{!! Form::close() !!}
							<button type="button" class="btn btn-default" data-dismiss="modal" style="width:100px;height:50px;" >No</button>
						</center>
					</div>
				</div>

			</div>
		</div>
		@stop