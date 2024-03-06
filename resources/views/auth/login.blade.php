@extends('layouts.auth')

@section('title', 'Login')

@section('css-library')
    {{-- Tempat Ngoding Meletakkan css library --}}
    <link href="{{ url('') }}/assets/css/sweetalert2.min.css" rel="stylesheet">
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
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible fade show">
                                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                    <strong>Error!</strong> 
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"><span><i class="fa-solid fa-xmark"></i></span></button>
                                                </div>
                                            @endif
                                            <form id="form-id" action="{{ url('api/login')}}" method="post" class=" dz-form pb-3">
                                                @csrf
                                                <h3 class="form-title m-t0">Login</h3>
                                                <div class="dz-separator-outer m-b5">
                                                    <div class="dz-separator bg-primary style-liner"></div>
                                                </div>
                                                <p>Silahkan Masukkan Email dan Password! </p>
                                                <div class="form-group mb-3">
                                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group text-left mb-5 forget-main">
                                                    <button id="btn-submit" class="btn btn-primary mt-4 d-block w-100" type="submit">Login</button>
                                                    {{-- <button type="submit" class="btn btn-primary">Sign Me In</button> --}}
                                                    <button class="nav-link m-auto btn tp-btn-light btn-primary forget-tab " id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false">Forget Password ?</button> 	
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="nav-forget" role="tabpanel" aria-labelledby="nav-forget-tab">
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Error!</strong>
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
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
    <script src="{{ url('') }}/assets/js/sweetalert2.min.js"></script>

@endsection

@section('js-custom')
    {{-- Tempat Ngoding Meletakkan js custom --}}
    <script>
        $("#form-id").on('submit', function(e) {
            $('#btn-submit').prop('disabled', true);
            e.preventDefault();
            const form = $(this);
            const actionUrl = form.attr('action');

            $.ajax({
                url: actionUrl,
                method: "POST",
                dataType: "JSON",
                data: form.serialize(),
                timeout: 15000,
                error: function(xmlhttprequest, textstatus, message) {
                    var res = "";
                    if(textstatus === "timeout") {
                        res = "Request timeout!";
                    } else {
                        res = textstatus;
                    }

                    Swal.fire({
                        title: "Error",
                        html: res,
                        icon: "warning"
                    }).then(function() {
                        $('#btn-submit').prop('disabled', false);
                    });
                },
                success: function(response) {
                    const messages = response.message;

                    let alert_text = "";
                    if ($.isArray(messages)) {
                        $.each(messages, (i, message) => {
                            alert_text = alert_text + message + "<br>";
                        })
                    } else {
                        if (typeof messages === 'object') {
                            const keys = Object.keys(messages);
                            $.each(keys, (i, key) => {
                                alert_text = alert_text + messages[key][0] + "<br>";
                            });
                        } else {
                            alert_text = messages;
                        }
                    }

                    if (response.status == true) {
                        Swal.fire({
                            title: "Success",
                            text: response.message,
                            icon: "success",
                            timer: 1500
                        }).then(function() {
                            var homeUrl = "{{ route('home')}}";
                            window.location.href = homeUrl;
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            html: alert_text,
                            icon: "warning"
                        }).then(function() {
                            $('#btn-submit').prop('disabled', false);
                        });
                    }
                }
            });
        });
    </script>
@endsection