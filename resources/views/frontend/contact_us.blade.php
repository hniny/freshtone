@extends('frontend.main')
@section('content')
<div class="container-fluid bg-dark">
    <div class="link-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-5 ">
                    <h2 class="text-white  text-center text-uppercase">Contact Us</h2>
                </div>
            </div>  
        </div> 
    </div> 
</div>
<div class="container my-5">
    <div class="col-md-12 mb-5">
      <p class='text-center '>Contact us about anything related about to our company or services.We will do our best to get back to you as soon as possible.</p>
      <form action="">
        <div class="form-group">          
            <textarea class="form-control message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">                  
                    <input type="text" class="form-control"  placeholder="Enter your name">                    
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">                 
                    <input type="email" class="form-control"  placeholder="Enter email address">                  
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">                  
                    <input type="text" class="form-control"  placeholder="Enter your phone number">                 
                </div>
            </div>
        </div>     
        <div class="col-md-2 offset-md-5 ">
            <button type="submit" class="btn btn-primary text-center" style="font-size: 0.95rem">SEND MESSAGE</button>
        </div>       
      </form>
    </div>
</div>
<section class="newcollection-color text-white">
    <div class="container py-5">
        <div class="row">
       
            <div class="col-md-6">
                <h3 class="text-uppercase text-white" >Branch</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.09447236042!2d96.16486161423276!3d16.771974788450123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed4c2195b60d%3A0x790bedd11a54b370!2sFreshToneMyanmar!5e0!3m2!1sen!2smm!4v1581305963661!5m2!1sen!2smm" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-6 col-sm-12 pt-5">
                <label class="">
                    <i class="fa fa-map text-white" aria-hidden="true"></i>
                    No.C310, 3rt Floor, Times City, No.37/Quarter,
                   Between Hantharwaddy and Kyun Road, Yangon, Myanmar
                </label>           
                <label class="">
                    <i class="fa fa-mobile text-white" style="font-size:1.6rem" aria-hidden="true">  
                    </i>
                    +959 5152274
                </label> <br>          
                <label class="">
                    <i class="fa fa-envelope text-white" aria-hidden="true"></i>                           
                    freshtone.myanmar@gmail.com
                </label> 
            </div>
        
        </div>
    </div>
</section>
@endsection
@push('styles')
<style>
.send{
    border-radius: 15px;
}
.message{
    height: 300px;
}
textarea.form-control {
        height: 150px;
    }
</style>

@endpush