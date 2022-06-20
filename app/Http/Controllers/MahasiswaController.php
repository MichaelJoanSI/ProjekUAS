<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa() {
        $mahasiswa = Mahasiswa::paginate(5);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian(Request $request) {
        $cari = $request -> cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function formulirmahasiswa() {
        return view('formulirmahasiswa');
    }

    public function simpanmahasiswa(Request $request) {
        $bidang_minat = implode(",", $request->get('bidang_minat'));
        Mahasiswa::create([
            'nim' =>$request->nim,
            'nama' =>$request->nama,
            'gender' =>$request->nama,
            'jurusan' =>$request->nama,
            'bidang_minat' =>$bidang_minat
        ]);
        return redirect("/mahasiswa")->with('alert', "Berhasil Disimpan");
    }
    
    public function editmahasiswa($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request) {
        $bidang_minat = implode(',', $request->bidang_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa ->nim = $request->nidn;
        $mahasiswa ->nama = $request->nama;
        $mahasiswa ->gender = $request->status;
        $mahasiswa ->jurusan = $request->jafung;
        $mahasiswa ->bidang_minat = $bidang_minat;
        $mahasiswa ->save();
        return redirect('/mahasiswa')->with('alert', "Berhasil Dirubah");
    }

    public function hapusmahasiswa($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa ->delete();
        return redirect('/mahasiswa')->with('alert', "Berhasil Dihapus");
    }
}