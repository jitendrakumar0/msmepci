@extends('../main')


@push('meta')       
    <title>Trusted Mobile App Development Company in India | IMG Global Infotech</title>
@endpush


@push('styles')

@endpush


@section('content')
    {{-- chairman Section Start --}}
    <div class="container-fluid chairmanSection bg-light py-4 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-10 col-lg-8 col-xl-6">
                            <div class="row ">
                                <div class="col-12">
                                    <div class="chairmanImg overflow-hidden rounded-3">
                                        <img src="{{ url('public/assets/img/chairmanSecond.jpg')}}" alt="chairmanImg" class="h-100 w-100 img-fluid object-fit-cover">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ChairmanName text-center">
                                        Dr E Muthuraman(Chairman)
                                    </div>
                                </div>
                                {{-- <div class="col-12">
                                    <div class="position text-center">
                                        Chairman
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <div class="description text-center pt-3">
                                        MSME Promotion Council Chairman Shri Dr. E. Muthuraman has welcomed the much-awaited Foreign Trade Policy from the Commerce Ministry under the guidance of Hon’ble Prime Minister Shri Narendra Modi Ji and Commerce and Industry Minister Shri Piyush Goyal Ji, which broke the traditional Five-Year policy lasting term and adopted the ‘Long Term’ focus for the policy, giving a visionary initiative to our country.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid chairmanTwoSection bg-light py-4 py-md-5">
        <div class="container">
            <div class="row gap-2 justify-content-center align-items-center">
                <div class="col-12 col-sm-10 col-lg-5">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="chairmanImg overflow-hidden rounded-3">
                                <img src="{{ url('public/assets/img/chairmanSecond.jpg')}}" alt="chairmanImg" class="h-100 w-100 img-fluid object-fit-cover">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-lg-6">
                    <div class="col-12">
                        <div class="ChairmanName text-center text-lg-start">
                            Dr E Muthuraman
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="position text-center text-lg-start pt-2">
                            Chairman
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="description text-center text-lg-start pt-2 pt-xl-3">
                            MSME Promotion Council Chairman Shri Dr. E. Muthuraman has welcomed the much-awaited Foreign Trade Policy from the Commerce Ministry under the guidance of Hon’ble Prime Minister Shri Narendra Modi Ji and Commerce and Industry Minister Shri Piyush Goyal Ji, which broke the traditional Five-Year policy lasting term and adopted the ‘Long Term’ focus for the policy, giving a visionary initiative to our country.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- chairman Section Ends --}}
    
    {{-- gallary Page start --}}
        <div class="container-fluid gallarySectionMain">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="upperBack">
                        <div class="text d-flex align-items-center justify-content-center h-100">
                            <div class="name">
                                Gallary
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- glight Section Start --}}
        <div class="container-fluid gallarySection px-0 py-lg-5 pt-5 pb-0 ">
            <div class="container">
                <div class="row glightboxMain g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="row h-100 g-4">
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-02.jpg')}}" class=" GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-02.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-03.jpg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-03.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/g-04.jpg')}}" class=" glightImg GLightbox gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-04.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-md-block d-none">
                        <a href="{{ url('public/assets/img/gallaryimg/g-01.jpg')}}" class=" glightImg GLightbox gallary d-block h-100">
                            <img src="{{ url('public/assets/img/gallaryimg/g-01.jpg')}}" alt="image" class="rounded-3" />
                        </a>
                    </div>
                    <div class="col-lg-4 d-lg-block d-none">
                        <div class="row h-100 g-4">
                            <div class="col-12">
                                <a href="{{ url('public/assets/img/gallaryimg/g-05.jpg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-05.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-06.jpg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-06.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                            <div class="col-6 galleryBox">
                                <a href="{{ url('public/assets/img/gallaryimg/g-07.jpg')}}" class="glightbox GLightbox glightImg gallary d-block">
                                    <img src="{{ url('public/assets/img/gallaryimg/g-07.jpg')}}" alt="image" class="rounded-3" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- glight Section Ends --}}
    
    {{-- gallary Page Ends --}}



@endsection


@push('scripts')
<script>
    GLightbox({
    selector: '.gallary'
    })
</script>
@endpush