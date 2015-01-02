<?php 

    $config = array(
       'text'                                => array(
          'titel'                            => "Sefzig.net CRM: Formulare",
          'beschreibung'                     => "Anmeldung für CRM von Andreas Sefzig (Sefzig.net)",
          'ubersicht'                        => "Übersicht",
          'weitere'                          => "Weitere Anmeldung",
          'danke'                            => "Vielen Dank für die Anmeldung!",
          'laden'                            => "Lade Formular",
          'fusszeile'                        => array(
             'text'                          => "Sefzig.net",
             'url'                           => "http://sefzig.net/crm/formular/",
             'jahr'                          => "@2014"
          )
       ),
       'programm'                            => array(
          'url'                              => "http://sefzig.net/crm/formular",
          'root'                             => $root,
          'debuggen'                         => 0,
          'stand'                            => $stand,
          'form'                             => $form,
          'defaultform'                      => "default"
       ),
       'formular'                            => array(
          'kontakt'                          => array(
             'titel'                         => "Persönlicher Kontakt",
             'text'                          => '',
             'jsurl'                         => "http://sefzig.net/crm/zurmo/app/index.php/contacts/external/sourceFiles?id=1",
             'breite'                        => "400",
             'aufforderung'                  => "Für Andreas Sefzigs CRM anmelden",
             'einleitungen'                  => array(
                '1'                          => array(
                   'zeile'                   => "0",
                   'text'                    => "Person"
                ),
                '2'                          => array(
                   'zeile'                   => "4",
                   'text'                    => "Kontaktdaten"
                ),
                '3'                          => array(
                   'zeile'                   => "7",
                   'text'                    => "Themen"
                ),
                '4'                          => array(
                   'zeile'                   => "11",
                   'text'                    => "Organisation"
                ),
                '5'                          => array(
                   'zeile'                   => "14",
                   'text'                    => "Einverständnis"
                )
             ),
             'labels'                        => array(
                'Anrede *'                   => "Anrede *,Meine Kommunikation nimmt Rücksicht auf das Geschlecht",
                'Vorname *'                  => "Vorname *,Ohne Vorname gelingt keine Kommunikation",
                'Nachname *'                 => "Nachname *,Ohne Nachname wird die Kommunikation schwierig",
                'Duzen? *'                   => "Duzen? *,Meine Kommunikation wird Sie fortan siezen bzw. Dich fortan duzen",
                'Email *'                    => "Email-Adresse *,An diese Adresse werde ich Nachrichten senden",
                'Mobil'                      => "Handynummer",
                'Festnetz'                   => "Festnetz-Telefon",
                'Thema: Innovation'          => "Innovation",
                'Thema: Solomo'              => "Solomo",
                'Thema: Dialog'              => "Dialog",
                'Thema: Marketing Automatisierung' => "Automatisierung",
                'Titel'                      => "Titel",
                'Firma'                      => "Firma",
                'Webseite'                   => "Webseite",
                'Einverstanden *'            => "Einverstanden *,Ich bin damit einverstanden Kommunikation von Andreas Sefzig zu erhalten"
             )
          ),
          'agentur'                          => array(
             'titel'                         => "Agentur-Kontakt",
             'text'                          => '',
             'jsurl'                         => "http://sefzig.net/crm/zurmo/app/index.php/contacts/external/sourceFiles?id=2",
             'breite'                        => "500",
             'aufforderung'                  => "Für Andreas' CRM anmelden",
             'einleitungen'                  => array(
                '1'                          => array(
                   'zeile'                   => "0",
                   'text'                    => "Persönliche Angaben"
                ),
                '2'                          => array(
                   'zeile'                   => "2",
                   'text'                    => "Kontaktdaten"
                ),
                '3'                          => array(
                   'zeile'                   => "6",
                   'text'                    => "Interessen"
                ),
                '4'                          => array(
                   'zeile'                   => "9",
                   'text'                    => "Themen"
                ),
                '5'                          => array(
                   'zeile'                   => "13",
                   'text'                    => "Optin"
                )
             ),
             'labels'                        => array(
                'Vorname *'                  => "Vorname *,Ohne Vorname gelingt keine Kommunikation",
                'Nachname *'                 => "Nachname *,Ohne Nachname wird die Kommunikation schwierig",
                'E-Mail *'                   => "Email geschäftlich,Deine geschäftliche Adresse für Emails von mir",
                'E-Mail privat'              => "Email privat,Deine Adresse für private Kommunikation",
                'Mobil'                      => "Mobil",
                'Festnetz'                   => "Festnetz",
                'Interesse: Arbeit'          => "Arbeit",
                'Interesse: Person'          => "Person",
                'Interesse: Privat'          => "Privat",
                'Thema: Innovation'          => "Innovation",
                'Thema: Solomo'              => "Solomo",
                'Thema: Dialog'              => "Dialog",
                'Thema: Marketing Automatisierung' => "Adobe",
                'Einverstanden *'            => "Einverstanden *,Ich bin damit einverstanden Kommunikation von Andreas zu erhalten"
             )
          ),
          'default'                          => array(
             'titel'                         => "Anmelden",
             'text'                          => '<p>Kein Formular ausgewählt.</p>',
             'jsurl'                         => "",
             'breite'                        => "500"
          )
       )
    );
    
?>
