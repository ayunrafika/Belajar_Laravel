<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Tutor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $username = "Rafika";   

            return view('home', [
                'title' => 'Home',
                'dataMahasiswa' => Mahasiswa::all(),
                'user' => $username,
                'usia' => 17,
                'isMember' => true,
                'grade' => 100,
            ]);
    }

    public function tutor()
    {
        $username = "Rafika";   

            return view('tutor', [
                'title' => 'Tutor',
                'dataTutor' => Tutor::all(),
                'user' => $username,
                'usia' => 17,
                'isMember' => true,
                'grade' => 100,
            ]);
    }

    public function detail(Request $request)
    {
        return view('detail', [
            'title' => 'Detail mahasiswa',
            'id' => $request->id,
            'data' => Mahasiswa::find($request->id)
        ]); 
    }

    public function indexAddMahasiswa()
    {
        return view('form-mahasiswa', [
            'title' => 'Tambah Data Mahasiswa'
        ]);
    }

    public function storeMahasiswa(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required|min:3",
            "NIM" => "required|unique:mahasiswas|min:4",
            "nilai" => "required|integer|between:0,100",
            "alamat" => "required",
            "gender" => "required",
            "usia" => "required",
        ], [
            "nama.required" => "Nama tidak boleh kosong!",
            "NIM.required" => "NIM tidak boleh kosong!",
            "nilai.required" => "Nilai tidak boleh kosong!",
            "alamat.required" => "Alamat tidak boleh kosong!",
            "gender.required" => "Jenis Kelamin tidak boleh kosong!",
            "usia.required" => "Usia tidak boleh kosong!",
        ]);

        Mahasiswa::create($validatedData);

        return redirect('/home')->with('success', 'Berhasil Tambah Data Mahasiswa!');
    }

    public function indexUpdateMahasiswa(Request $request)
    {
        return view('form-edit-mahasiswa',[
            'title' => "Edit Mahasiswa",
            'data' => Mahasiswa::find($request->id)
        ]);
    }

    public function storeUpdateMahasiswa(Request $request)
    {
        dd($request->all());
        // return view('form-edit-mahasiswa',[
        //     'title' => "Edit Mahasiswa",
        //     'data' => Mahasiswa::find($request->id)
        // ]);
    }

    public function detailTutor(Request $request)
    {
        return view('detailTutor', [
            'title' => 'Detail tutor',
            'id' => $request->id,
            'dataTutor' => Tutor::find($request->id)
        ]); 
    }

    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]); 
    }

    public function about()
    {
        return view('about', [
            'title' => 'About Us',
        ]); 
    }
}
