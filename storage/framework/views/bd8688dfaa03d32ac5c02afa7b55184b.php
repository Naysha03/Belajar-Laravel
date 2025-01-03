<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb 5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD Dokter</h2>
            </div>
            <div class="float-right mb-2">
                <a href="<?php echo e(route('dokter.create')); ?>" class="btn btn-success">Input Dokter</a>
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
            <th width="110px">ID Dokter</th>
            <th width="20%" class="text-center">Nama Dokter</th>
            <th width="280px" class="text-center">Tanggal Lahir</th>
            <th width="280px" class="text-center">Spesialisasi</th>
            <th width="280px" class="text-center">Lokasi Praktik</th>
            <th width="20%" class="text-center">Action</th>
        </tr>
        <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e(++$i); ?></td>
                <td><?php echo e($dokters->idDokter); ?></td>
                <td><?php echo e($dokters->namaDokter); ?></td>
                <td><?php echo e($dokters->tanggalLahir); ?></td>
                <td><?php echo e($dokters->spesialisasi); ?></td>
                <td><?php echo e($dokters->lokasiPraktik); ?></td>
                <td class="text-center">
                    <form action="<?php echo e(route('dokter.destroy', $dokters->id)); ?>" method="POST">
                        <a href="<?php echo e(route('dokter.show', $dokters->id)); ?>" class="btn btn-info btn-sm">Show</a>
                        <a href="<?php echo e(route('dokter.edit', $dokters->id)); ?>" class="btn btn-primary btn-sm">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo e($dokter->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\belajarlaravel\projectrumahsakit\resources\views/dokter/index.blade.php ENDPATH**/ ?>