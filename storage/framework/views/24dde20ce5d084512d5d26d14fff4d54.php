
<style>
    .judul_page h3 a{
        text-decoration: none;
        font-weight: 800;
    }
    .nav-side.logout{
        margin-top: 200px;
    }
    .pemisah{
        font-weight: 500;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .cont_info{
        margin-top: 50px;
    }
    .konten1{
        margin-top: 15px;
    }
    .cont_info1{
        display: flex;
        margin-top: 10px;
        width: 100%;
        justify-content: space-around;
    }
    .container-gtw1{
        display: flex;
        margin-top: 10px;
        width: 200px;
        justify-content: space-between;
    }
    .container-gtw{
        display: flex;
        width: 120px;
        justify-content: space-between;
    }
    .cont_info1:last-child{
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
<?php $__env->startSection('main'); ?>
<style>
        .main {
            background-color: rgb(239, 239, 239);
            padding: 20px 50px 20px 50px;
            /* position: fixed; */
            border-radius: 20px;
            box-shadow: 0px 2px 15px 0px black;
            -o-box-shadow: 0px 2px 15px 0px black;
            -ms-box-shadow: 0px 2px 15px 0px black;
            -moz-box-shadow: 0px 2px 15px 0px black;
            -webkit-box-shadow: 0px 2px 15px 0px black;
            overflow: auto;
            margin-top: 5%;
            margin-bottom: 50px;
            margin-left: 22%;
            width: 1000px;
        }
</style>
<div class="judul_page">
    <h3><a href="/profile/mhs">Profile</a> / Informasi Semester</h3>
</div>
<div class="cont_info">
    <div class="cont_info1">
        <div class="irs">
            <h3>IRS</h3>
            <div class="konten1">
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">Status </div><span>:</span></div><span class="info-popup"></span>
                    <?php if($irs != null): ?>
                        <?php echo e($irs->info_status); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">SKS</div><span>:</span></div><span class="info-popup">
                    <?php if($irs != null): ?>
                    <?php echo e($irs->sks); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?></span></div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">Semester</div><span>:</span></div><span class="info-popup">
                    <?php if($irs != null): ?>
                    <?php echo e($irs->smt); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?></span></div>
            </div>
        </div>
        <div class="khs">
            <h3>KHS</h3>
            <div class="konten1">
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">Status </div><span>:</span></div><span class="info-popup"></span>
                    <?php if($khs != null): ?>
                        <?php echo e($khs->info_status); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">SKS Semester </div><span>:</span></div><span class="info-popup">
                    <?php if($khs != null): ?>
                        <?php echo e($khs->sks); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?></span></div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">IP Semester </div><span>:</span></div><span class="info-popup">
                    <?php if($khs != null): ?>
                        <?php echo e($khs->smt); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?></span></div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">SKS Kumulatif </div><span>:</span></div><span class="info-popup">
                    <?php if($khs != null): ?>
                        <?php echo e($khs->sks_kumulatif); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?></span></div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">IP Kumulatif </div><span>:</span></div><span class="info-popup"></span>
                    <?php if($khs != null): ?>
                        <?php echo e($khs->ipk); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <hr class="pemisah">
    <div class="cont_info1">
        <div class="pkl">
            <h3>PKL</h3>
            <div class="konten1">
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">Status </div><span>:</span></div><span class="info-popup"></span>
                <?php if($pkl != null): ?>
                    <?php echo e($pkl->info_status); ?>

                <?php else: ?>
                    -
                <?php endif; ?>
            </div>
            <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">NIlai </div><span>:</span></div><span class="info-popup"></span>
                <?php if($pkl != null): ?>
                    <?php echo e($pkl->nilai_pkl); ?>

                <?php else: ?>
                    -
                <?php endif; ?>
            </div>
            </div>
        </div>
        <div class="skripsi">
            <h3>SKRIPSI</h3>
            <div class="konten1">
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">Status </div><span>:</span></div><span class="info-popup"></span>
                <?php if($skripsi != null): ?>
                    <?php echo e($skripsi->info_status); ?>

                <?php else: ?>
                    -
                <?php endif; ?>
                </div>
                <div class="container-gtw1"><div class="container-gtw"><div class="infoo1">NIlai </div><span>:</span></div><span class="info-popup"></span>
                    <?php if($skripsi != null): ?>
                        <?php echo e($skripsi->nilai_skripsi); ?>

                    <?php else: ?>
                        -
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/detail_smt_mahasiswa.blade.php ENDPATH**/ ?>