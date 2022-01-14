@extends('layouts.app')
@section('content')

    



            @if (count($posts)>1)
               @foreach($posts as $post)
                    <br />
                    <!--POST IMAGE-->
                    <img class="project-pix"src="img/project.jpg" alt="mtn data"></img>
                    <!--POST TITLE-->
                   <a href="{{$post->link}}"> <div class="w3-center"><i><b class="w3-text-red w3-xxxlarge">{{$post->title}}</b></i></div></a>
                    <!--POST EXCERT(BODY)-->
                    <div class="post-text w3-center">
                        <i class="">{{$post->body}}.</i>
                    </div>
                    
                            <br />
                            <div class="w3-border my-border-blue"></div>

                @endforeach
            @endif



@endsection