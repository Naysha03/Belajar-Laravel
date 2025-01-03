<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mt-5 mb-3">
            <h2>Show Pasien</h2>
            
            <a href="<?php echo e(URL::Previous()); ?>" class="btn btn-success">Home</a>
        </div>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <div class="card shadow mt-3">
            <div class="card-body">
                <form action="<?php echo e(route('pasien.update', ['pasien' => $pasien->id])); ?>) }}" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaPasien" name="namaPasien" type="text"
                                    placeholder="Nama Pasien" data-sb-validations="required"
                                    value="<?php echo e($pasien->namaPasien); ?>" disabled />
                                <label for="namaPasien">Nama Pasien</label>
                                <div class="invalid-feedback" data-sb-feedback="namaPasien:required">Nama Pasien is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tanggalLahir" name="tanggalLahir" type="date"
                                    placeholder="Tanggal Lahir" data-sb-validations="required"
                                    value="<?php echo e($pasien->tanggalLahir); ?>" disabled />
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="tanggalLahir:required">Tanggal Lahir is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="jenisKelamin" name="jenisKelamin" aria-label="Jenis Kelamin"
                                    disabled>
                                    <option value="Laki - Laki"
                                        <?php echo e($pasien->jenisKelamin == 'Laki - Laki' ? 'selected' : ''); ?>>
                                        Laki - Laki</option>
                                    <option value="Perempuan" <?php echo e($pasien->jenisKelamin == 'Perempuan' ? 'selected' : ''); ?>>
                                        Perempuan</option>
                                </select>
                                <label for="jenisKelamin">Jenis Kelamin</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="alamatPasien" name="alamatPasien" type="text" placeholder="Alamat Pasien"
                                    style="height: 10rem;" data-sb-validations="required" disabled><?php echo e($pasien->alamatPasien); ?></textarea>
                                <label for="alamatPasien">Alamat Pasien</label>
                                <div class="invalid-feedback" data-sb-feedback="alamatPasien:required">Alamat Pasien is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="kotaPasien" name="kotaPasien" type="text"
                                    placeholder="Kota Pasien" data-sb-validations="required"
                                    value="<?php echo e($pasien->kotaPasien); ?>" disabled />
                                <label for="kotaPasien">Kota Pasien</label>
                                <div class="invalid-feedback" data-sb-feedback="kotaPasien:required">Kota Pasien is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="penyakitPasien" aria-label="Penyakit" name="penyakitPasien"
                                    disabled>
                                    <?php $__currentLoopData = $spesialisasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spesialis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($spesialis); ?>"
                                            <?php echo e(old('penyakitPasien') == $spesialis ? 'selected' : ''); ?>>
                                            <?php echo e($spesialis); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="penyakitPasien">Penyakit Pasien</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="idDokter" aria-label="Dokter" name="idDokter" disabled>
                                    <?php $__currentLoopData = $dokterNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($dokter->id); ?>"
                                            <?php echo e(old('namaDokter') == $dokter->namaDokter ? 'selected' : ''); ?>>
                                            <?php echo e($dokter->idDokter); ?> | <?php echo e($dokter->namaDokter); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="dokter">Dokter</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="kodeRuangan" aria-label="Dokter" name="kodeRuangan"
                                    disabled>
                                    <?php $__currentLoopData = $ruanganLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruangan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ruangan->id); ?>">
                                            <?php echo e($ruangan->kodeRuangan); ?> | <?php echo e($ruangan->namaRuangan); ?> |
                                            <?php echo e($ruangan->dayaTampung); ?> Pasien
                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    url: "<?php echo e(route('get-doctors-by-penyakit')); ?>",
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rdjad\Documents\2023\Project\belajarlaravel\projectrumahsakit\resources\views/pasien/show.blade.php ENDPATH**/ ?>