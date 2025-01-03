<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="mt-5">
        <h2>Add New Ruangan</h2>
        
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
            <form action="<?php echo e(route('ruangan.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-12">
                        <!-- <div class="row"> -->
                        <!-- <div class="col-2"> -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="kodeRuangan" type="text" name="kodeRuangan"
                                placeholder="Kode Ruangan" data-sb-validations="required" />
                            <label for="idDokter">Kode Ruangan</label>
                            <div class="invalid-feedback" data-sb-feedback="idDokter:required">Kode Ruangan is
                                required.
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- <div class="col-10"> -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="namaRuangan" type="text" placeholder="Nama Ruangan"
                                data-sb-validations="required" name="namaRuangan" />
                            <label for="namaRuangan">Nama Ruangan</label>
                            <div class="invalid-feedback" data-sb-feedback="namaRuangan:required">Nama Ruangan is
                                required.
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="dayaTampung" type="text" name="dayaTampung"
                                placeholder="Daya tampung" data-sb-validations="required" />
                            <label for="dayaTampung">Daya tampung</label>
                            <div class="invalid-feedback" data-sb-feedback="dayaTampung:required">Daya tampung is
                                required.</div>
                        </div>
                        <div class="form-floating mb-3">
                                <select name="lokasi" id="lokasi">
                                    <option value="">- Lokasi -</option>
                                    <option value=" Lantai 1">Lantai 1</option>
                                    <option value=" Lantai 2">Lantai 2</option>
                                    <option value=" Lantai 3">Lantai 3</option>
                                    <option value=" Lantai 4">Lantai 4</option>
                                    <option value=" Lantai 5">Lantai 5</option>
                                </select>
                               
                                <div class="invalid-feedback" data-sb-feedback="lokasi:required">Lokasi is
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

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\belajarlaravel\projectrumahsakit\resources\views/ruangan/create.blade.php ENDPATH**/ ?>