<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// call model
use App\Siswa;

class SiswaController extends Controller
{
    // show all data
    public function index(){
        return Siswa::all();
    }

    // save data
    public function create(Request $request){
        $siswa = new Siswa;
        // input
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        // save
        $siswa->save();

        return "Berhasil Menyimpan";
    }

    // update data
    public function update(Request $request, $id){
        // input
        $nama = $request->nama;
        $alamat = $request->alamat;
        // update dimana
        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        // save
        $siswa->save();
        // return 
        return "Data Berhasil Diupdate";
    }

    // delete data
    public function delete($id){
        // find
        $siswa = Siswa::find($id);
        $siswa->delete();
        // return
        return "Data Berhasil Dihapus";
    }
}
