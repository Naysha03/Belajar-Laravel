@extends('layout.index')

@section('content')
<div class="row mt-5 mb 5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD Ruangan</h2>
        </div>
        <div class="float-right mb-2">
            <a href="{{ route('ruangan.create') }}" class="btn btn-success">Input Ruangan</a>
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
        <th>Kode Ruangan</th>
        <th width="20%" class="text-center">Nama Ruangan</th>
        <th width="280px" class="text-center">Daya Tampung</th>
        <th width="280px" class="text-center">Lokasi</th>
        <th width="20%" class="text-center">Action</th>
    </tr>
    @foreach ($ruangan as $ruangans)
    <tr>
        <td class="text-center">{{ ++$i }}</td>
        <td>{{ $ruangans->kodeRuangan }}</td>
        <td>{{ $ruangans->namaRuangan }}</td>
        <td>{{ $ruangans->dayaTampung }}</td>
        <td>{{ $ruangans->lokasi }}</td>
        <td class="text-center">
            <form action="{{ route('ruangan.destroy', $ruangans->id) }}" method="POST">
                <a href="{{ route('ruangan.show', $ruangans->id) }}" class="btn btn-info btn-sm">Show</a>
                <a href="{{ route('ruangan.edit', $ruangans->id) }}" class="btn btn-primary btn-sm">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $ruangan->links() }}

@endsection()
