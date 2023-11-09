@extends('../main')


@push('meta')       
    <title>MSMEPCI/CONTACT</title>
@endpush


@push('styles')
@endpush


@section('content')

<div class="container-fluid headingSection contactSection contactheading position-relative">
    <div class="h-100 d-flex align-items-center position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-12 pageheading text-center">Contact Us</div>
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="headingBreadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item headingTitle"><a href="index.html" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item headingTitle active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                    <textarea class="form-control  border-0 shadow-none" placeholder="Leave a comment here" id="textArea" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mx-auto">
                            <div class="mx-auto text-center">
                                <button class=" msmiBtn    " type="submit">Submit </button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
@endpush