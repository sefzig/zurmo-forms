
 /* Wenn Jquery geladen ist */
    $(document).ready(function() 
    {
    /* Bei Misserfolg */
       var ende = setTimeout(function() { clearInterval(zeit); $("div.laden, #formular").remove(); $("#ubersicht").css("display","block"); }, 5000);

    /* Interval zum Prüfen des Standes */
       var zeit = setInterval(function prufen()
       {
       /* Zu prüfende Elemente */
          var container = "#zurmoExternalWebForm";
          var inhalt = "div.GridView";
          debug(0, "Interval: "+container);
          
       /* Prüfen, ob Inhalt in Container */
          if ($(container).find(inhalt).length)
          {
          // Sobald das Formular geladen ist
             console.log("Formular geladen (Zurmo-Formulare erzwingen diese Vorgehensweise...)");
             
             var form = getParameters("form");
             debug(0, "Form? "+form);
             
             if (form) { 
                formReady(container);
                debug(0, "Form nicht laden");
             }
             else { 
                debug(0, "Form geladen");
                
                $("div.laden").remove();
                debug(0, "Ladeanimation entfernt");
                
                formReady(container);
                debug(0, "Form geladen");
             }
             
             clearTimeout(ende);
             clearInterval(zeit);
             debug(0, "Timeout und Interval beendet");
          }
          else if ($("body").attr("data-stand") == "danke")
          {
          // Sobald das Formular geladen ist
             debug(0, "Dankeseite geladen");
             clearInterval(zeit);
             debug(0, "Interval beendet");
          }
          else
          {
          // Während das Formular noch nicht geladen ist
             console.log("Formular noch nicht geladen");
          }
       }, 50);
       
    // Nicescroll einsetzen
       $("body").niceScroll({ cursorwidth:6 });
    });
    
 /* Wenn Formular geladen ist */
    function formReady(container)
    {
    /* UI anpassen */
       debug(0, "Formular geladen in: "+container);
       $(container).find("div.laden").remove();
       
    /* Zeilen durchnummerieren */
       $("#zurmoExternalWebForm tr > th > label").each(function(index) { $(this).attr("rel",index+1); });
       
    /* Daten aus Body-Attributen lesen */
       var body_form =         $("body").attr("data-form");         debug(0, "Form: "+container);
       var body_einleitungen = $("body").attr("data-einleitungen"); debug(0, "Einleitungen: "+container);
       var body_labels =       $("body").attr("data-labels");       debug(0, "Labels: "+container);
       debug(0, "Einleitungen gelesen: "+body_einleitungen);
       
    /* Einleitungen einfügen */
       debug(0, "Einleitungen: "+body_einleitungen);
       var einleitungenArray = body_einleitungen.split(";");
       for (i = 1; i < einleitungenArray.length; i++) { 
       // Werte verstehen
          var werte = einleitungenArray[i];
          var werteArray = werte.split(",");
          var zeile = werteArray[0]; var zeilepluseins = zeile - (-1);
          var text = werteArray[1];
          var selektor = "#zurmoExternalWebForm tr > th > label[rel="+zeilepluseins+"]";
          var zeileNeuHtml = '<tr><th></th><td></td></tr><tr><th colspan=2>'+text+'</th></tr>';
          
          $(selektor).parent().parent().before(zeileNeuHtml);
          
          debug(0, "- Einleitung eingefügt: "+text);
       }
       
    /* Labels anpassen */
       debug(0, "Labels: "+body_labels);
       var labelsArray = body_labels.split(";");
       for (j = 1; j < labelsArray.length; j++) {
          var werte = labelsArray[j];
          var werteArray = werte.split(",");
          var alt = werteArray[0];
          var neu = werteArray[1];
          var hinweis = werteArray[2];
          var selektor = "#zurmoExternalWebForm tr > th label:contains('"+alt+"')";
          var hinweisHtml = '<a href="javascript:void(0);" class="tip" rel=" '+neu+': '+hinweis+' " style="font-weight: 500;"></a>';
          
          if (hinweis) { $(selektor).wrap(hinweisHtml); }
          $(selektor).css("fontWeight","500");
          $(selektor).text(neu);
          
          debug(0, "- Label angepasst: "+neu);
       }
       
    // Nicescroll aktualisieren
       $("body").getNiceScroll().remove();
       $("body").niceScroll({ cursorwidth:6 });
    }

 /* Debug-Funktion */
    function debug(schalter, text)
    {
       if (debuggen == 1) 
       {
          if (schalter == 1) 
          {
             console.log(text);
          }
       }
    }

 /* URL-Parameter lesen
  * 
  * Beschreibung
  */
    function getParameters(name)
    {
    /* Titel
     * 
     * Beschreibung
     */
       if (name == "hash")
       {
       /* Titel
        * 
        * Beschreibung
        */
          var hashUrl = window.location.hash;
          
       /* Titel
        * 
        * Beschreibung
        */
          var hashUrl = hashUrl.replace("#","");
          return hashUrl;
       }
       else
       {
       /* Titel
        * 
        * Beschreibung
        */
          name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
          
       /* Titel
        * 
        * Beschreibung
        */
          var regexS = "[\\?&]"+name+"=([^&#]*)";
          
       /* Titel
        * 
        * Beschreibung
        */
          var regex = new RegExp( regexS );
          
       /* Titel
        * 
        * Beschreibung
        */
          var results = regex.exec( window.location.href );
          
       /* Titel
        * 
        * Beschreibung
        */
          if (results == null)
          {
            return "";
          }
          else
          {
            return results[1];
          }
       }
    }
    