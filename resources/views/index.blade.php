<x-layout title="Data Anggota HIMTI">

<div class="card">

    <div class="card-header bg-danger text-white">
        Data Anggota HIMTI
    </div>

    <div class="card-body">

        <form action="{{ route('index') }}" method="GET" class="mb-3">

            <div class="row">

                <div class="col-md-10">
                    <input type="text" name="search" class="form-control" placeholder="Cari nama atau NIM..." value="{{ request('search') }}"
                    >
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-danger w-100">
                        Cari
                    </button>
                </div>

            </div>

        </form>

        <table class="table table-bordered">

            <thead>
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

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->nim }}</td>
                    <td>{{ $anggota->alamat }}</td>
                    <td>{{ $anggota->angkatan }}</td>
                    <td>{{ $anggota->no_hp }}</td>
                    <td>

    <div class="d-flex gap-2 justify-content-center">


        <a href="{{ route('edit',$anggota->id) }}" class="btn btn-warning btn-sm">
            Edit
        </a>

        <form action="{{ route('destroy',$anggota->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit"
                onclick="return confirm('Yakin ingin hapus?')"
                class="btn btn-danger btn-sm">

                Hapus

            </button>

        </form>

    </div>

</td>
                </tr>

                @endforeach

            </tbody>

        </table>

        {{ $anggotas->links() }}

    </div>

</div>

</x-layout>