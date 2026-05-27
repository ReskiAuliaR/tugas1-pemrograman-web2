<x-layout title="Detail Anggota HIMTI">

    <div class="card">

        <div class="card-header bg-info text-white">
            Detail Anggota HIMTI
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="200">Nama</th>
                    <td>{{ $anggota->nama }}</td>
                </tr>

                <tr>
                    <th>NIM</th>
                    <td>{{ $anggota->nim }}</td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>{{ $anggota->alamat }}</td>
                </tr>

                <tr>
                    <th>Angkatan</th>
                    <td>{{ $anggota->angkatan }}</td>
                </tr>

                <tr>
                    <th>No HP</th>
                    <td>{{ $anggota->no_hp }}</td>
                </tr>

                <tr>
                    <th>Divisi</th>
                    <td>{{ $anggota->divisi->nama_divisi }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $anggota->email }}</td>
                </tr>
                <tr>
                    <th>Dibuat Pada</th>
                    <td>{{ $anggota->created_at }}</td>
                </tr>
                <tr>
                    <th>Diupdate Pada</th>
                    <td>{{ $anggota->updated_at }}</td>
                </tr>

            </table>

            <a href="{{ route('index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>

    </div>

</x-layout>