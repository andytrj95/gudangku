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
                <div class="mb-2">
                    <!--begin::Title-->
                    <h1 class="fw-semibold text-gray-800 text-left lh-lg">Persediaan Barang   <a href="/dashboard/barang/tambah" class="btn btn-light-primary">Tambah Persediaan Barang</a> </h1>

                    <div class="table-responsive">
                        <table class="table table-row-bordered gy-5" id="data-table-sedia">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th>#</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Satuan</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection