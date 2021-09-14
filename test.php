<html lang="en" <?= isset($_GET['theme']) ? ' data-theme="' . $_GET['theme'] . '"' : '' ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phumrapee Soenvanichakul</title>
    <link rel="stylesheet" href="css/pico.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/pico.google-amp.min.css" />
    <script type='text/javascript'>
        document.ondragstart = function() {
            return false;
        };
    </script>
    <script src="js/dontclick.js"></script>
    <script src="js/index.js"></script>
</head>

<body>

    <nav>
        <?php include("nav.html") ?>
    </nav>

    <main class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-6">
                <div class="card" style="max-width: 100%;">
                    
                    <div class="card-header"><i class="fab fa-facebook-square"></i> Facebook</div>
                    <div class="card-body">
                        <h5 class="card-title">Phumrapee Soenvanichakul <i class="far fa-copy" onclick="facebook()"></i></h5>
                        <p class="card-text"><a target="_blank" href="https://github.com/Jannnn1235" style="text-decoration: none;">Click
                                Here</a></p>
                    </div>
                </div>
                <div class="card" style="max-width: 100%;">
                    
                    <div class="card-header"><i class="fab fa-discord"></i> Discord</div>
                    <div class="card-body">
                        <h5 class="card-title">H O M I E#4972 <i class="far fa-copy" onclick="discord()"></i></h5>
                        <p class="card-text"><a target="_blank" href="https://discord.gg/cF4W869vgJ" style="text-decoration: none;">Click
                                Here</a></p>
                    </div>
                </div>
                <div class="card" style="max-width: 100%;">
                    
                    <div class="card-header"><i class="fab fa-line"></i> Line</div>
                    <div class="card-body">
                        <h5 class="card-title">ไอดีไลน์ : phumhack <i class="far fa-copy" onclick="line()"></i></h5>
                        <p class="card-text"><a target="_blank" href="https://line.me/ti/p/OdCknBnUI9" style="text-decoration: none;">Click
                                Here</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="max-width: 100%;">
                    
                    <div class="card-header"><i class="fab fa-instagram"></i> Instagram</div>
                    <div class="card-body">
                        <h5 class="card-title">phumrapeephum <i class="far fa-copy" onclick="instagram()"></i></h5>
                        <p class="card-text"><a target="_blank" href="https://www.instagram.com/phumrapeephum/" style="text-decoration: none;">Click
                                Here</a></p>
                    </div>
                </div>
                <div class="card" style="max-width: 100%;">
                    
                    <div class="card-header"><i class="fas fa-envelope"></i> Gmail</div>
                    <div class="card-body">
                        <h5 class="card-title">phumrapeesoen1@gmail.com <i class="far fa-copy" onclick="gmail()"></i></h5>
                        <p class="card-text"><a target="_blank" href="mailto:phumrapeesoen1@gmail.com" style="text-decoration: none;">Click
                                Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<p align="center">
    <a href="https://discord.gg/MFCET94GZg" alt="Discord" title="My-server">
        <img src="https://img.shields.io/discord/864742131209076776?color=7289DA&logo=discord&logoColor=white&style=for-the-badge" />
    </a>
</p>

</html>


<input type="text" value="Phumrapee Soenvanichakul" id="facebook" hidden="true">
<input type="text" value="H O M I E#4972" id="discord" hidden="true">
<input type="text" value="phumhack" id="line" hidden="true">
<input type="text" value="phumrapeephum" id="instagram" hidden="true">
<input type="text" value="phumrapeesoen1@gmail.com" id="gmail" hidden="true">
