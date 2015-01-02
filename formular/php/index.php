<?php 

 /* Parameter */
    $rootminus = $_GET["rootminus"]; debug(1, "Rootminus: ".$rootminus);
    $stand =     $_GET["stand"];     debug(1, "Stand: ".$stand);
    $form =      $_GET["form"];      debug(1, "Form aus URL: ".$form); if (!isset($form)) { $form = $config["programm"]["defaultform"]; } debug(0, "Form nach Default/Wahl: ".$form);
    
 /* Root ermitteln */
    $root = "";
    if      ($rootminus == 4) { $root .= "../../../../"; }
    else if ($rootminus == 3) { $root .= "../../../"; }
    else if ($rootminus == 2) { $root .= "../../"; }
    else if ($rootminus == 1) { $root .= "../"; }
    debug(1, "Root (relative Url): ".$root);
    
 /* Konfiguration laden */
    require_once 'config.php';

 /* Formulardaten */
    $formular = $config["formular"][$form];
 // debug(0, "Array: Formulardaten > Formular > Breite: ".$formular["breite"]." (px)");
    
 /* Einleitungen */
    $einleitungen = "";
    $einleitungenArray = $formular["einleitungen"];
    
    if (is_array($einleitungenArray)) {
       for($i = 1; $i < count($einleitungenArray)+1; ++$i) {
          $zeile = $einleitungenArray[$i]['zeile'];
          $text =  $einleitungenArray[$i]['text'];
          $einleitungen .= ";".$zeile.",".$text."";
       }
    }
    else {
       $einleitungen = "Keine Einleitungen";
    }
    debug(1, "Einleitungen: ".$einleitungen);
    
 /* Labels */
    $labels = "";
    $labelsArray = $formular["labels"];
    
    if (is_array($labelsArray)) {
       while (list($alt, $neu) = each($labelsArray)){
          $labels .= ";$alt,$neu";
       }
    }
    else {
       $labels = "Keine Labels";
    }
    debug(1, "Labels: ".$labels);
    
 /* Debuggen */
    function debug($schalter, $text) {
       $debuggen = $config["programm"]["debuggen"];
       if ($debuggen == 1) {
       // echo "<!-- debuggen: ".$debuggen." -->".PHP_EOL;
       // echo "<!-- debug('".$schalter."','".$text."') -->".PHP_EOL;
          if ($schalter == "1") {
             echo "<!-- Debug: ".$text." -->".PHP_EOL;
          }
       }
    }
    
?>