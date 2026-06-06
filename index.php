<?php
// Récupère le prénom de la personne qui envoie le lien, avec "Ton ami" par défaut
$nom_expediteur = htmlspecialchars(trim($_GET['n'] ?? 'Votre ami'));
?>

<html> 
    <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex" />
  <meta name="google" content="notranslate" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <meta property="og:site_name" content="Créer Un Souhait" />
  <meta property="og:image" content="https://christmas.page.gd/pic/joy.png" /> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TK87D42REW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-TK87D42REW');
  </script>
  <link rel="icon" type="image/png" href="pic/cot5.png"> 
  <link rel="shortcut icon" href="pic/cot5.png" type="image/png">
  <title><?php echo $nom_expediteur; ?> vous a envoyer un message surprise🧑‍🎄. Ouvrez-le</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <style>
    body {
      background: #fffefeff;
    }
    .mainContainer {
      background: url(images/.gif);
      max-width: 450px;
      min-height: 200px;
      margin: 0 auto;
      text-align: center;
      padding: 15px;
      color: #999;
      padding-bottom: 60px;
      box-shadow: 0 0 10px 1px rgba(0, 0, 0, .14), 0 1px 14px 2px rgba(0, 0, 0, .12), 0 0 5px -3px rgba(0, 0, 0, .3);
      background-size: 100%;
    }

    #username {
      color: black;
      /* Fallback: assume this color ON TOP of image */
      background: url(pic/namg.gif);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: swing 4s infinite;
      text-transform: uppercase;
      margin-bottom: 5px;
      font-size: 35px;
      padding: 0 10px;
      font-family: 'SF Espresso Shack', cursive;
    }

    #usernameb {
      color: black;
      /* Fallback: assume this color ON TOP of image */
      background: url(pic/namg.gif);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: swing 4s infinite;
      text-transform: uppercase;
      margin-bottom: 5px;
      font-size: 25px;
      padding: 0 10px;
      font-family: 'SF Espresso Shack', cursive;
    }

    .wishMessage {
      color: #fff;
      width: 90%;
      font-size: 22px;
      font-weight: bold;
      margin-top: 20px;
      text-shadow: 0px 0px 10px #afafaf;
    }

    .wishMessage p {
      margin: 0.3em 0;
    }

    @keyframes bounceIn {

      0%,
      20%,
      40%,
      60%,
      80%,
      to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
      }

      0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
      }

      20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
        color: #FF9933;
      }

      40% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
      }

      60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03);
        color: #fff;
      }

      80% {
        -webkit-transform: scale3d(.97, .97, .97);
        transform: scale3d(.97, .97, .97);
      }

      to {
        opacity: 1;
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
      }
    }

    .demo {
      font-size: 11;
      font-weight: none;
      color: #98201f;
      animation: flash 0s infinite;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="slide.js" type="text/javascript"></script>
  <script
    type="text/javascript"> $(document).ready(function () { $curtainopen = false; $(".rope").click(function () { $(this).blur(); if ($curtainopen == false) { $(this).stop().animate({ top: '-171%' }, { queue: false, duration: 350, easing: 'easeOutBounce' }); $(".leftcurtain").stop().animate({ width: '1px' }, 2000); $(".rightcurtain").stop().animate({ width: '1px' }, 2000); $curtainopen = true; } else { $(this).stop().animate({ top: '-40px' }, { queue: false, duration: 350, easing: 'easeOutBounce' }); document.write(''); $(".leftcurtain").stop().animate({ width: '50%' }, 2000); $(".rightcurtain").stop().animate({ width: '51%' }, 2000); $curtainopen = false; } return false; }); });</script>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    body {
      text-align: center;

    }

    img {
      border: none;
    }

    .leftcurtain {
      width: 50%;
      height: 100%;
      top: 0px;
      left: 0px;
      position: absolute;
      z-index: 2;
    }

    .rightcurtain {
      width: 50%;
      height: 100%;
      right: 0px;
      top: 0px;
      position: absolute;
      z-index: 3;
    }

    .rightcurtain img,
    .leftcurtain img {
      width: 100%;
      height: 100%;
    }

    .logo {
      margin: 0px auto;
      margin-top: 150px;
    }

    .rope {
      position: absolute;
      top: 30px;
      left: 0%;
      z-index: 4;
    }

    .centered {
      position: absolute;
      top: 75%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    a.rope {
      text-decoration: none;
    }

    .enter-name input[type=name] {
      background-color: #f91919ff;
      color: black;
      border-radius: 10px;
      box-sizing: border-box;
      border-color: blue;
      padding: 15px;
      position: fixed;
      left: 10px;
      bottom: 5px;
      height: 50px;
      width: 70%;
      text-align: center;
      font-size: 22px;
      display: inline-block;
    }

    .enter-name .btn {
      border-radius: 10px;
      font-size: 21px;
      padding: 4px;
      position: fixed;
      right: 2px;
      bottom: 5px;
      height: 50px;
      width: 23%;
      display: inline-block;
      color: black;
      background-color: #10E43A;
      border-color: black;
      letter-spacing: .5px;
      transition: .2s ease-out;
      cursor: pointer;
      line-height: 36px;
      outline: 0;
      text-transform: uppercase;
      vertical-align: middle;
      text-decoration: none;
      animation-duration: 4s !important;
    }

    .enter-name input[type=name]::-webkit-input-placeholder {
      color: black;
      font-size: 18px;
    }

    .enter-name input[type=name]::-moz-placeholder {
      color: #eee;
      font-size: 18px;
    }

    .enter-name input[type=name]:focus::-webkit-input-placeholder {
      color: #c0392b;
    }

    .enter-name input[type=name]:focus::-moz-placeholder {
      color: #c0392b;
      font-size: 18px;
    }

    #loading {
      -webkit-animation: rotation-star 15s infinite linear;
      animation: rotation-star 1.5s infinite linear;
    }

    @-webkit-keyframes rotation-star {
      from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      to {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
      }
    }

    @keyframes rotation-star {
      from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      to {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
      }
    }

    .m1 {
      position: fixed;
      left: 1%;
      width: auto;
      height: 100%;
      top: 1%;
      color: #000;
    }

    .m2 {
      position: fixed;
      right: 1%;
      width: auto;
      height: 100%;
      top: 1%;
      color: #000;
    }

    #show-name {
      font-size: 25px;
      display: inline-block;
      margin-bottom: 5px;
      animation: swing 1s infinite, glow 20s infinite;
    }

    @keyframes glow {

      0%,
      100% {
        text-shadow: 0 0 30px red;
      }

      25% {
        text-shadow: 0 0 30px orange;
      }

      50% {
        text-shadow: 0 0 30px forestgreen;
      }

      75% {
        text-shadow: 0 0 30px cyan;
      }
    }
  </style>

</head>

<body>
  <div class="leftcurtain"><img src="pic/right.jpg" /></div>
  <div class="rightcurtain"><img src="pic/left.jpg" /></div>
  <a class="rope" href="" onclick="PlaySound()">
    <div
      style="font-size: 30px;text-shadow: 1px 1px 3px white, 1px 1px 3px white, -1px -1px 3px white, -1px -1px 3px white;color: red;font-weight: bold;">
      <br><b>Toucher ceci<br></b></div> <img src="pic/oliver.gif" height="auto" width="70px"
      style="animation: tada 0s infinite"><br>
    <img src="pic/bibell.png" width="40%" height="auto"
      style="animation: pulse 0.5s infinite;" />
    </div>
  </a>
  <marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br>
    <img src="pic/cot1.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot2.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot3.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot4.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot5.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot6.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot7.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot8.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot1.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot2.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot3.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot4.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot5.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot6.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot7.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot8.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot1.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot2.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot3.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot4.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot5.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot6.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot7.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot8.png" height="30px" width="30px" /><br><br>
  </marquee>
  <marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
    <img src="pic/cot1.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot2.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot3.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot4.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot5.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot6.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot7.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot8.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot1.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot2.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot3.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot4.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot5.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot6.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot7.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot8.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot1.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot2.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot3.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot4.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot5.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot6.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot7.png" height="30px" width="30px" /><br><br>
    <img src="pic/cot8.png" height="30px" width="30px" /><br><br>
  </marquee>
  <div class="mainContainer" id="mainContainer"> 
    <center> 
      <script type="text/javascript"> 
      atOptions = { 
        'key' : '073b94f6e6c2ba2d99d42f072bbfa309', 
        'format' : 'iframe', 
        'height' : 50, 
        'width' : 320, 
        'params' : {} 
      }; 
      </script> 
      <script type="text/javascript" src="//www.highperformanceformat.com/073b94f6e6c2ba2d99d42f072bbfa309/invoke.js"></script> 
    </center>

    <br>
    <h1 id="username" style="font-family:SF Espresso Shack;"><?php echo $nom_expediteur; ?></h1>
    <h3 class="fromMessage" id="fromMessage"></h3><br>

    <img src="pic/vsht.png" width="60%" height="auto" style="animation: tada 4s infinite;" /><br><br>
    <div style="font-size: 18px; font-weight: 800; color:green;">
      <p id="demo"></p>
    </div>
    <br>
    <img src="pic/joynw.png" width="90%" height="auto%" style="animation: pulse 1.5s infinite;" />
    <br><br>
    <img src="pic/pèrenw2.gif" height="210px" width="150px" /><img src="pic/pèrenw1.gif
" height="220px" width="150px" />
    <br>
    <center>
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
    </center>

    <br>

    😀<span id="show-name" style="color: red;"><?php echo $nom_expediteur; ?></span>😘

    <form method="POST" action="wish.php">
      <div class="enter-name">
        <input class="animated pulse infinite" type="name" required="" maxlength="50" name="n"
          placeholder="👉 Entrez votre prénom ici...">
        <button class="btn animated shake infinite" type="submit"><span>👉</span> Voir </button>
      </div>
    </form>
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClasnamg("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }
    </script>
    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("Dec 25, 2025 00:00:00").getTime();

      // Update the count down every 02 second
      var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "<font color='red'> jours,</font> " + hours + "<font color='red'>  heures,</font> "
          + minutes + "<font color='red'> minutes,<br></font> " + seconds + "<font color='red'> secondes, </font> Avant ";

        // If the count down is finished, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "";
        }
      }, 1000);
    </script>
    <audio id="audiocracker" src="pic/Jingle-Bells.mp3" autostart="false"></audio>
    <script>
      function PlaySound() {
        var sound = document.getElementById("audiocracker");
        sound.play()
      }
    </script> 
    <script type='text/javascript' src='//pl28068655.effectivegatecpm.com/61/45/12/6145126400fe243428bdd0a0c8da089a.js'></script>
</body>

</html>