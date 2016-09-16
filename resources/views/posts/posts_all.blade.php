@extends('layout.layout_after')
@section('body.content')
	<div class="space-2"></div>
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
							<option>Lọc theo: </option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="space-1"></div>
		<div class="row">
			<div class="col-xs-8">
			@foreach ($posts as $p)
			<a style="text-decorations:none; color:inherit;"" href="{{ URL::to('posts/'.$p->id) }}">
				<div class="game-float-wrapper">
					<div class="game-item">
						<div>
							<img  src="{{$p->header_image}}">
						</div>
						<div class="game-item-name">
							{{$p->name}}
						</div>
						<div class="game-item-price">
							<span>{{$p->current_price}}</span>
						</div>
						<div class="game-item-categories">
							<span>Multiplayer</span>
							<span>Action</span>
							<span>Survival</span>
							<span>Zombie</span>
						</div>
					</div>
				</div>
			</a>
			@endforeach
			<center>
				{!! $posts->render() !!}
			</center>
			</div>

			<div class="col-xs-4">
				<div class="panel panel-default no-radius fixed">
					<div class="panel-heading panel-title">Theo thể loại</div>
					<div class="panel-body">
						<div class="list-group no-radius">
							<a style="border-radius:0" href="#" class="list-group-item active">All</a>
							<a href="#" class="list-group-item">Action</a>
							<a href="#" class="list-group-item">Adventure</a>
							<a href="#" class="list-group-item">Horror</a>
							<a href="#" class="list-group-item">Stragety</a>
							<a href="#" class="list-group-item">RPG</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop