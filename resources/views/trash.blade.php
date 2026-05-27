<x-layout title="Trash Anggota HIMTI">

    <div class="card">

        <div class="card-header bg-dark text-white">
            Trash Anggota HIMTI
        </div>

        <div class="card-body">

            <a href="{{ route('index') }}" class="btn btn-secondary mb-3">
                Kembali
            </a>

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIM</th>
                        <th>Divisi</th>
                        <th>Dihapus Pada</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($anggotas as $anggota)

                        <tr>

                           <td>{{ $anggotas->firstItem() + $loop->index }}</td>
                            <td>{{ $anggota->nama }}</td>
                            <td>{{ $anggota->email }}</td>
                            <td>{{ $anggota->nim }}</td>
                            <td>{{ $anggota->divisi->nama_divisi }}</td>
                            <td>{{ $anggota->deleted_at }}</td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

            {{ $anggotas->links() }}

        </div>

    </div>

</x-layout>