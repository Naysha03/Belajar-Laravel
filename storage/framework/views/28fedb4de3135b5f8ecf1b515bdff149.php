<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb 5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Pasien</h2>
            </div>
            <div class="float-right mb-2">
                <a href="<?php echo e(route('pasien.create')); ?>" class="btn btn-success">Input Pasien</a>
                <a href="/" class="btn btn-success">Home</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

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
        <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasiens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e(++$i); ?></td>
                <td class="text-center"><?php echo e($pasiens->namaPasien); ?></td>
                <td class="text-center"><?php echo e($pasiens->tanggalLahir); ?></td>
                <td class="text-center"><?php echo e($pasiens->usiaPasien); ?> Tahun</td>
                <td class="text-center"><?php echo e($pasiens->penyakitPasien); ?></td>
                <td class="text-center"><?php echo e($pasiens->dokter->namaDokter); ?></td>
                <td class="text-center"><?php echo e($pasiens->ruangan->namaRuangan); ?></td>
                <td class="text-center">
                    <form action="<?php echo e(route('pasien.destroy', $pasiens->id)); ?>" method="POST">
                        <a href="<?php echo e(route('pasien.show', $pasiens->id)); ?>" class="btn btn-info btn-sm">Show</a>
                        <a href="<?php echo e(route('pasien.edit', $pasiens->id)); ?>" class="btn btn-primary btn-sm">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo e($pasien->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rdjad\Documents\2023\Project\belajarlaravel\projectrumahsakit\resources\views/pasien/index.blade.php ENDPATH**/ ?>