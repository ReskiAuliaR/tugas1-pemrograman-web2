<x-layout title="Data Anggota">
    <div class="card shadow-sm">

        <div class="card-body">

            <h1 class="mb-3">
                Data Keanggotaan HIMTI
            </h1>

            <p>
                Selamat datang di aplikasi pendataan anggota HIMTI.
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
            Data Anggota HIMTI 2009-2026
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>Angkatan</th>
                        <th>No HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($anggotas as $anggota)

                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $anggota->nama }}</td>
                            <td>{{ $anggota->nim }}</td>
                            <td>{{ $anggota->alamat }}</td>
                            <td>{{ $anggota->angkatan }}</td>
                            <td>{{ $anggota->no_hp }}</td>
                            <td>
                                <a href="{{ route('edit', $anggota->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                {{-- <form action="{{ route('destroy', $anggota->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach

                   

                </tbody>

            </table>

        </div>
    </div>

</x-layout>