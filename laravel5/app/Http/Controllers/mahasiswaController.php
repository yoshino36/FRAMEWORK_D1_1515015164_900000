<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;
class mahasiswaController extends Controller
{
    //
    public function awal()
    {
    	return view('mahasiswa.awal',['data'=>mahasiswa::all()]);
	}
	public function tambah()
	{
		return view('mahasiswa.tambah');
	}
	public function simpan(Request $input)
	{
		$mhs = new mahasiswa();
		$mhs->nama = $input->nama;
		$mhs->nim = $input->nim;
		$mhs->alamat = $input->alamat;
		$informasi = $mhs->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('mahasiswa')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
    {
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }
    public function update($id, Request $input)
    {
        $mhs = mahasiswa::find($id);
        $mhs->nama = $input->nama;
		$mhs->nim = $input->nim;
		$mhs->alamat = $input->alamat;
        $informasi = $mhs->save() ? 'Berhasil update data': 'Gagal update data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);

    }
}
