@extends("layouts.app-en")



@section("content")
    
    <div class="page-wrapper">

        <div class="preloader"></div>

        @include('partials.header-en')

        <section class="page-banner bg-blue rel z-1" style="background-image: url({{ asset('assets/images/background/banner-bg.png') }});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInUp delay-0-2s" style="text-align: left">quarterlies</h1>
                </div>
            </div>
            <img class="dots-shape" src="{{ asset('assets/images/shapes/white-dots-two.png') }}" alt="Shape">
            <img class="tringle-shape slideLeftRight" src="{{ asset('assets/images/shapes/white-tringle.png') }}" alt="Shape">
            <img class="close-shape" src="{{ asset('assets/images/shapes/white-close.png') }}" alt="Shape">
            <img src="{{ asset('assets/images/newsletter/circle.png') }}" alt="shape" class="banner-circle slideUpRight">
            <img class="dots-shape-three slideUpDown delay-1-5s" src="{{ asset('assets/images/shapes/white-dots-three.png') }}" alt="Shape">
        </section>
 
        
        <section class="projects-section pt-130 rpt-100 pb-130 rpb-70">
            <div class="container">
                <div class="row project-active">


                    @foreach ($quarterlies as $quarterly)
                        <div class="col-xl-4 col-lg-6 item  ">
                            <div class="project-item">
                                <img src="{{ asset('assets/images/projects/project1.jpg') }}" alt="Project">
                                 {{-- <img src="{{ asset($article->quarterly->image) }}" alt="Blog"> --}}

                                <div class="project-content">
                                    <h3><a href="{{ route('quarterly.articles' , $quarterly->id) }}">{{$quarterly->name}}</a></h3>
                                    <a href="{{ route('quarterly.articles' , $quarterly->id) }}"><i class="fas fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                   
                   
                   
                </div>
            </div>
        </section>

       
        @include('partials.footer-en')

    </div>

@endsection