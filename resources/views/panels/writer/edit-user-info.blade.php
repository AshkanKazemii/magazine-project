
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
            <li><a href="{{ route('writer.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('writer.registeration-article-page') }}"><i class="icon ti-clipboard"></i> <span>ثبت مقاله</span> </a></li>

            <li><a href="{{ route('writer.status-articles') }}"><i class="icon ti-clipboard"></i> <span>وضعیت مقالات من</span> </a></li>

             <li><a class="active" href="{{ route('writer.edit-user') }}"><i class="icon ti-home"></i> <span></span>ویرایش حساب کاربری</a></li>
            <li><a href="{{ route('writer.edit-password') }}"><i class="icon ti-home"></i> <span></span>ویرایش رمز عبور</a></li>
        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("edit-user-info")) 
        <a class="btn btn-success btn-block text-white">{{ Session::get("edit-user-info") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>فرم ویرایش حساب کاربری</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> ویرایش حساب کاربری</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                  
                        <form method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">نام و نام خانوادگی</label>
                                        <input type="text" value="{{ Auth::user()->name_and_family }}" name="name_and_family" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">ایمیل</label>
                                        <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">دانشگاه</label>
                                        <input type="text" value="{{ Auth::user()->university }}" name="university" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">دانشکده</label>
                                        <input type="text" value="{{ Auth::user()->college }}" name="college" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">رشته</label>
                                        <input type="text" value="{{ Auth::user()->field }}" name="field" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">شماره تماس</label>
                                        <input type="text" value="{{ Auth::user()->mobile }}" name="mobile" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>
                            </div>
                           
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="ویرایش اطلاعات">
                            </div>
                        </form>
                        
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