
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
            <li><a href="{{ route('referee.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
             <li><a href="{{ route('referee.edit-user') }}"><i class="icon ti-home"></i> <span></span>ویرایش حساب کاربری</a></li>
            <li><a class="active" href="{{ route('referee.edit-password') }}"><i class="icon ti-home"></i> <span></span>ویرایش رمز عبور</a></li>



        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("edit-password-info")) 
        <a class="btn btn-success btn-block text-white">{{ Session::get("edit-password-info") }}</a>
        <br><br>
    @endif

    @if(Session::exists("edit-password-info-err")) 
        <a class="btn btn-danger btn-block text-white">{{ Session::get("edit-password-info-err") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>فرم ویرایش رمز عبور</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ویرایش رمز عبور</li>
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
                                        <label for="exampleFormControlInput1">رمزعبور قبلی</label>
                                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">رمز عبور جدید</label>
                                        <input type="password" name="new_password" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">تکرار رمز عبور</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput2" >
                                    </div>
                                </div>

                            </div>
                           
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="ویرایش رمز عبور">
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