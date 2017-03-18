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
    	return "Hello dari mahasiswaController";
	}
	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$mhs = new mahasiswa();
		$mhs->nama = 'Adli';
		$mhs->pengguna_id = '1';
		$mhs->save();
		return "data dengan username {$mhs->nama} telah disimpan";
	}
}
