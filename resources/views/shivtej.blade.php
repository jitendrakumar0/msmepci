@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')

@endpush


@section('content')


<div class="heroSection container-fluid px-0">
    <div class="row">
      <div class="col-12 ">
        <div class="swiper mySwiper heroSwiper position-relative">
          <div class="swiper-wrapper">
            <div class="swiper-slide swiperSlider">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/one.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
            </div>
            <div class="swiper-slide swiperSlider">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/two.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
             </div>
             <div class="swiper-slide swiperSlider">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/three.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
             </div>
             <div class="swiper-slide swiperSlider">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/four.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
             </div>
             <div class="swiper-button-next d-md-block d-none"> 
               <span class="d-inline-flex navIcon">
                   <img src="  {{ url('public/assets/img/herosection/leftarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
   
               </span> 
               </div>
               <div class="swiper-button-prev d-md-block d-none">
               <span class="d-inline-flex navIcon">
                   <img src="  {{ url('public/assets/img/herosection/rightarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
   
               </span> 

               </div>
               
          <div class="swiper-pagination dotsarrow text-center rounded-pill py-2 mx-auto swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal d-sm-none d-block"></div>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection


@push('scripts')


<script>
    var swiper = new Swiper(".heroSwiper", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    //   autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    //   },
    });
  </script>

@endpush