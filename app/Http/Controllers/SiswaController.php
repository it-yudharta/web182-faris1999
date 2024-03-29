<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    
    public function index()
    {
        $data_siswa = \App\siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    
    public function create(request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
       $siswa = \App\Siswa::find($id);
       return view ('siswa/edit',['siswa' => $siswa]);
    }

    
    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data Berhasil Diupdate');
    }

    
    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses','Data Berhasil Dihapus');

    }
}