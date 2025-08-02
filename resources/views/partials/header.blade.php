        <header class="main-header">

            <div class="header-top text-center text-white bg-success py-5">
                <div class="container rel z-1">
                    <p>به وب سایت مجله خوش آمدید</p>
                    <img class="header-left-shape" src="{{ asset('assets/images/shapes/header-top-left.png') }}" alt="shape">
                    <img class="header-right-shape slideLeftRight infinite" src="{{ asset('assets/images/shapes/header-top-right.png') }}" alt="shape">
                </div>
            </div>
            
            <div class="header-upper">
                <div class="container clearfix">
                    <div class="header-inner py-10">
                        

                        <div class="nav-outer clearfix ">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="logo-mobile">
                                        <a href="index.html">
                                            <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="main-menu">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                
                                <div class="navbar-collapse collapse clearfix" id="main-menu">
                                    <ul class="navigation clearfix">


                                     
                                        <li><a href="">اطلاعات مجله</a></li>
                                        <li><a href="">اهداف و محور های مجله</a></li>
                                        <li><a href="{{ route('referees') }}">داوران</a></li>
                                        <li><a href="{{ route('quarterlies') }}">فصل ها</a></li>
                                        @isset($last_quarterlies[0]->id)
                                            <li><a href="{{ route('quarterly.articles' , $last_quarterlies[0]->id) }}">مجلات</a></li>
                                        @else 
                                            <li><a href="#">مجلات</a></li>

                                        @endisset
                                        <li class=""><a href="{{ route('index') }}">خانه</a></li>


                                        





                                        {{-- <li class="dropdown current"><a href="#">مجلات</a>
                                            <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                                <li><a href="index3.html">Home Three</a></li>
                                                <li><a href="index3dark.html">Home 3 Dark</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about</a></li>
                                        <li class="dropdown"><a href="#">project</a>
                                            <ul>
                                                <li><a href="projects.html">Projects</a></li>
                                                <li><a href="project-details.html">Project details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog standard</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">pages</a>
                                            <ul>
                                                <li><a href="single-service.html">service single</a></li>
                                                <li><a href="team-details.html">Team Profile</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li> --}}
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        
                        <div class="menu-right d-none d-lg-flex align-items-center ml-lg-auto">

                                @auth
                                <a href="{{ route('panel') }}" class="theme-btn style-two text-success">
                                    <i class="fas fa-arrow-right"></i>
                                    پنل کاربری
                                </a>
                                @else
                                <a href="{{ route('login') }}" class="theme-btn style-two text-success">
                                    <i class="fas fa-arrow-right"></i>
                                    ورود
                                </a>
                                @endauth
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <span>
                                    <a href="{{ route('index-en') }}"> EN </a> /
                                    <a href="{{ route('index') }}"> FA </a>
                                    
                                </span>
                        </div>

                        <div class="logo-outer">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/logos/logo.png') }}" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>