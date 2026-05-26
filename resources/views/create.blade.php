<x-layout title="Tambah Anggota HIMTI">

<div class="card">

    <div class="card-header bg-danger text-white">
        Tambah Anggota HIMTI
    </div>

    <div class="card-body">

        <form action="{{ route('store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>

                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">

                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">NIM</label>

                <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror">

                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>

                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>

                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Angkatan</label>

                <input type="text" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror">

                @error('angkatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>

                <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror">

                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-danger">
                Simpan
            </button>
            <a href="{{ route('index') }}">Kembali</a>

        </form>

    </div>

</div>

</x-layout>