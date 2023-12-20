
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset('tabel/fonts/icomoon/style.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('tabel/css/owl.carousel.min.css')); ?>">

<!-- Bootstrap CSS -->


<!-- Style -->
<link rel="stylesheet" href="<?php echo e(asset('tabel/css/style.css')); ?>">
<?php $__env->startSection('main'); ?>
<style>
  .content{
    margin-left: 90px;
  }
</style>
<div class="judul_page">
    <h3><a href="/statistik/mhs">Status</a> / Mahasiswa</h3>
</div>
<div class="content">
    <div class="container">
      <div class="table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Nim</th>
              <th scope="col">Angkatan</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="data">
                    <td ><?php echo e($item->nama); ?></td>
                    <td ><?php echo e($item->nim); ?></td>
                    <td ><?php echo e($item->angkatan); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_departement', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/detail_status_mhs.blade.php ENDPATH**/ ?>