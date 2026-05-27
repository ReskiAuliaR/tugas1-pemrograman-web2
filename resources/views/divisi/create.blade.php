<x-layout title="Tambah Divisi">

<div class="card">

    <div class="card-header bg-success text-white">
        Tambah Divisi
    </div>

    <div class="card-body">

        <form action="{{ route('divisi.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Nama Divisi
                </label>

                <input type="text" name="nama_divisi" class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label">Ketua Divisi </label>

                <input type="text" name="ketua_divisi" class="form-control">

            </div>

            <div class="mb-3">

                <label class="form-label"> Deskripsi</label>

                <textarea  name="deskripsi" class="form-control"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

        </form>

    </div>

</div>

</x-layout>