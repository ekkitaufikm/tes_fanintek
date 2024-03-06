@extends('layouts.app')

@section('title', 'Data Users')

@section('css-library')
    {{-- Tempat Ngoding Meletakkan css library --}}
    <link href="{{ url('') }}/assets/css/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('css-custom')
    {{-- Tempat Ngoding Meletakkan css custom --}}
@endsection

@section('content')
<div class="content-body">
    <!-- container starts -->
    <div class="container">
        
        <!-- row -->
        <div class="element-area">
            <div class="demo-view">
                <div class="container pt-0 ps-0 pe-lg-4 pe-0">
                    <div class="row">
                        <!-- Column starts -->
                        <div class="col-xl-12">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="card dz-card" id="accordion-one">
                                <div class="card-header flex-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5 class="card-title">{{ __('Data Users') }}</h5>
                                        </div>
                                        <div class="col-lg-6 d-flex justify-content-end">
                                            <div class="btn-group">
                                                <a href="{{ route("users.create", []) }}" type="button" class="btn btn-lg btn-primary">
                                                    <i class="fas fa-plus-square"></i> <b>Tambah Data Karyawan</b>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-content-->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="Preview" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                <table id="isi-tabel" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%">#</th>
                                                            <th>Nama</th>
                                                            <th>NPP</th>
                                                            <th>NPP Supervisor</th>
                                                            <th>Role</th>
                                                            <th width="10%"><i class="fas fa-cog"></i></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <!--/tab-content-->
                            </div>
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
    $(function() {
        
        $("#isi-tabel").DataTable({
        // $("#tabel-jquery")({
            language: {
                emptyTable: "Tidak ada data Users",
                info: "Total: _TOTAL_ Data Users",
                infoEmpty: "Menampilkan 0 dari 0 Data Users",
            },
            responsive:  true,
            autoWidth: false,
            processing: true,
            ajax: {
                url: baseUrl+'/api/getTableUsers/',
                method: 'POST',
            },
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });

    });
</script>
@endsection