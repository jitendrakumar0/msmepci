@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')
@endpush


@section('content')
<!-- page heading section start -->
<div class="container-fluid headingSection contactheading position-relative">
    <div class="h-100 d-flex align-items-center position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-12 pageheading text-center">About Us</div>
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="headingBreadcrumb">
                        <ol class="breadcrumb justify-content-center align-items-center mb-0">
                            <li class="breadcrumb-item headingTitle"><a href="index.html" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item headingTitle active" aria-current="page">About  Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page heading section end -->
<div class="container-fluid aboutUs pt-4 pt-md-5">
    <div class="container">
        <div class="row gap-5">
            {{-- <div class="col-sm-12 text-center">
                <div class="common-heading ">
                    <div><span>About Us</span> </div>
                </div>
            </div> --}}

            <div class="col-lg-10 mx-auto">
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
@endsection


@push('scripts')
@endpush