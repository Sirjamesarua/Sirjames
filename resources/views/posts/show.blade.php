@extends('layouts.app')
@section('content')

	


			
                    <br />
                    <!--POST IMAGE-->
                    <img class="project-pix"src="/storage/cover_images/{{$post->cover_image}}" alt="php developer"></img>
                    <!--POST TITLE-->
                   <div class="w3-center"><i><b class="w3-text-red w3-xxxlarge">{{$post->title}}</b></i></div>
                    <!--POST EXCERT(BODY)-->
                    <div class="post-text w3-center">
                        <i class="">{{$post->body}}</i>
                    </div>

                            <br />
                            <div class="w3-border my-border-blue"></div>

                                @if(!Auth::guest())

                                <div class="w3-center" style="font-size:200%">
                                    <a href="/posts/{{$post->id}}/edit" style="text-decoration: none"><b class="w3-text-red"><u>EDIT</u></b></a>,
                                    <a href="" style="text-decoration: none"><b class="w3-text-red"><u>DELETE
                                        {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
                                        {{Form::hidden('_method','DELETE')}}

                                        {{Form::submit('Delete',['class'=>'w3-border w3-round-xlarge my-border-blue w3-red','style'=>'font-size:100%;padding:1% 3%'])}}
                                        {!! Form::close() !!}

                                    </u></b></a>
                                </div>

                                @endif
                    
                            <div class="w3-border my-border-blue"></div>




@endsection