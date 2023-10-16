@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')

@endpush


@section('content')

<div class="heroSection container-fluid px-0 overflow-hidden">
    <div class="row">
      <div class="col-12">
        <div class="swiper mySwiper heroSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/one.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/two.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/three.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/four.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
            </div>
            {{-- <div class="swiper-button-next"> 
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/rightarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
               
            </div>
            <div class="swiper-button-prev">
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/leftarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
            </div> --}}
            <div class="swiper-pagination rounded-pill"></div>

        </div>
      </div>
    </div>
</div>

<div class="container-fluid py-4 py-md-5 ">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="txt">About Us</div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="aboutImg d-flex justify-content-center">
                    <img class="" src="{{ url('public/assets/img/about.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row text-center text-lg-start">
                    <div class="col-12"><div class="heading">About Us</div></div>
                    <div class="col-12"><div class="content">The Micro, Small and Medium Enterprises (MSME) sector has emerged as a highly vibrant and dynamic sector of the Indian economy over the last five decades. It contributes significantly in the economic and social development of the country by fostering entrepreneurship and generating largest employment opportunities at comparatively lower capital cost, next only to agriculture.<div class="brClaas"> MSMEs are complementary to large industries as ancillary units and this sector contributes significantly in the inclusive industrial development of the country. The MSMEPC is registered under udyam registration of MSME department, Government of India. The Council will be working in close association with the Ministry to assist the MSME units in their efforts. </div></div></div>
                    <a href="{{route('about')}}" class="col-12 mt-3">
                        <button class="msmiBtn">Read More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid overflow-hidden bg-light linksFluid py-4 py-md-5">
    <div class="container position-relative">
        <div class="row g-3 mx-0">
            <div class="col-12">
                <div class="txt text1">Resources</div>
            </div>
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
                    <div class="col-12 px-0"><div class="linksIcon"><img src="{{ url('public/assets/img/Database.svg')}}" alt=""></div></div>
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

<div class="container-fluid overflow-hidden chairmanTwoSection  py-4 py-md-5">
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center mx-0">
            <div class="col-12">
                <div class="txt">Chairman</div>
            </div>
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
                        <div class=" heading text-center text-lg-start mt-md-0 mt-3">
                            Dr E Muthuraman (Chairman) 
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


<div class="container-fluid overflow-hidden chairmanFluid bg-light">
    <div class="container position-relative">
        <div class="row align-items-center py-4 py-md-5">
            <div class="col-12">
                <div class="txt text2">Muthuraman</div>
            </div>
            <div class="col-xl-6 col-lg-7 col-12 order-lg-1 order-2">
                <div class="row">
                    <div class="col-12">
                        <div class="heading text-center text-md-start mb-3">Dr E Muthuraman Becomes MSMEPC Chairman</div>
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

<div class="container-fluid blogsectionSecond py-4 py-md-5">
    <div class="container position-relative">
        <div class="row mb-2 mb-md-5">
            <div class="col-12">
                <div class="txt text5">Blogs</div>
            </div>
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="heading d-none d-sm-block mb-0">Our Blogs</div>
                <div class="heading d-block d-sm-none mb-0">Blogs</div>
                <a href="" class="allBlog">All Blog <img src="{{ url('public/assets/img/rytArrow.svg')}}" alt=""></a>
            </div>
        </div>
        <div class="row gy-3 gy-sm-4">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-12">
                        <div class="mainCard p-1 shadow-lg rounded-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/blogCard0401.jpg')}}" alt="CardImg" class="h-100 w-100 img-fluid">
                                    </div>
                                </div>
                                <div class="content">
                                    {{-- <div class="col-12">
                                        <div class="threeDiv">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="threeImg d-flex">
                                                                <div class="roundedImg">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                                <div class="roundedImg roundedImgnegative">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                                <div class="roundedImg roundedImgnegative">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col px-0">
                                                            <div class="places">
                                                                9+ bit places 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="dropdown myDropdown">
                                                            <button class="btn dropdown-toggle myDropdowntoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div class="threeDots d-flex">
                                                                <img src="{{ url('public/assets/img/threeBlackdots.svg')}}" alt="threedots" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                                            <li><a class="dropdown-item" href="#">Share</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="cardHeadingmain">
                                            <a href="javascript;;" class="cardHeading">
                                                What factors led to the growth of MSME?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="cardSubHeading">
                                            Overall, the research indicates that a variety of factors, including human resource management, access to capital, technology adoption, entrepreneurship skills, and infrastructure, have an impact on the growth and development of MSMEs in India.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row align-items-center justify-content-between pt-3">
                                            <div class="col-auto">
                                                <div class="Downtxt">
                                                    13/10/2023
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="numberHeart">
                                                    <a href="javascript:;" class="text-decoration-none numberanc">
                                                        <div class="row align-items-center justify-content-end">
                                                            <div class="col-auto pe-0">
                                                                <div class="number">
                                                                    Read More
                                                                </div>
                                                            </div>
                                                            <div class="col ps-1">
                                                                <div class="heartBlackimg d-flex">
                                                                    <img src="{{ url('public/assets/img/whitearrow.svg')}}" alt="heartBlackimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-12">
                        <div class="mainCard p-1 shadow-lg rounded-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/blogCard0202.svg')}}" alt="CardImg" class="h-100 w-100 img-fluid">
                                    </div>
                                </div>
                                <div class="content">
                                    {{-- <div class="col-12">
                                        <div class="threeDiv">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="threeImg d-flex">
                                                                <div class="roundedImg">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                                <div class="roundedImg roundedImgnegative">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                                <div class="roundedImg roundedImgnegative">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col px-0">
                                                            <div class="places">
                                                                9+ bit places 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="dropdown myDropdown">
                                                            <button class="btn dropdown-toggle myDropdowntoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div class="threeDots d-flex">
                                                                <img src="{{ url('public/assets/img/threeBlackdots.svg')}}" alt="threedots" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                                            <li><a class="dropdown-item" href="#">Share</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="cardHeadingmain">
                                            <a href="javascript;;" class="cardHeading">
                                                how msme help to boost the economy of developing countries?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="cardSubHeading">
                                            By creating jobs, MSMEs help to reduce unemployment rates and stimulate economic growth. Additionally, entrepreneurship drives innovation and encourages the creation of new industries and markets, leading to further job creation and economic development. Secondly, MSMEs are critical to economic growth.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row align-items-center justify-content-between pt-3">
                                            <div class="col-auto">
                                                <div class="Downtxt">
                                                    13/10/2023
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="numberHeart">
                                                    <a href="javascript:;" class="text-decoration-none numberanc">
                                                        <div class="row align-items-center justify-content-end">
                                                            <div class="col-auto pe-0">
                                                                <div class="number">
                                                                    Read More
                                                                </div>
                                                            </div>
                                                            <div class="col ps-1">
                                                                <div class="heartBlackimg d-flex">
                                                                    <img src="{{ url('public/assets/img/whitearrow.svg')}}" alt="heartBlackimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-12">
                        <div class="mainCard p-1 shadow-lg rounded-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/card0403.svg')}}" alt="CardImg" class="h-100 w-100 img-fluid">
                                    </div>
                                </div>
                                <div class="content">
                                    {{-- <div class="col-12">
                                        <div class="threeDiv">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="threeImg d-flex">
                                                                <div class="roundedImg">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                                <div class="roundedImg roundedImgnegative">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                                <div class="roundedImg roundedImgnegative">
                                                                    <img src="{{ url('public/assets/img/roundimg.png')}}" alt="roundimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col px-0">
                                                            <div class="places">
                                                                9+ bit places 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="dropdown myDropdown">
                                                            <button class="btn dropdown-toggle myDropdowntoggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div class="threeDots d-flex">
                                                                <img src="{{ url('public/assets/img/threeBlackdots.svg')}}" alt="threedots" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                                            <li><a class="dropdown-item" href="#">Share</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="cardHeadingmain">
                                            <a href="javascript;;" class="cardHeading">
                                                msme growth engine of indian economy ?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="cardSubHeading">
                                            The MSME Industry segment contributes 33% of the Country's GDP and generates over 120 million jobs across industries and regions in the country contributing towards wealth creation at the grassroot level.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row align-items-center justify-content-between pt-3">
                                            <div class="col-auto">
                                                <div class="Downtxt">
                                                    13/10/2023
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="numberHeart">
                                                    <a href="javascript:;" class="text-decoration-none numberanc">
                                                        <div class="row align-items-center justify-content-end">
                                                            <div class="col-auto pe-0">
                                                                <div class="number">
                                                                    Read More
                                                                </div>
                                                            </div>
                                                            <div class="col ps-1">
                                                                <div class="heartBlackimg d-flex">
                                                                    <img src="{{ url('public/assets/img/whitearrow.svg')}}" alt="heartBlackimg" class="h-100 w-100 img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-sm-6 col-lg-4 col-xl-4">
                <div class="row">
                    <div class="col-12">
                        <div class="mainCard p-1 shadow-lg rounded-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/blogCard0404.svg')}}" alt="CardImg" class="h-100 w-100 img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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