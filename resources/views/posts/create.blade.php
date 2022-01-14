@extends('layouts.app')
@section('content')


<div class="w3-center w3-text-black">
	<h1>CREATE POST</h1>

	{!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/Form-data'])!!}
	<div class="">
		<!--TITLE-->
		{{Form::label('title','title',['style'=>'font-size:200%'])}}
		<br />
		{{Form::text('title','',['placeholher'=>'title','style'=>'width:70%'])}}

		<!--PROJECT LINK-->
		<br />
		<br />
		{{Form::label('project_link','project link',['style'=>'font-size:200%'])}}
		<br />
		{{Form::text('project_link','',['placeholher'=>'project link','style'=>'width:70%'])}}

		<!--BODY-->
		<br />
		<br />
		{{Form::label('body','Body',['style'=>'font-size:200%'])}}
		<br />
		{{Form::textarea('body','',['placeholher'=>'body','style'=>'width:70%'])}}

		<!--IMAGE-->
		<br />
		<br />
		{{Form::label('cover_image','product image',['style'=>'font-size:200%'])}}
		<br />
		{{Form::file('cover_image[]',['style'=>'width:70%','multiple'=>'multiple'])}}

		<!--SUBMTT-->
		<br />
		<br />
		{{Form::submit('SUBMIT',['class'=>'w3-border w3-round-xlarge my-border-blue w3-blue','style'=>'font-size:250%;padding:1% 3%'])}}
		{!! Form::close() !!}
	</div>

</div>


@endsection