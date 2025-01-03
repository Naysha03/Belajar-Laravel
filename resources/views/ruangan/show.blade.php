@extends('layout.index')
@section('content')
    <div class="container">
        <div class="mt-5">
            <h2>Show Ruangan</h2>
            {{-- <a href="{{ route('ruangan.create')}}" class="btn btn-success">Input Ruangan</a> --}}
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
                <form action="{{ route('ruangan.update', ['ruangan' => $ruangan->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="row"> -->
                            <!-- <div class="col-2"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="kodeRuangan" type="text" name="kodeRuangan"
                                    placeholder="Kode Ruangan" data-sb-validations="required"
                                    value="{{ $ruangan->kodeRuangan }}" disabled />
                                <label for="idDokter">Kode Ruangan</label>
                                <div class="invalid-feedback" data-sb-feedback="idDokter:required">Kode Ruangan is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="col-10"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaRuangan" type="text" placeholder="Nama Ruangan"
                                    data-sb-validations="required" value="{{ $ruangan->namaRuangan }}" disabled
                                    name="namaRuangan" />
                                <label for="namaRuangan">Nama Ruangan</label>
                                <div class="invalid-feedback" data-sb-feedback="namaRuangan:required">Nama Ruangan is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- </div> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="dayaTampung" type="text" name="dayaTampung"
                                    placeholder="Daya tampung" data-sb-validations="required"
                                    value="{{ $ruangan->dayaTampung }}" disabled />
                                <label for="dayaTampung">Daya tampung</label>
                                <div class="invalid-feedback" data-sb-feedback="dayaTampung:required">Daya tampung is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="lokasi" type="text" placeholder="Lokasi"
                                    name="lokasi" data-sb-validations="required" value="{{ $ruangan->lokasi }}" disabled />
                                <label for="lokasi">Lokasi</label>
                                <div class="invalid-feedback" data-sb-feedback="lokasi:required">Lokasi is
                                    required.</div>
                            </div>
                            <div class="col-12 text-center">
                                {{-- <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
