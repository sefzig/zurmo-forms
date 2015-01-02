<?php require_once 'php/index.php'; ?><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$config["text"]["titel"]?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="apple-touch-icon" href="<?=$config["programm"]["root"]?>img/favicon.png"/>
    <link rel="apple-touch-startup-image" href="<?=$config["programm"]["root"]?>img/startup.png">
    <link rel="stylesheet" type="text/css" href="<?=$config["programm"]["root"]?>css/index.css">
    <style> .modul { max-width: <?=$config["formular"][$form]["breite"]?>px !important; } </style>
    <script type="text/javascript"> var debuggen = <?=$config["programm"]["debuggen"]?>; </script>
    <script type="text/javascript" src="<?=$config["programm"]["root"]?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=$config["programm"]["root"]?>js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?=$config["programm"]["root"]?>js/index.js"></script>
  </head>
  <body data-debug="<?=$config["programm"]["debuggen"]?>" data-form="<?=$form?>" data-stand="<?=$config["programm"]["stand"]?>" data-einleitungen="<?=$einleitungen?>" data-labels="<?=$labels?>">
    <div id="wrapper">
      <div id="header">
        <div id="logo">
          <h1>
            <img src="<?=$config["programm"]["url"]?>/img/sefzig-net-crm.png" alt="<?=$config["text"]["beschreibung"]?>">
          </h1>
        </div>
      </div>
      <div id="content">
        <center>
          <div class="modul" style="max-width: 500px;">
            <?php if ($stand == "neu") { ?>
            <div id="formular">
              <h2><?=$config["formular"][$form]["titel"]?></h2>
              <?=$config["formular"][$form]["text"]?>
              <div id="zurmoExternalWebForm">
                <script type="text/javascript" src="<?=$config["formular"][$form]["jsurl"]?>"></script>
                <div class="laden">
                  <br>
                  <?=$config["text"]["laden"]?>
                  <br><br>
                  <img src="<?=$config["programm"]["root"]?>img/laden.gif" width="32" height="32" border="0" />
                  <br><br><br>
                </div>
              </div>
            </div>
            <?php } else if ($stand == "danke") { ?>
            <div id="danke">
              <h2><?=$config["formular"][$form]["titel"]?></h2>
              <div class="laden">
                <br>
                <?=$config["text"]["danke"]?>
                <br><br>
                <a href="<?=$config["programm"]["url"]?>/<?=$form?>/"><u><?=$config["text"]["weitere"]?></u></a>
                <br><br>
              </div>
            </div>
            <?php } ?>
            <div id="ubersicht" style="display: <?php if (isset($form)) { echo "none"; } else { echo "block"; } ?>">
              <h2><?=$config["text"]["ubersicht"]?></h2>
              <br><br>
              <div style="text-align: left; font-size: 13px; padding-left: 20px;">
                <ul>
                  <li><a href="<?=$config["programm"]["url"]?>/kontakt/"><?=$config["formular"]["kontakt"]["titel"]?></a><br><br></li>
                  <li><a href="<?=$config["programm"]["url"]?>/agentur/"><?=$config["formular"]["agentur"]["titel"]?></a><br><br></li>
                </ul>
              </div>
            </div>
          </div>
          <p id="footer">
            <?=$config["text"]["fusszeile"]["jahr"]?> <a href="<?=$config["text"]["fusszeile"]["url"]?>" style="color:white"><?=$config["text"]["fusszeile"]["text"]?></a>
          </p>
        </center>
      </div>
    </div>
  </body>
</html>