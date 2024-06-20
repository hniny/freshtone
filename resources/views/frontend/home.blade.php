@extends('frontend.main')
@section('title','FreshTone Myanmar')
@section('content')
    <!-- main slider -->
    <section>
        <div class="container-fluid m-0 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 animated fadeIn" src="vendors/images/banner/Banner01.jpg" alt="First slide">                
                    <div class="carousel-caption d-none d-md-block mt-5">
                        <h5 class="animated  slideInDown" style="animation-delay: 1s;"> WELCOME</h5>
                        <h4 class="animated fadeInLeft title" style="animation-delay: 2s;"> FreshTone</h4>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn text-white" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#" class="shadow-lg bg-white text-primary px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        <p class="animated slideInUp slider-button " style="animation-delay: 5s;">
                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>                            
                        </p> 
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 animated fadeIn" src="vendors/images/banner/Banner02.jpg" alt="Second slide">                    
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animated  slideInDown" style="animation-delay: 1s;"> WELCOME</h5>
                        <h4 class="animated fadeInLeft title" style="animation-delay: 2s;"> FreshTone</h4>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#" class="shadow-lg bg-white text-primary px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        <p class="animated slideInUp slider-button " style="animation-delay: 5s;">
                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>                            
                        </p> 
                    </div>                    
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="vendors/images/banner/Banner04.jpg" alt="Third slide">                   
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="animated  slideInDown" style="animation-delay: 1s;"> WELCOME</h5>
                        <h4 class="animated fadeInLeft title" style="animation-delay: 2s;"> FreshTone</h4>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#" class="shadow-lg bg-white text-primary px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
                        <p class="animated slideInUp slider-button " style="animation-delay: 5s;">
                            <i class="fa fa-facebook-official " aria-hidden="true"></i>
                            <i class="fa fa-instagram ml-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter ml-2" aria-hidden="true"></i>
                            <i class="fa fa-link  ml-2" aria-hidden="true"></i>                            
                        </p> 
                    </div> 
                  </div>
                  <div class="carousel-item ">
                    <img class="d-block w-100" src="vendors/images/banner/Banner03.jpg" alt="fouth slide">                
                    <div class="carousel-caption d-none d-md-block mt-5">
                        <h5 class="animated  slideInDown" style="animation-delay: 1s;"> WELCOME</h5>
                        <h4 class="animated fadeInLeft title" style="animation-delay: 2s;"> FreshTone</h4>
                        <p class="animated fadeInRight sub" style="animation-delay: 3s;">Soft Cosmetic Lens</p>
                        <p class="animated zoomIn text-white" style="animation-delay: 4s;">Premium Color Contact Lens From KOREA</p>
                        <p class="animated slideInUp slider-button" style="animation-delay: 5s;">
                            <a href="#" class="shadow-lg bg-white text-primary px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
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
    <!-- accessory -->
    <section class="my-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-sm-12" >
                    <div class='shadow p-4 rounded-lg item1'>
                        <div class="row" >
                            <div class="col-md-7">
                            <h6 class="pt-4">New Collection</h6>
                            <h4 class='text'>Accessories</h4>
                            <p class="slider-button  pt-3 align-content-center" >
                                <a href="#" class="px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </p>  

                            </div>
                            <div class="col-md-5">                               
                                <img src="vendors/images/accessores2.jpg" alt="" width="100%"  srcset="">                               
                            </div>
                        </div>
                    </div>     
                    
                </div>
                {{-- <div class="col-md-1 col-sm-12"></div> --}}

                <div class="col-md-4 col-sm-12">
                    <div class='shadow p-4 rounded-lg item2'>
                        <div class="row" >
                            <div class="col-md-7">
                            <h6 class="pt-4">New Collection</h6>
                            <h4 class='text'>Eye  Mask</h4>
                            <p class="slider-button pt-3   align-content-center" >
                                <a href="#" class="px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </p>  
                            </div>
                            <div class="col-md-5">                               
                                <img src="vendors/images/accessores2.jpg" alt="" width="100%" srcset="">                               
                            </div>
                        </div>
                    </div>      
                </div>
                {{-- <div class="col-md-1 col-sm-12"></div>             --}}
                <div class="col-md-4 col-sm-12">
                    <div class='shadow p-4 rounded-lg item3'>
                        <div class="row" >
                            <div class="col-md-7">
                                <h6 class="pt-4">Fresh Tone</h6>
                                <h4 class='text'>Eye Care</h4>
                            <p class="slider-button  pt-3 align-content-center" >
                                <a href="#" class="px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </p>  
                            </div>
                            <div class="col-md-5">                               
                                <img src="vendors/images/accessores2.jpg" alt="" width="100%" srcset="">                               
                            </div>
                        </div>
                    </div>      
                </div>
                
            </div>
        </div>
    </section>
    <!-- end accessory -->

    {{-- new collection --}}
    <section class='newcollection-color my-5'>
        <div class="container py-5 ">
            <div class="shadow p-5 bg-white rounded">
                <h4>New Collection</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-left">
                            <span class='text-black-50 font-weight-bold' >CONTACT LENS</span>  
                        </div>
                        <div class="float-right">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active text-uppercase" id="pills-color-tab" data-toggle="pill" href="#pills-color" role="tab" aria-controls="pills-color" aria-selected="true">Color</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" id="pills-power-tab" data-toggle="pill" href="#pills-power" role="tab" aria-controls="pills-power" aria-selected="false">Power</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" id="pills-clear-tab" data-toggle="pill" href="#pills-clear" role="tab" aria-controls="pills-clear" aria-selected="false">Clear Power</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" id="pills-daily-tab" data-toggle="pill" href="#pills-daily" role="tab" aria-controls="pills-daily" aria-selected="false">Daily</a>
                                </li>
                            </ul>   
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-color" role="tabpanel" aria-labelledby="pills-color-tab">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade"  data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="card slider-card">                   
                                            <figure class="imghvr-shutter-out-diag-2">
                                                <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                              <figcaption>
                                                  <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                  <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                              </figcaption>
                                            </figure> 
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens2.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                    
                    
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens8.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                     
                                                
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens9.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                     
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
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="card slider-card">
                                            <figure class="imghvr-shutter-out-diag-2">
                                                <img src="vendors/images/color_lens11.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                              <figcaption>
                                                  <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                  <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                              </figcaption>
                                            </figure>                   
                                                
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens12.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                  
                                                                      
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens13.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                  
                                                
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens15.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                  
                                                
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
                                     
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="card slider-card">
                                            <figure class="imghvr-shutter-out-diag-2">
                                                <img src="vendors/images/color_lens6.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                              <figcaption>
                                                  <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                  <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                              </figcaption>
                                            </figure>                   
                                                
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens16.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                   
                                                                      
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens8.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                  
                                                
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
                                                <figure class="imghvr-shutter-out-diag-2">
                                                    <img src="vendors/images/color_lens9.jpg" alt="example-image" width="100%" style="object-fit:cover">
                                                  <figcaption>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2 text-white" ></i></a>
                                                      <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2 text-white" ></i></a>
                                                  </figcaption>
                                                </figure>                   
                                                
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
                                      
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">              
                                <i class="fa fa-arrow-left left-link-icon" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">                            
                            <i class="fa fa-arrow-right right-link-icon" aria-hidden="true"></i>                       
                            </a>
                        </div> 

                        <div class="row mt-3 ">
                            <div class="col-md-2 offset-md-5" >
                                <p class="slider-button  mt-2 " >
                                    <a href="#">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </p>  
                            </div>
                        </div>
                    </div>
                {{-- color --}}
                    <div class="tab-pane fade" id="pills-power" role="tabpanel" aria-labelledby="pills-power-tab">
                        <div style="height: 400px">
                            <h2>Power</h2>
                        </div>
                    </div>
                    {{-- power --}}
                    <div class="tab-pane fade" id="pills-clear" role="tabpanel" aria-labelledby="pills-clear-tab">
                        <div style="height: 400px">
                            <h2>Clear</h2>
                        </div>
                    </div>
                    {{-- clear --}}
                    <div class="tab-pane fade" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                        <div style="height: 400px">
                            <h2>Daily</h2>
                        </div>
                    </div>
                    {{-- power --}}
                </div>
            </div>
        </div>
    </section>
   
    {{--end  new collection --}}

    <!-- fresh tone  -->
    <section class='mt-4' >
        <div class="container-fluid "  style='height: 430px;'>
            <div class="row"  >
                <div class="col-md-1"></div>
                <div class="col-md-4 p-0 " style='background-color: #E9F7F8;' >
                <img src="vendors/images/color_lens6.jpg" style="object-fit:fill;padding:0px" alt=""  class='one'>                            
                    <img src="vendors/images/color_lens1.jpg" style="object-fit:fill" alt=""  class='two'
                    >                                         
                </div>               
                <div class="col-md-6 pt-5 col-sm-12 col-height" style='background-color: #E9F7F8;'>
                    <div class='ml-3 mt-3'>   
                        <h3 class='text-color pt-3 font-weight-bold'>Fresh Tone</h3>
                        
                        <h5 class='text-color '>Discover The Secret Of Charm & Confidence</h5>
                        <p class='text-lowercase'>FRESHTONE CONTACT LENS ARE A WORLDWIDE WELL KNOWN BRAND WHICH DOES NOT NEED ANY INTRODUCTION OUR MOTIVE IS QUALITY FIRST WE DO NOT LET OUR CUSTOMER COMPROMISE WITH THEIR HEALTH OUR LENSES ARE MADE IN SOUTH KOREA UNDER STRICT GUIDANCE AND OUR PRODUCT IS ISO, GMP AND FDA APPROVED.</p>
                        <p class="slider-button  mt-2 align-content-center" >
                            <a href="#" class="px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </p>  
                        <p></p>
                                   
                    </div>                 
                </div>
                <div class="col-md-1" style='background-color: #E9F7F8;'></div>
            </div>           
        </div>
    </section>
    <!-- end fresh tone -->

    <!-- safety and confornt   -->
    <section class='mt-5'>
        <div class="container-fluid mt-5 mb-5 "  style='height: 100%;'>
            <div class="row">
                <div class="col-md-1 safety-bg-color"></div>      
                <div class="col-md-6 col-sm-12  safety-bg-color" style="margin-left: -33px;">                      
                    <div class='ml-3 mt-5 pb-5'>   
                        <h3 class='text-color pt-5 py-3  title-color'>
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
                            <a href="#" class="px-3">See More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </p>  
                                                                 
                    </div>                 
                </div>               
                <div class="col-md-5 px-0 col-sm-12" >
                    <img src="image/solution.png" height="100%" width="100%" alt="" srcset="" class='one'>                            
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

    {{-- star --}}
    <section class='link-bg-color '>     
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
                                    <img src="vendors/images/color_lens7.jpg" class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens8.jpg"  class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens9.jpg"  class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens10.jpg" class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens1.jpg"   alt="..." class='slider-image' style="object-fit: cover">
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
                                    <img src="vendors/images/color_lens2.jpg" class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens3.jpg"  class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens10.jpg"  class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens16.jpg"  class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens6.jpg"  class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens3.jpg" class='slider-image' style="object-fit: cover" alt="...">
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
                                    <img src="vendors/images/color_lens1.jpg" class='slider-image' style="object-fit: cover" alt="...">
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
    </section>
    {{-- end start --}} 
    
 
@endsection

