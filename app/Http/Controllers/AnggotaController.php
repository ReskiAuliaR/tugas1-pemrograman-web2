<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        ->paginate(10) ->withQueryString();

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
        'nama'=>'required',
        'email'=>'required|email',
        'nim'=>'required|max:11',
        'alamat'=>'required',
        'angkatan'=>'required',
        'no_hp'=>'required|max:13',
        'divisi_id'=>'required|exists:divisis,id',
    ],
    [
        'nama.required'=>'Nama wajib diisi',
        'email.required'=>'Email wajib diisi',
        'email.email'=>'Format email tidak valid',
        'nim.required'=>'NIM wajib diisi',
        'nim.max'=>'NIM tidak boleh lebih dari 11 karakter',
        'alamat.required'=>'Alamat wajib diisi',
        'angkatan.required'=>'Angkatan wajib diisi',
        'no_hp.required'=>'No HP wajib diisi',
        'no_hp.max'=>'No HP tidak boleh lebih dari 13 karakter',
        'divisi_id.required'=>'Divisi wajib dipilih',
    ]);

    DB::beginTransaction();

    try {

        Anggota::create($validated);

        DB::commit();

        return redirect()
            ->route('index')
            ->with('success','Data anggota berhasil ditambahkan');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
            ->with('error','Data anggota gagal ditambahkan');

    }
}

    public function edit(Anggota $anggota)
{
    return view('edit', [
        'title' => 'Edit Data Anggota',
        'anggota' => $anggota,
        
        'divisis' => Divisi::all(),
    ]);
}
    public function update(Request $request,$anggota)
{
    $validated = $request->validate([
        'nama'=>'required',
        'email'=>'required|email',
        'nim'=>'required|max:11',
        'alamat'=>'required',
        'angkatan'=>'required',
        'no_hp'=>'required|max:15',
        'divisi_id'=>'required|exists:divisis,id',
    ],
    [
        'nama.required'=>'Nama wajib diisi',
        'email.required'=>'Email wajib diisi',
        'email.email'=>'Format email tidak valid',
        'nim.required'=>'NIM wajib diisi',
        'nim.max'=>'NIM tidak boleh lebih dari 11 karakter',
        'alamat.required'=>'Alamat wajib diisi',
        'angkatan.required'=>'Angkatan wajib diisi',
        'no_hp.required'=>'No HP wajib diisi',
        'no_hp.max'=>'No HP tidak boleh lebih dari 13 karakter',
        'divisi_id.required'=>'Divisi wajib dipilih',
    ]);

    DB::beginTransaction();

    try {

        Anggota::where('id',$anggota)->update($validated);

        DB::commit();

        return redirect()
            ->route('index')
            ->with('success','Data anggota berhasil diperbarui');

    } catch (\Exception $e) {

        DB::rollBack();

        return back()
            ->with('error','Data anggota gagal diperbarui');

    }
}       

    public function destroy($id)
{
    Anggota::destroy($id);

    return redirect()
        ->route('index')
        ->with('success','Data anggota berhasil dihapus');
}
public function show(Anggota $anggota)
{
    return view('show',[
        'anggota'=>$anggota
    ]);
}
public function trash()
{
    $anggotas = Anggota::onlyTrashed()
        ->latest()
        ->paginate(10)->withQueryString();

    return view('trash',[
        'anggotas'=>$anggotas
    ]);
}
public function restore($id)
{
    Anggota::onlyTrashed()
        ->where('id',$id)->restore();

    return redirect()
        ->route('trash')
        ->with('success','Data anggota berhasil direstore');
}
    
}