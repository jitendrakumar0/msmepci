@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')

@endpush


@section('content')


<div class="heroSection container-fluid px-0">
    <div class="row">
      <div class="col-12">
        <div class="swiper mySwiper heroSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide swiperSlider">
             <div class="sliderImg"><img src="assets/img/herosection/01-2.png" alt="herosection" class="img-fluid w-100  h-100"> </div>
            </div>
            <div class="swiper-slide swiperSlider">
              <div class="sliderImg"><img src="assets/img/herosection/02-1.png" alt="herosection" class="img-fluid w-100  h-100"> </div>
             </div>
             <div class="swiper-slide swiperSlider">
              <div class="sliderImg"><img src="assets/img/herosection/03-1.png" alt="herosection" class="img-fluid w-100  h-100"> </div>
             </div>
             <div class="swiper-slide swiperSlider">
              <div class="sliderImg"><img src="assets/img/herosection/04-1.png" alt="herosection" class="img-fluid w-100  h-100"> </div>
             </div>
          </div>
          <div class="swiper-button-next"> <span class="d-inline-flex navIcon"><img src="assets/img/herosection/leftarrownav.png" alt=""></span> </div>
          <div class="swiper-button-prev"><span class="d-inline-flex navIcon"><img src="assets/img/herosection/rightarrownav.png" alt=""></span> </div>
          <div class="swiper-pagination"></div>
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
    });
  </script>

@endpush