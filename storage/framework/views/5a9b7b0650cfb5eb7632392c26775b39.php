<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav{
            width: 100%;
            height: 100px;
            background-color: rgb(162, 161, 161);
            margin-bottom: 0;
        }
        aside{
            position: fixed;
            /* display: inline-block; */
            width: 300px;
            height: 100vh;
            background-color: rgb(199, 199, 199);
        }
        .nav-side{
            margin-top: 70px;
            background-color: rgb(169, 167, 167);
            margin-left: 30px;
            margin-right: 30px;
            border-radius: 25px;
        }
        .judul-nav{
            text-align: center;
            border-radius: 15px;
            background-color: rgb(131, 129, 129);
            padding: 10px;
        }
        .nav-side ul li{
            /* background-color: white; */
            /* margin-top: 5px;
            margin-bottom: 5px; */
            
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .nav-side ul li a{
            color: black;
            text-decoration: none;
        }
        .konten{
            display: flex;
            flex-direction: row;
        }
        main{
            margin-left: 300px;
            background-color: lightcoral;
            width: 100%
        }
    </style>
</head>
<body>
    
    <div class="konten">
        <aside>
            <div class="nav-side">
                <div class="judul-nav">Dashboard</div>
                <ul type='none'>
                    <li><a href="">Profile</a></li>
                    <hr>
                    <li><a href="">Ubah Profile</a></li>
                </ul>
            </div>
            <div class="nav-side">
                <div class="judul-nav">Pengaturan Akun</div>
                <ul type='none'>
                    <li><a href="">Profile Akun</a></li>
                    <hr>
                    <li><a href="">Entry Akun Baru</a></li>
                    <hr>
                    <li><a href="">Ubah Profil Baru</a></li>
                </ul>
            </div>
            <div class="nav-side">
                <div class="judul-nav">Backup</div>
                <ul type='none'>
                    <li><a href="">Update Perwalian</a></li>
                </ul>
            </div>
        </aside>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/navbar.blade.php ENDPATH**/ ?>