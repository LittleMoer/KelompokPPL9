

<style>
    .select-semester{
        margin-top: 20px;

    }
    #semester{
        border-radius: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: center;
        width: 1100px;
    }
    .container-irs{
        border-radius: 10px;
        overflow: auto;
        margin-top: 20px;
        height: 350px;
        background-color: rgb(205, 205, 205);
    }
    .container-btn{
        display: flex;
        justify-content: space-between;
    }
    .btn{
        text-align: center;
        border-radius: 15px;
        padding: 10px;
        margin-top: 50px;
        display: inline-block;
        width: 250px;
        background-color: rgb(192, 192, 192);
        text-decoration: none;
        color: black;
    }
    #btn-2{
        margin-left: 20px;
    }
</style>
<?php $__env->startSection('main'); ?>
    <div class="judul_page">
        <h3>INFORMASI AKADEMIK / UPLOAD IRS / ISI IRS</h3>
    </div>
    <div class="select-semester">
        <form action="" method="get">
            <select name="semester" id="semester">
                <option value="">Semester</option>
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
                <option value="7">Semester 7</option>
            </select>
        </form>
    </div>
    <div class="container-irs">
        <ul>

        </ul>
    </div>
    <div class="container-btn">
        <div id="btn-1" class="wadah-btn"><a href="/irs" class="btn">Back</a></div>
        <div id="btn-1" class="wadah-btn"><a href="/print-khs" class="btn">Print KHS</a></div>
        <div id="btn-2" class="wadah-btn"><a href="/isi-irs" class="btn">Isi IRS</a></div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/isi-irs.blade.php ENDPATH**/ ?>