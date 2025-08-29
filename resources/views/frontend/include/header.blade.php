   <header id="header-part">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="{{asset('frontend/images/all-icon/map.png')}}" alt="icon"><span>127/5 Mark street, New york</span></li>
                                <li><img src="{{asset('frontend/images/all-icon/email.png')}}" alt="icon"><span>info@yourmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('frontend/images/logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="{{asset('frontend/images/all-icon/support.png')}}" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>321 325 5678</span>
                                </div>
                            </div>
                            <div class="button float-left">
                                <a href="{{url('/admission')}}" class="main-btn">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/about-us')}}">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/courses')}}">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/teachers')}}">Our teachers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/contact-us')}}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
           <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
    </header>