@extends('frontend.main')
@section('content')
<div class="container-fluid m-0 p-0">
    <div class="link-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-5 ">
                    <h2 class="text-white  text-center text-uppercase">Eye Care</h2>
                </div>
            </div>  
        </div> 
    </div>

    <div class="container my-5">
        <div class="wrapper">
            @include('frontend.sidebar') 
        <!-- Page Content Holder -->
        <div id="content">  
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3 class=" text-uppercase" style="color:#134B80">Eye Care</h3>
                    <p class="text-lowercase" style="line-height:2rem;text-align:justify"><img src="vendors/images/eyecare/eyecare.jpg" width="370rem" height="200rem" style="float: right">EVERYONE IS GIFTED JUST A PAIR OF EYES SO IT’S VERY IMPORTANT TO TAKE CARE OF THEM SOME TIPS TO CHOSE CONTACT LENS BASE ON WATER CONTENT  WATER CONTENT MAKES A DIFFERENCE THE WATER CONTENT OF A SOFT CONTACT LENS CAN VARY GREATLY, FROM 38% WATER TO OVER 70% WATER, SO CONSULT WITH YOUR EYE DOCTOR TO BE SURE YOU’RE USING THE CONTACTS THAT ARE BEST FOR YOU. COUNTERINTUITIVELY, SOFT CONTACTS WITH A HIGHER “WETNESS” LEVEL, THOUGH COMFORTABLE, MAY WORSEN YOUR DRY EYE SYMPTOMS. CONTACTS DESIGNED TO HOLD 65% WATER, FOR EXAMPLE, WILL WICK AWAY MOISTURE FROM WHATEVER ENVIRONMENT THEY ARE IN—IN THIS CASE, YOUR ALREADY-DRY EYES—TO MAINTAIN THAT 65% LEVEL OF MOISTURE. WHILE THE LENSES WILL BE NICE AND MOIST, THIS WILL LEAVE YOUR EYES DRIER THAN THEY WERE BEFORE. A SOFT CONTACT WITH A LOW WATER CONTENT LEVEL OF ABOUT 38% WILL FEEL COMFORTABLE AND ALLOW YOUR EYES TO BREATHE WITHOUT DRYING THEM OUT. SO DON’T FORGET CHECKOUT THE WATER CONTACT UPON YOUR NEXT PURCHASE</p>
                    <p class="text-lowercase" style="text-align:justify"></p>
                </div>
                
            </div>
            <div class="row py-5">
                <div class="col-md-4 ">
                    <img src="vendors/images/eyecare/eyecare1.jpg" class="animated fadeInLeft pl-5"  style="animation-delay: 1s" alt="">
                    <div class="text-center py-3 ">
                        <h6 class="">မျက်ကပ်မှန်ဆေးရည်</h6>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <img src="vendors/images/eyecare/eyecare2.jpg" class="animated fadeIn pl-5" style="animation-delay: 2s" alt="">
                    <div class="text-center py-3">
                        <h6 class="">မျက်ကပ်မှန်ဆေးရည်</h6>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <img src="vendors/images/eyecare/eyecare3.jpg" class="animated fadeInRight pl-5" style="animation-delay: 1s" alt="">
                    <div class="text-center py-3">
                        <h6 class="">မျက်စဉ်းဆေးရည်</h6>
                    </div>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-12 col-sm-12">
                    <p style="text-align: justify">CONTACT LENS အသုံးပြုသူတွေအတွက် မရှိမဖြစ်နံပါတ် ၁ အရေးကြီးဆုံးက မျက်ကပ်မှန်ဆေးရည်ပါ။

                        CONTACT LENS တွေကို အသုံးပြုပြီးတဲ့အခါတိုင်းမှာဆေးရည် အသစ်လဲပေးရသလို မတပ်ဖြစ်တဲ့အခါမှာလဲ ဆေးရည်ထဲမှာ သေသေချာချာ စနစ်တကျ သိမ်းဆည်းထားမှသာ ဘေးအန္တရာယ်တစ်စုံတစ်ရာမှမရှိပဲ CONTACT LENS တွေကို သက်တမ်းစေ့ အသုံးပြုနိုင်မှာဖြစ်ပါတယ်။ အပြိုင်အဆိုင်နဲ့အတုအပတွေများတဲ့ ယနေ့ခေတ်ကြီးမှာ FRESHTONE CONTACT LENS ကို ယုံကြည်စိတ်ချစွာ အသုံးပြုနေတဲ့ CUSTOMER တွေ CONTACT LENS ဆေးရည်ကို တခြားအမှတ်တံဆိပ်တွေ အသုံးပြုစရာမလိုအပ်ပဲ FRESDREAM အမှတ်တံဆိပ် CONTACT LENS ဆေးရည်တွေကို ဗူးသေး ဗူးကြီး နှစ်မျိုးစလုံးကို ONLINE ကနေရော FRESHTONE CONTACT LENS ရရှိနိုင်မယ့် လိပ်စာလေးတွေမှာပါ အလွယ်တကူ ဝယ်ယူလို့ရနေပါပြီ။</p>
                </div>
            </div>


            
            {{-- ************************************* --}}
    </div>
</div>
</div>   


@endsection
@push('styles')
<link rel="stylesheet" href="vendors/css/sidebar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css">
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
<script type="text/javascript">
     $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({alwaysShowClose: true});
    });
</script>
@endpush
