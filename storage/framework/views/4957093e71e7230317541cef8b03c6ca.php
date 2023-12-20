
<style>
    .konten1{
        margin-top: 20px;
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
        font-weight: bold;
        margin-top: 50px;
        /* background-color: red; */
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
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
    .judul_pencarian{
        margin-top: 30px;
        font-size: 20px;
    }
    #mhs{
        margin-top: 20px;
        /* margin-left: 10px; */
        text-align: center;
        /* border-radius: 10px; */
        /* border: 0px solid rgb(182, 182, 182); */
        /* border-bottom: 2px solid rgb(182, 182, 182); */
        border-radius: 10px;
        padding: 5px;
        width: 500px;
    }
    #mhs:focus{
        outline: none;
        box-shadow: 0px 2px 0px 0px black;
    }
    .judul_hasil{
        text-decoration: underline;
        margin-top: 15px
    }
    .nama_hasil p{
        color: rgb(0, 0, 0);

        margin-top: 4px;
    }
    .nama_hasil1{
        display: inline-block;
        font-size: 20px;
        text-decoration: none;
        margin-top: 10px;
        color: rgb(0, 0, 0);
    }
    .nama_hasil1:hover{
        text-decoration: underline;
        color: rgb(24, 24, 24);
        font-weight: bold;
        transition: .3s;
    }
    .container_hasil{
        /* background-color: lightblue; */
        height: 500px;
        overflow: auto;
        margin-top: 10px;
        /* padding-left: 10px; */
    }
    .pemisah{
        margin-top: 10px;
        width: 1040px;
    }
    .wadah-hasil{
        margin-top: 20px;
        /* background-color: rgb(117, 117, 208); */
        border: 2px dashed black;
        border-radius: 10px;
        /* width: 600px; */
        text-align: center;
        padding-top: 5px;
        padding-bottom: 15px;
        padding-left: 20px;
    }
    .wadah-hasil:hover{
        transition: .4s;
        background-color: rgb(187, 187, 187);
    }
    .select-semester{
        margin-top: 20px;

    }
    #semester{
        border-radius: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: center;
        margin-left: 50px;
        width: 200px;
    }
    .form-input{
        text-align: center;
        margin-top: 50px;
        margin-bottom: 20px;
        /* display: flex;
        flex-direction: wrap; */
    }
</style>
<?php $__env->startSection('main'); ?>
<div class="judul_page">
    <h3>Dashboard / Home</h3>
</div>
<div class="cont-jml-mhs">
    <div class="jml_mhs"><?php echo e($jml_mhs); ?><br> Mahasiswa</div>
    <div class="jml_mhs"><?php echo e($jml_pkl); ?><br> Lulus PKL</div>
    <div class="jml_mhs"><?php echo e($jml_skripsi); ?><br> Lulus Skripsi</div>
</div>
<form action="/submit_info_mhs" method="GET">
    <div class="form-input">
        <div class="form-row">
            <input type="text" name="mhs" class="mhs" id="mhs" placeholder="Masukkan NIM or Nama" >
        </div>
        
    </div>
</form>
<div class="container_hasil">
    <?php $__currentLoopData = $mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="wadah-hasil">
            <div class="judul_hasil">
                <h4 class="judul_hasil1">Mahasiswa</h4>
            </div>
            <div class="nama_hasil">
                <a href=<?php echo e(route('detail_mhs_dosen',['mhs' => urlencode($item->nim)])); ?> class="nama_hasil1"><?php echo e($item->nama); ?></a>
            </div>
            <div class="nama_hasil">
                <p><?php echo e($item->nim); ?></p>
            </div>
            <hr class="pemisah">
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<script>
    document.getElementById("mhs").addEventListener("keyup", function(event) {
        // Check if the Enter key is pressed (key code 13)
        if (event.keyCode === 13) {
            // Submit the form
            document.querySelector("form").submit();
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_dosen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/dashboard_dosen.blade.php ENDPATH**/ ?>