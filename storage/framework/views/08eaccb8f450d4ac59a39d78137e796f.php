
<style>
    .konten1{
        margin-top: 20px;
        align-items: center;
        /* background-color: red; */
        display: flex;
        justify-content: space-between;
    }
    .container-bio{
        /* font-weight: bold; */
    }
    .container-info-bio{
        display: flex;
        /* justify-content: space-between; */
    }
    .container-info-bio:not(:first-child){
        margin-top: 20px;
    }
    .container1-info-bio{
        width: 100px;
        display: flex;
        justify-content: space-between;
    }
    .info-bio{
        margin-left: 20px;
    }
    .cont-jml-mhs{
        margin-top: 50px;
        /* background-color: red; */
        width: 500px;
        display: flex;
        flex-wrap: wrap;
    }
    #judul-profile{
        text-align: center;
        margin-top: 30px;
    }
</style>
<?php $__env->startSection('main'); ?>
<div class="judul_page">
    <h3>Dashboard / Profile</h3>
</div>
<div id="judul-profile"><h2>Profile Mahasiswa</h2></div>

<div class="konten1">
    <div class="container-bio">
        <div class="container-info-bio">
            <div class="container1-info-bio">
                <div id="nama">Nama</div>
                <span>:</span>
            </div>
            <span class="info-bio"><?php echo e($mhs->nama); ?></span>
        </div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="nim">NIM</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->nim); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="angkatan">angkatan</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->angkatan); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="email">Email</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->email); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="provinsi">Provinsi</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->prov); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="kab_kota">Kab/Kota</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->kota); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="alamat">Alamat</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->alamat); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="no_hp">No telp</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->no_hp); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="jalur_masuk">Jalur Masuk</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->jalur_masuk); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="kode_doswal">Dosen Wali</div><span>:</span></div><span class="info-bio"><?php echo e($mhs->dosen); ?></span></div>
    </div>
    <div class="container-foto"><img id="foto-profile" src="<?php echo e(asset('icon-profile2.png')); ?>" alt="" width="400px" height="400px">
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\PPL\ppl_kelompok\resources\views/profile_mhs.blade.php ENDPATH**/ ?>