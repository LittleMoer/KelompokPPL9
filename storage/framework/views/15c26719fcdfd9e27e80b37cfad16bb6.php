
<title>ENTRY | MAHASISWA BARU</title>

<?php $__env->startSection('main'); ?>
<meta charset="utf-8">
<title>Form-v10 by Colorlib</title>
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Font-->
<link rel="stylesheet" type="text/css" href="entry-mahasiswa/css/montserrat-font.css">
<link rel="stylesheet" type="text/css" href="entry-mahasiswa/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
<link rel="stylesheet" href="entry-mahasiswa/css/style.css"/>
<link rel="stylesheet" type="text/css" href="update-mahasiswa/css/montserrat-font.css">


<script>


document.addEventListener("DOMContentLoaded", function() {
	var select = document.getElementById("angkatan");
	var currentYear = new Date().getFullYear();
	for (var i = currentYear - 7; i <= currentYear + 7; i++) {
		var option = document.createElement("option");
		option.value = i;
		option.text = i;
		select.appendChild(option);
	}

});

</script>
<style>
	.error{
		text-align: center;
		color: red;

		margin-bottom: 20px;
	}
</style>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="/updateAdd" method="get" id="myform">
				<div class="form-left">
					<h2 id="judul-form">Informasi Mahasiswa</h2>
					<div class="form-row">
						<input type="text" name="nama_lengkap" id="nama_lengkap" class="input-text" placeholder="Nama Lengkap" required>
					</div>
					<div class="form-row">
						<input type="text" name="nim" class="nim" id="nim" placeholder="Nim" maxlength="14" required>
					</div>
					<div class="form-row">
						<select name="angkatan" id="angkatan">
						    <option value="">Angkatan</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<select name="dosen-wali">
								<option value="">Dosen Wali</option>
								<?php $__currentLoopData = $dataDosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($dosen->nip); ?>"><?php echo e($dosen->nama); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<span class="select-btn">
								  <i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					
					<div class="error"><?php echo e(session('error_mhs')); ?></div>
					<div id="submit"><input type="submit" id="btn-submit"></div>
				</div>
			</form>
		</div>
	</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main_operator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Code\PPL\ppl_kelompok\resources\views/entry-mahasiswa.blade.php ENDPATH**/ ?>