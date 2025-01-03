@extends('layout.index')

@section('content')
    <div class="row mt-5 mb 5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Pasien</h2>
            </div>
            <div class="float-right mb-2">
                <a href="{{ route('pasien.create') }}" class="btn btn-success">Input Pasien</a>
                <a href="/" class="btn btn-success">Home</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th width="200px" class="text-center">Nama Pasien</th>
            <th width="200px" class="text-center">Tanggal Lahir</th>
            <th width="150px" class="text-center">Usia</th>
            <th width="250px" class="text-center">Penyakit</th>
            <th width="300px" class="text-center">Dokter</th>
            <th width="300px" class="text-center">Kamar</th>
            <th width="20%" class="text-center">Action</th>
        </tr>
        @foreach ($pasien as $pasiens)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td class="text-center">{{ $pasiens->namaPasien }}</td>
                <td class="text-center">{{ $pasiens->tanggalLahir }}</td>
                <td class="text-center">{{ $pasiens->usiaPasien }} Tahun</td>
                <td class="text-center">{{ $pasiens->penyakitPasien }}</td>
                <td class="text-center">{{ $pasiens->dokter->namaDokter }}</td>
                <td class="text-center">{{ $pasiens->ruangan->namaRuangan }}</td>
                <td class="text-center">
                    <form action="{{ route('pasien.destroy', $pasiens->id) }}" method="POST">
                        <a href="{{ route('pasien.show', $pasiens->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('pasien.edit', $pasiens->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pasien->links() }}
@endsection()
