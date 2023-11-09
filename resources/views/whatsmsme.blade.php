@extends('../main')


@push('meta')       
    <title>MSMEPCI/WHATSMSME</title>
@endpush


@push('styles')
@endpush


@section('content')
<div class="container-fluid whatmsmeSection py-md-5 py-4">
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
                            <div class="cardContent  px-3">
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
                    <div class="col-lg-4 col-sm-6 px-0 order-sm-3 order-2 d-lg-block d-none">
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
                    <div class="col-12  px-0 order-sm-3 order-2 d-lg-none d-block">
                        <div class="msmeCardWhat">
                            <div class="row mx-0">
                                <div class="col-sm-6 px-0">
                                    <div class="cardImg">
                                        <img src="{{ url('public/assets/img/medium.png')}}" alt="image" class="img-fluid w-100 h-100" />
                                    </div>
                                </div>
                                <div class="col-sm-6 px-0">
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
    </div>
</div>
@endsection


@push('scripts')
@endpush