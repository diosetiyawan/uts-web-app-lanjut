<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UtamaController extends Controller
{

    public function home()
    {
        return view("home"); // view dengan template
    }

    public function survei()
    {
        return view("survei");
    }

    public function proses(Request $request)
    {
        echo "Survei Berhasil Diproses";
        
        $validasi = $request->validate([
            'pertanyaan' => 'required',
        ]);
    }

    /* ------------------------------ */

    public function biodata(Request $request)
    {
        // $nama_file = time().".".$request->file("gambar")->extension();
        // $request->file("gambar")->move(public_path(), $nama_file);

        return view("biodata");
    }

    public function kirim()
    {
        echo "Biodata Berhasil Dikirim";
    }

    /* ------------------------------ */

    public function tentang()
    {
        return view("tentang");
    }

    public function kontak()
    {
        return view("kontak");
    }
}