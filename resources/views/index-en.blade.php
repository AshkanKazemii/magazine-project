@extends("layouts.app-en")
@php
    use \Carbon\Carbon ;
@endphp
@section('css')
    <style>
        .scroll-hide::-webkit-scrollbar {
  display: none;
}

.scroll-hide {
  -ms-overflow-style: none;  /* برای اینترنت اکسپلورر */
  scrollbar-width: none;     /* برای فایرفاکس */
}

    </style>
@endsection

@section("content")
    
    <div class="page-wrapper">
        <div class="preloader"></div>

        @include('partials.header-en')

 
        <section class="hero-section rel z-2 pt-210 pb-75">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-image wow fadeInLeft delay-0-4s">
                            <img src="assets/images/hero/hero.png" alt="Hero">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-11">
                        <div class="hero-content rmb-75"  >
                            <span class="sub-title wow fadeInUp delay-0-2s ">magazines website</span>
                            <h1 class="mb-15 wow fadeInUp delay-0-4s">magazines website magazines website</h1>
                            <p class="wow fadeInUp delay-0-5s">magazines website magazines website magazines website magazines website magazines website magazines website magazines website</p>
                            <ul class="list-style-one mt-30 wow fadeInUp delay-0-6s">
                                <li>magazines website magazines website</li>
                                <li>magazines website magazines website</li>
                            </ul>
                            {{-- <div class="hero-btns mt-40 wow fadeInUp delay-0-8s">
                                <a href="contact.html" class="theme-btn mb-15">Get Started <i class="fas fa-arrow-right"></i></a>
                                <a href="about.html" class="theme-btn style-two mb-15">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
            <img class="dots-shape" src="{{ asset('assets/images/shapes/dots.png') }}" alt="Shape">
            <img class="tringle-shape" src="{{ asset('assets/images/shapes/tringle.png') }}" alt="Shape">
            <img class="close-shape" src="{{ asset('assets/images/shapes/close.png') }}" alt="Shape">
        </section>


        <section class="partners-section rel z-1 pt-250 rpt-150 pb-90 rpb-60">
            <div class="container" style="text-align: center">
 
                       <div class="section-title mb-45 ">
                            <h2>There are over <span>{{ count($quarterlies) }}+</span> articles on the journal site.</h2>
                       </div>
               
            </div>
            <div class="hero-about-bg">
                <img src="{{ asset('assets/images/shapes/hero-about-bg.png') }}" alt="Background">
            </div>
        </section>
   
        
        <section class="solutions-section rel z-1 pb-100 rpb-70">
            <div class="container">
               <div class="row justify-content-center text-center">
                   <div class="col-xl-6 col-lg-8 col-md-10">
                       <div class="section-title mb-55">
                            {{-- <span class="sub-title">Our Special Solutions</span> --}}
                            <h2>Quarterly magazine website</h2>
                        </div>
                   </div>
               </div>
                <div class="row align-items-center">


                    @foreach ($last_quarterlies as $quarterly)
                        <div class="col-xl-3 col-md-6">
                            <div class="solution-item wow fadeInUp delay-0-2s">
                                <div class="solution-content">
                                    <i class="flaticon-fast-delivery"></i>

                                    <h3><a href="single-service.html">{{ $quarterly->name }}</a></h3>
                                    <p>View all events and magazines for the {{ $quarterly->name }} season</p>
                                    {{-- <p>تمام اتفاقات و مجلات فصل {{ $quarterly->name }} را مشاهده کنید</p> --}}
                                </div>
                                <a href="{{ route('quarterly.articles-en' , $quarterly->id) }}" class="learn-more"><i class="fas fa-arrow-right"> View </i></a>
                            </div>
                        </div>
                    @endforeach
                  
                </div>
            </div>
            <img class="dots-shape" src="assets/images/shapes/dots.png" alt="Shape">
            <img class="tringle-shape" src="assets/images/shapes/tringle.png" alt="Shape">
            <img class="close-shape" src="assets/images/shapes/close.png" alt="Shape">
            <img class="circle-shape" src="assets/images/shapes/circle.png" alt="Shape">
        </section>


  
        <section class="blog-section rel z-1 pb-210 rpb-100 rpb-150 rmb-30  ">
            <div class="container">
               <div class="row justify-content-center text-center">
                   <div class="col-xl-6 col-lg-8 col-md-10">
                       <div class="section-title mb-55">
                            <span class="sub-title">Magazines and articles</span>
                            <h2>New magazines and articles from last season and current season</h2>
                        </div>
                   </div>
               </div>
               <div class="d-flex flex-nowrap overflow-auto pb-4 scroll-hide">

                <div class="row align-items-center d-flex flex-nowrap overflow-auto  pb-4 scroll-hide scroll-drag">


                    @foreach ($get_articles as $article)
                        <div class="col-xl-3 col-md-6" >
                            <div class="blog-item wow fadeInUp delay-0-2s  me-3 flex-shrink-0" style="min-width: 280px;">
                                <div class="image">
                                    <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="Blog">
                                </div>
                                    {{-- <img src="{{ asset($article->quarterly->image) }}" alt="Blog"> --}}

                                <div class="blog-author">
                                    <h5>{{$article->quarterly->name}}</h5>
                                </div>
                                <div class="blog-content" style="text-align:center">
                                    <ul class="blog-meta">
                                        <li><i class="far fa-calendar-alt"></i> {{ Carbon::createFromDate($article->updated_at)->toFormattedDateString() }} </li>
                                    </ul> 
                                    <h4 >
                                        <a href="{{ route('quarterly.article-en' , [$article->quarterly_id ,$article->id ]) }}">{{$article->title}}</a>
                                    </h4>
                                    <p >{{substr($article->description, 0, 25)}} <br>...</p>
                                    
                                </div>
                                <a href="{{ route('quarterly.article-en' , [$article->quarterly_id ,$article->id ]) }}" class="learn-more">  <i class="fas fa-arrow-right"></i>  View </a>
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

        @include('partials.footer-en')

    </div>
 
    <button class="scroll-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></button>

@endsection

@section('js')
    <script>
  const slider = document.querySelector('.scroll-drag');
  let isDown = false;
  let startX;
  let scrollLeft;

  slider.addEventListener('mousedown', (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });

  slider.addEventListener('mouseleave', () => {
    isDown = false;
    slider.classList.remove('active');
  });

  slider.addEventListener('mouseup', () => {
    isDown = false;
    slider.classList.remove('active');
  });

  slider.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 1.5; // سرعت اسکرول
    slider.scrollLeft = scrollLeft - walk;
  });
</script>

@endsection