@extends("layouts.panel")


@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">

	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">

	<meta name="theme-color" content="#3f51b5" />
@endsection



@section("content")


<div class="container h-100-vh">
    <div class="row align-items-center h-100-vh">
        <div class="col-lg-6 d-none d-lg-block p-t-b-25">
            <img class="img-fluid" src="{{ asset('panel/media/svg/login.svg') }}" alt="...">
        </div>

        <div class="col-lg-4 offset-lg-1 p-t-b-25">
                    
            <p class="text-center">Sign in to continue</p>
            <form method="POST">
                @csrf
                <div class="form-group mb-4">
                    <input type="text" name="email" class="@error('email') is-invalid @enderror form-control form-control-lg" id="exampleInputEmail1" autofocus placeholder="E-mail">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">login</button>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="custom-control custom-checkbox">
                    </div>
                    <a href="/forgot-password" class="auth-link text-black">forget password</a>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6 mb-4">
                        <a href="#" class="btn btn-outline-facebook btn-block">
                            <i class="fa fa-facebook-square m-l-5"></i> با فیسبوک
                        </a>
                    </div>
                    <div class="col-md-6 mb-4">
                        <a href="#" class="btn btn-outline-google btn-block">
                            <i class="fa fa-google m-l-5"></i> با گوگل
                        </a>
                    </div>
                </div> --}}
                <div class="text-center">
                   Don't have an account ? <a href="{{ route('register') }}" class="text-primary">create</a>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection


@section("js")
<script src="{{ asset('panel/vendors/bundle.js') }}"></script>

<script src="{{ asset('panel/js/app.js') }}"></script>
@endsection