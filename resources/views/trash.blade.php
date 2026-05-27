<x-layout title="Trash Anggota HIMTI">

 @if (session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>
     
 @endif
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
                        <th>Aksi</th>

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
                            <td>

    <div class="d-flex gap-2">

        <form action="{{ route('restore',$anggota->id) }}" method="POST">

            @csrf
            @method('PUT')

            <button type="submit" class="btn btn-success btn-sm">
                Restore
            </button>

        </form>

        <form action="{{ route('forceDelete',$anggota->id) }}" method="POST">

            @csrf
            @method('DELETE')

            <button type="submit"
                onclick="return confirm('Yakin ingin hapus permanen?')"
                class="btn btn-danger btn-sm">

                Hapus Permanen

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