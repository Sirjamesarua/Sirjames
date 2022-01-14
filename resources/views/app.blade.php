<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>{{config('app.name','sirjames')}}</title>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/w3.css')}}" />
   <!-- <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/w3.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>

        <style>
                body{
                    /*background-color:#0C1730;*/
                    /*background-color:#040978;*/
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
                    height:900px;
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


            /*EDIT PAGE*/
            .edit-image-size{
                height: 100px;
            }

            .footer{
                font-size: 200%;
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
                    <!--<div class="subheader">
                                <a href=""><i class="fa fa-bars">menu</i></a>
                    </div>-->
                    
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
                                                
                                                            <!--<div class="typewriter">
                                                
                                                            <i>Hi,</i><br />
                                                            <i>Am <b>ARUA JAMES,</b></i><br />
                                                            <i>Am A Fullstack Developer, Mobile App Developer</i><br />
                                                            <i>And Wordpress Developer,</i><br />
                                                            <i>I Build Beautiful, Responsive And Search</i><br />
                                                            <i>Engine Optimize Websites And Web Applications,</i><br />
                                                            <i>I Also Build Mobile Android Applications For Your Website,</i><br />
                                                            <i>Business, Organization Or  Any Other Type Of Project At A Discounted Price</i><br />
                                                            </div>-->
                                                
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
                                                            <i class="w3-margin"><a href="#">Contact Me</a></i><br />
                                                            </div>
                            
                                                            <!--<div class="w3-border w3-border-grey w3-margin"> </div>-->
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


    @yield('content');



                    
                    
                        <br />
                        <br />
                        </div>

            </div>
            </div>

            <div id="out" class="w3-red">uytgt6</div>

            <!--FOOTER-->
            <div class="w3-center">
                <b class="footer w3-text-white"><i>&copy Sir_James</i></b>
            </div>

            

            <script type="text/javascript">
                var out=document.getElementById('out');
                var y= document.getElementsByClassName('slider-container');

                    var slideId = [];
                    var slideIndex = [1];
                    var j;
                    for(j=0;j<y.length;j++){
                        slideIndex.push(1);
                        slideId.push("mySlides"+j);
                    }

                out.innerHTML=(slideId+slideIndex+j);

                var i=0;
                while(i<y.length){
                    showDivs(1,i);
                    i++;
                }
                    

                //var slideIndex=[1,1,1];
               // var slideId=["mySlides1","mySlides2","mySlides3"];

               // showDivs(1,0);
               // showDivs(1,1);
               // showDivs(1,2);

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

                //REMOVE IMG USING AJAX
                document.getElementById('removeimg').addEventListener('click',removeimg);
                function removeimg(){
                    
                }
            </script>



</body>
</html>