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
                <div>
                    <h1 class="fw-semibold text-gray-800 text-left lh-lg">Detail Barang <a href="{{ url('/dashboard/barang') }}" class="btn btn-light-primary"> Master Barang</a> </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row gy-5 g-xl-10">
    <div class="col-xl-12 mb-xl-10">
        <div class="card h-md-100">
            <div class="card-body d-flex flex-column flex-left">
                <div class="mb-2">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>    
                                {{$data->nama_barang}}  ( {{ $data->kode_barang }} )
                            </h2>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <div class="card card-flush py-4 flex-row-fluid">
                            
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Kode 
                                                     </div>
                                                </td>
                                                <td class="fw-bold text-end"> {!! DNS1D::getBarcodeHTML('4445645656', 'I25+') !!}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                     Nama</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->nama_barang }}</td>
                                            </tr>                                            
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Supplier</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->supplier->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Qty</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->qty }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Tanggal Update</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->tanggal }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="mb-4">
                                <a href="#" class="btn btn-light-success">Edit</a>
                                <a href="#" class="btn btn-light-danger">Delete</a>
                            </div>
                        </div>
                        <div class="card card-flush py-4 flex-row-fluid">
                        
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Harga beli 
                                                     </div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->harga_beli }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                     Harga Jual</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->harga_jual }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Jenis</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->masterkategori->nama_kategori }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                    Satuan</div>
                                                </td>
                                                <td class="fw-bold text-end">{{ $data->mastersatuan->nama_satuan }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection