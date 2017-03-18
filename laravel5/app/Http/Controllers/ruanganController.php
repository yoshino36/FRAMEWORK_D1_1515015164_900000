<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;
class ruanganController extends Controller
{
    //
    public function awal()
    {
    	return "Hello dari ruanganController";
	}
	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$room = new ruangan();
		$room->title = '411A';
		
		$room->save();
		return "data dengan username {$room->title} telah disimpan";
	}
}
