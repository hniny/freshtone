<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="vendors/css/imagehover.min.css">
        <link rel="stylesheet" href="vendors/css/slick.css">
        <link href="vendors/css/demo-page.css" rel="stylesheet" media="all">   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/css/fstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">   
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
        font-size: 64px;
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
  @stack('styles')
</head>
<body>     
    @include('frontend.header')  
    @yield('content')
       
    @include('frontend.footer')  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- <script src="assets/owl.carousel.min.js"></script> --}}
       <script src="https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js"></script>
       <script src="vendors/js/slick.js"></script>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    @stack('scripts')
    <script>
        $(document).ready(function(){     
            $(window).on("scroll", function() {
                    if($(window).scrollTop()) {
                          $('nav').addClass('nav-background');
                    }

                    else {
                          $('nav').removeClass('nav-background');
                    }
              });

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
