<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
   public function index(Request $request)

{
   
    $search = $request->search;

    $anggotas = Anggota::with('divisi')

        ->when($search,function($query) use ($search){

            $query->where('nama','like','%'.$search.'%')
                  ->orWhere('nim','like','%'.$search.'%')
                  ->orWhere('alamat','like','%'.$search.'%')
                  ->orWhere('angkatan','like','%'.$search.'%')
                  ->orWhere('no_hp','like','%'.$search.'%');

        })

        ->when($request->divisi,function($query) use ($request){

            $query->where('divisi_id',$request->divisi);

        })

        ->latest()
        ->paginate(10);

    return view('index',[
        'anggotas'=>$anggotas,
        'divisis'=>Divisi::all(),
    ]);
}
    

    public function create()
{
    return view('create',[
        'divisis'=>Divisi::all()
    ]);
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required|max:11',
            'alamat' => 'required',
            'angkatan' => 'required',
            'no_hp' => 'required|max:13',
            'divisi_id' => 'required|exists:divisis,id',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nim.required' => 'NIM wajib diisi',
            'nim.max' => 'NIM tidak boleh lebih dari 11 karakter',
            'alamat.required' => 'Alamat wajib diisi',
            'angkatan.required' => 'Angkatan wajib diisi',
            'no_hp.required' => 'No HP wajib diisi',
            'no_hp.max' => 'No HP tidak boleh lebih dari 13 karakter',
            'divisi_id.required' => 'Divisi wajib dipilih',
            'divisi_id.exists' => 'Divisi yang dipilih tidak valid',
        ]);

        Anggota::create($validated);
        return redirect()->route('index')->with('success', 'Data anggota berhasil ditambahkan');

    }

    public function edit(Anggota $anggota)
{
    return view('edit', [
        'title' => 'Edit Data Anggota',
        'anggota' => $anggota,
        
        'divisis' => Divisi::all(),
    ]);
}
    public function update(Request $request, $anggota)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nim' => 'required|max:11',
            'alamat' => 'required',
            'angkatan' => 'required',
            'no_hp' => 'required|max:15',
            'divisi_id' => 'required|exists:divisis,id',
        ],
        [
            'nama.required' => 'Nama wajib diisi',
            'nim.required' => 'NIM wajib diisi',
            'nim.max' => 'NIM tidak boleh lebih dari 11 karakter',
            'alamat.required' => 'Alamat wajib diisi',
            'angkatan.required' => 'Angkatan wajib diisi',
            'no_hp.required' => 'No HP wajib diisi',
            'no_hp.max' => 'No HP tidak boleh lebih dari 13 karakter',
            'divisi_id.required' => 'Divisi wajib dipilih',
            'divisi_id.exists' => 'Divisi yang dipilih tidak valid',
        ]);
    
        Anggota::where('id', $anggota)->update($validated);

        
        return redirect()->route('index')->with('success', 'Data anggota berhasil diperbarui');
    }       

    public function destroy($id)
{
    Anggota::destroy($id);

    return redirect()
        ->route('index')
        ->with('success','Data anggota berhasil dihapus');
}
    
}