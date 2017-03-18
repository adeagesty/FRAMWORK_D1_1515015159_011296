<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DosenController extends Controller
{
	public function awal()
	{
    return "hello saya adeagesty";
	}
		public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$doaen=new Dosen();
	$dosen->username='jon doe';
	$dosen->password='doe jon';
	$dosen->save();
return "data dengan username {$dosen->username}telah disimpan";
}
}
