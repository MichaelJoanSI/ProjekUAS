<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dosen;

class DosenAPIController extends Controller
{
    public function all() {
        $dosen = Dosen::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $dosen
        ], 200);
    }

    public function create(Request $request) {
        $dosen = Dosen::create([
            'nidn' => $request ->nidn,
            'nama' => $request ->nama,
            'email' => $request ->email,
            'password' => $request ->password,
            'status' => $request ->status,
            'jafung' => $request ->jafung,
            'pakar' => $request ->pakar,
        ]);

        if ($dosen) {
            return response()->json([
                'success' =>true,
                'message' =>'Berhasil Disimpan',
            ], 200);
        }
        else {
            return response()->json([
                'success' =>false,
                'message' =>'Tidak Dapat Disimpan',
            ], 401);
        }
    }

    public function update(Request $request) {
        $dosen = Dosen::whereId($request->id)->update([
            'nidn' => $request ->nidn,
            'nama' => $request ->nama,
            'email' => $request ->email,
            'password' => $request ->password,
            'status' => $request ->status,
            'jafung' => $request ->jafung,
            'pakar' => $request ->pakar,
        ]);

        if ($dosen) {
            return response()->json([
                'success' =>true,
                'message' =>'Berhasil Disimpan',
            ], 200);
        }
        else{
            return response()->json([
                'success' =>false,
                'message' =>'Tidak Dapat Disimpan',
            ], 400);
        }
    }

    public function delete($id) {
        $dosen = Dosen::find($id);
        $dosen ->delete();

        if ($dosen) {
            return response()->json([
                'success' =>true,
                'message' =>'Berhasil Disimpan',
            ], 200);
        }
        else {
            return response()->json([
                'success' =>false,
                'message' =>'Tidak Dapat Disimpan',
            ], 400);
        }
    }

    public function sebagian() {
        $dosen = Dosen::paginate(2);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $dosen
        ], 200);
    }
}
