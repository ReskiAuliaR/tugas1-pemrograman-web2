<x-layout title="Data Divisi HIMTI">

    <div class="card">

        <div class="card-header bg-danger text-white">
            Data Divisi HIMTI 2009-2026
        </div>

        <div class="card-body">

            <a href="{{ route('divisi.create') }}" class="btn btn-danger mb-3">
                Tambah Divisi
            </a>

            <table class="table table-bordered table-striped align-middle">

                <thead>

                    <tr class="text-center">

                        <th>No</th>
                        <th>Nama Divisi</th>
                        <th>Ketua Divisi</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($divisis as $divisi)

                        <tr>

                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $divisi->nama_divisi }}
                            </td>

                            <td>
                                {{ $divisi->ketua_divisi }}
                            </td>

                            <td style="max-width:350px">
                                {{ $divisi->deskripsi }}
                            </td>

                            <td>

                                <div class="d-flex flex-column gap-2 align-items-center">

                                    <a href="{{ route('divisi.edit',$divisi->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('divisi.destroy',$divisi->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="return confirm('Yakin ingin hapus?')"class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-layout>