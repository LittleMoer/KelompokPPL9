
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="tabel/https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="tabel/fonts/icomoon/style.css">

<link rel="stylesheet" href="tabel/css/owl.carousel.min.css">

<!-- Bootstrap CSS -->


<!-- Style -->
<link rel="stylesheet" href="tabel/css/style.css">


<style>
    .tabel_irs{
        margin-top: 30px;
        text-align: center;
    }
    .tabel_irs table{
        display: inline-block;
        text-align: center;
    }
    .tabel_irs table th{
        padding: 10px;
        margin-left: 50px;
        margin-right: 50px;
    }
    .data{
        /* display: block; */
    }
    #download{
        background-color: rgb(161, 164, 161);
        padding: 5px 15px 5px 15px;
        border-radius: 10px;
        color: white;
        text-decoration: none;
    }
    #download:hover{
        background-color: rgb(102, 103, 102);
        color: white;
    }
    .btn-action{
        display: block;
        background-color: grey;
        margin-top: 2px;
        padding: 2px 10px 2px 10px;
        color: white;
        border-radius: 10px;
    }
    .btn-action:hover{
        transform: .5s;
        background-color: rgb(200, 200, 200);
        color: rgb(69, 69, 69);
    }
    .btn-action1{
        display: block;
        background-color: rgb(77, 176, 77);
        margin-top: 2px;
        padding: 2px 10px 2px 10px;
        color: white;
        border-radius: 10px;
    }
    .btn-action1:hover{
        transform: .5s;
        background-color: rgb(102, 221, 102);
        color: rgb(69, 69, 69);
    }
    .link-menu{
      color: rgb(83, 83, 160);
    }
    .link-menu:hover{
      color: rgb(48, 48, 203);
      text-decoration: underline;
      transition: .3s;
    }
    .tr-1 th:hover{
      background-color: rgb(169, 167, 228);
      display: block;
      transition: .3s;
      border-radius: 20px;
    }

    .table-menu-atas{
      overflow: auto;
      margin-top: 50px;
      text-align: center;
      width: 1000px;

    }
    .tr-1{
    }
    .tr-1 th{
      border-bottom: 1px solid black;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .flash{
      text-align: center;
      margin-top: 30px;
      font-weight: 700;
      padding-top: 10px;
      padding-bottom: 10px;
      background-color: lightgreen;
    }
</style>

<title>PENYETUJUAN | SKRIPSI</title>
<?php $__env->startSection('main'); ?>

<div class="judul_page">
    <h3>INFORMASI PERWALIAN / PENYETUJUAN SKRIPSI</h3>
</div>
<?php if(session('success')): ?>
<div class="flash">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<div class="menu_nav">
  <div class="container-tabel-menu-atas">
    <table class="table-menu-atas" cellspacing="10">
      <thead>
        <tr class="tr-1">
          <th scope=""><a class="link-menu" href="/unverif_skripsi">Unverified</a></th>
          <th scope=""><a class="link-menu" href="/verif_skripsi">verified</a></th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<div class="content">
    
    <div class="container">

      <div class="table-responsive">

        <table class="table custom-table" >
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Nim</th>
              <th scope="col">Tanggal Lulus</th>
              <th scope="col">Lama Study</th>
              <th scope="col">File</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $skripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="data">
                    <td ><?php echo e($item->nama); ?></td>
                    <td ><?php echo e($item->nim); ?></td>
                    <td ><?php echo e($item->tgl_lulus); ?></td>
                    <td ><?php echo e($item->lama_study); ?></td>
                    <td style="display: none;"><input type="number" id="cek_stat" value="<?php echo e($item->stat_cek); ?>"></td>
                    <td ><a href="dokumen_ppl_projek/skripsi/<?php echo e($item->scan_skripsi); ?>" target="_blank" id="download">Lihat File</a></td>
                    <td>
                      <?php if($item->stat_cek == 1): ?>
                        <h4 id="sudah_disetujui" style="color: green;">Verified</h4>
                      <?php elseif($item->stat_cek == 0): ?>
                        <a id="setuju1" href=<?php echo e(route('edit_validasi_skripsi', ['nim' => urlencode($item->nim)])); ?> class="btn-action">Edit</a>
                        <a id="setuju" href=<?php echo e(route('setujui_skripsi', ['nim' => urlencode($item->nim)])); ?> class="btn-action1">Approve</a>
                      <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
      </div>
    </div>

  </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_dosen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/penyetujuan_skripsi.blade.php ENDPATH**/ ?>