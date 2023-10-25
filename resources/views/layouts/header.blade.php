{{-- navbar start  --}}
<nav class="navbar navbarone flex-nowrap sticky-top bg-white navbar-expand-xl shadow-sm overflow-hidden container-fluid" aria-label="Offcanvas navbar large" id="navbar">
    <div class="container">
        <a class="navbar-brand navlogo d-flex align-items-center justify-content-center me-0" href="{{ route('index') }}">
            {{-- <img src="assets/img/msmepc-logo.png" alt="logo" class="h-100 w-100 img-fluid"> --}}
            <img src="{{ url('public/assets/img/navbar/msmepc-logo.png')}}" alt="logo" class="h-100 w-100 img-fluid">
        </a>
        <div class="offcanvas offcanvas-start navoffcanvas" tabindex="-1" id="navbaroffcanvas" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header border-bottom">
            <div class="offcanvas-title offcanvaslogo" id="offcanvasNavbar2Label">
                {{-- <img src="assets/img/msmepc-logo.png" alt="offcanvas logo" class="h-100 w-100 img-fluid"> --}}
                <img src="{{ url('public/assets/img/navbar/msmepc-logo.png')}}" alt="offcanvas logo " class="h-100 w-100 img-fluid">
            </div>
            <button type="button" class="btn-close shadow-none btnclose d-flex align-items-center" data-bs-dismiss="offcanvas" aria-label="Close">
                {{-- <img src="assets/img/closebtn.svg" alt="close btn " class="h-100 w-100 img-fluid"> --}}
                <img src="{{ url('public/assets/img/navbar/closebtn.svg')}}" alt="close btn " class="h-100 w-100 img-fluid">
            </button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav navbaritem justify-content-center flex-grow-1 ps-xl-3">
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('index') ? 'active' : ''}}"  href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('about') ? 'active' : ''}}" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('whatsmsme') ? 'active' : ''}}" href="{{ route('whatsmsme') }}">Whats MSME</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium" href="">Schemes</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('news') ? 'active' : ''}}" href="{{ route('news') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('gallary') ? 'active' : ''}}" href="{{ route('gallary') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('blog') ? 'active' : ''}}" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('upcomingEvent') ? 'active' : ''}}" href="{{ route('upcomingEvent') }}">Upcoming Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbarlink fw-medium {{Request::is('contact') ? 'active' : ''}}" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
            </div>
        </div>
        <div class="d-xl-flex d-none align-items-center justify-content-xl-center justify-content-end gap-sm-3 gap-2 navbarimages">
            <a href="javascript" class="text-decoration-none navimg">
                <img src="{{ url('public/assets/img/navbar/topbar1.jpg')}}" alt="india 2023" class="h-100 w-100 img-fluid">
            </a>
            <a href="javascript" class="text-decoration-none navimg">
                <img src="{{ url('public/assets/img/navbar/topbar2')}}" alt="india 2023" class="h-100 w-100 img-fluid">
            </a>
            <a href="javascript" class="text-decoration-none navimg">
                <img src="{{ url('public/assets/img/navbar/topbar3.png')}}" alt="india 2023" class="h-100 w-100 img-fluid">
            </a>
        </div>
        {{-- <div class="flex-grow-1 mx-sm-4 mx-3 d-xl-none d-block">
            <div class="searchinput border bg-light d-flex align-items-center rounded-1">
                <input type="search" class="form-control h-100 searchinput shadow-none bg-transparent border-0 rounded-0" placeholder="Search for pages">
                <button class="btn searchbtn border-0 fw-medium h-100">Search</button>
            </div>
            <div class="searchinput border bg-light d-flex align-items-center rounded-1">
                <input type="search" class="form-control pe-0 h-100 searchinput shadow-none bg-transparent border-0 rounded-0" placeholder="Search for pages">
                <button class="btn searchbtn border-0 fw-medium h-100 d-flex align-items-center justify-content-center">
                    <img src="{{ url('public/assets/img/navbar/search2.svg')}}" alt="search" class="h-100 w-100 img-fluid">
                </button>
            </div>
        </div> --}}
        <div class="d-xl-none d-flex align-items-center gap-3">
            {{-- <button class="navbar-toggler menubtn shadow-none border-0 p-0 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchoffcanvas" aria-controls="searchoffcanvas" aria-label="Toggle navigation">
                <img src="{{ url('public/assets/img/navbar/search.svg')}}" alt="menu" class="h-100 w-100 img-fluid">
            </button> --}}
            <button class="navbar-toggler menubtn shadow-none border-0 p-0 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbaroffcanvas" aria-controls="navbaroffcanvas" aria-label="Toggle navigation">
                {{-- <img src="assets/img/menu.svg" alt="menu" class="h-100 w-100 img-fluid"> --}}
                <img src="{{ url('public/assets/img/navbar/menu.svg')}}" alt="menu" class="h-100 w-100 img-fluid">
            </button>
        </div>
    </div>
</nav> 
{{-- navbar end --}}

{{-- search offcanvas start  --}}
<div class="offcanvas offcanvas-top searchoffcanvas" tabindex="-1" id="searchoffcanvas" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header justify-content-end">
    {{-- <div class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</div> --}}
    <button type="button" class="btn-close me-1 shadow-none btnclose d-flex align-items-center" data-bs-dismiss="offcanvas" aria-label="Close">
    {{-- <img src="assets/img/closebtn.svg" alt="close btn " class="h-100 w-100 img-fluid"> --}}
        <img src="{{ url('public/assets/img/navbar/closebtn.svg')}}" alt="close btn " class="h-100 w-100 img-fluid">
    </button>
    </div>
    <div class="offcanvas-body pt-1">
        <div class="searchinput border bg-light d-flex align-items-center rounded-1">
            <input type="search" class="form-control h-100 searchinput shadow-none bg-transparent border-0 rounded-0" placeholder="Search for pages">
            <button class="btn searchbtn border-0 fw-medium h-100">Search</button>
        </div>
    </div>
</div>
{{-- search offcanvas end --}}

