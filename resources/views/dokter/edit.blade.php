@extends('layout.index')
@section('content')
    <div class="container">
        <div class="mt-5">
            <h2>Edit Dokter</h2>
            {{-- <a href="{{ route('dokter.create')}}" class="btn btn-success">Input Dokter</a> --}}
            <a href="{{ URL::Previous() }}" class="btn btn-success">Home</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-success">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif

        <div class="card shadow mt-3">
            <div class="card-body">
                <form action="{{ route('dokter.update', ['dokter' => $dokter->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="row"> -->
                            <!-- <div class="col-2"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="idDokter" type="text" name="idDokter"
                                    placeholder="ID Dokter" data-sb-validations="required"
                                    value="{{ $dokter->idDokter }}" />
                                <label for="idDokter">ID Dokter</label>
                                <div class="invalid-feedback" data-sb-feedback="idDokter:required">ID Dokter is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="col-10"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaDokter" type="text" placeholder="Nama Dokter"
                                    data-sb-validations="required" name="namaDokter" value="{{ $dokter->namaDokter }}" />
                                <label for="namaDokter">Nama Dokter</label>
                                <div class="invalid-feedback" data-sb-feedback="namaDokter:required">Nama Dokter is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- </div> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tanggalLahir" type="date" name="tanggalLahir"
                                    placeholder="Tanggal Lahir" data-sb-validations="required"
                                    value="{{ $dokter->tanggalLahir }}" />
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="tanggalLahir:required">Tanggal Lahir is
                                    required.</div>
                            </div>
                            <!-- Spesialisasi Dropdown -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="spesialisasi" aria-label="Spesialisasi" name="spesialisasi">
                                    <option value="Poli Umum" {{ $dokter->spesialisasi == 'Poli Umum' ? 'selected' : '' }}>
                                        Poli Umum</option>
                                    <option value="Poli Anak" {{ $dokter->spesialisasi == 'Poli Anak' ? 'selected' : '' }}>
                                        Poli Anak</option>
                                    <option value="Poli Gigi" {{ $dokter->spesialisasi == 'Poli Gigi' ? 'selected' : '' }}>
                                        Poli Gigi</option>
                                    <option value="Poli Mata" {{ $dokter->spesialisasi == 'Poli Mata' ? 'selected' : '' }}>
                                        Poli Mata</option>
                                    <option value="Poli Kulit"
                                        {{ $dokter->spesialisasi == 'Poli Kulit' ? 'selected' : '' }}>
                                        Poli Kulit</option>
                                    <option value="Poli Penyakit Dalam"
                                        {{ $dokter->spesialisasi == 'Poli Penyakit Dalam' ? 'selected' : '' }}>
                                        Poli Penyakit Dalam</option>
                                    <option value="Poli Konseling"
                                        {{ $dokter->spesialisasi == 'Poli Konseling' ? 'selected' : '' }}>
                                        Poli Konseling</option>
                                    <option value="Poli Saraf"
                                        {{ $dokter->spesialisasi == 'Poli Saraf' ? 'selected' : '' }}>
                                        Poli Saraf</option>
                                    <option value="Poli THT" {{ $dokter->spesialisasi == 'Poli THT' ? 'selected' : '' }}>
                                        Poli THT</option>
                                    <option value="Poli Bedah"
                                        {{ $dokter->spesialisasi == 'Poli Bedah' ? 'selected' : '' }}>
                                        Poli Bedah</option>
                                    <option value="Poli Paru" {{ $dokter->spesialisasi == 'Poli Paru' ? 'selected' : '' }}>
                                        Poli Paru</option>
                                    <option value="Poli Jantung"
                                        {{ $dokter->spesialisasi == 'Poli Jantung' ? 'selected' : '' }}>
                                        Poli Jantung</option>
                                    <option value="Poli Gizi Klinik"
                                        {{ $dokter->spesialisasi == 'Poli Gizi Klinik' ? 'selected' : '' }}>
                                        Poli Gizi Klinik</option>
                                </select>
                                <label for="spesialisasi">Spesialisasi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="lokasiPraktik" aria-label="Lokasi Praktik"
                                    name="lokasiPraktik">
                                    @foreach ($ruanganLocations as $location)
                                        <option value="{{ $location }}"
                                            {{ old('namaRuangan') == $location ? 'selected' : '' }}>
                                            {{ $location }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="lokasiPraktik">Lokasi Praktik</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jamPraktik" type="text" placeholder="Jam Praktik"
                                    name="jamPraktik" data-sb-validations="required" value="{{ $dokter->jamPraktik }}" />
                                <label for="jamPraktik">Jam Praktik</label>
                                <div class="invalid-feedback" data-sb-feedback="jamPraktik:required">Jam Praktik is
                                    required.</div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
