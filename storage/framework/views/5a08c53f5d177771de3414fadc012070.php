
<style>
    .konten1{
        margin-top: 30px;
        align-items: center;
        /* background-color: red; */
        display: flex;
        justify-content: space-between;
    }
    .container-bio{
        font-weight: bold;
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
    .jml_mhs{
        text-align: center;
        display: inline-block;
        width: 100px;
        /* height: 100px; */
        padding: 35px 20px 35px 20px;
        border-radius: 10px;
        border: 2px solid black;
        box-shadow: 0px 5px 20px 0px black;
        -o-box-shadow: 0px 5px 20px 0px black;
        -ms-box-shadow: 0px 5px 20px 0px black;
        -moz-box-shadow: 0px 5px 20px 0px black;
        -webkit-box-shadow: 0px 5px 20px 0px black;
    }
    .jml_mhs:not(:first-child){
        margin-left: 20px;
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
<div id="judul-profile"><h2>Profile Operator</h2></div>
<div class="konten1">
    <div class="container-bio">
        <div class="container-info-bio">
            <div class="container1-info-bio">
                <div id="nama">Nama</div>
                <span>:</span>
            </div>
            <span class="info-bio"><?php echo e($data->nama); ?></span>
        </div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="nip">NIP</div><span>:</span></div><span class="info-bio"><?php echo e($data->nip); ?></span></div>
        <div class="container-info-bio"><div class="container1-info-bio"><div id="email">Email</div><span>:</span></div><span class="info-bio"><?php echo e($data->email); ?></span></div>
    </div>
    <div class="container-foto"><img id="foto-profile" src="<?php echo e(asset('icon-profile2.png')); ?>" alt="" width="300px" height="300px"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_operator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\PPL\ppl_kelompok\resources\views/profile_operator.blade.php ENDPATH**/ ?>