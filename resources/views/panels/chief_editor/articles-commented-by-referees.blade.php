@extends("layouts.panel")


@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/custom.css') }}" type="text/css">
	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">
@endsection


@section("content")

<div class="side-menu">
    <div class="side-menu-body">
        <ul>
            <li class="side-menu-divider">فهرست</li>
            <li><a href="{{ route('chiefeditor.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('chiefeditor.submitted-articles-for-approval') }}"><i class="icon ti-home"></i> <span>مقالات ارسال شده برای تایید <span  class="btn btn-danger py-0 px-1">{{ $number_of_unverified_articles }}</span></span> </a></li>
            <li><a href="{{ route('chiefeditor.approved-articles') }}"><i class="icon ti-home"></i> <span>مقالات تایید شده (ارسال شده به داوران)</span> </a></li>
            
            <li><a class="active" href="{{ route('chiefeditor.articles-commented-by-referees') }}"><i class="icon ti-home"></i> <span>مقالات نظردهی شده توسط داوران</span> </a></li>
            

            <li><a href="{{ route('chiefeditor.published-articles') }}"><i class="icon ti-home"></i> <span>مقالات منتشر شده</span> </a></li>
            
                        <li><a href="{{ route('chiefeditor.edit-user') }}"><i class="icon ti-home"></i> <span></span>ویرایش حساب کاربری</a></li>
            <li><a href="{{ route('chiefeditor.edit-password') }}"><i class="icon ti-home"></i> <span></span>ویرایش رمز عبور</a></li>
            
        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="m-b-0">وضعیت مقالات ارسالی به داوران  </h5>
                        </div>
                        <div class="card-controls">
                            <a href="{{ route('writer.status-articles') }}" class="js-card-refresh">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>عنوان مقاله</th>
                                    <th>تاریخ</th>
                                    <th>کلمات کلیدی</th>
                                    <th></th>
                                    <th></th>
                                
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $color_avatar = [
                                        "bg-success" ,
                                        "bg-danger" , 
                                        "bg-info" ,
                                        "bg-warning"
                                    ] ;
                                    
                                @endphp

                                @foreach ($articles as $article)
                                        
                                    @php
                                        $exists_article = DB::table("article_approvals_referees")->where("article_id" , "=" , $article->article_id)->where("is_confirmation" , "=" , false)->exists(); 
                                    @endphp

                                    @if (!$exists_article)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <figure class="avatar avatar-sm m-l-15">
                                                            <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($article->article->title ,0 ,1) }}</span>
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <h6 class="m-b-0 primary-font">{{ $article->article->title }}</h6>
                                                        <span class="text-muted small">نویسنده : {{ $article->article->user->name_and_family }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ jdate($article->article->created_at)->format('H:i:s - Y/m/d') }}</td>
                                            <td>{{ $article->article->keywords }}</td>

                                            <td>
                                                <a class="btn btn-warning" href="{{ route('chiefeditor.view_comments_referees' , $article->article->id) }}">نمایش نظرات داوران</a>
                                            </td>

                                            <td>
                                                <form method="post" action="{{ route('chiefeditor.publish-article' , $article->article->id) }}">
                                                    @csrf
                                                    <button class="btn btn-success" >تایید نهایی</button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                          
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection




@section("js")
<script src="{{ asset('panel/vendors/bundle.js') }}"></script>

<script src="{{ asset('panel/vendors/charts/chart.min.js') }}"></script>
<script src="{{ asset('panel/vendors/charts/sparkline.min.js') }}"></script>
<script src="{{ asset('panel/vendors/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('panel/js/examples/charts.js') }}"></script>

<script src="{{ asset('panel/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('panel/js/examples/swiper.js') }}"></script>

<script src="{{ asset('panel/js/custom.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>
@endsection