<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('authentication.sign-up' ,[
            "title" => "Form Registrasi"
        ]);
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
        
        $simpan=$request->validate([
            
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'jeniskelamin' =>'required',
            'password' => 'required|min:5|max:255'
        ]);

        $simpan['password']=Hash::make($simpan['password']);
        User::create($simpan);
        return redirect('/sign-up')->with('success', 'Registrasi Berhasil , Silahkan Login !!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterModel $registerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterModel $registerModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterModel $registerModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterModel  $registerModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterModel $registerModel)
    {
        //
    }
}
