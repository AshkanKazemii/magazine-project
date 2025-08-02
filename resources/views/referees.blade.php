@extends("layouts.app")

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

        @include('partials.header')

 
        <section class="page-banner bg-blue rel z-1" style="background-image: url({{ asset('assets/images/background/banner-bg.png') }});">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInUp delay-0-2s" style="text-align: right">داوران</h1>
                </div>
            </div>
            <img class="dots-shape" src="{{ asset('assets/images/shapes/white-dots-two.png') }}" alt="Shape">
            <img class="tringle-shape slideLeftRight" src="{{ asset('assets/images/shapes/white-tringle.png') }}" alt="Shape">
            <img class="close-shape" src="{{ asset('assets/images/shapes/white-close.png') }}" alt="Shape">
            <img src="{{ asset('assets/images/newsletter/circle.png') }}" alt="shape" class="banner-circle slideUpRight">
            <img class="dots-shape-three slideUpDown delay-1-5s" src="{{ asset('assets/images/shapes/white-dots-three.png') }}" alt="Shape">
        </section>

        <br><br><br>
        <section class="solutions-section rel z-1 pb-100 rpb-70">
            <div class="container">
               
                <div class="row align-items-center">


                    @foreach ($referees as $referee)
                        <div class="col-xl-3 col-md-6">
                            <div class="solution-item wow fadeInUp delay-0-2s">
                                <div class="solution-content">
                                    <i class="flaticon-fast-delivery"></i>

                                    <h4>نام : {{ $referee->name_and_family }}</h4>
                                    <p> ایمیل : {{ $referee->email }}</p>
                                </div>
                                {{-- <a href="{{ route('quarterly.articles' , $quarterly->id) }}" class="learn-more"><i class="fas fa-arrow-right"> مشاهده </i></a> --}}
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
        <br><br>


        @include('partials.footer')

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