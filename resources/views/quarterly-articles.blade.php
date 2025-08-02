@extends("layouts.app")



@section("content")
    
    <div class="page-wrapper">

        <div class="preloader"></div>

        @include('partials.header')

        <section class="page-banner bg-blue rel z-1" style="background-image: url({{ asset('assets/images/background/banner-bg.png') }});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInUp delay-0-2s" style="text-align: right">مقالات فصل {{$quarterly_articles->name}}</h1>
                </div>
            </div>
            <img class="dots-shape" src="{{ asset('assets/images/shapes/white-dots-two.png') }}" alt="Shape">
            <img class="tringle-shape slideLeftRight" src="{{ asset('assets/images/shapes/white-tringle.png') }}" alt="Shape">
            <img class="close-shape" src="{{ asset('assets/images/shapes/white-close.png') }}" alt="Shape">
            <img src="{{ asset('assets/images/newsletter/circle.png') }}" alt="shape" class="banner-circle slideUpRight">
            <img class="dots-shape-three slideUpDown delay-1-5s" src="{{ asset('assets/images/shapes/white-dots-three.png') }}" alt="Shape">
        </section>
 
        <br><br><br><br>
        
        <section class="blog-section rel z-1 pb-210 rpb-100 rpb-150 rmb-30  ">
            <div class="container">
               
                <div class="d-flex flex-nowrap overflow-auto pb-4 scroll-hide">

                <div class="row align-items-center d-flex flex-nowrap overflow-auto  pb-4 scroll-hide scroll-drag">


                    @foreach ($quarterly_articles->articles as $article)
                        <div class="col-xl-3 col-md-6 " >
                            <div class="blog-item wow fadeInUp delay-0-2s  me-3 flex-shrink-0" style="min-width: 280px;">
                                <div class="image">
                                    <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="Blog">
                                </div>
                                <div class="blog-author">
                                    <h5>{{$article->quarterly->name}}</h5>
                                </div>
                                <div class="blog-content" style="text-align:center">
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> {{ jdate($article->updated_at)->format('d - %B - Y') }} </li>
                                    </ul> 
                                    <h4 >
                                        <a href="{{ route('quarterly.article' , [$article->quarterly_id ,$article->id ]) }}">{{$article->title}}</a>
                                    </h4>
                                    <p >{{substr($article->description, 0, 25)}} <br>...</p>
                                    
                                </div>
                                <a href="{{ route('quarterly.article' , [$article->quarterly_id ,$article->id ]) }}" class="learn-more">  <i class="fas fa-arrow-right"></i>  مشاهده </a>
                            </div>
                        </div>
                    @endforeach

                
                 
                   
                    

                </div>
            </div>

            <img class="dots-shape" src="{{ asset('assets/images/shapes/dots.png') }}" alt="Shape">
            <img class="tringle-shape" src="{{ asset('assets/images/shapes/tringle.png') }}" alt="Shape">
            <img class="close-shape" src="{{ asset('assets/images/shapes/close.png') }}" alt="Shape">
            <img class="circle-shape" src="{{ asset('assets/images/shapes/circle.png') }}" alt="Shape">
        </section>

       
        @include('partials.footer')

    </div>

@endsection