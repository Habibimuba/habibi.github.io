<!DOCTYPE html>
<html>
    <head>
        <title>Contact Saya</title>
        <meta charset="utf-8">
        <meta lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="images/Iconslogo/rsz_logo_1-150x150.png" />
        <link href="css/contact.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" type="text/css" rel="stylesheet">
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
        
        <div class="contact-area" id="contact">
            <div class="text-part">
                <h1>Contact Me</h1>
                <fieldset>
                    <legend>Contact Form</legend>
                    <div class="cont-form">
                    <form onsubmit="return validateForm()">
                    <input type="text" id="name" placeholder="Name *"><br>
                    <input type="text" id="email" placeholder="Email *">
                    <input type="text" id="subject" placeholder="Subject *"><br>
                    <input type="text" placeholder="Phone No (Optional)" id="phone"><br>
                    <textarea id="message" placeholder="Message *"></textarea><br>
                    <button type="submit" id="btn-submit">Send</button>
                    <div class="soci-contact">
                      
                        </a>
                        <a href="mailto:habibimuba@gmail.com?subject=Site_Message&body=Hi" target="_blank">
                        <div class="email">
                             <img src="images/Iconslogo/envelope.png">
                            <div class="text">Send Me Email</div>
                        </div>
                        </a>
                    </div>
                    </form>
                </div>
                </fieldset>
            </div>
        </div>
       

        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/formValidate.js" type="text/javascript"></script>
    </body>
</html>