<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation by Games</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md4 mb-3 bg-white border-bottom box-shadow">
        <a class="card-body text-dark" href="./index.php"><h3 class="my-0 mr-md-auto font-weight-normal">Compumeum</h3></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <?php if( isset($_SESSION["user"]) ): ?>
            <a class="btn btn-outline-danger" href="./controller/doLogout.php">Logout</a>
            <?php else: ?>
                <a class="p-2 text-dark" href="./login.php">Login</a>
                <a class="p-2 text-dark" href="./register.php">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
    </header>
    <div class="product-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Games</h1>
        <p class="lead">List of games specification requirements</p>
    </div>
<div class="container">
 <div class="card-deck mb-3 text-center">

 <div class="row">
  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Red Dead Redemption 2</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/rdr 2.jpg" width="100%">
    <p class="mt-3 mb-0">
        Red Dead Redemption 2 (stylized as Red Dead Redemption II) is a western-themed action-adventure video game developed and published by Rockstar Games. It is the third entry in the Red Dead series and a prequel to 2010's Red Dead Redemption[3] and was released on October 26th, 2018[4] on PlayStation 4, Xbox One[5] and on November 5th, 2019 for PC.

        minimal spec:
        OS: Windows 7 – Service Pack 1 (6.1.7601)
        Processor: Intel Core i5-2500K / AMD FX-6300
        Memory: 8 GB
        Graphics Card: Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB
        HDD Space: 150 GB
        Sound Card: DirectX Compatible
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Counter-Strike: Global Offensive</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/csgo.jpg" width="100%">
    <p class="mt-3 mb-0">
        Counter-Strike: Global Offensive is a multiplayer first-person shooter video game developed by Valve and Hidden Path Entertainment. It is the fourth game in the Counter-Strike series and was released for Windows, OS X, Xbox 360, and PlayStation 3 in August 2012, while the Linux version was released in 2014.

        minimal spec:
        CPU: Intel Core 2 Duo E6600 / AMD Phenom X3 8750 or better.
        RAM: 2 GB.
        HDD: 15 GB of storage space.
        GPU: Video card must be 256 MB or more and should be a DirectX 9-compatible with support for Pixel Shader 3.0.
        OS: Windows 7, Windows Vista, Windows XP.
        DirectX: Version 9.0c.
    </p>
   </div>
  </div>
 </div>

<div class="row">
  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Dark Souls 1: Prepare To Die Edition</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/ds1.jpg" width="100%">
    <p class="mt-3 mb-0">
        Dark Souls is a 2011 action role-playing game developed by FromSoftware and published by Namco Bandai Games. A spiritual successor to FromSoftware's Demon's Souls, the game is the second instalment in the Souls series.

        minimal spec:

        Processor:Core 2 Duo E4300 1.8GHz
        Athlon 64 X2 Dual Core 3600+
        0
        82%
        GPU:Radeon HD 4650 2 GB
        OS:Win Xp 32
        Directx: DX 9
        RAM:4 GB
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Dark Souls II</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/ds2.jpg" width="100%">
    <p class="mt-3 mb-0">
        Dark Souls II[a] is an action role-playing game developed by FromSoftware and published by Bandai Namco Games. The third game in the Souls series, it was released for Microsoft Windows, PlayStation 3 and Xbox 360.

        minimal spec:
        OS: Windows XP SP3, Vista SP2, Windows 7 SP1, Windows 8
        Processor: AMD® Phenom II™ X2 555 3.2Ghz or Intel® Pentium Core ™ 2 Duo E8500 3.17Ghz
        Memory: 2 GB RAM
        Graphics: NVIDIA® GeForce® 9600GT, ATI Radeon™ HD 5870
        DirectX: Version 9.0c
        Network: Broadband Internet connection
        Hard Drive: 14 GB available space
        Sound Card: DirectX 9 sound device
        Additional Notes: Controller support: Microsoft Xbox 360® Controller for Windows® (or equivalent) recommended
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Dark Souls III</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/ds3.jpg" width="100%">
    <p class="mt-3 mb-0">
        Dark Souls III[a] is an action role-playing video game developed by FromSoftware and published by Bandai Namco Entertainment for PlayStation 4, Xbox One, and Microsoft Windows. The fourth installment of the Souls series and the final installment of the Dark Souls trilogy, the game was released in Japan in March 2016 and worldwide a month later. Two downloadable content (DLC) expansions, Ashes of Ariandel and The Ringed City, were also made for the game.
    </p>
   </div>
  </div>
</div>

  <div class="row">
  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Apex Legends</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/Apex.jpg" width="100%">
    <p class="mt-3 mb-0">
        Apex Legends is a free-to-play battle royale game developed by Respawn Entertainment and published by Electronic Arts. It was released for Windows, PlayStation 4 and Xbox One on February 4, 2019, without any prior announcement or marketing. The game is in its fourth season.

        minimal spec:
        OS: Windows 7/8.1/10 64 bit
        Processor: AMD A8 3870 3.6 Ghz or Intel Core i3 2100 3.1Ghz
        Memory: 8 GB RAM
        Graphics: NVIDIA GeForce GTX 465 / ATI Radeon TM HD 6870
        DirectX: Version 11
        Storage: 50 GB available space
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Bloodborne</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/bloodborne.jpg" width="100%">
    <p class="mt-3 mb-0">
        Bloodborne[a] is an action role-playing game developed by FromSoftware and published by Sony Computer EntertainmeApex Legends is a free-to-play battle royale game developed by Respawn Entertainment and published by Electronic Arts. It was released for Windows, PlayStation 4 and Xbox One on February 4, 2019, without any prior announcement or marketing. The game is in its fourth season.

        minimal spec:
        Operating System: Windows 7 and the KB3135445 platform update.
        Processor: AMD Athlon X2 2.8 GHZ or Intel Core 2 Duo 2.4 GHZ.
        Ram: 4GB or more.
        Free Hard Drive Space: 17GB.
        Processor: AMD Athlon X2 2.8 GHz or higher; Intel Core 2 Duo 2.4 GHz or higher.
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">X plane-11</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/xplane11.png" width="100%">
    <p class="mt-3 mb-0">
        X-Plane is a flight simulator produced by Laminar Research. X-Plane can be used professionally with the correct license,[3] or used personally. A personal use desktop version is available for macOS, Windows, and Linux, while a mobile version is available for Android, iOS, and webOS.[4] X-Plane is packaged with several commercial, military, and other aircraft, as well as basic global scenery which covers most of the Earth. X-Plane also ships with other software to build and customize aircraft and scenery. X-Plane also has a plugin architecture that allows users to create their own modules, extending the functionality of the software by letting users create their own worlds or replicas of places on Earth. This is further enhanced by the Scenery Gateway which allows users to share airports with other users and eventually the airports are included by default in the base product.

        minimal spec:
        CPU: Intel Core i5 6600K at 3.5 ghz or faster.
        RAM: 16 GB.
        OS: Windows 7, 8, or 10, 64-bit.
        VIDEO CARD: DirectX 12-capable video card from NVIDIA, AMD w/4 GB VRAM.
        SOUND CARD: Default.
        FREE DISK SPACE: 20 GB.
        DEDICATED VIDEO RAM: 4 GB.
    </p>
   </div>
  </div>
</div>

<div class="row">
  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Sekiro: Shadows Die Twice</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/sekiro.jpg" width="100%">
    <p class="mt-3 mb-0">
        Sekiro: Shadows Die Twice is an action-adventure video game developed by FromSoftware and published by Activision. The game takes place in the Sengoku period in Japan, and follows a shinobi known as Wolf as he attempts to take revenge on a samurai clan who attacked him and kidnapped his lord. It was released for Microsoft Windows, PlayStation 4, and Xbox One on 22 March 2019.

        minimal spec:
        OS: Windows 7 64-bit | Windows 8 64-bit | Windows 10 64-bit
        Processor: Intel Core i3-2100 | AMD FX-6300
        Memory: 4 GB RAM
        Graphics: NVIDIA GeForce GTX 760 | AMD Radeon HD 7950
        DirectX: Version 11
        Network: Broadband Internet connection
        Storage: 25 GB available space
        Sound Card: DirectX 11 Compatible
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Demon's Souls</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/demonsoul.jpg" width="100%">
    <p class="mt-3 mb-0">
        Demon's Souls[a] is an action role-playing game developed by FromSoftware for the PlayStation 3 under the supervision of SCE Japan Studio. It was published in Japan by Sony Computer Entertainment in February 2009, in North America by Atlus USA in October 2009, and in PAL territories by Namco Bandai Games in June 2010. The game is referred to as a spiritual successor to FromSoftware's King's Field series.

        minimal spec:
        OS:Windows 7,10
        Processor:i5-2500k, quad core at 3.6GHz
        Ram:4GB RAM
        AMD R9 390
    </p>
   </div>
  </div>

  <div class="card mb-4 box-shadow">
   <div class="card-header">
    <h4 class="my-0 font-weight-normal">Destiny 2</h4>
   </div>
   <div class="card-body">
    <img src="./assets/img/games/destiny2.jpg" width="100%">
    <p class="mt-3 mb-0">
        Destiny 2 is a free-to-play online-only multiplayer first-person shooter video game developed by Bungie. It was released for PlayStation 4 and Xbox One on September 6, 2017, followed by a Microsoft Windows version the following month.

        minimal spec:
        CPU: Intel i3-3250 3.5GHz, Intel Pentium G4560 3.5GHz, AMD FX-4350 4.2GHz, or equivalent
        GPU: GeForce GTX 660/GTX 1050 or Radeon HD 7850 with 2GB of VRAM
        RAM: 6GB
        OS: Windows 7, 8.1, or 10, 64-bit versions only
        HDD: 68GB available space required 
    </p>
   </div>
  </div>
</div>

  </div>
 </div>
</div>
</body>
</html>
  </div>
 </div>
</div>

<footer>
    <article class="bg-dark">
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="./index.php">Compumeum</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>
</body>
</html>