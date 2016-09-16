@extends('layout.layout_after')
@section('body.content')
<style>
	body{
		color:white;
		background-image: url({{$post->background}});
		background-attachment: fixed;
		background-position: center;
		background-size: 100%;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
			<li><a href="/">Trang chủ</a></li>
				<li><a href="{{ URL::to('posts') }}">Dashboard</a></li>
				<li class="active">{{$post->name}}</li>
			</ol>
		</div>
	</div>
</div>

<center>
	<div class="title">
		<h1> {!! $post->name !!} </h1>
		<h3> {!! $post->appid !!} </h3>
	</div>
</center>
<div class="container">
	{!!Form::model($post,['method' => 'PATCH', 'action' => ['PostsController@update',$post->id] ]) !!}
	<div class="form-group">
		{!! Form::submit('Update',array('class' => 'btn btn-primary'))!!}
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
	<div class="form-group">
		{!! Form::label('name','Name:') !!}
		{!! Form::text('name',$post->name,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('is_released','Is released?:') !!}
		{!! Form::text('is_released',$post->is_released,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('current_price','Current Price:') !!}
		{!! Form::text('current_price',$post->current_price,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('origin_price','Origin Price:') !!}
		{!! Form::text('origin_price',$post->origin_price,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('status','Status:') !!}
		{!! Form::text('status',$post->status,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('header_image','Header image:') !!}
		{!! Form::text('header_image',$post->header_image,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('background','Background:') !!}
		{!! Form::text('background',$post->background,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('required_age','Reqire age:') !!}
		{!! Form::text('required_age',$post->required_age,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('is_free','Is Free?:') !!}
		{!! Form::text('is_free',$post->is_free,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('detailed_description','Detail Description:') !!}
		{!! Form::textarea('detailed_description',$post->detailed_description,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('about_the_game','About the Game:') !!}
		{!! Form::textarea('about_the_game',$post->about_the_game,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('short_description','Short Description:') !!}
		{!! Form::textarea('short_description',$post->short_description,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('developer','Developer:') !!}
		{!! Form::text('developer',$post->developer,array('class'=>'form-control ')) !!}<br/>
	</div>
	<div class="form-group">
		{!! Form::label('publisher','Publisher:') !!}
		{!! Form::text('publisher',$post->publisher,array('class'=>'form-control ')) !!}<br/>
	</div>
	{!! Form::close() !!}
</div>
@stop
