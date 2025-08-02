
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
            <li><a class="active" href="{{ route('superadmin.create-quarterly') }}"><i class="icon ti-home"></i> <span>ساخت فصلنامه جدید</span> </a></li>
            <li><a href="{{ route('superadmin.defining-role-jurnal') }}"><i class="icon ti-home"></i> <span></span>ساخت مقام برای نشریه</a></li>
            <li><a href="{{ route('superadmin.defining-persons-jurnal') }}"><i class="icon ti-home"></i> <span></span>تعریف اعضای نشریه</a></li>
            <li><a href="{{ route('superadmin.published-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات منتشر شده</a></li>
            <li><a href="{{ route('superadmin.rejected-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات رد شده</a></li>
            <li><a href="{{ route('superadmin.edit-user') }}"><i class="icon ti-home"></i> <span></span>ویرایش حساب کاربری</a></li>
            <li><a href="{{ route('superadmin.edit-password') }}"><i class="icon ti-home"></i> <span></span>ویرایش رمز عبور</a></li>
            <li><a href="{{ route('superadmin.log') }}"><i class="icon ti-home"></i> <span></span>لاگ سیستم</a></li>

        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("create-quarterly")) 
        <a class="btn btn-success btn-block text-white">{{ Session::get("create-quarterly") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>فرم ساختن فصلنامه جدید</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> ساختن فصلنامه جدید</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                       
                        <form method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-3"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">نام</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3"></div>

                            </div>
                            
                            <div class="row">

                                <div class="col-md-3"></div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile7">ورودی فایل تصویر</label>
                                        <input type="file" name="file" class="form-control-file @error('file') is-invalid @enderror" id="exampleFormControlFile7">
                                        @error('file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3"></div>

                            </div>
                            

                            <div class="row">

                                <div class="col-md-3"></div>

                                <div class="col-md-6">
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-lg btn-block" value="ذخیره فصلنامه جدید">
                                    </div>
                                </div>

                                <div class="col-md-3"></div>

                            </div>

                            
                        </form>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>عنوان فصلنامه</th>
                                    <th>تصویر</th>
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

                                @foreach ($quarterlies as $quarterly)
                                        
                                    
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <figure class="avatar avatar-sm m-l-15">
                                                        <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($quarterly->name ,0 ,1) }}</span>
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="m-b-0 primary-font">{{ $quarterly->name }}</h6>
                                                </div>
                                                
                                            </div>
                                        </td>

                                        <td>
                                            <div>
                                                <a class="m-b-0 primary-font" href="{{ asset($quarterly->image) }}" target="_blank">دیدن تصویر</a>
                                            </div>
                                        </td>

                                        <td>
                                            <form method="POST" onsubmit="return pop(event)" action="{{ route('superadmin.delete-quarterly' , $quarterly->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" >حذف</button>
                                            </form>
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
<script>
    function pop()
    {
        const result = confirm("آیا از حذف آن مطمعن هستید ؟");
        if(!result) {
            event.preventDefault();
            return false ;
        } else {
            return true ;
        }
    }
</script>
<script src="{{ asset('panel/vendors/bundle.js') }}"></script>
<script src="{{ asset('panel/js/custom.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>
<script src="{{ asset('panel/vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('panel/js/examples/tagsinput.js') }}"></script>
@endsection