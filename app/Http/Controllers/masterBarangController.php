<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use App\Models\masterbarang;
use App\Models\masterkategori;
use App\Models\mastersatuan;
use App\Models\supplier;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Contracts\DataTable;

class masterBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //     if ($this->middleware('auth')) {
    //         session()->regenerate();
    //     }
    //  }

    public function index(Request $request)
    {
            if ($request->ajax())
            {
            $data=masterbarang::get();
            return DataTables::of($data)
            ->addColumn('aksi',function($data){
                    // $button =   \DNS1D::getBarcodeHTML("$data->kode_barang", 'I25+') ;
                    $button = "<a href='/dashboard/barang/$data->kode_barang'><span class='badge  badge-primary badge-sm'>Lihat</span></a> ";
                    $button .= "<a href='/dashboard/barang/$data->kode_barang/edit'><span class='badge badge-warning badge-sm'>Edit</span></a> ";
                    $button .= "<a href='#'><span class='badge badge-danger badge-sm'>Hapus</span></a> ";
                    return $button;
             }
            
            )
            ->rawColumns(['aksi'])
            ->addIndexColumn()
            ->make(true);
            }
            return view('dashboard.barang.index');
    }


    // public function detail($kode_barang){
    //     $title= "produk Detail";
    //     $detail=masterbarang::find($kode_barang);
    //     return view('dashboard.barang.detail', compact('title','detail'));

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.barang.create' ,[
            'kategori' => masterkategori::all(),
            'satuan' => mastersatuan::all(),
            'supplier' => supplier::all()
        ]);
    }


    // public function tampilao(){
    //     return view('dashboard.barang.halo');
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangRequest $request)
    {
        //
       $simpan= masterbarang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tanggal' => $request->tanggal,
            'kategori_id' => $request->nama_kategori,
            'satuan_id' => $request->nama_satuan,
            'supplier_id' => $request->name
        ]);

        
      

        return redirect('/dashboard/barang/')->with('success', 'Barang baru berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\masterbarang  $masterbarang
     * @return \Illuminate\Http\Response
     */
    public function show(masterbarang  $masterbarang)
     {
        return view('dashboard.barang.detail', [
            'data' => $masterbarang
        ]);
      
        

        // $barang=masterbarang::find($kode_barang);
        // return $barang;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\masterbarang  $masterbarang
     * @return \Illuminate\Http\Response
     */
    public function edit(masterbarang $masterbarang)
    {
        return view('dashboard.barang.edit',[
            'barang' => $masterbarang,
            'supplier' =>supplier::all(),
            'satuan' =>mastersatuan::all(),
            'kategori' =>masterkategori::all()

        ]);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\masterbarang  $masterbarang
     * @return \Illuminate\Http\Response
     */
    public function update(BarangRequest $request, masterbarang $masterbarang)
    {
        masterbarang::where('kode_barang', $masterbarang->kode_barang)
        ->update([
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'tanggal' => $request->tanggal,
            'kategori_id' => $request->nama_kategori,
            'satuan_id' => $request->nama_satuan,
            'supplier_id' => $request->name
        ]);
         return redirect('/dashboard/barang/')->with('success', 'Barang  berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masterbarang  $masterbarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(masterbarang $masterbarang)
    {
        //
    }
}
