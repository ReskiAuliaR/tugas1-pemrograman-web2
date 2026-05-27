<x-layout title="Edit Anggota HIMTI">

<div class="card">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card-header bg-warning text-dark">
    Edit Data Anggota HIMTI
</div>

<div class="card-body">

    
<form action="{{ route('update', $anggota->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}">
</div>

<div class="mb-3">
    <label class="form-label">NIM</label>
    <input type="text" name="nim" class="form-control" value="{{ $anggota->nim }}">
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control">{{ $anggota->alamat }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Angkatan</label>
    <input type="text" name="angkatan" class="form-control" value="{{ $anggota->angkatan }}">
</div>

<div class="mb-3">
    <label class="form-label">No HP</label>
    <input type="text" name="no_hp" class="form-control" value="{{ $anggota->no_hp }}">
</div>
<div class="mb-3">

    <label class="form-label">
        Divisi
    </label>

    <select name="divisi_id" class="form-select">

        @foreach($divisis as $divisi)

            <option value="{{ $divisi->id }}"
                {{ $anggota->divisi_id == $divisi->id ? 'selected' : '' }}>

                {{ $divisi->nama_divisi }}

            </option>

        @endforeach

    </select>

</div>

<div class="mb-3">

    <label class="form-label">
        Email
    </label>

    <input type="email" name="email" class="form-control" value="{{ $anggota->email }}">

</div>

<button type="submit" class="btn btn-warning">
    Update
</button>

<a href="{{ route('index') }}" class="btn btn-secondary">
    Kembali
</a>

</form>

</div>

</div>

</x-layout>