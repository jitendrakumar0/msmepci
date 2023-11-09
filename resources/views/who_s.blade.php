@extends('../main')


@push('meta')       
    <title>MSMEPCI/WHOS'S</title>
@endpush


@push('styles')
@endpush


@section('content')
<!-- page heading section start -->
<div class="container-fluid headingSection contactheading blogSection position-relative">
    <div class="h-100 d-flex align-items-center position-relative z-1">
        <div class="container">
            <div class="row">
                <div class="col-12 pageheading text-center">Who's Who</div>
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="headingBreadcrumb">
                        <ol class="breadcrumb justify-content-center align-items-center mb-0">
                            <li class="breadcrumb-item headingTitle"><a href="index.html" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item headingTitle active" aria-current="page">Who's Who</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page heading section end -->

{{-- who's section start  --}}
<div class=" container-fluid contactUs whoSection py-md-5 py-4">
    <div class="container">
        <div class="row gap-lg-0 gap-4">
            <div class="col-lg-6 col-12 ">
               <div class="fillterImage">
                <img src="{{ url('public/assets/img/fillter.jpg')}}" alt="image" class="img-fluid w-100 h-100" />
               </div>
            </div>
            <div class="col-lg-6 col-12 ">
                <div class="formSection bg-light p-xl-5 p-4">
                    <form>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="firstName" class="form-label formLabel">Name & Designation</label>
                                    <input type="text" class="form-control formInput border-0 shadow-none" placeholder="Name & Designation" id="firstName" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="mb-3">
                                    <label for="lastName" class="form-label formLabel">Phone Number</label>
                                    <input type="text" class="form-control formInput border-0 shadow-none" placeholder="Phone Number" id="lastName" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label formLabel">Email Address</label>
                                    <input type="number" maxlength="10" class="form-control formInput border-0 shadow-none" placeholder="Enter Email" id="phoneNumber" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="lastName" class="form-label formLabel">Department</label>
                                    <select class="form-select formInput  border-0 shadow-none" aria-label="Default select example">
                                        <option selected="">-Select Any Department-</option>
                                        <option value="1">Minister</option>
                                        <option value="2">Minister Of State</option>
                                        <option value="3">Secretary</option>
                                        <option value="4">Additional Secretary</option>
                                        <option value="5">Joint Secretary</option>
                                        <option value="6">NIC Unit</option>
                                        <option value="7">Administrative Unit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mx-auto">
                                <div class="mx-auto text-center">
                                    <button class=" msmiBtn    " type="submit">Apply </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid whoSection pb-md-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="row gap-4">
                    {{-- <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col"><div class="heading">Who's Who</div></div>
                            <div class="col-auto">
                                <div class="dropdown fillterDropdown">
                                    <button class="btn bg-transparent dropdown-toggle border-0 shadow-none fillterButton" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                     <span class="d-inline-flex fillterIcon">
                                        <img src="{{ url('public/assets/img/Filter.svg')}}" alt="image" class="img-fluid w-100 h-100" />
                                     </span>
                                    </button>
                               
                                    <ul class="categoryUl dropdown-menu">
                                        <li class="categoryLi list-unstyled">
                                          <div class="form-check formCheckWrapper">
                                            <input class="form-check-input formCheckInp" type="checkbox" value="" id="flexCheckChecked0">
                                            <label class="form-check-label formCheckLbl" for="flexCheckChecked0">
                                                Name & Designation
                                            </label>
                                          </div>
                                        </li>
                                        <li class="categoryLi list-unstyled">
                                          <div class="form-check formCheckWrapper">
                                            <input class="form-check-input formCheckInp" type="checkbox" value="" id="flexCheckChecked1">
                                            <label class="form-check-label formCheckLbl" for="flexCheckChecked1">
                                                Phone Number
                                            </label>
                                          </div>
                                        </li>
                                        <li class="categoryLi list-unstyled">
                                          <div class="form-check formCheckWrapper">
                                            <input class="form-check-input formCheckInp" type="checkbox" value="" id="flexCheckChecked2">
                                            <label class="form-check-label formCheckLbl" for="flexCheckChecked2">
                                                Email Address
                                            </label>
                                          </div>
                                        </li>
                                        <li class="categoryLi list-unstyled">
                                          <div class="form-check formCheckWrapper">
                                            <input class="form-check-input formCheckInp" type="checkbox" value="" id="flexCheckChecked3">
                                            <label class="form-check-label formCheckLbl" for="flexCheckChecked3">
                                                Department
                                            </label>
                                          </div>
                                        </li>
                                      </ul>
                                    
                                  </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Minister</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Narayan Tatu Rane (Minister)</a></td>
                          
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content">3 256</td>
                                <td class="content">min-msme[at]nic[dot]in</td>
                                <td class="content">51</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Swapnil S. Patil (PS)</a></td>
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content"></td>
                                <td class="content">pstomin-msme[at]nic[dot]in</td>
                                <td class="content">164</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Sanap Bajirao Ramnath (OSD)</a></td>
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content"></td>
                                <td class="content">osd-msme[at]nic[dot]in</td>
                                <td class="content">49A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Dr. Sachin Bhadane (Addl. PS)</a></td>
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content"></td>
                                <td class="content">apstomin-msme[at]nic[dot]in</td>
                                <td class="content">165</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Shri Lokesh Kumar (Asst. PS)</a></td>
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content"></td>
                                <td class="content">pstomin-msme[at]nic[dot]in</td>
                                <td class="content"></td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Amol Sukhdev Gavali (Asst. PS)</a></td>
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content"> 3 256</td>
                                <td class="content">pstomin-msme[at]nic[dot]in</td>
                                <td class="content">123</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Ms. Vandana Santosh Jadhav (2nd PA)</a></td>
                                <td class="content">	23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content"></td>
                                <td class="content">pstomin-msme[at]nic[dot]in</td>
                                <td class="content">166</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Office of Minister</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Shri Harbhajan Singh (Sr. AO)</a></td>
                                <td class="content">23061566/23061739</td>
                                <td class="content">23063141</td>
                                <td class="content">3 256</td>
                                <td class="content">pstomin-msme[at]nic[dot]in</td>
                                <td class="content">166</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh. Prahlad Singh (PPS)</a></td>
                                <td class="content">23061566/1739/2778</td>
                                <td class="content"></td>
                                <td class="content">3 256</td>
                                <td class="content">prahladkadam[at]dcmsme[dot]gov[dot]in</td>
                                <td class="content">166</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Minister Of State</div>

                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh Bhanu Pratap Singh Verma (Minister Of State)</a></td>
                                <td class="content">	23061258, 23063142</td>
                                <td class="content">23010324</td>
                                <td class="content">	2 455</td>
                                <td class="content">mos-msme[at]gov[dot]in</td>
                                <td class="content">	133</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh Shantanu Agarwal (Addl. PS)</a></td>
                                <td class="content">23061258, 23063142</td>
                                <td class="content">23010324</td>
                                <td class="content">2 455</td>
                                <td class="content">mos-msme[at]nic[dot]in</td>
                                <td class="content">	227-B</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh Anuj Awasthi (1st PA to MoS)</a></td>
                                <td class="content">23061258, 23063142</td>
                                <td class="content">23010324</td>
                                <td class="content">2 455</td>
                                <td class="content">mos-msme[at]gov[dot]in</td>
                                <td class="content">	227-B</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh Abhinav Tripathi (2nd PA to MOS)</a></td>
                                <td class="content">23061258, 23063142</td>
                                <td class="content">23061258</td>
                                <td class="content">2 455</td>
                                <td class="content">awasthi[dot]anuj[at]gov[dot]in</td>
                                <td class="content">	227-B</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh Neeraj Kumar (2nd PA to MOS)</a></td>
                                <td class="content">23061258, 23063142</td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content">	227B1</td>
                              </tr>
        
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Secretary</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Shri S. C. L Das (Secretary)</a></td>
                                <td class="content">	23062107, 23061023</td>
                                <td class="content">23063045</td>
                                <td class="content">	</td>
                                <td class="content">secretary-msme[at]nic[dot]in</td>
                                <td class="content">	149</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt. R. Bhuvaneswari (PSO)</a></td>
                                <td class="content">23061023,23062107</td>
                                <td class="content">23063045</td>
                                <td class="content">2 349</td>
                                <td class="content">bhuvaneswari[dot]65[at]nic[dot]in</td>
                                <td class="content">169A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh. D. Sudheer (PS)</a></td>
                                <td class="content">011-23061023, 230621</td>
                                <td class="content"></td>
                                <td class="content">2 349</td>
                                <td class="content">secretary-msme[at]nic[dot]in</td>
                                <td class="content">	169A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh Rajiv Sharma (PPS)</a></td>
                                <td class="content">23062107, 23061023</td>
                                <td class="content">23063045</td>
                                <td class="content">2 349</td>
                                <td class="content"></td>
                                <td class="content">	169 A</td>
                              </tr>
        
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Additional Secretary</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Dr. Rajneesh (AS & DC)</a></td>
                                <td class="content">23061176</td>
                                <td class="content">23062315</td>
                                <td class="content">	</td>
                                <td class="content">dcmsme[at]nic[dot]in</td>
                                <td class="content">	701</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> P.B. Joshi (PPS)</a></td>
                                <td class="content">23061176</td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content">dcmsme[at]nic[dot]in</td>
                                <td class="content">701</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt. Surekha Mohan (PS)</a></td>
                                <td class="content">23061176</td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content">dcmsme[at]nic[dot]in</td>
                                <td class="content">	701</td>
                              </tr>
        
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">AS & FA</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt Arti Bhatnagar (AS & FA)</a></td>
                                <td class="content">23062481    </td>
                                <td class="content">23062481 </td>
                                <td class="content">	</td>
                                <td class="content">arti[dot]bhatnagar[at]nic[dot]in    </td>
                                <td class="content">121</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt Anupama P. (PPS)</a></td>
                                <td class="content">23062756</td>
                                <td class="content">23062101</td>
                                <td class="content"></td>
                                <td class="content">anupama[dot]p[at]nic[dot]in</td>
                                <td class="content">244 A</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Joint Secretary</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Vipul Goel (JS-ARI)</a></td>
                                <td class="content">23063283    </td>
                                <td class="content">23063283 </td>
                                <td class="content">2 230	</td>
                                <td class="content">js[dot]ari[at]nic[dot]in   </td>
                                <td class="content">	122A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt Anupama P. (PPS)</a></td>
                                <td class="content">23063283</td>
                                <td class="content"></td>
                                <td class="content">	2 230</td>
                                <td class="content">g[dot]burman[at]nic[dot]in</td>
                                <td class="content">	122 A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt Mercy Epao (JS-SME)</a></td>
                                <td class="content">23061543</td>
                                <td class="content">23062858</td>
                                <td class="content">	2 293</td>
                                <td class="content">js[dot]sme[at]nic[dot]in</td>
                                <td class="content">		171</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt. Machiraju Sarada (Sr PPS)</a></td>
                                <td class="content">23061543</td>
                                <td class="content">23062858</td>
                                <td class="content">		3 238</td>
                                <td class="content"></td>
                                <td class="content">	171</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt Vandana Monga (PS)</a></td>
                                <td class="content">23061543</td>
                                <td class="content">23062858</td>
                                <td class="content">	3 238</td>
                                <td class="content"></td>
                                <td class="content">171</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh. Ateesh Kumar Singh (JS-AFI)</a></td>
                                <td class="content">23062081</td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content">js[dot]afi-msme[at]gov[dot]in</td>
                                <td class="content">49,Udyog Bhawan</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh. Manohar Lal (PPS)</a></td>
                                <td class="content">01123062081</td>
                                <td class="content"></td>
                                <td class="content">2 457</td>
                                <td class="content"></td>
                                <td class="content">48</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Economic Adviser</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Ms Simmi Chaudhary (EA)</a></td>
                                <td class="content">23063433    </td>
                                <td class="content"> </td>
                                <td class="content">	2 222</td>
                                <td class="content">   </td>
                                <td class="content">	124-C</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Smt K. Anuradha (PPS)</a></td>
                                <td class="content">23063433</td>
                                <td class="content"></td>
                                <td class="content">	2 282</td>
                                <td class="content">avr[dot]141166[at]gov[dot]in</td>
                                <td class="content">	265-A</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">DDG (DATC & DBT)</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. P. Palanivel (DDG)</a></td>
                                <td class="content">23062241    </td>
                                <td class="content">23062241 </td>
                                <td class="content">	2 241</td>
                                <td class="content"> ppalanivel[dot]iss[at]gov[dot]in  </td>
                                <td class="content">	723, Nirman Bhawan</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content "> Sh N K Chowdhury (PS)</a></td>
                                <td class="content">23062241</td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content"></td>
                                <td class="content">	738-B, Nirman Bhawan</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">NIC Unit</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Dr. Manoj Kumar Gupta (STD)</a></td>
                                <td class="content">23061158    </td>
                                <td class="content"> </td>
                                <td class="content"></td>
                                <td class="content">	mkg[at]nic[dot]in</td>
                                <td class="content">	737, NB</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt. SM Rani (Scientist C)</a></td>
                                <td class="content">23062354</td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">	smrani[at]nic[dot]in</td>
                                <td class="content">		737-NB</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Akshansh Tyagi (Scientist B)</a></td>
                                <td class="content">23062354,23061156</td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">		akshansh[dot]tyagi96[at]nic[dot]in</td>
                                <td class="content">		737-NB</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt. Renu (Scientist B)</a></td>
                                <td class="content">23061158</td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">	renu[dot]1992[at]nic[dot]in</td>
                                <td class="content">		737-NB</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 table-responsive">
                        <div class="sectionMainHeading mb-sm-3 mb-2 ">Administrative Unit</div>
                        <table class="table table-hover text-nowrap align-middle  tableSection">
                            <thead>
                              <tr>
                                <th scope="col">NAME & DESIGNATION</th>
                                <th scope="col">OFFICE PHONE</th>
                                <th scope="col">OFFICE FAX</th>
                                <th scope="col">EXTENTION</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">ROOM NO</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Supriyo Ghosh (Director-ARI)</a></td>
                                <td class="content">23061636    </td>
                                <td class="content"> </td>
                                <td class="content">2 362</td>
                                <td class="content">	supriyo[dot]ghosh47[at]gov[dot]in</td>
                                <td class="content">	356-A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Vivek Ashish (Dir. (IFW/Budget))</a></td>
                                <td class="content">23063281</td>
                                <td class="content"></td>
                                <td class="content">	2 320	</td>
                                <td class="content">vivek[dot]ashish[at]nic[dot]in</td>
                                <td class="content">	169 A</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Vinamra Mishra (Director (GA&TP))</a></td>
                                <td class="content">23063198</td>
                                <td class="content"> 23061756</td>
                                <td class="content">	2 241	</td>
                                <td class="content">	vinamra[dot]mishra[at]gov[dot]in</td>
                                <td class="content">		254</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Ajay Kumar (DS (DBT/DATC/Vigilance))</a></td>
                                <td class="content">23062736 </td>
                                <td class="content"></td>
                                <td class="content">2 238	</td>
                                <td class="content">ajay[dot]kumar71[at]nic[dot]in  </td>
                                <td class="content">	602, NB</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Deepak Rai Narang (DS(ARI))</a></td>
                                <td class="content">23062745 </td>
                                <td class="content">23062886</td>
                                <td class="content">3 271	</td>
                                <td class="content">deepak[dot]narang[at]nic[dot]in </td>
                                <td class="content">	275-D</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt. Maya Pandey (DS(HR))</a></td>
                                <td class="content">23063290 </td>
                                <td class="content"></td>
                                <td class="content">3 218	</td>
                                <td class="content">mayapandey[dot]dgca[at]gov[dot]in </td>
                                <td class="content">	468 C</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Shri Arun G. (Joint Director (ARI/Media))</a></td>
                                <td class="content">23062148 </td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">arun[dot]g[at]gov[dot]in  </td>
                                <td class="content">	719</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Santosh Kumar Verma (DS(IC/SME/EDI/Coordination))</a></td>
                                <td class="content">23062736 </td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">ajay[dot]kumar71[at]nic[dot]in  </td>
                                <td class="content">	321</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt A. Vandana (SO (HR))</a></td>
                                <td class="content">23062210 </td>
                                <td class="content"></td>
                                <td class="content">3 261	</td>
                                <td class="content">	umam[at]dcmsme[dot]gov[dot]in  </td>
                                <td class="content">	429-C</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt. Neelam Sharma (US(SME/IC/Media))  </a></td>
                                <td class="content">23063219 </td>
                                <td class="content"></td>
                                <td class="content">2 245	</td>
                                <td class="content">neelam[dot]sharma25[at]nic[dot]in  </td>
                                <td class="content">429B</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Pradeep Kumar Singh (US-KVI)</a></td>
                                <td class="content">23062573 </td>
                                <td class="content"></td>
                                <td class="content">	2 245	</td>
                                <td class="content">pk[dot]singh23[at]gov[dot]in</td>
                                <td class="content">436</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Ram Sahai Verma (US (DBT/DATC/EDI))</a></td>
                                <td class="content">23061461 </td>
                                <td class="content"></td>
                                <td class="content">1 461	</td>
                                <td class="content">ramsahai[dot]verma[at]nic[dot]in  </td>
                                <td class="content">732, Nirman Bhawan</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Vivek Mathur (US IFW-2)</a></td>
                                <td class="content">23063313 </td>
                                <td class="content"></td>
                                <td class="content">	3 448	</td>
                                <td class="content">vivek[dot]mathur[at]nic[dot]in </td>
                                <td class="content">	268</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt. Santosh Dalyan (US(Vig, RAMP))</a></td>
                                <td class="content">23061284 </td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">santosh[dot]dalyan[at]nic[dot]in </td>
                                <td class="content">	728, NB</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Palravindran k. (US (PMEGP))</a></td>
                                <td class="content">23062573 </td>
                                <td class="content"></td>
                                <td class="content">	2 573	</td>
                                <td class="content">palravi[dot]k[at]nic[dot]in </td>
                                <td class="content">		436</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Saurabh Kumar (SO-SME)</a></td>
                                <td class="content">23061500 </td>
                                <td class="content"></td>
                                <td class="content">3 283</td>
                                <td class="content">saurabh[dot]kumar88[at]nic[dot]in</td>
                                <td class="content">	462</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Hemant Sharma (SO-IC)</a></td>
                                <td class="content">	23063526 </td>
                                <td class="content"></td>
                                <td class="content">		3 368	</td>
                                <td class="content"> </td>
                                <td class="content">	462</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Ajay Kumar (US IFW-1/Budget)</a></td>
                                <td class="content">23063293 </td>
                                <td class="content"></td>
                                <td class="content">		</td>
                                <td class="content">ajay[dot]kumar78[at]nic[dot]in </td>
                                <td class="content">		429</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. N. Raja Swamy (US (HR/GA))</a></td>
                                <td class="content">23063168 </td>
                                <td class="content"></td>
                                <td class="content">	3 367	</td>
                                <td class="content">nraja[dot]swamy[at]nic[dot]in</td>
                                <td class="content">	430</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh Kamal Kumar (SO-GA/Coord.)</a></td>
                                <td class="content">23061574 </td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content">	kamal[dot]koli[at]nic[dot]in</td>
                                <td class="content">	462</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt. Rajeshwari Konduri Raja (DD(WEC))</a></td>
                                <td class="content">23061284 </td>
                                <td class="content"></td>
                                <td class="content">		2 236	</td>
                                <td class="content"> </td>
                                <td class="content">	429-B</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Rajeev Jain (SO-EDI)</a></td>
                                <td class="content">23063289 </td>
                                <td class="content"></td>
                                <td class="content">	2 239</td>
                                <td class="content">rajeevkumar[dot]jain[at]nic[dot]in </td>
                                <td class="content">	460</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Harish Rawat (AD-OL)</a></td>
                                <td class="content">23062672 </td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">rawat[dot]harish[at]nic[dot]in </td>
                                <td class="content">	433</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Sh. Vishnu S. Nair (SO-Vig.)</a></td>
                                <td class="content">	23061473 </td>
                                <td class="content"></td>
                                <td class="content">	</td>
                                <td class="content">vishnu[dot]nair[at]gov[dot]in </td>
                                <td class="content">	706</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Ms. Megha Jain (SO-RAMP)</a></td>
                                <td class="content">23062745 </td>
                                <td class="content"></td>
                                <td class="content"></td>
                                <td class="content">megha[dot]jain[at]nic[dot]in </td>
                                <td class="content">	261</td>
                              </tr>
                              <tr>
                                <td class="content"><a href="javascript:;" class="text-decoration-none content ">Smt Ranju Sikdar (SO-COIR)</a></td>
                                <td class="content">23063641 </td>
                                <td class="content"></td>
                                <td class="content">	3 336</td>
                                <td class="content">ranju[dot]sikdar14[at]nic[dot]in </td>
                                <td class="content">	450</td>
                              </tr>
        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- who's section end  --}}





@endsection


@push('scripts')
<script>
    var glightbox = GLightbox({
        loop: true,
        selector: ".glightboxx",
    });
</script>
@endpush