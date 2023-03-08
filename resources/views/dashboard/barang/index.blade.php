@extends('dashboard.layouts.navbar')
@section('main')
<br>
<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xl-12 mb-xl-10">
        <!--begin::Engage widget 1-->
        <div class="card h-md-100">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column flex-left">
                <!--begin::Heading-->
                <h1 class="mb-2">
                    <!--begin::Title-->
                    <h1 class="fw-semibold text-gray-800 text-left lh-lg">Data Master Barang <a href="{{ url('/dashboard/barang/create') }}" class="btn btn-light-primary">Tambah Master Barang</a> </h1>
                    <br />
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <br/>
                    <div class="table-responsive mb-2">
                        <table class="table table-row-bordered gy-5 data-table">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <!--end::Title-->
                </div>
             
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 1-->
    </div>
</div>    
@endsection