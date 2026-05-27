<x-layout title="Detail Divisi HIMTI">

    <div class="card">

        <div class="card-header bg-danger text-white">
            Detail Divisi HIMTI
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="200">Nama Divisi</th>
                    <td>{{ $divisi->nama_divisi }}</td>
                </tr>

                <tr>
                    <th>Ketua Divisi</th>
                    <td>{{ $divisi->ketua_divisi }}</td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $divisi->deskripsi }}</td>
                </tr>

                <tr>
                    <th>Dibuat Pada</th>
                    <td>{{ $divisi->created_at }}</td>
                </tr>

                <tr>
                    <th>Diupdate Pada</th>
                    <td>{{ $divisi->updated_at }}</td>
                </tr>

            </table>

            <a href="{{ route('divisi.index') }}" class="btn btn-secondary">
                Kembali
            </a>

        </div>

    </div>

</x-layout>