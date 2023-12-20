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
            position: fixed;
            /* display: inline-block; */
            width: 100%;
            height: 100px;
            background-color: rgb(162, 161, 161);
            margin-bottom: 0;
        }
        aside{
            position: fixed;
            display: inline-block;
            margin-top: 100px;
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
            /* flex-direction: row; */
        }
        main{
            margin-top: 100px;
            margin-left: 300px;
            background-color: lightcoral;
            width: 100%
        }
        .container-nav{
            /* text-align: center; */
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .container-logo{
            margin-left: 200px;
            align-items: center;
            text-align: center;
        }
        .container-profile{
            font-size: 15px;
            align-items: center;
            display: flex;
            flex-direction: row-reverse;
            margin-right: 20px;
        }
        #foto-profile{
            margin-left: 20px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container-nav">
            <div class="kosong"></div>
            <div class="container-logo">
                <img src="logo-undip.jpg" alt="" width="60px" height="60px">
                <h3 class="siap-undip">Siap Undip</h3>
            </div>
            <div class="container-profile">
                <img src="elaina.jpg" alt="" width="50px" height="50px" id="foto-profile">
                <div class="info-profile">
                    <div class="nama">Faris</div>
                    <hr>
                    <div class="jabatan">Operator Informatika</div>
                </div>
            </div>
        </div>
    </nav>
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
        <main>
           
        </main>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ppl_kelompok\resources\views/dashboard_operator.blade.php ENDPATH**/ ?>