<!DOCTYPE html>
<html>
    <head>
      <title>Habibi</title>
       <meta charset="utf-8">
       <meta lang="en">
       <meta name="author" content="Habibi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/Iconslogo/roti.png" />
        <!--The below code is for importing google web fonts in html-->
        <link href="https://fonts.googleapis.com/css?family=Audiowide|Baloo+Tamma|Kelly+Slab|Neucha|Righteous&display=swap" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css/workslider.css" type="text/css">
        <script src="js/formValidate.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </head>
    <style>
        /*Internal CSS*/
        #time{
            float: right;
            font-size: 30px;
            margin: 10px;
            font-family: 'kelly slab';
            margin-right: 20px;
            font-weight: bold;
            
        }
        @media only screen and (max-width: 800px){
            #greet{
                visibility: hidden;
            }
            #time{
                margin: auto;
                font-family: 'kelly slab';
                
            }
        }
        #greet{
            font-size: 25px;
            font-family: audiowide;
            position: absolute;
            left: 50%;
            top: 2%;
            font-weight: bold;
        }
    </style>
    <body>
       
       <!--Header Section-->
        <div class="header">
           <!--Inline css in below line-->
            <span style="font-size:40px;cursor:pointer;margin-left: 10px;" onclick="openNav()" id="open">&#9776; </span>
            <a href="home.php"><img src="images/Iconslogo/oke.jpg"></a>
            <span class="greeting" id="greet"></span>
            <span id="time"></span>
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

       
       <!--Banner Section-->
        <div class="banner-area" id="home">
           <div class="title-image"></div>
            <div class="title-name">
                <p class="name"><span id="iden-name"></span><br>
                    <span class="subtitle1" id="subtitle1">Lapis Botani Yogyakarta</span> 
                    <span class="subtitle2" id="subtitle2">Web CV  &nbsp;Pekerjaan</span>
                </p>
            </div>
        </div>
       
        
        
              

                <div style="text-align: center">
                   <span class="dot" onclick="currentSlide(1)"></span>
                   <span class="dot" onclick="currentSlide(2)"></span>
                   <span class="dot" onclick="currentSlide(3)"></span>
                   <span class="dot" onclick="currentSlide(4)"></span>
               </div> 
            </div>
        </div>
        
        <!--About Section-->
        <div class="about-area" id="about">
            <div class="text-part-abt">
                <h1 style="text-align: center; padding-bottom: 10px;"><span style="font-size: 80px; text-decoration: none; border-bottom: 2px solid rgb(230, 173, 30); color: rgb(230, 173, 30);">Tentang</span>Lapis Botani</h1>
                <div class="about">
            <div class="abt-content">
                <div class="rem-part">
                    <div class="social-media">
                       
                    </div>
                    <div class="left-part">
                        <span class="h2">Saya <span style="color: orangered;">Habibi</span></span><br>
                        <span class="h3">Penjual Lapis Botani </span>
                        <hr>
                        <p style="font-size: 25px;">


                          Lapis Bogor disajikan dengan kue lapis talas dengan warna ungu pada bagian atas dan warna putih kekuningan pada sisi bagian bawah. Pada toping atas ditaburi parutan keje premium. Sedangkan untuk merek Botani sisi atas dipilih warna putih kekuningan dan sisi bagian bawah dipilih warna ungu, sebagai warna yang identik dengan aura talas.



                           <span style="font-size: 25px; color:chocolate;"></span></p>
                    </div>
                    
                </div>
                <div class="img-part">
                    <div class="img"></div>
                </div>
            </div>
        </div>
            </div>
        </div>

      
</body>
</html>
