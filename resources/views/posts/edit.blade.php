@extends('layouts.app')
@section('content')


<div class="w3-center w3-text-black">
	<h1>EDIT POST</h1>



		<br />
		<!--DISPLAYING THE IMAGES-->
			<div class=""><i style="font-size:200%;">Images</i></div>
			<br />
		<div class="" style="display:flex;justify-content:center;"> 

            @php
                $imagestring=$post->cover_image;
                $imagepath=explode(" ",$imagestring);
            @endphp


            @foreach($imagepath as $path)

            <div class="">
                <div class="w3-border w3-padding w3-margin-small w3-border-black"><img src='/storage/cover_images/{{$path}}' class='' alt="web developer" style="height:150px;"></img><br /><a href="{{url('/')}}/remove/{{$path}}/{{$post->id}}"><button class="w3-text-red w3-margin" onclick="" id="removeimg">Remove</button></a></div>
            </div>
            @endforeach
        </div>
        <br />

	{!! Form::model($post,['action'=>['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/Form-data'])!!}
		<div class="">
		<!--TITLE-->
		{{Form::label('title','title',['style'=>'font-size:200%'])}}
		<br />
		{{Form::text('title',$post->title,['placeholher'=>'title','style'=>'width:70%'])}}

		<!--PROJECT LINK-->
		<br />
		<br />
		{{Form::label('project_link','project link',['style'=>'font-size:200%'])}}
		<br />
		{{Form::text('project_link',$post->project_link,['placeholher'=>'project link','style'=>'width:70%'])}}

		<!--BODY-->
		<br />
		<br />
		{{Form::label('body','Body',['style'=>'font-size:200%'])}}
		<br />
		{{Form::textarea('body',$post->body,['placeholher'=>'body','style'=>'width:70%'])}}


		<!--ADD IMAGE-->
		<br />
		<br />
		{{Form::label('cover_image','Add Image',['style'=>'font-size:200%'])}}
		<br />
		{{Form::file('cover_image[]',['style'=>'width:70%','multiple'=>'multiple','class'=>'w3-border w3-border-black'])}}



		<!--SUBMTT-->
		<br />
		<br />
		{{Form::hidden('_method','PUT')}}

		{{Form::submit('Update',['class'=>'w3-border w3-round-xlarge my-border-blue w3-blue','style'=>'font-size:250%;padding:1% 3%'])}}
		{!! Form::close() !!}


	</div>

</div>


@endsection