<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FreshTone</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>   
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/css/fstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">   
  <link rel="stylesheet" href="assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owl.theme.default.min.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
</head> --}}
<body>     
    <section > 
        <div class="container  p-3" >          
            <div class="row ">
                <div class="col-md-4 col-sm-4 header-width">
                    <div class='d-flex'> 
                        <div class="p-2 text">
                            <button class='bg-primary phone-button border-0 btn btn-md' style="border-radius: 50%;">
                                <i class="fa fa-mobile phone-logo rounded-circle text-white" aria-hidden="true" ></i>              
                            </button>
                        </div>
                        <div class="p-2 text">
                            <span class='title-color'>CALL US ON</span><br/>
                            <span>09-965152274</span>                             
                        </div>                           
                    </div>                  
                </div>
                <div class="col-md-4 col-sm-4 text-center header-width">
                    <img src="vendors/images/logo002.png" alt="logo"  class='image-logo'>
                </div>
                <div class="col-md-4 col-sm-4 header-width">                
                    <div class="d-flex float-right">  
                        <div class="p-2">  
                            <button class='bg-primary text-center cart-button  border-0 btn btn-md' style="border-radius: 50%;">                    
                            <i class="fa fa-shopping-basket cart-logo" aria-hidden="true" ></i>          
                            </button>  
                            <span class="badge bg-danger text-white cart-count" style='border-radius: 20px;'>10</span>
                        </div>
                        <div class="p-2 text"> <span class='title-color'>MY CARD</span><br/>
                            <span >8 MILE $0.00</span>   
                        </div>
                    </div>                   
                </div>                  
            </div> 
        </div>         
    </section>
    <!-- end header -->
    <!-- nav -->   
    <section class="nav-background">     
        <div class="container">        
            <nav class="navbar navbar-expand-lg navbar-light offset-md-2 ">     
                <!-- <div class="container  bg-primary"> -->
                    <a class=" navbar-brand" href="#">HOME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">   
                          
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CONTACT LENS</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="#one">COLOR CONTENT LENS</a>
                                <a class="dropdown-item" href="#two">POWER CONTENT LENS</a>
                                <div role="separator" class="dropdown-divider">CLEAR POWER LENS</div>
                                <a class="dropdown-item" href="#three">DAILY CONTACT LENS</a>
                                </div>
                            </li>                
                            <li class="nav-item ">
                                <a class="nav-link" href="#mdo">ACCESSORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#fat">EYE MASK</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mdo">EYE CARE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#fat">SAFETY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mdo">CONTACT US</a>
                            </li>
                        </ul>            
                    </div>
                <!-- </div>           -->
            </nav>
        </div>         
    </section>
    <!-- end nav -->

    <!-- main slider -->
    <section>
        <div class="container-fluid m-0 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="vendors/images/02.jpg" alt="First slide">                
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="animated  slideInDown  title" style="animation-delay: 1s;"> Welcome</h3>
                        <h5 class="animated fadeInLeft  main-title" style="animation-delay: 2s;"> FreshTone</h5>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        <p class="animated slideInUp slider-button " style="animation-delay: 5s;">
                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>                            
                        </p> 
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="vendors/images/banner9.jpg" alt="Second slide">                    
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="animated  slideInDown  title" style="animation-delay: 1s;"> Welcome</h3>
                        <h5 class="animated fadeInLeft  main-title" style="animation-delay: 2s;"> FreshTone</h5>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        <p class="animated slideInUp slider-button " style="animation-delay: 5s;">
                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>                            
                        </p> 
                    </div>                    
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="vendors/images/banner6.jpg" alt="Third slide">                   
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="animated  slideInDown  title" style="animation-delay: 1s;"> Welcome</h3>
                        <h5 class="animated fadeInLeft  main-title" style="animation-delay: 2s;"> FreshTone</h5>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#" >See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </p>
                        <p class="animated slideInUp slider-button " style="animation-delay: 5s;">
                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>                            
                        </p> 
                    </div> 
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </section>
    <!--end main slider -->

    <!-- new collection -->
    <section >
        <div class="container pt-5 pb-5 ">
            <div class="row ">
                <div class="col-md-4 col-sm-12" >
                    <div class='card border-0 collection' style="width: 20rem;">
                        <div class="row bg-light">
                            <div class="col-md-7 mt-5 ">
                               New Collection<br/>
                               <h4 class='text-info'>Accessories</h4>
                               <p class="slider-button  mt-2 align-content-center" >
                                <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </p>  

                            </div>
                            <div class="col-md-5">                               
                                <img src="vendors/images/accessores2.jpg" alt="" style='width: 150px;height:155px; ' srcset="">                               
                            </div>
                        </div>
                    </div>     
                
                </div>
                {{-- <div class="col-md-1 col-sm-12"></div> --}}

                <div class="col-md-4 col-sm-12">
                    <div class='card border-0 ' style="width: 20rem;">
                        <div class="row bg-light">
                            <div class="col-md-7 mt-5">
                               Fresh Tone<br/>
                               <h4 class='text-info'>Eye  Mask</h4>
                               <p class="slider-button  mt-2 align-content-center" >
                                <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </p>  
                            </div>
                            <div class="col-md-5">                               
                                <img src="vendors/images/accessores2.jpg" alt="" style='width: 150px;height:155px; ' srcset="">                               
                            </div>
                        </div>
                    </div>      
                </div>
                {{-- <div class="col-md-1 col-sm-12"></div>             --}}
                <div class="col-md-4 col-sm-12">
                    <div class='card border-0 ' style="width: 21rem;">
                        <div class="row bg-light">
                            <div class="col-md-7 mt-5">
                                Fresh Tone<br/>
                                <h4 class='text-info'>Eye Care</h4>
                               <p class="slider-button  mt-2 align-content-center" >
                                <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </p>  
                            </div>
                            <div class="col-md-5">                               
                                <img src="vendors/images/accessores2.jpg" alt="" style='width: 150px;height:155px; ' srcset="">                               
                            </div>
                        </div>
                    </div>      
                </div>
            
            </div>
        </div>
    </section>
     <!-- end new collection -->
        {{-- 
            //pretty photo js 
            <div class="row">
                <div class="sm-6 col-md-4 team-effect-agile text-center">
                <div class="box9">
                    <span class="image-block img-hover fb" style="padding:20px 70px;">
                    <a class="image-zoom" href="image/5ff6df4f7d66fhiton.jpg" data-gal="prettyPhoto[gallery]">
                    <img src="image/5ff6df4f7d66fhiton.jpg" alt="" class="img-fluid">
                    <div class="box-content"></div>
                    </a>
                    </span>
                </div>
                <a style="font-size: 14px;" target="_blank" class="letter-sm button text-center" href="https://www.facebook.com/ArtBy-Lann-1079492902082833/">
                Htoo Htet Aung @ Art By Lann
                </a>
                </div>      
            </div>
            <a href="http://www.keenthemes.com/preview/metronic/theme/assets/global/plugins/jcrop/demos/demo_files/image1.jpg" rel="prettyPhoto"><img src="http://www.keenthemes.com/preview/metronic/theme/assets/global/plugins/jcrop/demos/demo_files/image1.jpg" alt="" /></a> 
            //pretty photo js 
        --}}
     <!-- new collection -->
     @include('frontend.new_collection')
     {{-- <section class='newcollection-color''>
       <div class="py-5">
         <div class="container p-5 bg-white">   
            <h4>New Collection</h4>  
            <div class="row">
                <div class="col-md-12" >
                <span class='text-black-50 font-weight-bold' >CONTACT LENS</span>   
                <span class='float-right'>
                    <nav class="navbar navbar-expand-lg navbar-light "
                    style='height: 60px;'>
                        <a class="navbar-brand sub-item" href="#">Color</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse collapse-link" id="navbarNavAltMarkup">
                            <div class="navbar-nav ">
                            <a class="nav-item nav-link sub-item" href="#">Power </a>
                            <a class="nav-item nav-link sub-item" href="#">Clear Power</a>
                            <a class="nav-item nav-link sub-item" href="#">Daily</a>
                            
                            </div>
                        </div>
                    </nav>
                </span>         
                </div>               
            </div>            
            <div id="carouselExampleFade" class="carousel slide carousel-fade"  data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                            <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens6.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <div  class='circle' style="background-color:gray;"> &nbsp;&nbsp;</div> 
                                    <span >
                                        Diamond Gray                     
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>                  
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens2.jpg" alt="Card image cap">                       
                                    <div class="card-body ">
                                        <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Diamond Brown                     
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens8.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <span  class='circle'  style="background-color:rgb(207, 100, 166);"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Crystal Pink                
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens9.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <span  class='circle'  style="background-color:blue;"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Crystal Blue                    
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>                          
                        </div>     
                        <div class="row mt-3 ">
                            <div class="col-md-12 " style='margin-left:44%;'>
                                <p class="slider-button  mt-2 " >
                                    <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </p>  
                            </div>
                        </div>          
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                            <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens11.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <div  class='circle' style="background-color:gray;"> &nbsp;&nbsp;</div> 
                                    <span >
                                        Diamond Gray                     
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>                  
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens12.jpg" alt="Card image cap">                       
                                    <div class="card-body ">
                                        <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Diamond Brown                     
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens13.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <span  class='circle'  style="background-color:rgb(207, 100, 166);"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Crystal Pink                
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens15.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <span  class='circle'  style="background-color:blue;"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Crystal Blue                    
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>                          
                        </div>     
                        <div class="row mt-3 ">
                            <div class="col-md-12 " style='margin-left:44%;'>
                                <p class="slider-button  mt-2 " >
                                    <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>  
                            </div>
                        </div>     
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                            <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens6.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <div  class='circle' style="background-color:gray;"> &nbsp;&nbsp;</div> 
                                    <span >
                                        Diamond Gray                     
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>                  
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens16.jpg" alt="Card image cap">                       
                                    <div class="card-body ">
                                        <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                                    <span >
                                        Diamond Brown                     
                                    </span>
                                    <h4 class='text-center text-info'>$ 15.00</h4>
                                    <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                    <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                            </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens8.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <span  class='circle'  style="background-color:rgb(207, 100, 166);"> &nbsp;&nbsp;</span> 
                                        <span >
                                            Crystal Pink                
                                        </span>
                                        <h4 class='text-center text-info'>$ 15.00</h4>
                                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                        <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card slider-card">                   
                                    <img class="card-img-top" src="vendors/images/color_lens9.jpg" alt="Card image cap">
                                    <div class="card-body ">
                                        <span  class='circle'  style="background-color:blue;"> &nbsp;&nbsp;</span> 
                                        <span>
                                            Crystal Blue                    
                                        </span>
                                        <h4 class='text-center text-info'>$ 15.00</h4>
                                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                                        <span> PWR  : -0.00 to -8.00</span> 
                                    </div>                     
                                </div>
                            </div>                          
                        </div>     
                        <div class="row mt-3 ">
                            <div class="col-md-12" style='margin-left:44%;'>
                                <p class="slider-button  mt-2 " >
                                    <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>  
                            </div>
                        </div>   
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">              
                    <i class="fa fa-arrow-left left-link-icon" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">                            
                <i class="fa fa-arrow-right right-link-icon" aria-hidden="true"></i>                       
                </a>
            </div>           
         </div>
        </div>
     </section> --}}
     <!-- end new collection -->

    <!-- fresh tone  -->
    <section class='mt-4'>
        <div class="container-fluid "  style='height: 430px;'>
            <div class="row"  >
                <div class="col-md-1"></div>
                <div class="col-md-4" >
                   <img src="vendors/images/color_lens6.jpg"  alt="" style='left: -10px;width:104%;' class='one'>                            
                    <img src="vendors/images/color_lens1.jpg" alt=""  class='two'
                    >                                         
                </div>               
                <div class="col-md-7  col-sm-12" style='margin-top: 11px;background-color: #E9F7F8;'>
                    <div class='ml-3 mt-3'>   
                        <h3 class='text-info font-weight-bold'>Fresh Tone</h3>
                      
                        <h5 class='text-info '>Discover The Secret Of Charm & Confidence</h5>
                        <p class='text-lowercase'>FRESHTONE CONTACT LENS ARE A WORLDWIDE WELL KNOWN BRAND WHICH DOES NOT NEED ANY INTRODUCTION OUR MOTIVE IS QUALITY FIRST WE DO NOT LET OUR CUSTOMER COMPROMISE WITH THEIR HEALTH OUR LENSES ARE MADE IN SOUTH KOREA UNDER STRICT GUIDANCE AND OUR PRODUCT IS ISO, GMP AND FDA APPROVED.</p>
                        <p class="slider-button  mt-2 align-content-center" >
                            <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </p>  
                        <p></p>
                        <br/>
                        <br/><br/>
                        <br/><br/><br/><br/>
                        <br/> 
                        <br/>
                        <br/>             
                    </div>                 
                </div>
            </div>           
        </div>
    </section>
    <!-- end fresh tone -->

    <!-- safety and confornt   -->
    <section class='mt-5'>
        <div class="container-fluid mt-5 mb-5 "  style='height: 100%;'>
            <div class="row">
                <div class="col-md-1 safety-bg-color"></div>      
                <div class="col-md-7 col-sm-12  safety-bg-color" style="margin-left: -33px;">                      
                    <div class='ml-3 mt-5'>   
                        <h3 class='text-info title-color'>
                            SAFETY & COMFORT
                        </h3>                                     
                        <p class='text-lowercase'>                           
                            FRESHTONE CONTACT LENSES INCORPORATE COLOR SANDWICH PROCESSING TECHNOLOGY ENSURING THAT THE COLORED LAYER IS COMPLETELY COATED WITHIN THE LENS THIS PREVENTS DIRECT CONTACT WITH THE EYES ENSURING SAFETY, COMFORT AND EASE OF USE THE LENS ARE SHAPED TO LET THE NATURAL MOISTURE PRODUCED IN THE EYE DIVIDE AND FLOW OVER THE LENS SURFACE EVENLY, PROVIDING ALL DAY COMFORT THE COLORED PORTION OF THE LENS IS PROPORTIONED TO PERFECTION AND ITS STRUCTURE ALLOW THE LENS TO RADIATE A BRIGHTER AND MORE NATURAL LOOK WHILE NOT AFFECTING CLARITY OF THE SIGHT.
                        </p>
                        <ul style="list-style-type: none;">
                            <li class='text-lowercase'><i class="fa fa-eye" aria-hidden="true"></i>
                                SOFT CONTACT LENSES ARE BEST FOR DRY EYES
                            </li>
                            <li class='text-lowercase'><i class="fa fa-eye" aria-hidden="true"></i>
                                WATER CONTENT MAKES A DIFFERENCE
                            </li>
                        </ul>
                        <p class="slider-button  mt-2 align-content-center" >
                            <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </p>  
                        <br/>
                        <br/><br/>
                        <br/><br/><br/>                                          
                    </div>                 
                </div>               
                <div class="col-md-3 col-sm-12" >
                   <img src="vendors/images/certi_fi.jpg" height="100%" width="100%" alt="" srcset="" class='one'>                            
                </div>   
            </div>           
        </div>
    </section>
    <!-- end  safety and confornt -->  

    <!-- video slider -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h5 class='text-black' >Contact Lens</h5>
                    <h3 class='text-black'>WEARING GUIDES</h3>                    
                </div>
            </div>  
            <div class="row">              
                    <div class="owl-carousel owl-theme">  
                        <div class="col-md-4  col-sm-12">
                            <div class="item-video" data-merge="1">                 
                                <a class="owl-video" href="https://www.youtube.com/watch?v=9NHLfLbNWjc&feature=emb_logo"></a>
                                <p class='text-white mt-1 ml-2'>
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    How to use contact lens
                                </p> 
                            </div>
                        </div>  
                        <div class="col-md-4  col-sm-12">
                            <div class="item-video" data-merge="1">
                   
                                <a class="owl-video" href="https://www.youtube.com/watch?v=OfrQ1hm1dRA&feature=emb_logo"></a>
                                <p class='text-white mt-1 ml-2'>
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    How to use contact lens
                                </p>
                    
                            </div>
                        </div>   
                        <div class="col-md-4  col-sm-12">
                            <div class="item-video" data-merge="1">
                                <a class="owl-video" href="https://www.youtube.com/watch?v=YoPrX540Qnw"></a>
                                <p class='text-white mt-1 ml-2'>
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    How to use contact lens
                                </p>
                            </div>
                        </div>      
                        <div class="col-md-4  col-sm-12">
                            <div class="item-video" data-merge="1">
                                <a class="owl-video " href="https://www.youtube.com/watch?v=ontrHkt97uw"></a>
                                <p class='text-white mt-1 ml-2'>
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    How to use contact lens
                                </p>
                            </div>
                        </div>            
                      
                        <div class="col-md-4 col-sm-12">
                            <div class="item-video" data-merge="1">
                                <a class="owl-video " href="https://www.youtube.com/watch?v=WzRCKtXmzVE&feature=emb_logo"></a>
                                <p class='text-white mt-1 ml-2'>
                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                    How to use contact lens
                                </p>
                            </div> 
                        </div>
                </div>
            </div>          
           
           
        </div>
    </section>


    <!-- end video slider -->
    <!-- look smarter -->
    @include('frontend.star');
    {{-- <section class='link-bg-color '>     
        <div class="container">      
            <div class="row">
                <div class="col-md-12 mt-5 ">
                    <h5 class='text-white '>Look Smarter See Better</h5>
                    <h3 class='text-white'>CHOICE OF STARS</h3>
                </div>             
            </div>    
            <div class="row">              
                <div class="col-md-12 mb-5 "> 
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3 ">
                                    <img src="vendors/images/color_lens7.jpg" class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address'>
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 flex">
                                    <img src="vendors/images/color_lens8.jpg"  class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address'  >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>                            
                                </div>
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens9.jpg"  class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address' >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens10.jpg" class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address'  >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p> 
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="carousel-item">
                            <div class="row align-content-center">
                                <div class="col-md-3 ">
                                    <img src="vendors/images/color_lens1.jpg"   alt="..." class='slider-image'>
                                    <div class='bg-white text-center bg slider-address'  >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 flex">
                                    <img src="vendors/images/color_lens2.jpg" class='slider-image'  alt="...">
                                    <div class='bg-white text-center bg slider-address'   >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p> 
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>                            
                                </div>
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens3.jpg"  class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address' >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p> 
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens10.jpg"  class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address' >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="carousel-item">
                            <div class="row ">
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens16.jpg"  class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address' >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 flex">
                                    <img src="vendors/images/color_lens6.jpg"  class='slider-image'  alt="...">
                                    <div class='bg-white text-center bg slider-address' >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>                            
                                </div>
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens3.jpg" class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address'  >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="vendors/images/color_lens1.jpg" class='slider-image' alt="...">
                                    <div class='bg-white text-center bg slider-address'  >
                                        <i>Thoom Thoom</i>
                                        <p>@ Thoom Thoom</p>
                                        <p>  
                                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                                            <i class="fa fa-instagram ml-2 icon" aria-hidden="true"></i>
                                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">                       
                            <i class="fa fa-arrow-left left-icon" aria-hidden="true"></i>                                          
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">                        
                          <i class="fa fa-arrow-right right-icon" aria-hidden="true"></i>                       
                        </a>     
                     
                    </div>
                </div>
            </div>       
        </div>       
    </section> --}}
    <!-- endlook smarter -->

    <!-- contact -->
    @include('frontend.footer')
    {{-- <section class='mt-3'>
        <div class="container ">
            <div class="row">
                <div class="col-md-5 mt-2 m-0 p-0">                   
                    <ul style='list-style-type:none;'>
                        <li> <h5>CONTACT</h5></li>
                        <li>
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                            No.(121), 1st Floor, Corner of Thein Phyu Rd. and Merchant Rd., (Opposite of Myanmar Five Star Line), Botahtaung Tsp., Yangon Myanmar.
                        </li>
                        <li>
                            <i class="fa fa-mobile" aria-hidden="true">
                                +959 5152274
                            </i>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>                           
                            freshtone.myanmar@gmail.com
                        </li>
                        <li></li>
                    </ul>
                    <p style="margin-left: 2.5rem;">
                         <i class="fa fa-facebook-official " aria-hidden="true"></i>
                        <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                        <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                        <i class="fa fa-link  ml-2" aria-hidden="true"></i>
                    </p>                  
                </div>
                <div class="col-md-3  mt-2">
                    <ul style='list-style-type:none;'>
                        <li> <h5>QUICK LINK</h5></li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="#"> Home</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <a href="#"> Contact Lens</a>
                            
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>                          
                            <a href="#"> Accessories</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>                          
                            <a href="#"> Eye Mask</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>                          
                            <a href="#"> Eye Care</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>                          
                            <a href="#"> Safety</a>
                        </li>
                        <li>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>                          
                            <a href="#"> Contact Us</a>
                        </li>                       
                    </ul>
                </div>
                <div class="col-md-4 m-0 p-0 mt-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.09447236042!2d96.16486161423276!3d16.771974788450123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed4c2195b60d%3A0x790bedd11a54b370!2sFreshToneMyanmar!5e0!3m2!1sen!2smm!4v1581305963661!5m2!1sen!2smm" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end contact  -->
    <!-- footer -->
    {{-- <section>
        <div class="container-fluid" style="background-color: #2D62A8;" >
            <div class="row">
                <div class="col-md-12">
                    <p class='text-center text-white font-weight-bold p-3 mb-0'>
                        Copyright &#169; 2020 Company. All right reserved!
                   </p>
                </div>
            </div>           
        </div>
    </section> --}}
    <!-- end footer --> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/owl.carousel.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>
    <script>
        $(document).ready(function(){     

            $("a[rel^='prettyPhoto']").prettyPhoto();
            setTimeout(
            function() {
                $(".active .owl-video-play-icon").trigger("click");
            }, 1000);    
          
            $('.owl-carousel').owlCarousel({
                video: true,             
                videoHeight: 230, 
                videoWidth: 330,
                slides: '.slide',    
                responsive:{
                    100:{
                        items:1
                    },
                    1000:{
                        item:3
                    }
                }  ,         
                afterAction: function(current) {
                    current.find('video').get(0).play();                   
                }              
            });  
        }); 
    </script>

    <!-- Load Facebook SDK for JavaScript -->
    <!-- <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v9.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> -->

    <!-- Your Chat Plugin code -->
    <!-- <div class="fb-customerchat"
      attribution=setup_tool	
      page_id="102529211732167"
      minimized="true"
      theme_color="#3578E5"
logged_in_greeting="Hi! How can we help you? Just Click Chat Now "
logged_out_greeting="Hi! How can we help you? Just Click Chat Now ">
    </div> -->

    



    </body>
</html>
