@extends('layouts.auth')

@section('title', 'Login')

@section('css-library')
    {{-- Tempat Ngoding Meletakkan css library --}}
@endsection

@section('css-custom')
    {{-- Tempat Ngoding Meletakkan css custom --}}
@endsection

@section('content')
<div class="browse-job login-style3">
    <!-- Coming Soon -->
    <div class="bg-img-fix overflow-hidden" style="background:#fff url(assets/images/background/bg6.jpg); height: 100vh;">
        <div class="row gx-0">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-login ">
                <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
                    <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                        <div class="login-form style-2">
                            
                            
                            <div class="card-body">
                                <div class="logo-header">
                                    <a href="{{ url('') }}" class="logo"><img src="{{ url('') }}/assets/images/logo/logo-full.png" alt="" class="width-230 light-logo"></a>
                                    <a href="{{ url('') }}" class="logo"><img src="{{ url('') }}/assets/images/logo/logofull-white.png" alt="" class="width-230 dark-logo"></a>
                                </div>
                            
                                <nav>
                                    <div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
                                        
                                <div class="tab-content w-100" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                                        <form action="{{ url('api/login') }}" method="POST" class=" dz-form pb-3">
                                            <h3 class="form-title m-t0">Login</h3>
                                            <div class="dz-separator-outer m-b5">
                                                <div class="dz-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>Silahkan Masukkan Email dan Password! </p>
                                            <div class="form-group mb-3">
                                                <input type="email" name="email" class="form-control" value="hello@example.com">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input type="password" name="password" class="form-control" value="Password">
                                            </div>
                                            <div class="form-group text-left mb-5 forget-main">
                                                <button class="btn btn-primary mt-4 d-block w-100" type="submit">Login</button>
                                                {{-- <button type="submit" class="btn btn-primary">Sign Me In</button> --}}
                                                <button class="nav-link m-auto btn tp-btn-light btn-primary forget-tab " id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false">Forget Password ?</button> 	
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-forget" role="tabpanel" aria-labelledby="nav-forget-tab">
                                        <form class="dz-form">
                                            <h3 class="form-title m-t0">Forget Password ?</h3>
                                            <div class="dz-separator-outer m-b5">
                                                <div class="dz-separator bg-primary style-liner"></div>
                                            </div>
                                            <p>Masukkan Email untuk reset Password! </p>
                                            <div class="form-group mb-4">
                                                <input name="dzName" required="" class="form-control" placeholder="Email Address" type="text">
                                            </div>
                                            <div class="form-group clearfix text-left"> 
                                                <button class=" active btn btn-primary" id="nav-personal-tab" data-bs-toggle="tab" data-bs-target="#nav-personal" type="button" role="tab" aria-controls="nav-personal" aria-selected="true">Back</button>
                                                <button class="btn btn-primary float-end">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                </div>
                            </nav>
                                    
                        </div>
                    </div>
                    <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
                        <div class="mCSB_draggercontainer">
                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
                        <div class="mCSB_dragger_bar" style="line-height: 0px;"></div><div class="mCSB_draggerRail"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Blog Page Contant -->
</div>
@endsection

@section('js-library')
    {{-- Tempat Ngoding Meletakkan js library --}}
@endsection

@section('js-custom')
    {{-- Tempat Ngoding Meletakkan js custom --}}
@endsection