@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')

@endpush


@section('content')

<div class="heroSection container-fluid overflow-hidden px-0">
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

<div class="container-fluid py-4 py-md-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="aboutImg d-flex justify-content-center">
                    <img class="" src="{{ url('public/assets/img/about.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row text-center text-lg-start">
                    <div class="col-12"><div class="heading">About Us</div></div>
                    <div class="col-12"><div class="content">The Micro, Small and Medium Enterprises (MSME) sector has emerged as a highly vibrant and dynamic sector of the Indian economy over the last five decades. It contributes significantly in the economic and social development of the country by fostering entrepreneurship and generating largest employment opportunities at comparatively lower capital cost, next only to agriculture.<div class="brClaas"> MSMEs are complementary to large industries as ancillary units and this sector contributes significantly in the inclusive industrial development of the country. </div></div></div>
                    <div class="col-12 mt-3">
                        <button class="msmiBtn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid overflow-hidden chairmanTwoSection bg-light py-4 py-md-5">
    <div class="container">
        <div class="row justify-content-center align-items-center mx-0">
            <div class="col-lg-6 col-12">
                <div class="row justify-content-center mx-0">
                    <div class="col-12 px-0">
                        <div class="chairmanImg overflow-hidden rounded-3">
                            <img src="{{ url('public/assets/img/chairmanSecond.jpg')}}" alt="chairmanImg" class="h-100 w-100 img-fluid object-fit-cover">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row mx-0">
                    <div class="col-12 px-0">
                        <div class=" heading text-center text-lg-start">
                            Dr E Muthuraman<span>(Chairman)</span>
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <div class="position text-center text-lg-start pt-2 pt-xl-3">
                            Chairman
                        </div>
                    </div> --}}
                    <div class="col-12 px-0">
                        <div class="content text-center text-lg-start pt-2 pt-xl-3">
                            MSME Promotion Council Chairman Shri Dr. E. Muthuraman has welcomed the much-awaited Foreign Trade Policy from the Commerce Ministry under the guidance of Hon’ble Prime Minister Shri Narendra Modi Ji and Commerce and Industry Minister Shri Piyush Goyal Ji, which broke the traditional Five-Year policy lasting term and adopted the ‘Long Term’ focus for the policy, giving a visionary initiative to our country.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid overflow-hidden linksFluid py-4 py-md-5">
    <div class="container">
        <div class="row g-3 mx-0">
            <div class="col-12 text-center mb-3">
                <div class="heading">Explore MSME PCI Resources</div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class="linksIcon"><img class="d-block" src="{{ url('public/assets/img/samadhan.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://sambandh.msme.gov.in/PPP_Index.aspx" class="linksText d-flex align-items-center">MSME SAMADHAN <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/samadhan.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://samadhaan.msme.gov.in/MyMsme/MSEFC/MSEFC_Welcome.aspx" class="linksText  d-flex align-items-center">MSME SAMADHAN <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0 position">
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/database.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://www.msmedatabank.in/" class="linksText  d-flex align-items-center ">MSME DATABASE <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/participation.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://www.dcmsme.gov.in/" class="linksText  d-flex align-items-center">E PARTICIPATION <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class=" linksIcon  "><img src="{{ url('public/assets/img/sampark.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://sampark.gov.in/" class="linksText  d-flex align-items-center">MSME SAMPARK <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/udhyam aadhar.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://udyamregistration.gov.in/Government-India/Ministry-MSME-registration.htm" class="linksText  d-flex align-items-center">UDHYAM AADHAR <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/portal.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://www.kviconline.gov.in/pmegpeportal/pmegphome/index.jsp" class="linksText  d-flex align-items-center">PMEG E PORTAL <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="row linkWrapper mx-0">
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/scheme.svg')}}" alt=""></div></div>
                    <div class="col-12 px-0"><a href="https://www.dcmsme.gov.in/" class="linksText  d-flex align-items-center">CHAMPION SCHEME <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid overflow-hidden chairmanFluid bg-light">
    <div class="container">
        <div class="row align-items-center py-4 py-md-5">
            <div class="col-xl-6 col-lg-7 col-12 order-lg-1 order-2">
                <div class="row">
                    <div class="col-12">
                        <div class="heading mb-3">Dr E Muthuraman Becomes MSMEPC Chairman</div>
                    </div>
                    <div class="col-12">
                        <div class="content para">17 oct 2022- New Delhi: MSMEPC gets its new chairman on 17 oct. Dr E Muthuraman who was earlier vice chairman  is nominated as Chairman on Monday by Justice K.G. Balakrishnan Former Chief Justice of India at New Delhi. On the occasion Justice K.G Balakrishnan congratulated Dr. E.Muthuraman for the same and said “I believe that you will do a great work for the MSME sector” he also added that Muthuraman is a very kind hearted and a Nobel man who will do great efforts for the betterment of the society. Dr E. Muthuraman said that he will work under the kind patronage of the Hon’ble Former CJI and will seek his blessing and guidance in future also. 
                            {{-- He also invited Former CJI to Madhurai to seek his blessing. Justice Balakrishnan assured that he shall be planning his visit to Tamil Nadu soon and the schedule will be shared with them soon. There after a informal discussion was held between both in which they exchanged there communication and experiences, etc . --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-12 order-lg-2 order-1 mb-lg-0 mb-4">
                <div class="row">
                    <div class="col-12 chairmanImg">
                        <img src="{{ url('public/assets/img/chairmanIndex.png')}}" alt="">
                    </div>
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
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
    },
    });
</script>


@endpush