<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{

// HOME and ABOUT

public function index()
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

// TUTOR
    public function tutor()
    {
            return view('ttr.tutor', [
                'title' => 'Tutor',
                'dataTutor' => Tutor::paginate(5),
            ]);
    }

    public function detailTutor(Request $request)
        {
            return view('ttr.detailTutor', [
                'title' => 'Detail tutor',
                'id' => $request->id,
                'dataTutor' => Tutor::find($request->id)
            ]); 
        }

    public function indexAddTutor()
    {
        return view('ttr.form-tutor', [
            'title' => 'Tambah Data Tutor'
        ]);
    }

    public function storeTutor(Request $request)
    {
        
        $validatedData = $request->validate([
            "nama" => "required|min:3",
            "id_tutor" => "required|min:4",
            "email" => "required|email:dns",
            "periode_mengajar" => "required",
            "alamat" => "required",
            "gender" => "required",
            "usia" => "required",
            "bidang_keahlian" => "required",
        ], [
            "nama.required" => "Nama tidak boleh kosong!",
            "id_tutor.required" => "ID Tutor tidak boleh kosong!",
            "email.required" => "Email tidak boleh kosong!",
            "periode_mengajar" => "Periode Mengajar tidak boleh kosong!",
            "alamat.required" => "Alamat tidak boleh kosong!",
            "gender.required" => "Jenis Kelamin tidak boleh kosong!",
            "usia.required" => "Usia tidak boleh kosong!",
            "bidang_keahlian.required" => "Bidang Keahlian tidak boleh kosong!"
        ]);

        Tutor::create($validatedData);

        return redirect("/ttr/tutor")->with('success', 'Berhasil Tambah Data Tutor!');
    }

    public function indexUpdateTutor(Request $request)
    {
        return view('ttr.form-edit-tutor',[
            'title' => "Edit Tutor",
            'data' => Tutor::find($request->id)
        ]);
    }

    public function storeUpdateTutor(Request $request, $id)
    {
        $validatedData = $request->validate([
            "nama" => "|min:3",
            "id_tutor" => "min:4",
            "email" => "",
            "periode_mengajar" => "",
            "alamat" => "",
            "gender" => "",
            "usia" => "|between:0,100",
            "bidang_keahlian" => "",
        ]); 
       
        Tutor::find($id)->update($validatedData);

        return redirect("/ttr/detailtutor/$id")->with('success', 'Berhasil Update Data Tutor!');
    }

    public function destroyTutor($id)
    {
        Tutor::destroy($id);

        return redirect("/ttr/tutor")->with('deleted', 'Berhasil Hapus Data Tutor');
    }

// MAHASISWA
    
    public function mahasiswa()
    {
        // $username = "Rafika";   
        // if (!Gate::allows('isMahasiswa')) {
        //     abort(403);
        // }
            return view('mhs.mahasiswa', [
                'title' => 'Daftar Mahasiswa',
                'dataMahasiswa' => Mahasiswa::paginate(5),
                // 'user' => $username,
                'usia' => 17,
                'isMember' => true,
                'grade' => 100,
            ]);
    }

    public function detail(Request $request)
    {
        return view('mhs.detail', [
            'title' => 'Detail mahasiswa',
            'id' => $request->id,
            'data' => Mahasiswa::find($request->id)
        ]); 
    }

    public function indexAddMahasiswa()
    {
        return view('mhs.form-mahasiswa', [
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

        return redirect("/mhs/mahasiswa")->with('success', 'Berhasil Tambah Data Mahasiswa!');
    }

    public function indexUpdateMahasiswa(Request $request)
    {
        return view('mhs.form-edit-mahasiswa',[
            'title' => "Edit Mahasiswa",
            'data' => Mahasiswa::find($request->id)
        ]);
    }

    public function storeUpdateMahasiswa(Request $request, $id)
    {
        $validatedData = $request->validate([
            "nama" => "|min:3",
            "NIM" => "min:4",
            "nilai" => "|integer|between:0,100",
            "alamat" => "",
            "gender" => "",
            "usia" => "|between:0,100",
        ]);
        
        // dd($request->all());
        // $data = Mahasiswa::find($id);
        // $data->nama = $request->input('nama');
        // $data->NIM = $request->input('NIM');
        // $data->gender = $request->input('gender');
        // $data->nilai = $request->input('nilai');
        // $data->usia = $request->input('usia');
        // $data->alamat = $request->input('alamat');
        // $data->update();

        Mahasiswa::find($id)->update($validatedData);

        return redirect("/mhs/detail/$id")->with('success', 'Berhasil Update Data Mahasiswa!');
        // ->with('success', ["Berhasil Update Data Mahasiswa!", "Update Data"]);
    }
    
    public function destroyMahasiswa($id)
    {
        
        // delete by primary key ($id)
        Mahasiswa::destroy($id);

        return redirect("/mhs/mahasiswa")->with('deleted', 'Berhasil Hapus Data Mahasiswa');
    }

}