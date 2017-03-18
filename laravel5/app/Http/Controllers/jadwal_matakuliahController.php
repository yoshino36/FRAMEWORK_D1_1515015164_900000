<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class jadwal_matakuliahController extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari jadwal_matakuliahController";
	}
	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$jm = new jadwal_matakuliah();
		$jm->mahasiswa_id = '1';
		$jm->ruangan_id = '1';
		$jm->dosen_matakuliah_id = '1';
		$jm->save();
		return "data telah disimpan";
	}
}
