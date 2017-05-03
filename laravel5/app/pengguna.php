<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticable;

class Pengguna extends Authenticable {
	
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
    
	public function mahasiswa(){
		return $this->hasOne(mahasiswa::class,'pengguna_id');
	}
	
	public function dosen(){
		return $this->hasOne(dosen::class,'pengguna_id');
	}
}