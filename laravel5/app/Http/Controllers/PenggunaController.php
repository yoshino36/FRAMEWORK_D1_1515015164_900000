<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class PenggunaController extends Controller
{
    //
    public function awal()
    {
    	return view('pengguna.awal',['data'=>pengguna::all()]);
    }
    public function tambah()
    {
    	return view('pengguna.tambah');
    }
    public function simpan(Request $input)
    {
    	$pengguna = new pengguna();
    	$pengguna->username = $input->username;
    	$pengguna->password = $input->password;
    	$informasi = $pengguna->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
    	return redirect('pengguna')->with(['informasi'=>$informasi]);
    }
    public function edit($id)
    {
        $pengguna = pengguna::find($id);
        return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
    }
    public function lihat($id)
    {
        $pengguna = pengguna::find($id);
        return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
    }
    public function update($id, Request $input)
    {
        $pengguna = pengguna::find($id);
        $pengguna->username = $input->username;
        $pengguna->password = $input->password;
        $informasi = $pengguna->save() ? 'Berhasil update data': 'Gagal update data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $pengguna = pengguna::find($id);
        $informasi = $pengguna->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);

    }
}
