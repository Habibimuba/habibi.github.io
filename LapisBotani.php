<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta lang="en">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="images/Iconslogo/rsz_logo_1-150x150.png" />
        <link href="css/blog.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Tamma|Kelly+Slab|Neucha|Righteous&display=swap" rel="stylesheet">
    <style>
        .toggle{
            height: 0px;
            background-color: #2e2e2e;
        }
        #open{
            color: aliceblue;
        }
        @media only screen and (max-width: 800px){
            .toggle{
                height: 50px;
            }
            
        }
    </style>
    </head>
    <body>
        <div class="toggle">
            <span style="font-size:40px;cursor:pointer;margin-left: 10px;" onclick="openNav()" id="open">&#9776; </span>
        </div>

        <!--Navigation Section-->
        <div id="myNav" class="navbar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="close">&times;</a>
          <div class="navbar-content">
            <a href="#home" id="active">Halaman Utama</a>
            <a href="resume.php">CV HABIBI</a>
            <a href="LapisBotani.php">PEKERJAAN</a>
            <a href="contact.php">Contact Us</a>
          </div>
        </div>


        <div class="Lapis Botani">
           <h1 style="color:darkviolet; position: relative; left: 20%;"><span style="color: darkorange; text-decoration: underline">Lapis</span>Botani</h1>
            <div class="blog-main">
            <div class="main-part" id="main">
               <div class="cont-img" id="coimg">
               </div>
               <div class="cont-text">
                 <div  class="blog-header">
                
                  Tentang Lapis Botani Bogor
                  <hr style="clear: both; height: 3px; background-color: #101010">
                 </div>
                   <p><b><span class="h2">LapisBotaniBogor</span></b><br>Lapis Bogor disajikan dengan kue lapis talas dengan warna ungu pada bagian atas dan warna putih kekuningan pada sisi bagian bawah. Pada toping atas ditaburi parutan keje premium. Sedangkan untuk merek Botani sisi atas dipilih warna putih kekuningan dan sisi bagian bawah dipilih warna ungu, sebagai warna yang identik dengan aura talas Kota Bogor yang tekenal sejuk dan terkenal dengan Kota Hujan. Dengan curah hujan yang cukup tinggi menjadikan tanah di kabupaten Bogor terkenal subur. Hampir semua jenis tanaman yang memang karakternya hidup di udara sejuk dingin seperti kota kota Bogor, dapat dipastikan akan tumbuh subur dan berkembang secara pesat. Hampir dapat dipastikan setiap akhir pekan, terutama hari Jum’at malam sampai dengan hari Minggu malam, Kota Bogor kebanjiran tamu wisata terutama dari kota Jakarta dan sekitarnya. Oleh karena itu tidaklah mengherankan apabila wisata kuliner di Kota Bogor akan ramai diserbu orang pada tiap akhir pekannya.

Mulai dari buah-buahan hasi kebun seperti pisang, jeruk, jambu, talas ramai diserbu tamu wisata dari Jakarta, Seolah penduduk Jakarta yang sedang berkunjung merasa seperti orang yang tidak pernah melihat talas segar dan berbagai buah segar. Mereka biasa memborong berbagai buah dan buah tangan untuk dijasikan oleh-oleh sepulang ke Jakarta.

Harga seolah tidak menjadi masalah bagi para wisatawan dari Jakarta yang berkunjung ke kota Bogor, berbagai kerajinan tanganpun laris diborong mereka.<span id="dots" style="font-weight: bold;">....</span>
            </div>
        </div>
        </div>
        
        <!--Copyright Information-->
        <div class="copyright">
            <p>&copy; 2020 <a >Habibi</a></p>
        </div>
        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");
                var main = document.getElementById("main");
                var coimg = document.getElementById("coimg");
              if (dots.style.display === "none") {
                  dots.style.display = "inline";
                  btnText.innerHTML = "Read more";
                  moreText.style.display = "none";
                  main.style.display = "flex";
                  coimg.style.width = "350px";
                  
                  
              } else {
                  dots.style.display = "none";
                  btnText.innerHTML = "Read less";
                  moreText.style.display = "inline";
                  main.style.display = "block";
                  coimg.style.width = "100%";
                  coimg.style.transition = "all 1s";
                }
        }
        </script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
