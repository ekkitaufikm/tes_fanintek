@extends('layouts.app')

@section('title', 'Tambah Data Users')

@section('css-library')
    {{-- Tempat Ngoding Meletakkan css library --}}
    <link href="{{ url('') }}/assets/css/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('css-custom')
    {{-- Tempat Ngoding Meletakkan css custom --}}
@endsection

@section('content')
<div class="content-body">
    <div class="container">
        
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form id="form-id" action="{{ url('api/users/store') }}" method="post">
                                <div class="mb-3">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <input type="text" name="name" class="form-control input-rounded" placeholder="Masukkan Nama">
                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control input-rounded" placeholder="Masukkan Email">
                                </div>
                                <div class="mb-3">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <input type="text" name="password" class="form-control input-rounded" placeholder="Masukkan Password">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Role</label>
                                    <select id="select-role" class="form-control Select2 form-control-lg" name="m_role_id" aria-label="Default select example">
                                        <option value="">Pilih Role</option>
                                        @foreach(\App\Models\RoleModel::where('nama', '!=', 'Super Admin')->get() as $role)
                                            <option value="{{ $role->id }}">{{ $role->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button id="btn-submit" type="submit" class="btn btn-primary me-1 mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-library')
    {{-- Tempat Ngoding Meletakkan js library --}}
    <script src="{{ url('') }}/assets/js/sweetalert2.min.js"></script>

@endsection

@section('js-custom')
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
                        var homeUrl = "{{ url('users')}}";
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