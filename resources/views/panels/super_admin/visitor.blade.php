
@extends("layouts.panel")

@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/custom.css') }}" type="text/css">
	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('panel/vendors/tagsinput/bootstrap-tagsinput.css') }}" type="text/css">
@endsection

@section("content")

<div class="side-menu">
    <div class="side-menu-body">
        <ul>
            <li class="side-menu-divider">فهرست</li>
            <li><a href="{{ route('superadmin.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('superadmin.create-user') }}"><i class="icon ti-home"></i> <span>ساخت حساب کاربری جدید</span> </a></li>
            <li><a href="{{ route('superadmin.create-quarterly') }}"><i class="icon ti-home"></i> <span>ساخت فصلنامه جدید</span> </a></li>
            <li><a href="{{ route('superadmin.defining-role-jurnal') }}"><i class="icon ti-home"></i> <span></span>ساخت مقام برای نشریه</a></li>
            <li><a href="{{ route('superadmin.defining-persons-jurnal') }}"><i class="icon ti-home"></i> <span></span>تعریف اعضای نشریه</a></li>
            <li><a href="{{ route('superadmin.published-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات منتشر شده</a></li>
            <li><a href="{{ route('superadmin.rejected-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات رد شده</a></li>
            <li><a href="{{ route('superadmin.edit-user') }}"><i class="icon ti-home"></i> <span></span>ویرایش حساب کاربری</a></li>
            <li><a href="{{ route('superadmin.edit-password') }}"><i class="icon ti-home"></i> <span></span>ویرایش رمز عبور</a></li>


            <li><a class="active" href="{{ route('superadmin.log') }}"><i class="icon ti-home"></i> <span></span>لاگ سیستم</a></li>

        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("create-user")) 
        <a class="btn btn-success btn-block text-white">{{ Session::get("create-user") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

      
        <div class="page-header">
            <div>
                <h3>لیست لاگ های سیستم</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page">لاگ های سیستم</li>
                    </ol>
                </nav>
            </div>
            
        </div>
   
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                      
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>ایمیل</th>
                                        <th>نقش</th>
                                        <th>ip</th>
                                        <th>سیستم عامل</th>
                                        <th>مرورگر</th>
                                        <th>url</th>
                                        <th>تاریخ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($visitors as $visitor)
                                        
                                    
                                    <tr>

                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->user->name_and_family }}</h6>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->user->email }}</h6>
                                        </td>

                                        <td>
                                            @if($visitor->user->role === "writer")
                                                <h6 class="m-b-0 primary-font">نویسنده</h6>
                                            @elseif ($visitor->user->role === "referee")
                                                <h6 class="m-b-0 primary-font">داور</h6>

                                            @elseif ($visitor->user->role === "chiefeditor")
                                                <h6 class="m-b-0 primary-font">سردبیر</h6>

                                            @endif
                              
                                        </td>
                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->ip }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->platform }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->browser }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->url }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $visitor->created_at }}</h6>
                                        </td>
                                    </tr>
                                    
                                          
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
<script src="{{ asset('panel/js/custom.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>
<script src="{{ asset('panel/vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('panel/js/examples/tagsinput.js') }}"></script>
@endsection


