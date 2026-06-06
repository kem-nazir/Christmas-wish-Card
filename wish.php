<?php
$mon_nom = htmlspecialchars(trim($_POST['n'] ?? 'Votre ami'));
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$base_url = $protocol . '://' . $_SERVER['HTTP_HOST'];
$share_url = $base_url . '/?n=' . urlencode($mon_nom);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex" />
    <meta name="google" content="notranslate" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta property="og:site_name" content="Créer Un Souhait" />
    <meta property="og:image" content="pic/joy.png" />
    <link rel="icon" type="image/png" href="pic/cot5.png">
    <link rel="shortcut icon" href="pic/cot5.png" type="image/png">
    <title>!!<?php echo $mon_nom; ?> vous souhaite joyeux Noël !!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
      body{ background: #fffefeff; }
      .mainContainer {
        background: url(images/.gif);
        max-width: 450px;
        min-height: 200px;
        margin: 0 auto;
        text-align: center;
        padding: 15px;
        color: #999;
        padding-bottom: 60px;
        box-shadow: 0 0 10px 1px rgba(0,0,0,.14), 0 1px 14px 2px rgba(0,0,0,.12), 0 0 5px -3px rgba(0,0,0,.3);
        background-size: 100%;
      }
      #username {
        color: black;
        background: url(pic/namg.gif);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: swing 4s infinite;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-size: 40px;
        padding: 0 10px;
        font-family: 'SF Espresso Shack', cursive;
      }
      #usernameb {
        color: black;
        background: url(pic/namg.gif);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: swing 4s infinite;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-size: 25px;
        padding: 0 10px;
        font-family: 'SF Espresso Shack', cursive;
      }
      .fromMessage{
        color: #fff;
        animation: swing 4s infinite;
        font-size: 20px;
        padding: 0 10px;
      }
      .wishMessage {
        color: #fff;
        font-size: 22px;
        font-weight: bold;
        margin-top: 20px;
        text-shadow: 0px 0px 10px #afafaf;
      }
      .wishMessage p{ margin: 0.3em 0; }
      .demo { font-size: 11px; font-weight: normal; color: #98201f; animation: flash 0s infinite; }
      .m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
      .m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}
      a{text-decoration:none;color:inherit}
      .shareBtn {
        position: fixed;
        right: calc(50% - 145px);
        bottom: 5px;
        width: 300px;
        height: 60px;
        background-color: #0c850cff;
        border-radius: 100px;
        color: white;
        line-height: 60px;
        text-align: center;
        letter-spacing: 1px;
        overflow: hidden;
        animation: footer infinite linear 1s;
        transition: all .3s cubic-bezier(.67,.13,.1,.81), transform .15s cubic-bezier(.67,.13,.1,.81);
      }
      .shareShow {
        position: fixed;
        right: calc(50% - 45px);
        bottom: 5px;
        width: 100px;
        height: 60px;
        background-color: brown;
        border-radius: 100px;
        color: white;
        line-height: 60px;
        text-align: center;
        letter-spacing: 1px;
        overflow: hidden;
        transition: all .3s cubic-bezier(.67,.13,.1,.81), transform .15s cubic-bezier(.67,.13,.1,.81);
      }
      .platforms {
        position: fixed;
        right: calc(50% - 145px);
        height: 100px;
        width: 300px;
        bottom: 65px;
        border-radius: 5px;
        visibility: hidden;
        transform: scale(.9);
        overflow: hidden;
      }
      .platforms:target { visibility: visible; transform: scale(1); opacity: 1; }
      .platforms a { position: absolute; width: 90px; height: 90px; border-radius: 5px; color: #3F8EFC; text-transform: uppercase; }
      .platforms a:nth-child(1) { background-color: #3a7092ff; left: 60px; }
      .platforms a:nth-child(2) { background-color: #3a7092ff; left: 155px; }
      .platforms:target a { top: 5px; }
      .platforms a:hover { background: #E5F4FF; box-shadow: 0 0 0 1px #A5CFFF; }
      .platforms a:before {
        content: attr(data-os);
        position: absolute;
        color:white;
        bottom: 5px;
        left: 0px;
        width: 100%;
        font-size: 12px;
        text-align: center;
      }
      #show-name {
        font-size: 25px;
        display: inline-block;
        margin-bottom: 5px;
        animation: swing 1s infinite, glow 20s infinite;
      }
      @keyframes glow {
        0%,100%{ text-shadow: 0 0 30px red; }
        25%{ text-shadow: 0 0 30px orange; }
        50%{ text-shadow: 0 0 30px forestgreen; }
        75%{ text-shadow: 0 0 30px cyan; }
      }
    </style>
</head>
<body>
  <marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br> 
<img src="pic/cot1.png" height="30px" width="30px"/><br><br>
<img src="pic/cot2.png" height="30px" width="30px"/><br><br>
<img src="pic/cot3.png" height="30px" width="30px"/><br><br>
<img src="pic/cot4.png" height="30px" width="30px"/><br><br>
<img src="pic/cot5.png" height="30px" width="30px"/><br><br>
<img src="pic/cot6.png" height="30px" width="30px"/><br><br>
<img src="pic/cot7.png" height="30px" width="30px"/><br><br>
<img src="pic/cot8.png" height="30px" width="30px"/><br><br>
<img src="pic/cot1.png" height="30px" width="30px"/><br><br>
<img src="pic/cot2.png" height="30px" width="30px"/><br><br>
<img src="pic/cot3.png" height="30px" width="30px"/><br><br>
<img src="pic/cot4.png" height="30px" width="30px"/><br><br>
<img src="pic/cot5.png" height="30px" width="30px"/><br><br>
<img src="pic/cot6.png" height="30px" width="30px"/><br><br>
<img src="pic/cot7.png" height="30px" width="30px"/><br><br>
<img src="pic/cot8.png" height="30px" width="30px"/><br><br>
<img src="pic/cot1.png" height="30px" width="30px"/><br><br>
<img src="pic/cot2.png" height="30px" width="30px"/><br><br>
<img src="pic/cot3.png" height="30px" width="30px"/><br><br>
<img src="pic/cot4.png" height="30px" width="30px"/><br><br>
<img src="pic/cot5.png" height="30px" width="30px"/><br><br>
<img src="pic/cot6.png" height="30px" width="30px"/><br><br>
<img src="pic/cot7.png" height="30px" width="30px"/><br><br>
<img src="pic/cot8.png" height="30px" width="30px"/><br><br>
</marquee>

  <marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
<img src="pic/cot1.png" height="30px" width="30px"/><br><br>
<img src="pic/cot2.png" height="30px" width="30px"/><br><br>
<img src="pic/cot3.png" height="30px" width="30px"/><br><br>
<img src="pic/cot4.png" height="30px" width="30px"/><br><br>
<img src="pic/cot5.png" height="30px" width="30px"/><br><br>
<img src="pic/cot6.png" height="30px" width="30px"/><br><br>
<img src="pic/cot7.png" height="30px" width="30px"/><br><br>
<img src="pic/cot8.png" height="30px" width="30px"/><br><br>
<img src="pic/cot1.png" height="30px" width="30px"/><br><br>
<img src="pic/cot2.png" height="30px" width="30px"/><br><br>
<img src="pic/cot3.png" height="30px" width="30px"/><br><br>
<img src="pic/cot4.png" height="30px" width="30px"/><br><br>
<img src="pic/cot5.png" height="30px" width="30px"/><br><br>
<img src="pic/cot6.png" height="30px" width="30px"/><br><br>
<img src="pic/cot7.png" height="30px" width="30px"/><br><br>
<img src="pic/cot8.png" height="30px" width="30px"/><br><br>
<img src="pic/cot1.png" height="30px" width="30px"/><br><br>
<img src="pic/cot2.png" height="30px" width="30px"/><br><br>
<img src="pic/cot3.png" height="30px" width="30px"/><br><br>
<img src="pic/cot4.png" height="30px" width="30px"/><br><br>
<img src="pic/cot5.png" height="30px" width="30px"/><br><br>
<img src="pic/cot6.png" height="30px" width="30px"/><br><br>
<img src="pic/cot7.png" height="30px" width="30px"/><br><br>
<img src="pic/cot8.png" height="30px" width="30px"/><br><br>
</marquee>

  <div class="mainContainer" id="mainContainer">
    <br>
    <h1 id="username"><?php echo $mon_nom; ?></h1>
    <h3 class="fromMessage" id="fromMessage"></h3>

    <img src="pic/vsht.png" width="60%" height="auto" style="animation: tada 4s infinite;"/><br><br>

    <div style="font-size: 18px; font-weight: 800; color:green;">
      <p id="demo"></p>
  </div>
    <br>
    <img src="pic/joynw.png" width="90%" style="animation: pulse 1.5s infinite;"/><br>
    <img src="pic/pèrenw2.gif" height="210" width="150"/><img src="pic/pèrenw1.gif" height="220" width="150"/><br>

    <div class="wishMessage"
        style="text-shadow: 1px 1px 3px white, 1px 1px 3px white, -1px -1px 3px white, -1px -1px 3px white;">
        <p
          style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black; color: #fa3859ff">
          Que la magie de Noël
        </p>
        <p
          style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver; color: #053499ff">
          illumine votre foyer et 
        </p>
        <p
          style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver; color: #f80faaff">
            Que l'amour, la paix soient
        </p>
        <p
          style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver; color: #188318ff">
            vos plus beaux cadeaux.
        </p>
        <p
          style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black; color: #FFD700">
            !!Joyeux noël!!
        </p><br>
    </div> 


    <div style="margin-top:8px;">
      😀<span id="show-name" style="color: red;"><?php echo $mon_nom; ?></span>😘
    </div>
    <br>

    <a class="shareBtn" id="div1" href="#platforms">👉Partager avec des amis👈</a>
    <a class="shareShow" id="div2" href="#close" style="display: none;">Proche</a>

    <div class="platforms" id="platforms">
      <center>
        <!-- LIEN WHATSAPP CORRIGÉ -->
        <a href="https://wa.me/?text=🎁 Avez-vous vu ça ? *<?php echo $mon_nom; ?>* t'a envoyé une surprise de Noël 😍%0A👉 Ouvre ici : <?php echo $share_url; ?>%0AJoyeux Noël 🎄" data-os="Whatsapp">
          <img src="pic/tsapp.png" style="animation: tada 2s infinite;margin-top:5px;height:50px;width:50px;">
        </a>
        
        <!-- LIEN MESSENGER CORRIGÉ -->
        <a href="fb-messenger://share/?link=<?php echo urlencode($share_url); ?>" data-os="Facebook Messenger">
          <img src="pic/fbicon.png" style="animation: tada 2s infinite;margin-top:5px;height:50px;width:50px;">
        </a>
      </center>
    </div>

    <script>
      $(document).ready(function(){
        $(".shareBtn").click(function(){ $(".shareBtn").hide(); $(".shareShow").show(); });
        $(".shareShow").click(function(){ $(".shareShow").hide(); $(".shareBtn").show(); });
      });
    </script>

    <audio controls autoplay loop style="display:none!important">
      <source src="pic/Jingle-Bells.mp3" type="audio/mpeg">
    </audio>

    <script>
      var countDownDate = new Date("Dec 25, 2026 00:00:00").getTime();
      var x = setinterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("demo").innerHTML = days + "<font color='red'> jours,</font> " + hours + "<font color='red'>  heures,</font> "
          + minutes + "<font color='red'> minutes,<br></font> " + seconds + "<font color='red'> secondes, </font> Avant ";
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "";
        }
      }, 1000);
    </script>

  </div> 
</body>
</html>