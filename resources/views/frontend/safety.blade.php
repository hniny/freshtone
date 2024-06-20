@extends('frontend.main')
@section('content')
<div class="container-fluid bg-dark">
    <div class="link-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-5 ">
                    <h2 class="text-white font-weight-bold text-center text-uppercase">Safety</h2>
                </div>
            </div>  
        </div> 
    </div>  
</div>

<div class="container">
    <div class="row my-5">
        <div class="col-md-6 ">
            <h3 class='title-color pb-3' style="color:#134B80">
                SAFETY & COMFORT
            </h3>
            <p class='text-justify text-lowercase'>
                FRESHTONE CONTACT LENSES INCORPORATE COLOR SANDWICH PROCESSING TECHNOLOGY ENSURING THAT THE COLORED LAYER IS COMPLETELY COATED WITHIN THE LENS THIS PREVENTS DIRECT CONTACT WITH THE EYES ENSURING SAFETY, COMFORT AND EASE OF USE THE LENS ARE SHAPED TO LET THE NATURAL MOISTURE PRODUCED IN THE EYE DIVIDE AND FLOW OVER THE LENS SURFACE EVENLY, PROVIDING ALL DAY COMFORT THE COLORED PORTION OF THE LENS IS PROPORTIONED TO PERFECTION AND ITS STRUCTURE ALLOW THE LENS TO RADIATE A BRIGHTER AND MORE NATURAL LOOK WHILE NOT AFFECTING CLARITY OF THE SIGHT.
            </p>
            <!-- panel-group -->          
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading " role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse"  data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                            style="color:#134B80">
                                <i class="more-less fa fa-plus"></i>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                soft contact lenses are best for dry eyes
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body text-lowercase p-3">
                            THE BEST CONTACT LENSES FOR DRY EYES ARE SOFT CONTACT LENSES, AS OPPOSED TO RIGID ONES. SOFT CONTACTS HAVE BEEN DEVELOPED OVER THE LAST FEW DECADES AND MADE OF SPECIAL POLYMERS, OR PLASTICS, THAT ACTUALLY ALLOW THE LENSES THEMSELVES TO HOLD WATER. THESE SOFT POLYMERS ALSO ARE PERMEABLE, ALLOWING OXYGEN TO PASS THROUGH, QUITE LITERALLY LETTING YOUR EYES BREATHE. THE CORNEA HAS TO RECEIVE OXYGEN THROUGH THE AIR, AS IT HAS NO BLOOD VESSELS OF ITS OWN. CONSEQUENTLY, OXYGEN PERMEABILITY IS AN EXTREMELY IMPORTANT CHARACTERISTIC OF CONTACT LENSES, ESPECIALLY CONTACT LENSES FOR DRY EYES.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:#134B80">
                                <i class="more-less fa fa-plus"></i>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                water content makes a difference
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body text-lowercase p-3">
                            THE WATER CONTENT OF A SOFT CONTACT LENS CAN VARY GREATLY, FROM 38% WATER TO OVER 70% WATER, SO CONSULT WITH YOUR EYE DOCTOR TO BE SURE YOU’RE USING THE CONTACTS THAT ARE BEST FOR YOU. COUNTERINTUITIVELY, SOFT CONTACTS WITH A HIGHER “WETNESS” LEVEL, THOUGH COMFORTABLE, MAY WORSEN YOUR DRY EYE SYMPTOMS. CONTACTS DESIGNED TO HOLD 65% WATER, FOR EXAMPLE, WILL WICK AWAY MOISTURE FROM WHATEVER ENVIRONMENT THEY ARE IN—IN THIS CASE, YOUR ALREADY-DRY EYES—TO MAINTAIN THAT 65% LEVEL OF MOISTURE. WHILE THE LENSES WILL BE NICE AND MOIST, THIS WILL LEAVE YOUR EYES DRIER THAN THEY WERE BEFORE. A SOFT CONTACT WITH A LOW WATER CONTENT LEVEL OF ABOUT 38% WILL FEEL COMFORTABLE AND ALLOW YOUR EYES TO BREATHE WITHOUT DRYING THEM OUT.
                        </div>
                    </div>
                </div>                   
            </div>  <!-- end panel-group -->          
        </div>
        <div class="col-md-6 mr-0 pr-0">   
           <img src="image/solution.png" height="400px" width="100%">         
        </div>
    </div>
</div>  
 
@endsection
@push('styles')
<style>
 
    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 11px;
        color: #212121;
        background-color: #d5f3fe;
        border-color:#d5f3fe;
    }
    .panel-title {
        font-size: 20px;
    }
    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }
    .more-less{
        float: right;
    }
    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }
    .bg a {
        background-color: #2d62a8 ;
        color: #fff ;      
        border-radius: 11px;
    } 
</style>
@endpush
@push('scripts')
<script>
   
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

