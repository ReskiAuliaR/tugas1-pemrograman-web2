<x-layout title="Data divisi">
    <div class="card shadow-sm">

        <div class="card-body">

            <h1 class="mb-3">
                Data Keanggotaan HIMTI
            </h1>

            <p>
                Selamat datang di aplikasi pendataan divisi HIMTI.
            </p>

        </div>

    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


    <div class="card">
        <div class="card-header bg-danger text-white">
            Data divisi HIMTI 2009-2026
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Divisi</th>
                        <th>Ketua Divisi</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($divisis as $divisi)

                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $divisi->nama_divisi }}</td>
                            <td>{{ $divisi->ketua_divisi }}</td>
                            <td>{{ $divisi->deskripsi }}</td>
                            
                            <td>
                                <a href="{{ route('edit', $divisi->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <form action="{{ route('destroy', $divisi->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                   

                </tbody>

            </table>

        </div>
    </div>

</x-layout>