<x-layout title="Data Anggota">

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
                    </tr>
                </thead>

                <tbody>

                    @forelse($anggotas as $anggota)

                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $anggota->nama }}</td>
                            <td>{{ $anggota->nim }}</td>
                            <td>{{ $anggota->alamat }}</td>
                            <td>{{ $anggota->angkatan }}</td>
                            <td>{{ $anggota->no_hp }}</td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center">
                                Data anggota belum ada
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</x-layout>