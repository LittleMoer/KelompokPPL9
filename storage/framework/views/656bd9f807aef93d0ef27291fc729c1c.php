
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset('tabel/fonts/icomoon/style.css')); ?>">

<link rel="stylesheet" href="<?php echo e(asset('tabel/css/owl.carousel.min.css')); ?>">

<!-- Bootstrap CSS -->


<!-- Style -->
<link rel="stylesheet" href="<?php echo e(asset('tabel/css/style.css')); ?>">
<style>
  .cont_btn{
      margin-top: 40px;
      text-align: center;
  }
  .btn_rekap{
      cursor: pointer;
      padding-top: 5px;
      padding-bottom: 5px;
      border-radius: 20px;
      background-color: rgb(89, 236, 89);
      width: 300px;
      margin-right: 50px;
      
  }
</style>
<?php $__env->startSection('main'); ?>
<div class="judul_page">
    <h3><a href="/rekap/pkl&skripsi">Rekap Skripsi</a> / Belum Lulus</h3>
</div>
<div class="content">
    <div class="container">
      <div class="table-responsive">
        <table class="table custom-table" id="tabel_skripsi">
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
  <div class="cont_btn">
    <input type="button" class="btn_rekap" value="Cetak" onclick="cetak('tabel_skripsi')">
  </div>
  <script>
    function cetak(tabelId) {
        var cetakdata = document.getElementById(tabelId);
        if (cetakdata) {
            var newWin = window.open('', '_blank');
            newWin.document.write('<html><head><title>Cetak</title>');
            newWin.document.write('<style>');
            newWin.document.write('th { text-align: center; border-bottom: 1px solid black; margin-bottom: 30px;}');
            newWin.document.write('td { text-align: left; padding: 10px 15px 10px 15px;}');
            newWin.document.write('</style>');
            newWin.document.write('<h3 style="margin-bottom:20px;">Mahasiswa Belum/Belum Lulus Skripsi</h3>');
            newWin.document.write('</head><body>');
            newWin.document.write(cetakdata.outerHTML);
            newWin.document.write('</body></html>');
            newWin.print();
            newWin.close();
        } else {
            alert("Tabel tidak ditemukan!");
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_departement', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/belum_lulus_skripsi.blade.php ENDPATH**/ ?>