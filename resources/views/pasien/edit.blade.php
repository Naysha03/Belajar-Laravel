@extends('layout.index')
@section('content')
    <div class="container">
        <div class="mt-5 mb-3">
            <h2>Edit New Pasien</h2>
            {{-- <a href="{{ route('dokter.create')}}" class="btn btn-success">Input Dokter</a> --}}
            <a href="{{ URL::Previous() }}" class="btn btn-success">Home</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif

        <div class="card shadow mt-3">
            <div class="card-body">
                <form action="{{ route('pasien.update', ['pasien' => $pasien->id]) }}) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaPasien" name="namaPasien" type="text"
                                    placeholder="Nama Pasien" data-sb-validations="required"
                                    value="{{ $pasien->namaPasien }}" />
                                <label for="namaPasien">Nama Pasien</label>
                                <div class="invalid-feedback" data-sb-feedback="namaPasien:required">Nama Pasien is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tanggalLahir" name="tanggalLahir" type="date"
                                    placeholder="Tanggal Lahir" data-sb-validations="required"
                                    value="{{ $pasien->tanggalLahir }}" />
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="tanggalLahir:required">Tanggal Lahir is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="jenisKelamin" name="jenisKelamin"
                                    aria-label="Jenis Kelamin">
                                    <option value="Laki - Laki"
                                        {{ $pasien->jenisKelamin == 'Laki - Laki' ? 'selected' : '' }}>
                                        Laki - Laki</option>
                                    <option value="Perempuan" {{ $pasien->jenisKelamin == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                                <label for="jenisKelamin">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="alamatPasien" name="alamatPasien" type="text" placeholder="Alamat Pasien"
                                    style="height: 10rem;" data-sb-validations="required">{{ $pasien->alamatPasien }}</textarea>
                                <label for="alamatPasien">Alamat Pasien</label>
                                <div class="invalid-feedback" data-sb-feedback="alamatPasien:required">Alamat Pasien is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="kotaPasien" name="kotaPasien" type="text"
                                    placeholder="Kota Pasien" data-sb-validations="required"
                                    value="{{ $pasien->kotaPasien }}" />
                                <label for="kotaPasien">Kota Pasien</label>
                                <div class="invalid-feedback" data-sb-feedback="kotaPasien:required">Kota Pasien is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="penyakitPasien" aria-label="Penyakit" name="penyakitPasien">
                                    @foreach ($spesialisasi as $spesialis)
                                        <option value="{{ $spesialis }}"
                                            {{ old('penyakitPasien') == $spesialis ? 'selected' : '' }}>
                                            {{ $spesialis }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="penyakitPasien">Penyakit Pasien</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="idDokter" aria-label="Dokter" name="idDokter">
                                    @foreach ($dokterNames as $dokter)
                                        <option value="{{ $dokter->id }}"
                                            {{ old('namaDokter') == $dokter->namaDokter ? 'selected' : '' }}>
                                            {{ $dokter->idDokter }} | {{ $dokter->namaDokter }}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="dokter">Dokter</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="kodeRuangan" aria-label="Dokter" name="kodeRuangan">
                                    @foreach ($ruanganLocations as $ruangan)
                                        <option value="{{ $ruangan->id }}">
                                            {{ $ruangan->kodeRuangan }} | {{ $ruangan->namaRuangan }} |
                                            {{ $ruangan->dayaTampung }} Pasien
                                        </option>
                                    @endforeach
                                </select>
                                <label for="kamar">Kamar</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Start Select Dokter From Penyakit
            function updateDoctorList() {
                var selectedPenyakit = $("#penyakitPasien").val();

                $.ajax({
                    url: "{{ route('get-doctors-by-penyakit') }}",
                    type: "GET",
                    data: {
                        penyakitPasien: selectedPenyakit
                    },
                    success: function(data) {
                        $("#idDokter").empty();
                        // console.log(data);

                        $.each(data, function(key, value) {
                            $("#idDokter").append('<option value="' + value.id + '">' + value
                                .idDokter + ' | ' + value.namaDokter + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            $("#penyakitPasien").on("change", function() {
                updateDoctorList();
            });

            updateDoctorList();
            // End Select Dokter From Penyakit
        });
    </script>
@endsection
