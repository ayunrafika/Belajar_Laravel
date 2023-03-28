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
