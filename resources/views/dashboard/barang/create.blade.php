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
                    <h1 class="fw-semibold text-gray-800 text-left lh-lg">Tambah Master Barang <a href="{{ url('/dashboard/barang') }}" class="btn btn-light-primary"> Master Barang</a> </h1>
                    <form action="{{ url('/dashboard/barang') }}" method="POST">
                        @csrf
                        <!--begin::Input group-->
                        <div class="d-flex flex-column flex-md-row gap-5">
                            <div class="card card-flush py-4 flex-row-fluid">
                                <div class="mb-3">
                                    <label class="required form-label">Kode Barang</label>
                                    <input class="form-control" name="kode_barang" placeholder="Kode Barang" value="{{ old('kode_barang') }}" />
                                    @error('kode_barang')                    
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>    
                                    @enderror
                                </div>
                                <div class="mb-3">
                                <label class="required form-label">Nama Barang</label>
                                <input class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{ old('nama_barang') }}" />
                                @error('nama_barang')                    
                                <span class="text-danger">
                                    {{ $message }}
                                </span>    
                                @enderror
                                </div>
                                <div class="mb-3">
                                <label class="required form-label">Supplier</label>
                                <select class="form-select" data-placeholder="Select Kategori"  name="name">
                                    @foreach ($supplier as $spl)
                                    @if (old('name') == $spl->id)
                        
                                    <option value="{{ $spl->id }}" selected>{{ $spl->name }}</option>
                    
                                    @else
                                        <option value="{{ $spl->id }}">{{ $spl->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                </div>
                                <div class="mb-3">
                                <label class="required form-label">Satuan</label>
                                <select class="form-select" data-placeholder="Select Satuan barang"  name="nama_satuan">
                                    @foreach ($satuan as $satuanbarang)
                                    @if (old('nama_satuan') == $satuanbarang->id)
                                    <option value="{{ $satuanbarang->id }}" selected>{{ $satuanbarang->nama_satuan }}</option>
                                    @else
                                    <option value="{{ $satuanbarang->id }}">{{ $satuanbarang->nama_satuan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label class="required form-label">Kategori</label>
                                    <select class="form-select" data-placeholder="Select Kategori"  name="nama_kategori">
                                        @foreach ($kategori as $kategoribarang)
                                        @if (old('nama_kategori') == $kategoribarang->id)
                            
                                        <option value="{{ $kategoribarang->id }}" selected>{{ $kategoribarang->nama_kategori }}</option>
                        
                                        @else
                                            <option value="{{ $kategoribarang->id }}">{{ $kategoribarang->nama_kategori }}</option>
                                        @endif
                                        @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="card card-flush py-4 flex-row-fluid">
                                <div class="mb-3">
                                <label class="required form-label">Qty</label>
                                <input class="form-control" type="number" name="qty" placeholder="Qty Barang" value="{{ old('qty') }}" />
                                @error('qty')                    
                                <span class="text-danger">
                                    {{ $message }}
                                </span>    
                                @enderror
                                </div>
                                <div class="mb-3">
                                <label class="required form-label">Harga Beli</label>
                                <input class="form-control" type="number" name="harga_beli" placeholder="Harga Beli Barang" value="{{ old('harga_beli') }}" />
                                @error('harga_beli')                    
                                <span class="text-danger">
                                    {{ $message }}
                                </span>    
                                @enderror
                                </div>
                                <div class="mb-3">
                                <label class="required form-label">Harga Jual</label>
                                <input class="form-control" type="number" name="harga_jual" placeholder="Harga Jual Barang" value="{{ old('harga_jual') }}" />
                                @error('harga_jual')                    
                                <span class="text-danger">
                                    {{ $message }}
                                </span>    
                                @enderror
                                </div>
                                <div class="mb-3">
                                <label class="required form-label">tanggal</label>
                                <input class="form-control" type="date" name="tanggal"/>
                                @error('tanggal')                    
                                <span class="text-danger">
                                    {{ $message }}
                                </span>    
                                @enderror
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <br>
                        <div class="d-flex flex-column flex-md-row gap-5">   
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                            </button>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection