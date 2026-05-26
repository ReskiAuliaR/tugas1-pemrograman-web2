<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
     public function index()
    {
        $anggotas = Anggota::all();

        return view('index', [
            'anggotas' => $anggotas
        ]);
    }

    public function create()
    {
        return view('create');

    }
}