<?php $__env->startSection('content'); ?>
<div class="row mt-5 mb 5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>CRUD Ruangan</h2>
        </div>
        <div class="float-right mb-2">
            <a href="<?php echo e(route('ruangan.create')); ?>" class="btn btn-success">Input Ruangan</a>
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
        <th>Kode Ruangan</th>
        <th width="20%" class="text-center">Nama Ruangan</th>
        <th width="280px" class="text-center">Daya Tampung</th>
        <th width="280px" class="text-center">Lokasi</th>
        <th width="20%" class="text-center">Action</th>
    </tr>
    <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruangans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td class="text-center"><?php echo e(++$i); ?></td>
        <td><?php echo e($ruangans->kodeRuangan); ?></td>
        <td><?php echo e($ruangans->namaRuangan); ?></td>
        <td><?php echo e($ruangans->dayaTampung); ?></td>
        <td><?php echo e($ruangans->lokasi); ?></td>
        <td class="text-center">
            <form action="<?php echo e(route('ruangan.destroy', $ruangans->id)); ?>" method="POST">
                <a href="<?php echo e(route('ruangan.show', $ruangans->id)); ?>" class="btn btn-info btn-sm">Show</a>
                <a href="<?php echo e(route('ruangan.edit', $ruangans->id)); ?>" class="btn btn-primary btn-sm">Edit</a>

                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php echo e($ruangan->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\belajarlaravel\projectrumahsakit\resources\views/ruangan/index.blade.php ENDPATH**/ ?>