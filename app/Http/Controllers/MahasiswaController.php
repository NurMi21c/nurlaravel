<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::paginate(10);
        return view('index', compact('mahasiswas'));
    }
}
