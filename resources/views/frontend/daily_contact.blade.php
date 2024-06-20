@extends('frontend.main')
@section('content')
<div class="container-fluid m-0 p-0">
    <div class="link-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-5 ">
                    <h2 class="text-white  text-center text-uppercase">DAILY CONTACT LENS</h2>
                </div>
            </div>  
        </div> 
    </div>

    <div class="container my-5">
        <div class="wrapper">
        @include('frontend.sidebar')
        <!-- Page Content Holder -->
        <div id="content">
            {{-- <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button> --}}
             <!-- panel-group -->          
             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h6 class="panel-title  text-uppercase" style="font-size:1.1rem">
                            <a role="button" data-toggle="collapse"  data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                            >
                            <i class="more-less fa fa-plus"></i>
                               Freshtone Contact Lens
                            </a>
                        </h6>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body py-3" style="background-color: #fbfbfb">
                            <ul>
                                <li>Blocker, D & Wahl-Alexander, Z 2018, 'Using sport education in a university physical activity course', JOPERD: The Journal of Physical Education, Recreation & Dance, vol. 89, no. 2, pp. 56-61.</li>

                                <li>Branford, A & Coutts, L 2015a, The precious ring, Walker Books Australia, Newtown, NSW.</li>

                                <li>Branford, A & Coutts, L 2015b, The wishing seed, Walker Books Australia, Newtown, NSW.</li>
                                
                                <li>Branford, A & Coutts, L 2015b, The wishing seed, Walker Books Australia, Newtown, NSW.</li>
                                <li>Branford, A & Coutts, L 2015b, The wishing seed, Walker Books Australia, Newtown, NSW.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title  text-uppercase" style="font-size:1.1rem">
                            <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                                <i class="more-less fa fa-plus"></i>
                                   148 Range of Colors to Choose From
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body py-3" style="background-color: #fbfbfb">
                            <ul>
                                <li>Blocker, D & Wahl-Alexander, Z 2018, 'Using sport education in a university physical activity course', JOPERD: The Journal of Physical Education, Recreation & Dance, vol. 89, no. 2, pp. 56-61.</li>

                                <li>Branford, A & Coutts, L 2015a, The precious ring, Walker Books Australia, Newtown, NSW.</li>

                                <li>Branford, A & Coutts, L 2015b, The wishing seed, Walker Books Australia, Newtown, NSW.</li>

                                <li>Branford, A & Coutts, L 2015b, The wishing seed, Walker Books Australia, Newtown, NSW.</li>
                                <li>Branford, A & Coutts, L 2015b, The wishing seed, Walker Books Australia, Newtown, NSW.</li>
                            </ul>
                        </div>
                    </div>
                </div>                   
            </div>  <!-- end panel-group -->    

            <div class="row my-5">
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                      
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                        
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                       
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
            </div>
            {{-- ************************************* --}}
            <div class="row my-5">
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                        
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                        
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                    
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
            </div>
            {{-- ************************************* --}}
            <div class="row my-5">
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                       
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                      
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card slider-card">                   
                        <figure class="imghvr-shutter-out-diag-2">
                            <img src="vendors/images/color_lens10.jpg" alt="example-image" width="100%" style="object-fit:cover">
                          <figcaption>
                              <a href="/#" style="margin-top:6.5rem;margin-left:4.5rem;"><i class="fa fa-eye border border-white rounded-lg p-2" ></i></a>
                              <a href="/#" style="margin-top:6.5rem;margin-left:8.5rem;"><i class="fa fa-shopping-cart border border-white rounded-lg p-2" ></i></a>
                          </figcaption>
                        </figure>                       
                        <div class="card-body ">
                            <span  class='circle' style="background-color:cornflowerblue;"> &nbsp;&nbsp;</span> 
                        <span >
                            Diamond Brown                     
                        </span>
                        <h4 class=' text-info'>$ 15.00</h4>
                        <span> DIA &nbsp; &nbsp;: 14.2 mm</span><br/>
                        <span> PWR  : -0.00 to -8.00</span> 
                        </div>                     
                    </div>
                </div>
            </div>
            {{-- ************************************* --}}
        </div>
    </div>
</div>   


@endsection
@push('styles')
<link rel="stylesheet" href="vendors/css/sidebar.css">
@endpush
@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
    function toggleIcon(e) {
        // console.log('e',e);
        $(e.target)
            .prev('.panel-heading')    
            .toggleClass('bg')  
            .find(".more-less")              
            .toggleClass('fa-plus fa-minus');               
     
        
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
@endpush
