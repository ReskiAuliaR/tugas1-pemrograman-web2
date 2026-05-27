<x-layout title="Edit Divisi HIMTI">

<div class="card">

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <div class="card-header bg-danger text-white">
        Edit Divisi HIMTI
    </div>

    <div class="card-body">

        <form action="{{ route('divisi.update', $divisi->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    Nama Divisi
                </label>

                <input type="text" name="nama_divisi" class="form-control"value="{{ $divisi->nama_divisi }}">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Ketua Divisi
                </label>

                <input type="text" name="ketua_divisi" class="form-control" value="{{ $divisi->ketua_divisi }}"
                >

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea name="deskripsi" class="form-control" >{{ $divisi->deskripsi }}</textarea>

            </div>

            <div class="d-flex gap-2">

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('divisi.index') }}"  class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

</x-layout>