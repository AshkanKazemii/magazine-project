@extends("layouts.app")


@section("content")
    
    <div class="page-wrapper">

        <div class="preloader"></div>

        @include('partials.header')

        <section class="page-banner bg-blue rel z-1" style="background-image: url({{ asset('assets/images/background/banner-bg.png') }});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInUp delay-0-2s" style="text-align: right">مجله {{$article->title}}</h1>
                </div>
            </div>
            <img class="dots-shape" src="{{ asset('assets/images/shapes/white-dots-two.png') }}" alt="Shape">
            <img class="tringle-shape slideLeftRight" src="{{ asset('assets/images/shapes/white-tringle.png') }}" alt="Shape">
            <img class="close-shape" src="{{ asset('assets/images/shapes/white-close.png') }}" alt="Shape">
            <img src="{{ asset('assets/images/newsletter/circle.png') }}" alt="shape" class="banner-circle slideUpRight">
            <img class="dots-shape-three slideUpDown delay-1-5s" src="{{ asset('assets/images/shapes/white-dots-three.png') }}" alt="Shape">
        </section>
 
        
        <section class="projects-details-section pt-130 rpt-100 pb-135 rpb-75">
            <div class="container">
                <div class="project-details-content">
                    <div class="row pb-30" >
                        
                        <div class="col-lg-4" style="text-align: right">
                            <div class="project-information bg-blue text-white mb-50 mr-xl-5 wow fadeInDown delay-0-2s">
                                <h3 class="project-info-title">اطلاعات مجله</h3>
                                <div class="project-info-item">
                                    <span>فصل</span>
                                    <h4>{{$article->quarterly->name}}</h4>
                                </div>
                                <div class="project-info-item">
                                    <span>نام نویسنده</span>
                                    <h4>{{$article->user->name_and_family}}</h4>
                                </div>
                                <div class="project-info-item">
                                    <span>روز انتشار</span>
                                    <h4>{{ jdate($article->updated_at)->format('d - %B - Y') }}</h4>
                                </div>
                                <div class="project-info-item">
                                    <span>زبان مجله</span>
                                    <h4>{{$article->lang}}</h4>
                                </div>

                                <div class="project-info-item">
                                    <a class="btn btn-secondary btn-lg btn-block" href="{{asset($article->file)}}" download="download">دانلود فایل مجله</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8" style="text-align: center">
                            <div class="project-content-one mr-xl-5 wow fadeInUp delay-0-2s">
                                <h2 >{{$article->title}}</h2>
                                <p><span class="h4 text-success">چکیده فارسی : </span>{{$article->fa_abstract}}</p>
                                <p><span class="h4 text-success"> English Abstract : </span>{{$article->en_abstract}}</p>

                            </div>
                        </div>
                    </div>
                    <div class="project-content-two wow fadeInUp delay-0-2s">
                        <h2 style="text-align: right">توضیحات</h2>
                        <p style="text-align: center">{{$article->description}}</p>
                    </div>
                </div>
            </div>
        </section>

       
        @include('partials.footer')

    </div>

@endsection