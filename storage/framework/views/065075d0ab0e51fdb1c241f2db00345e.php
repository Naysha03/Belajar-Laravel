<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rdjadmrl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Main Page</h1>
    <div class="text-center">
        <a href="<?php echo e(route('profile.visimisi')); ?>" type="button" class="btn btn-primary">Visi
            Misi</a>
        <a href="<?php echo e(route('profile.sejarah')); ?>" type="button" class="btn btn-primary">Sejarah</a>
        <a href="<?php echo e(route('profile.sambutan')); ?>" type="button" class="btn btn-primary">Sambutan</a>
    </div>
    <div class="text-center mt-3">
        <a href="<?php echo e(route('master.anggota')); ?>" type="button" class="btn btn-primary">Anggota</a>
        <a href="<?php echo e(route('master.jenis_pinjaman')); ?>" type="button" class="btn btn-primary">Jenis
            Pinjaman</a>
        <a href="<?php echo e(route('master.user')); ?>" type="button" class="btn btn-primary">User</a>
    </div>
    <div class="text-center mt-3">
        <a href="<?php echo e(route('transaksi.pinjaman.laporan_pinjaman')); ?>" type="button" class="btn btn-primary">Laporan
            Pinjaman</a>
        <a href="<?php echo e(route('transaksi.simpanan.laporan_simpanan')); ?>" type="button" class="btn btn-primary">Laporan
            Simpanan</a>
        <a href="<?php echo e(route('transaksi.pengambilan.laporan_pengambilan')); ?>" type="button" class="btn btn-primary">Laporan
            Pengambilan</a>
        <a href="<?php echo e(route('transaksi.bayarpinjaman.laporan_pinjaman')); ?>" type="button" class="btn btn-primary">Laporan
            Pinjaman</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\rdjad\Documents\2023\Project\belajarlaravel\projectrumahsakit\resources\views/main.blade.php ENDPATH**/ ?>