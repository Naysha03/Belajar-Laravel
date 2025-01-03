<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mt-5">
            <h2>Show New Dokter</h2>
            
            <a href="<?php echo e(URL::Previous()); ?>" class="btn btn-success">Home</a>
        </div>

        <?php if($errors->any()): ?>
            <div class="alert alert-success">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <div class="card shadow mt-3">
            <div class="card-body">
                <form action="<?php echo e(route('dokter.show', ['dokter' => $dokter->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="row"> -->
                            <!-- <div class="col-2"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="idDokter" type="text" name="idDokter"
                                    placeholder="ID Dokter" data-sb-validations="required" value="<?php echo e($dokter->idDokter); ?>"
                                    disabled />
                                <label for="idDokter">ID Dokter</label>
                                <div class="invalid-feedback" data-sb-feedback="idDokter:required">ID Dokter is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="col-10"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaDokter" type="text" placeholder="Nama Dokter"
                                    data-sb-validations="required" name="namaDokter" value="<?php echo e($dokter->namaDokter); ?>"
                                    disabled />
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
                                    value="<?php echo e($dokter->tanggalLahir); ?>" disabled />
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="tanggalLahir:required">Tanggal Lahir is
                                    required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="spesialisasi" aria-label="Spesialisasi" name="spesialisasi"
                                    disabled>
                                    <option value="Poli Umum" <?php echo e($dokter->spesialisasi == 'Poli Umum' ? 'selected' : ''); ?>>
                                        Poli Umum</option>
                                    <option value="Poli Anak" <?php echo e($dokter->spesialisasi == 'Poli Anak' ? 'selected' : ''); ?>>
                                        Poli Anak</option>
                                    <option value="Poli Gigi" <?php echo e($dokter->spesialisasi == 'Poli Gigi' ? 'selected' : ''); ?>>
                                        Poli Gigi</option>
                                    <option value="Poli Mata" <?php echo e($dokter->spesialisasi == 'Poli Mata' ? 'selected' : ''); ?>>
                                        Poli Mata</option>
                                    <option value="Poli Kulit"
                                        <?php echo e($dokter->spesialisasi == 'Poli Kulit' ? 'selected' : ''); ?>>
                                        Poli Kulit</option>
                                    <option value="Poli Penyakit Dalam"
                                        <?php echo e($dokter->spesialisasi == 'Poli Penyakit Dalam' ? 'selected' : ''); ?>>
                                        Poli Penyakit Dalam</option>
                                    <option value="Poli Konseling"
                                        <?php echo e($dokter->spesialisasi == 'Poli Konseling' ? 'selected' : ''); ?>>
                                        Poli Konseling</option>
                                    <option value="Poli Saraf"
                                        <?php echo e($dokter->spesialisasi == 'Poli Saraf' ? 'selected' : ''); ?>>
                                        Poli Saraf</option>
                                    <option value="Poli THT" <?php echo e($dokter->spesialisasi == 'Poli THT' ? 'selected' : ''); ?>>
                                        Poli THT</option>
                                    <option value="Poli Bedah"
                                        <?php echo e($dokter->spesialisasi == 'Poli Bedah' ? 'selected' : ''); ?>>
                                        Poli Bedah</option>
                                    <option value="Poli Paru" <?php echo e($dokter->spesialisasi == 'Poli Paru' ? 'selected' : ''); ?>>
                                        Poli Paru</option>
                                    <option value="Poli Jantung"
                                        <?php echo e($dokter->spesialisasi == 'Poli Jantung' ? 'selected' : ''); ?>>
                                        Poli Jantung</option>
                                    <option value="Poli Gizi Klinik"
                                        <?php echo e($dokter->spesialisasi == 'Poli Gizi Klinik' ? 'selected' : ''); ?>>
                                        Poli Gizi Klinik</option>
                                </select>
                                <label for="spesialisasi">Spesialisasi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="lokasiPraktik" aria-label="Lokasi Praktik"
                                    name="lokasiPraktik" disabled>
                                    <?php $__currentLoopData = $ruanganLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($location); ?>"
                                            <?php echo e(old('namaRuangan') == $location ? 'selected' : ''); ?>>
                                            <?php echo e($location); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="lokasiPraktik">Lokasi Praktik</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jamPraktik" type="text" placeholder="Jam Praktik"
                                    name="jamPraktik" data-sb-validations="required" value="<?php echo e($dokter->jamPraktik); ?>"
                                    disabled />
                                <label for="jamPraktik">Jam Praktik</label>
                                <div class="invalid-feedback" data-sb-feedback="jamPraktik:required">Jam Praktik is
                                    required.</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rdjad\Documents\2023\Project\belajarlaravel\projectrumahsakit\resources\views/dokter/show.blade.php ENDPATH**/ ?>