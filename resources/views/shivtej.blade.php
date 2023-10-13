@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')

@endpush


@section('content')

{{-- hero section start  --}}
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

      {{-- <div class="col-12">
        <div class="swiper mySwiper heroSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/one.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
            </div>
            <div class="swiper-button-next"> 
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/rightarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
               
            </div>
            <div class="swiper-button-prev">
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/leftarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
            </div>
            <div class="swiper-pagination"></div>

        </div>
        <div class="swiper mySwiper heroSwipers">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/two.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
            </div>
            <div class="swiper-button-next"> 
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/rightarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
               
            </div>
            <div class="swiper-button-prev">
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/leftarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
            </div>
            <div class="swiper-pagination"></div>

        </div>
        <div class="swiper mySwiper heroSwipert">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/three.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
            </div>
            <div class="swiper-button-next"> 
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/rightarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
               
            </div>
            <div class="swiper-button-prev">
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/leftarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
            </div>
            <div class="swiper-pagination"></div>

        </div>
        <div class="swiper mySwiper heroSwiperf">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="sliderImg">
                    <img src="  {{ url('public/assets/img/herosection/four.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </div>
              </div>
            </div>
            <div class="swiper-button-next"> 
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/rightarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
               
            </div>
            <div class="swiper-button-prev">
                <span class="swiperIcon d-inline-flex"> 
                    <img src="  {{ url('public/assets/img/herosection/leftarrownav.png')}}" alt="heroImg" class="img-fluid w-100 h-100">
                </span>
            </div>
            <div class="swiper-pagination"></div>

        </div>
      </div> --}}
    </div>
  </div>
  {{-- hero section end  --}}

  {{-- about us section start  --}}

    <!--about hero -->
    <div class="container-fluid headingSection contactheading mt-5 position-relative aboutUs">
        <div class="h-100 d-flex align-items-center position-relative z-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 pageheading text-center">About Us</div>
                    <div class="col-12">
                        <nav aria-label="breadcrumb" class="headingBreadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item headingTitle"><a href="index.html" class="text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item headingTitle active" aria-current="page">About  Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about hero end -->
  <div class="container-fluid aboutUs py-lg-5 py-md-4 py-3">
    <div class="container">
        <div class="row gap-5">
            <div class="col-sm-12 text-center">
                <div class="common-heading ">
                    <div><span>About Us</span> </div>
                </div>
            </div>
            <div class="col-lg-10 mx-auto">
                {{-- <div class="ImgAbout rounded-2 overflow-hidden">
                    <img src="{{ url('public/assets/img/aboutus.webp')}}" alt="about us" class=" img-fluid w-100 h-100">
                </div> --}}

                <div class="col-lg-11 mx-auto">
                    <div class="ImgAbout rounded-2 overflow-hidden">
                        <img src="{{ url('public/assets/img/aboutus.webp')}}" alt="about us" class=" img-fluid w-100 h-100">
                    </div>

                    <div class="content mt-4">
                        The Micro, Small and Medium Enterprises (MSME) sector has emerged as a highly vibrant and dynamic sector of the Indian economy over the last five decades. It contributes significantly in the economic and social development of the country by fostering entrepreneurship and generating largest employment opportunities at comparatively lower capital cost, next only to agriculture. MSMEs are complementary to large industries as ancillary units and this sector contributes significantly in the inclusive industrial development of the country. The MSMEs are widening their domain across sectors of the economy, producing diverse range of products and services to meet demands of domestic as well as global markets.
                    </div>   
                    <div class="content mt-3">The MSMEPC is registered under udyam registration of MSME department, Government of India. The Council will be working in close association with the Ministry to assist the MSME units in their efforts.</div>  
                    <div class="content mt-3">The Council is committed to work for the development of SMEs from manufacturing, service sectors and allied industrial / business sectors and shall be integrating Micro, Small and Medium Enterprises, Banks, Financial Institutions, Policy makers, Young & Women entrepreneurs and Start–Ups to establish and enhance contacts for better business growth and expansion.</div>  
                    <div class="content mt-2">The Council shall not only be a voice of the MSME sector of India, but it also aims to handhold the MSMEs and help them explore business opportunities across the globe with the broader aim to project India as the top exporter in the World.</div>  
                    <div class="content mt-2">The Council shall have under its banner not just MSMEs across India, but it shall have the support of all the State Small Industries Development Corporations (SSIDCS), with the aim to reach at the grass root level and the remotest MSME unit.</div>  
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- about us page end  --}}

  {{-- news section start  --}}
      
    
    
       


  <div class="container-fluid  newsSectionStart">
    <div class="container">
        <div class="row gap-lg-5 gap-md-4 gap-3">
            <div class="col-sm-12 text-center">
                <div class="common-heading ">
                    <div><span>News Section</span> </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row gap-lg-0 gap-4">
                    <div class="col-lg-6 ">
                        <div class="row ">
                            <div class="col-lg-11 mx-auto  tableSection table-responsive">
                                <table class="table table-hover tableSectionDesign w-100 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-nowrap ">MSME  NEWS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="http://dhunt.in/Cj0qk" class=" text-decoration-none d-flex align-items-center content">http://dhunt.in/Cj0qk</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://thepunjabtoday.com/punjabi/News/english/4302" class=" text-decoration-none d-flex align-items-center content">https://thepunjabtoday.com/punjabi/News/english/4302</a></td>
                                        </tr>  
                                        <tr>
                                            <td><a href="https://thenewswaale.com/dr-e-muthuraman-visited-ficci-headquarters-in-new-delhi-over-a-discussion-for-msmepc-15662.html" class=" text-decoration-none d-flex align-items-center content">https://thenewswaale.com/dr-e-muthuraman-visited-ficci-headquarters-in-new-delhi-over-a-discussion-for-msmepc-15662.html</a></td>
                                        </tr>  
                                        <tr>
                                            <td><a href="https://www.entrepenuerstories.com/press-release/featured/dr-e-muthuraman-visited-ficci-headquarters-in-new-delhi-over-a-discussion-for-msmepc/" class=" text-decoration-none d-flex align-items-center content">https://www.entrepenuerstories.com/press-release/featured/dr-e-muthuraman-visited-ficci-headquarters-in-new-delhi-over-a-discussion-for-msmepc/</a></td>
                                        </tr>  
                                        <tr>
                                            <td><a href="https://entrepreneurstreet.in/dr-e-muthuraman-visited-ficci-headquarters-in-new-delhi-over-a-discussion-for-msmepc/" class=" text-decoration-none d-flex align-items-center content">https://entrepreneurstreet.in/dr-e-muthuraman-visited-ficci-headquarters-in-new-delhi-over-a-discussion-for-msmepc/</a></td>
                                        </tr> 
                                         <tr>
                                            <td><a href="http://dhunt.in/BSQtU" class=" text-decoration-none d-flex align-items-center content">http://dhunt.in/BSQtU</a></td>
                                        </tr> 
                                         <tr>
                                            <td><a href="https://indiaflux.com/featured/msmepc-delegation-met-union-minister-narayan-rane/" class=" text-decoration-none d-flex align-items-center content">https://indiaflux.com/featured/msmepc-delegation-met-union-minister-narayan-rane/</a></td>
                                        </tr>  
                                        <tr>
                                            <td><a href="https://thenewswaale.com/msmepc-delegation-met-union-minister-narayan-rane-15236.html" class=" text-decoration-none d-flex align-items-center content">https://thenewswaale.com/msmepc-delegation-met-union-minister-narayan-rane-15236.html</a></td>
                                        </tr>  
                                        <tr>
                                            <td><a href="https://medium.com/@dineshprajapati969696/msmepc-delegation-met-union-minister-narayan-rane-d73fed839acb" class=" text-decoration-none d-flex align-items-center content">https://medium.com/@dineshprajapati969696/msmepc-delegation-met-union-minister-narayan-rane-d73fed839acb</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.klusster.com/portfolios/prwizard/contents/379855?code=d9ee4445-6059-4365-b045-6641c686e504&share_content=true" class=" text-decoration-none d-flex align-items-center content">https://www.klusster.com/portfolios/prwizard/contents/379855?code=d9ee4445-6059-4365-b045-6641c686e504&share_content=true</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://entrepreneurstreet.in/msmepc-delegation-met-union-minister-narayan-rane/" class=" text-decoration-none d-flex align-items-center content">https://entrepreneurstreet.in/msmepc-delegation-met-union-minister-narayan-rane/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://dhunt.in/DFGRr" class=" text-decoration-none d-flex align-items-center content">http://dhunt.in/DFGRr</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.entrepenuerstories.com/latest/dr-e-muthuraman-becomes-msmepc-chairman/" class=" text-decoration-none d-flex align-items-center content">https://www.entrepenuerstories.com/latest/dr-e-muthuraman-becomes-msmepc-chairman/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://thenewswaale.com/dr-e-muthuraman-becomes-msmepc-chairman-17046.html" class=" text-decoration-none d-flex align-items-center content">https://thenewswaale.com/dr-e-muthuraman-becomes-msmepc-chairman-17046.html</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://thepunjabtoday.com/punjabi/News/english/4362" class=" text-decoration-none d-flex align-items-center content">https://thepunjabtoday.com/punjabi/News/english/4362</a></td>
                                        </tr>
                                  
                                    </tbody>
                                </table>
                            </div>
                     
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row ">
                            <div class="col-lg-11 mx-auto  tableSection table-responsive">
                                <table class="table table-hover tableSectionDesign w-100 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-nowrap">MSME  NEWS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="https://entrepreneurstreet.in/dr-e-muthuraman-becomes-msmepc-chairman/" class=" text-decoration-none d-flex align-items-center content">https://entrepreneurstreet.in/dr-e-muthuraman-becomes-msmepc-chairman/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://entrepreneurstreet.in/proud-moment-for-tamil-nadu-dr-e-muthuraman/" class=" text-decoration-none d-flex align-items-center content">https://entrepreneurstreet.in/proud-moment-for-tamil-nadu-dr-e-muthuraman/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://entrepreneurstreet.in/dr-c-suresh-kumar-nominated-as-vice-chairman/" class=" text-decoration-none d-flex align-items-center content">https://entrepreneurstreet.in/dr-c-suresh-kumar-nominated-as-vice-chairman/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://dhunt.in/H75kI" class=" text-decoration-none d-flex align-items-center content">http://dhunt.in/H75kI</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://thenewswaale.com/coexistence-is-the-essence-of-india-s-vision-of-atma-nirbhar-bharat-dr-e-muthuraman-18062.html" class=" text-decoration-none d-flex align-items-center content">http://thenewswaale.com/coexistence-is-the-essence-of-india-s-vision-of-atma-nirbhar-bharat-dr-e-muthuraman-18062.html</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://indiaflux.com/coexistence-is-the-essence-of-indias-vision-of-atma-nirbhar-bharat-dr-e-muthuraman/" class=" text-decoration-none d-flex align-items-center content">https://indiaflux.com/coexistence-is-the-essence-of-indias-vision-of-atma-nirbhar-bharat-dr-e-muthuraman/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://medium.com/@guestpostingwizard/coexistence-is-the-essence-of-indias-vision-of-atma-nirbhar-bharat-dr-e-muthuraman-ae0ea2a29592" class=" text-decoration-none d-flex align-items-center content">https://medium.com/@guestpostingwizard/coexistence-is-the-essence-of-indias-vision-of-atma-nirbhar-bharat-dr-e-muthuraman-ae0ea2a29592</a></td>
                                        </tr>
    
                                        <tr>
                                            <td><a href="https://www.klusster.com/portfolios/prwizard/contents/428938?code=55aed8e2-f871-4be3-8c57-92a3c442a86a&share_content=true" class=" text-decoration-none d-flex align-items-center content">https://www.klusster.com/portfolios/prwizard/contents/428938?code=55aed8e2-f871-4be3-8c57-92a3c442a86a&share_content=true</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://entrepreneurstreet.in/coexistence-is-the-essence-of-indias-vision-of-atma-nirbhar-bharat-dr-e-muthuraman/" class=" text-decoration-none d-flex align-items-center content">https://entrepreneurstreet.in/coexistence-is-the-essence-of-indias-vision-of-atma-nirbhar-bharat-dr-e-muthuraman/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://businessnewsthisweek.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/amp/" class=" text-decoration-none d-flex align-items-center content">http://businessnewsthisweek.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/amp/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://mediabulletins.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/" class=" text-decoration-none d-flex align-items-center content">http://mediabulletins.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://contentmediasolution.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/" class=" text-decoration-none d-flex align-items-center content">https://contentmediasolution.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://onlinemediacafe.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/" class=" text-decoration-none d-flex align-items-center content">https://onlinemediacafe.com/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://businessnewsweek.in/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/" class=" text-decoration-none d-flex align-items-center content">https://businessnewsweek.in/business/msmepc-delegation-met-union-minister-narayan-rane-to-explain-their-new-online-awareness-initiative/</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="http://www.uniindia.com/muthuraman-appointed-new-chairman-of-msme-promotion-council/south/news/2844947.html" class=" text-decoration-none d-flex align-items-center content">http://www.uniindia.com/muthuraman-appointed-new-chairman-of-msme-promotion-council/south/news/2844947.html</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://pelikken.com/single/news/12826" class=" text-decoration-none d-flex align-items-center content">https://pelikken.com/single/news/12826</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                     
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 ps-lg-5">
                        <div class="sideNav">
                            <div class="row gap-2">
                                <div class="col-12">
                                    <div class="imgTime ">
                                        <img src="{{ url('public/assets/img/timesnews.webp')}}" alt="about us" class=" img-fluid w-100 h-100 overflow-hidden ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="modiIMg rounded-3">
                                        <img src="{{ url('public/assets/img/modi.webp')}}" alt="about us" class=" img-fluid w-100 h-100 rounded-3">
                                    </div>
                                    <div class="newsHeading mt-2">'Powered By...': PM Modi On IMF Raising India's FY24 GDP Growth Forecast To 6.3%</div>
                                    <div class=" d-flex align-items-center justify-content-between mt-3" >
                                        <ul class="list-unstyled d-flex gap-2 align-items-center mb-0 ">
                                            <li class="shareWrpTxt">4hr</li>
                                            <li class="shareWrpSprtr"></li>
                                            <li class="shareWrpTxt">375 shares</li>
                                        </ul>
                                        <ul class="list-unstyled d-flex gap-1 mb-0 ">
                                            <li><a href="javascript:;" class=" text-decoration-none d-flex align-items-center content socialIcon"><img src="{{ url('public/assets/img/share_whtsapp.svg')}}" alt="whats  app" class=" img-fluid w-100 h-100 rounded-3"></a></li>
                                            <li><a href="javascript:;" class=" text-decoration-none d-flex align-items-center content socialIcon"><img src="{{ url('public/assets/img/share_fb.svg')}}" alt="facebook" class=" img-fluid w-100 h-100 rounded-3"></a></li>
                                            <li><a href="javascript:;" class=" text-decoration-none d-flex align-items-center content socialIcon"><img src="{{ url('public/assets/img/share_tweet.svg')}}" alt="twitter" class=" img-fluid w-100 h-100 rounded-3"></a></li>

                                        </ul>
                                    </div>
                                    <div class="contentNews mt-2">
                                        New Delhi: Prime Minister Narendra Modi reacted to International Monetary Fund's (IMF) report forecasting India's economic growth for the current fiscal year at 6.3%. The (IMF) report improved India's economic growth for the current fiscal year to 6.3% from 6.1% earlier.Prime Minister Narendra Modi called the country a global bright spot.
                                    </div>
                                    <div class="contentNews mt-2">
                                        "Powered by the strength and skills of our people, India is a global bright spot, a powerhouse of growth and innovation. We will continue to strengthen our journey towards a prosperous India, further boosting our reforms trajectory," tweeted PM Modi.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="modiIMg rounded-3">
                                        <img src="{{ url('public/assets/img/hindustanmetro.webp')}}" alt="about us" class=" img-fluid w-100 h-100 rounded-3">
                                    </div>
                                    <div class="newsHeading mt-2">Dr.E Muthuraman visited FICCI headquarters in New Delhi over a discussion for MSMEPC</div>
                                    <div class=" d-flex align-items-center justify-content-between mt-3" >
                                        <ul class="list-unstyled d-flex gap-2 align-items-center mb-0 ">
                                            <li class="shareWrpTxt">377d</li>
                                            <li class="shareWrpSprtr"></li>
                                            <li class="shareWrpTxt">35 shares</li>
                                        </ul>
                                        <ul class="list-unstyled d-flex gap-1 mb-0 ">
                                            <li><a href="javascript:;" class=" text-decoration-none d-flex align-items-center content socialIcon"><img src="{{ url('public/assets/img/share_whtsapp.svg')}}" alt="whats  app" class=" img-fluid w-100 h-100 rounded-3"></a></li>
                                            <li><a href="javascript:;" class=" text-decoration-none d-flex align-items-center content socialIcon"><img src="{{ url('public/assets/img/share_fb.svg')}}" alt="facebook" class=" img-fluid w-100 h-100 rounded-3"></a></li>
                                            <li><a href="javascript:;" class=" text-decoration-none d-flex align-items-center content socialIcon"><img src="{{ url('public/assets/img/share_tweet.svg')}}" alt="twitter" class=" img-fluid w-100 h-100 rounded-3"></a></li>

                                        </ul>
                                    </div>
                                    <div class="contentNews mt-2">
                                        NEW DELHI 27 September : Dr. E Muthuraman Vice Chairman MSMEPC along with others visited Ficci at its National Headquarters at Tansen Marg , New Delhi. Ficci was established in 1927, It is the largest and oldest apex business organisation in India. Its history is closely interwoven with India’s struggle for independence, its industrialization, and its emergence as one of the most rapidly growing global economies.
                                    </div>
                                    <div class="contentNews mt-2">
                                        A non-government, not-for-profit organisation, It is the voice of India’s business and industry. From influencing policy to encouraging debate, engaging with policy makers and civil society, It articulates the views and concerns of industry.
                                    </div>
                                    <div class="contentNews mt-2">
                                        Mr. Muthuraman added that MSMEPC will join hands will every organisation working in this sector to promote the micro and small industry, he also stated that we aim to achieve Hon’ble PM Modi’s vission of Atmanirbhar Bharat.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                
                </div>
            </div>
        </div>
    </div>
  </div>

         {{-- glight Section Start --}}
         <div class="container-fluid gallarySection px-0 py-lg-5 py-md-4 py-3  ">
            <div class="container">
                
                <div class=" galleryRow"  id="mygallery">
                    <a href="{{ url('public/assets/img/newsone.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsone.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newstwo.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newstwo.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsthree.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsthree.webp')}}" alt="image" class="" />
                    </a>
                    
                    <a href="{{ url('public/assets/img/newsfour.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsfour.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsfive.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsfive.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newssix.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newssix.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsseveen.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsseveen.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newseight.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newseight.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsnine.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsnine.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsten.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsten.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsone.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsone.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsfour.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsfour.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newseight.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newseight.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsnine.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsnine.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsten.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsten.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsfivefive.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsfivefive.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newssixsix.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newssixsix.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newssevenseven.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newssevenseven.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newseighteight.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newseighteight.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newstenten.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newstenten.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newstententen.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newstententen.webp')}}" alt="image" class="" />
                    </a>
                    <a href="{{ url('public/assets/img/newsone.webp')}}" class="GLightbox gallary galleryHover ">
                        <img src="{{ url('public/assets/img/newsone.webp')}}" alt="image" class="" />
                    </a>
                </div>
            </div>
        </div>
        {{-- glight Section Ends --}}

  {{-- new section end  --}}

        {{-- contect us page start  --}}
        <!-- page heading section start -->
            <div class="container-fluid headingSection contactheading position-relative contactUs">
                <div class="h-100 d-flex align-items-center position-relative z-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 pageheading text-center">Contact Us</div>
                            <div class="col-12">
                                <nav aria-label="breadcrumb" class="headingBreadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item headingTitle"><a href="index.html" class="text-decoration-none">Home</a></li>
                                        <li class="breadcrumb-item headingTitle active" aria-current="page">Contact  Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <!-- page heading section end -->


    <div class=" container-fluid contactUs py-5">
        <div class="container">
            <div class="row gap-lg-0 gap-4">
                <div class="col-lg-6 col-12 order-lg-1 order-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.0378030208653!2d77.18423952427186!3d28.568627525699704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1d846557f081%3A0x37d23a4f15609462!2sBhikaji%20Cama%20Place%2C%20Rama%20Krishna%20Puram%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1697020007647!5m2!1sen!2sin" width="100%" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-12 order-lg-2 order-1">
                    <div class="formSection bg-light p-xl-5 p-4">
                        <form >
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label formLabel">Name</label>
                                        <input type="text" class="form-control formInput border-0 shadow-none" placeholder="Name" id="firstName" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label formLabel">Last Name</label>
                                        <input type="text" class="form-control formInput border-0 shadow-none" placeholder="Last Name" id="lastName" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="lastName" class="form-label formLabel">Select a topic</label>
                                        <select class="form-select formInput  border-0 shadow-none" aria-label="Default select example">
                                            <option selected>Select a topic</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="phoneNumber" class="form-label formLabel"> Mobile Number</label>
                                        <input type="number" maxlength="10" class="form-control formInput border-0 shadow-none" placeholder="Enter Number" id="phoneNumber" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="textArea" class="form-label formLabel"> Brief about this topic</label>
                                        <textarea class="form-control formInput border-0 shadow-none" placeholder="Leave a comment here" id="textArea" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 mx-auto">
                                <div class="mx-auto text-center">
                                    <button class=" border-0 shadow-none btn btn-primary    " type="submit">Submit </button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- contect us page end  --}}




        {{-- what msme section start  --}}
{{-- 
        <div class=" container-fluid whatsMsme">
            <div class="container">
                <div class="row align-items-center gap-lg-0 gap-4">
                    <div class="col-lg-7 order-lg-1 order-2">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="msmeHeading text-lg-start text-center">Manufacturing Enterprises and Enterprises rendering Service</div>
                            </div>
                            <div class="col-lg-12 col-12 mb-3 ">     
                                <div class="border-1 border whatsCard">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="imgWhats">
                                                <img src="{{ url('public/assets/img/our-mission.webp')}}" alt="image" class="img-fluid w-100 h-100" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="cardHeading">
                                                Micro
                                            </div>
                                            <div class="contentcard mt-2">
                                                Investment in Plant and Machinery or Equipment:
                                            </div>
                                            <div class="contentcard mt-1">
                                                Not more than Rs.1 crore and Annual Turnover ; not more than Rs. 5 crore
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mb-3 ">     
                                <div class="border-1 border whatsCard">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="imgWhats">
                                                <img src="{{ url('public/assets/img/our-vision.webp')}}" alt="image" class="img-fluid w-100 h-100" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="cardHeading">
                                                Small
                                            </div>
                                            <div class="contentcard mt-2">
                                                Investment in Plant and Machinery or Equipment:
                                            </div>
                                            <div class="contentcard mt-1">
                                                Not more than Rs.10 crore and Annual Turnover ; not more than Rs. 50 crore
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mb-3 ">     
                                <div class="border-1 border whatsCard">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="imgWhats">
                                                <img src="{{ url('public/assets/img/our-value.webp')}}" alt="image" class="img-fluid w-100 h-100" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="cardHeading">
                                                Medium
                                            </div>
                                            <div class="contentcard mt-2">
                                                Investment in Plant and Machinery or Equipment:
                                            </div>
                                            <div class="contentcard mt-1">
                                                Not more than Rs.50 crore and Annual Turnover ; not more than Rs. 250 crore
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2 order-1">
                        <div class="msmeImg mx-auto">
                            <img src="{{ url('public/assets/img/msme2.jpg')}}" alt="image" class="img-fluid w-100 h-100" />
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}


    {{-- what msme section end  --}}


    <div class="container-fluid whatmsmeSection">
        <div class="container">
            <div class="row gap-md-5 gap-4">
                <div class="col-12">
                    <div class="heading fw-semibold text-center text-black">Revised Classification applicable w.e.f 1st July 2020</div>
                    <div class="title fw-semibold  text-center text-black">Composite Criteria: Investment in Plant & Machinery/equipment and Annual Turnover</div>
                    <div class="subTitle fw-semibold text-center text-black"> <strong>Classification:</strong> Manufacturing Enterprises and Enterprises rendering Services</div>

                </div>
                <div class="col-12">
                    <div class="row mx-0 gap-sm-0 gap-3 align-items-center ">
                        <div class="col-lg-4 col-sm-6 order1 px-0">
                            <div class="msmeCardWhat">
                                <div class=" card-header">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/micro.jpg')}}" alt="image" class="img-fluid w-100 h-100" />
                                    </div>
                                </div>
                                <div class="cardContent">
                                    <div class="cardHeading my-2">Micro</div>
                                    <div class="content">Investment in Plant and Machinery or Equipment: Not more than Rs.1 crore and Annual Turnover ; not more than Rs. 5 crore</div>
                                    {{-- <div class="content">Not more than Rs.1 crore and Annual Turnover ; not more than Rs. 5 crore</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 order-sm-2 order-3 px-0">
                            <div class="msmeCardWhat">
                                <div class=" card-header d-sm-none d-block">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/msme.png')}}" alt="image" class="img-fluid w-100 h-100" />
                                    </div>
                                </div>
                                <div class="cardContent px-sm-3">
                                    <div class="cardHeading my-2">Small</div>
                                    <div class="content">Investment in Plant and Machinery or Equipment: Not more than Rs.10 crore and Annual Turnover ; not more than Rs. 50 crore</div>
                                    {{-- <div class="content">Not more than Rs.10 crore and Annual Turnover ; not more than Rs. 50 crore</div> --}}
                                </div>
                                <div class=" card-header d-sm-block d-none">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/msme.png')}}" alt="image" class="img-fluid w-100 h-100" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 px-0 order-sm-3 order-2">
                            <div class="msmeCardWhat">
                                <div class=" card-header">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/medium.png')}}" alt="image" class="img-fluid w-100 h-100" />
                                    </div>
                                </div>
                                <div class="cardContent px-sm-3">
                                    <div class="cardHeading my-2">Medium</div>
                                    <div class="content">Investment in Plant and Machinery or Equipment: Not more than Rs.50 crore and Annual Turnover ; not more than Rs. 250 crore</div>
                                    {{-- <div class="content">Not more than Rs.50 crore and Annual Turnover ; not more than Rs. 250 crore</div> --}}
                                </div>
                            </div>
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
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
  </script>

{{-- <script> 
    var swiper = new Swiper(".heroSwiper", {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, 0, -400],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    });
    var swiper2 = new Swiper(".heroSwipers", {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: ["-120%", 0, -500],
        },
        next: {
          shadow: true,
          translate: ["120%", 0, -500],
        },
      },
    });
    var swiper3 = new Swiper(".heroSwipert", {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: ["-20%", 0, -1],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    });
    var swiper4 = new Swiper(".heroSwiperf", {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, 0, -800],
          rotate: [180, 0, 0],
        },
        next: {
          shadow: true,
          translate: [0, 0, -800],
          rotate: [-180, 0, 0],
        },
      },
    });
  </script>  --}}

  <script>

 
    // $("#mygallery").justifiedGallery();      
    $('#mygallery').justifiedGallery({
    rowHeight : 280,
    lastRow : 'justify',
    margins : 0,
    maxRowsCount:4,
    margins:20,
    captions:true,
    
});  
// $("#mygallery").justifiedGallery({waitThumbnailsLoad: false});
</script>

<script>
    GLightbox({
    selector: '.gallary'
    })
</script>

@endpush