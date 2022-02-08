<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>{{config('app.name','sirjames')}}</title>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}" />
   <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/script.js')}}" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/w3.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>

        <style>
                body{
                    background-image: radial-gradient(circle, #040978, #780466, blue);
                    height:2500px;
                    font-family:serif;
                    color:#040978;
                }
                
                /*MY STYLE*/
                .border-center{
                    display:flex;
                    justify-content:center;
                }
                
                .my-border-blue{
                        border-color:#0C1730!important
                }
                
                .contactbtn{
                    font-weight:bold;
                    font-family:serif;
                    background-color:#0C1730;
                    color:grey;
                }
                
                /*HEADER*/
                .header-container{
                    background-color:#4018BC;
                }
                
                .header{
                    width:90%;
                    color:#DFDFDF;
                }
                
                .contact-border{
                    border:4x #0C1730;
                }

                /*MAIN*/
                .main{
                    width:80%;
                }
                
                
                .main2-container{
                    width:92%;
                    background-color:#DFDFDF;
                    /*background-color:white;*/
                }
                
                .main2{
                    width:80%;
                }

                .post-text{
                    font-size:200%;
                }
                
                
                /*PRICING*/
                .pricing{
                    width:95%;
                }
                
                .pricing-list{
                    /*height:900px;*/
                    background-color:#780466;
                }
                
                    /*PROJECT*/
            .network{
                color:red;
                font-family:serif;
            }
            
            .project-pix{
                width:100%;
            }

            .whatsappme{
                font-size: 70%;
            }

            .footer{
                font-size: 200%;
            }


            .mySlides{
                display:none;
            }

            .w3-left,.w3-right,.w3-badge{
                cursor: pointer;
            }
        </style>


</head>
<body>

            <!--HEADER-->
            <div class="header-container w3-center border-center">
            
                    <div class="header w3-xxjumbo w3-padding">
                            <b><i>Sir_James</i></b>
                            
                            <br />
                            <div class="w3-border w3-border-grey w3-margin"> </div>
                    </div>
                    <!--MENU-->
            </div>
            
            
            
            
            
            <!--MAIN-->
            <!--<div class="main-container border-center">
                        <div class="main">
                        
                            
                                            
                    
                    
                        </div>
            </div>-->
            
                    <!-- -->
                    <br />
                    <div class="border-center">
                    <div class="main2-container border-center w3-round-jumbo">
                        <div class="main2">
                    
                                    
                            
                                            <!--ABOUT-->
                                    <div class="about-container">
                                                <div class="about w3-xxxlarge typewriter">
                                                
                                                
                                                            <br />
                                                            <i>Hi,</i><br />
                                                            <i>Am <b>ARUA JAMES,</b></i><br />
                                                            <i>The Founder Of <b>Josmarket</b></i><br />
                                                            <i>Am A Fullstack Developer, Mobile App Developer</i><br />
                                                            <i>And Wordpress Developer,</i><br />
                                                            <i>I Build Beautiful, Responsive And Search</i><br />
                                                            <i>Engine Optimize Websites And Web Applications,</i><br />
                                                            <i>I Also Build Mobile Android Applications For Your Website,</i><br />
                                                            <i>Business, Organization Or  Any Other Type Of Project At A Discounted Price</i><br />
                                                            
                                                            <div class="w3-center w3-jumbo w3-border w3-round-xlarge my-border-blue">
                                                            <i class="w3-margin"><a href="#" class="w3-text-blue">Contact Me</a></i><br />
                                                            </div>
                            
                                                </div>
                                    </div>
                                    
                            
                        
                                    
                    <!--PROJECT-->
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />


                    
                    <!--PAGE TITLE-->
                            <div class="w3-border my-border-blue"></div>
                                        <div class="w3-center">
                                                <b class="w3-jumbo"><i>WEB PROJECT</i></b>
                                        </div>
                            <div class="w3-border my-border-blue"></div>
                    <br />





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
                                           <div class="w3-center"><a href="{{$post->project_link}}"><i><b class="w3-text-red w3-xxxlarge">{{$post->title}}</b></i></a></div>
                                            <!--POST EXCERT(BODY)-->
                                            <div class="post-text w3-center">
                                                <i class="">{{$post->body}}.</i>
                                            </div>
                                            


                                                    <br />
                                                    <div class="w3-border my-border-blue"></div>

                                    @endif
                                    @php $i++; @endphp

                            @endforeach
                        @endif




         
                        
                    <!--PRICING-->
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="w3-border my-border-blue"></div>
                            <div class="w3-center"><b class="w3-jumbo"><i>RESUME</i></b></div>
                    <div class="w3-border my-border-blue"></div>
                    <br />
                    <br />
                            
                    <div class="pricing-container border-center">
                            <div class="pricing">
                            
                                        <div class="pricing-list w3-round-xxxlarge w3-center">
                                            <div class="w3-center"><img src="/storage/cvpictures/cvpage1.png" style="width:75%"></img></div>
                                        </div>
                                        <br />
                                        <div class="pricing-list w3-round-xxxlarge w3-center">
                                            <div class="w3-center"><img src="/storage/cvpictures/cvpage2.png" style="width:75%"></img></div>
                                        </div>
                                        <br />
                                        <!--DOWNLOAD-->
                                        <div class="w3-border w3-border-blue w3-round-xxxlarge w3-center"><b style="font-size: 240%;"><i><u><a href="#" style="color:green;">DOWNLOAD RESUME</a></u></i></b></div>
                                        <br />
                            
                            </div>
                    </div>
                    
                    
                    
                    
                    
                    <!--PRICING-->
                            <br />
                            <br />
                            <br />
                            <br />
                            <div class="w3-border my-border-blue"></div>
                                    <div class="w3-center"><b class="w3-jumbo"><i>CONTACT ME</i></b></div>
                            <div class="w3-border my-border-blue"></div>
                            <br />
                            <br />
                            
                            <div class="w3-center w3-xxxlarge">
                                        <form action="">
                                                    <b><i class="">EMAIL:</i></b>
                                                    <br />
                                                    <input type="email" style="width:80%"></input>
                                                    
                                                    <br />
                                                    <b><i class="">MESSAGE:</i></b>
                                                    <br />
                                                    <textarea col="15" style="width:80%"></textarea>

                                                    <br />
                                                    <input type="submit" value="SEND" class="w3-round-xlarge w3-padding w3-margin" style="background-color:#040978; color:white;"></input>
                                        </form>

                                        <div class="whatsappme">
                                            <i class="">Or</i>
                                            <br />
                                            <a href=""><b style="color:green"><u>WHATSAPP ME</u></b></a>

                                            <br />
                                            <a href="tel:08140480701"><i class="fa fa-whatsapp">08140480701</i></a>,
                                            <a href="tel:08147600916"><i class="fa fa-phone">08147600916</i></a>,

                                        </div>
                            </div>
                    
                    
                    
                    
                    
                    
                        <br />
                        <br />
                        </div>

            </div>
            </div>

            <!--FOOTER-->
            <div class="w3-center">
                <b class="footer w3-text-white"><i>&copy Sir_James</i></b>
            </div>

            



            <script type="text/javascript">
                var out=document.getElementById('out');
                var y= document.getElementsByClassName('slider-container');

                    var slideId = [];
                    var slideIndex = [];
                    var j;
                    for(j=0;j<y.length;j++){
                        slideIndex.push(1);
                        slideId.push("mySlide"+j);
                        showDivs(1,j);
                    }

                function plusDivs(n,no){
                    showDivs(slideIndex[no] += n,no);
                }

                function showDivs(n,no){
                    var i;
                    var x= document.getElementsByClassName(slideId[no]);

                    if(n>x.length){
                        slideIndex[no]=1
                    }

                    if(n<1){
                        slideIndex[no]=x.length
                    }

                    for(i=0;i<x.length;i++){
                        x[i].style.display="none";
                    }

                    x[slideIndex[no]-1].style.display="block";

                }


            </script>



        </body>

</html>