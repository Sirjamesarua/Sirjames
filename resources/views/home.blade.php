@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--<a href="/posts/create">create post</a>

                    {{ __('You are logged in!') }}-->


                        @if (count($posts)>0)
                            @php $i=0; @endphp
                           @foreach($posts as $post)

                                <!--ADDING SLIDER CLASS-->
                                @php
                                    $postsNumber=count($posts);
                                @endphp

                                @if($i < $postsNumber)
                                                
                                                


                                            <br />
                                            <!--POST IMAGE-->


                                            <div class="w3-content w3-display-container slider-container w3-center" style="position:relative">

                                                @php
                                                    $imagestring=$post->cover_image;
                                                    $imagepath=explode(" ",$imagestring);
                                                @endphp
                                                @foreach($imagepath as $path)
                                                    <img class='project-pix mySlide{{$i}}' src='/storage/cover_images/{{$path}}' alt="web developer" style="height: 550px;"></img>
                                                @endforeach

                                                                <!--BUTTON-->
                                                    <div style="position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%);font-size: 300%; background-color:transparent;" class="w3-margin w3-hover-blue" onclick="plusDivs(-1,{{$i}})">&#10094;</div>
                                                    
                                                    <div style="position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);font-size: 300%; background-color:transparent;" class="w3-margin w3-hover-blue" onclick="plusDivs(+1,{{$i}})">&#10095;</div>

                                            </div>

                                            <!--POST TITLE-->
                                           <a href="{{$post->project_link}}"> <div class="w3-center"><i><b class="w3-text-red w3-xxxlarge">{{$post->title}}</b></i></div></a>
                                            <!--POST EXCERT(BODY)-->
                                            <div class="post-text w3-center">
                                                <i class="">{{$post->body}}.</i>
                                            </div>
                                            

                                                         <div class="w3-center" style="font-size:150%">
                                                            <a href="/posts/{{$post->id}}/edit" style="text-decoration: none"><b class="w3-text-blue"><u>EDIT</u></b></a>,
                                                                {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
                                                                {{Form::hidden('_method','DELETE')}}

                                                                {{Form::submit('Delete',['class'=>'w3-border w3-round-xlarge my-border-blue','style'=>'font-size:100%;padding:1% 3%'])}}
                                                                {!! Form::close() !!}

                                                            </u></b></a>
                                                        </div>
                                            


                                                    <br />
                                                    <div class="w3-border my-border-blue"></div>

                                    @endif
                                    @php $i++; @endphp

                            @endforeach
                        @endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
