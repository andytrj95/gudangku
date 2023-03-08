<?php

namespace App\Http\Controllers;

use App\Models\Persediaan;
use Illuminate\Http\Request;
use DataTables;

class PersediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->ajax())
        {
        $data=Persediaan::get();
        return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('dashboard.persediaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persediaan  $persediaan
     * @return \Illuminate\Http\Response
     */
    public function show(Persediaan $persediaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persediaan  $persediaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Persediaan $persediaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persediaan  $persediaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persediaan $persediaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persediaan  $persediaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persediaan $persediaan)
    {
        //
    }
}
