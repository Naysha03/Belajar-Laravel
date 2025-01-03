@extends('layout.index')

@section('content')
    <div class="row mt-5 mb 5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Dokter</h2>
            </div>
            <div class="float-right mb-2">
                <a href="{{ route('dokter.create') }}" class="btn btn-success">Input Dokter</a>
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
            <th width="110px">ID Dokter</th>
            <th width="20%" class="text-center">Nama Dokter</th>
            <th width="280px" class="text-center">Tanggal Lahir</th>
            <th width="280px" class="text-center">Spesialisasi</th>
            <th width="280px" class="text-center">Lokasi Praktik</th>
            <th width="20%" class="text-center">Action</th>
        </tr>
        @foreach ($dokter as $dokters)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $dokters->idDokter }}</td>
                <td>{{ $dokters->namaDokter }}</td>
                <td>{{ $dokters->tanggalLahir }}</td>
                <td>{{ $dokters->spesialisasi }}</td>
                <td>{{ $dokters->lokasiPraktik }}</td>
                <td class="text-center">
                    <form action="{{ route('dokter.destroy', $dokters->id) }}" method="POST">
                        <a href="{{ route('dokter.show', $dokters->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('dokter.edit', $dokters->id) }}" class="btn btn-primary btn-sm">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $dokter->links() }}
@endsection()
