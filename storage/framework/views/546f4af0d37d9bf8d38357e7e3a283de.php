<!doctype html>
<html lang="en">

<head>
    <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer>
        <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\rdjad\Documents\2023\Project\belajarlaravel\projectrumahsakit\resources\views/layout/index.blade.php ENDPATH**/ ?>