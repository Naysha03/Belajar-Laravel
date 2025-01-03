<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="mt-5">
            <h2>Add New Dokter</h2>
            
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
                <form action="<?php echo e(route('dokter.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="row"> -->
                            <!-- <div class="col-2"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="idDokter" type="text" name="idDokter"
                                    placeholder="ID Dokter" data-sb-validations="required" />
                                <label for="idDokter">ID Dokter</label>
                                <div class="invalid-feedback" data-sb-feedback="idDokter:required">ID Dokter is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- <div class="col-10"> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="namaDokter" type="text" placeholder="Nama Dokter"
                                    data-sb-validations="required" name="namaDokter" />
                                <label for="namaDokter">Nama Dokter</label>
                                <div class="invalid-feedback" data-sb-feedback="namaDokter:required">Nama Dokter is
                                    required.
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- </div> -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tanggalLahir" type="date" name="tanggalLahir"
                                    placeholder="Tanggal Lahir" data-sb-validations="required" />
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <div class="invalid-feedback" data-sb-feedback="tanggalLahir:required">Tanggal Lahir is
                                    required.</div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="spesialisasi" class="form-control">
                    <option value="">- Spesialisasi -</option>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Poli Anak">Poli Anak</option>
                    <option value="Poli gigi">Poli gigi</option>
                    <option value="Poli Mata">Poli Mata</option>
                    <option value="Poli Kulit">Poli Kulit</option>
                    <option value="Poli Penyakit dalam">Poli Penyakit dalam</option>
                    <option value="Poli Konseling">Poli Konseling</option>
                    <option value="Poli Saraf">Poli Saraf</option>
                    <option value="Poli THT">Poli THT</option>
                    <option value="Poli Bedah">Poli Bedah</option>
                    <option value="Poli Paru">Poli Paru</option>
                    <option value="Poli Jantung">Poli Jantung</option>
                    <option value="Poli Gizi Klinik">Poli Gizi Klinik</option>

                </select>
            </div>
        </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="lokasiPraktik" aria-label="Lokasi Praktik"
                                    name="lokasiPraktik">
                                    <?php $__currentLoopData = $ruanganLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($location); ?>"
                                            <?php echo e(old('lokasiPraktik') == $location ? 'selected' : ''); ?>>
                                            <?php echo e($location); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="lokasiPraktik">Lokasi Praktik</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="jamPraktik" type="time" placeholder="Jam Praktik"
                                    name="jamPraktik" data-sb-validations="required" />
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\belajarlaravel\projectrumahsakit\resources\views/dokter/create.blade.php ENDPATH**/ ?>