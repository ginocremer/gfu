<?php
  
  /* 
   * -- FUNKTIONEN
   * WordPress bietet jede Menge interessante Funktionen, die man in seinem Theme nutzen kann.
   * Die Auswahl ist extrem groß, daher hier nur eine Auswahl der prominentesten Funktionen.
  */
  

  // Wichtige Funktionen, die in jedes Theme integriert werden sollten
  
    wp_head();    // Gehört in den Kopfbereich der Website und erlaubt anderen Plugins sich in den Head "einzuhaken"
    wp_footer();  // Gehört in den Fussbereich der Website und erlaubt anderen Plugins sich in den Footer "einzuhaken"
    body_class(); // Gehört in den Body-Tag, damit WordPress dem Body-Tag je nach Seite unterschiedliche Klassen zuweisen kann
  
  
  // Loop-Funktionen - Ohne Parameter als Standard-Beispiel - Werden in der Regel innerhalb des Loops genutzt
        
    // the_ Funktionen geben immer via echo aus
    
    the_permalink();      // Gibt den Link zum Beitrags-Detail aus
    the_title();          // Gibt den Titel des Beitrages aus
    the_content();        // Gibt den Inhalt des Beitrages aus
    the_excerpt();        // Gibt einen Anreisser des Beitrages aus
    the_time();           // Gibt Uhrzeit und Datum des Beitrages aus
    the_post_thumbnail(); // Gibt das Beitragsbild aus
    the_category();       // Gibt die zugewiesenen Kategorien aus
    the_tags();           // Gibt die zugewiesenen Tags aus
    the_author();         // Gibt den Namen des Autoren aus 
    the_ID();             // Gibt die ID des aktuellen Beitrages aus
    
    // Ebenfalls möglich get_ Varianten um nur den Wert zu erhalten ohne direkte Ausgabe (zur Weiterverarbeitung)
    
    get_the_permalink();
    get_the_title(); 
    get_the_content();     // usw.

  
  // Die Funktion bloginfo()
  
    bloginfo('name');           // Gibt den unter Einstellungen > Allgemein > Seitentitel notierten Text aus
    bloginfo('description');    // Gibt den unter Einstellungen > Allgemein > Untertitel notierten Text aus
    bloginfo('url');            // Gibt den unter Einstellungen > Allgemein > Seiten-Adresse notierte URL aus
    bloginfo('admin_email');    // Gibt die unter Einstellungen > Allgemein notierte E-Mail des Administrators aus
    bloginfo('language');       // Gibt die unter Einstellungen > Allgemein gewählte Sprache von WordPress aus
  
  
  // Auslesen von Pfaden
  
    get_stylesheet_directory_uri();   // Gibt den Pfad zum aktuell genutzten Theme zurück - Ausgabe muss per echo erfolgen
    get_template_directory();         // Gibt den Pfad zum Parent-Theme aus.
    
  
  // Template-Teile zusammentragen
  
    get_header();                         // Lädt den Inhalt der Datei header.php 
    get_footer();                         // Lädt den Inhalt der Datei footer.php
    get_sidebar();                        // Lädt den Inhalt der Datei sidebar.php
    get_template_part('content','main');  // Erlaubt das Auslagern von Template-Teilen in kleinere Dateien. Hier wird content-main.php aufgerufen
  
  
  // Diverse Ausgaben
  
    wp_tag_cloud();         // Gibt eine Tag-Cloud mit den eingesetzten Tags aus
    get_calendar();         // Gibt einen Kalender aus 
    wp_get_archives();      // Gibt eine chronologische Archiv-Liste aus
    posts_nav_link();       // Gibt in einem Beitrag "Vor und Zurück" Links aus
    next_post_link();       // Gibt den Link zum chronologisch nächstälteren Beitrag aus
    previous_post_link();   // Gibt den Link zum chronologisch nächstjüngeren Beitrag aus
    wp_register();          // Gibt den Link zur Seiten-Registrierung aus 
    wp_loginout();          // Gibt die Login-Logout-Links aus
    language_attributes();  // Gibt sprachspezifische Angaben z.B. lang="de" aus - wird in <html> eingesetzt
    get_comments_number();  // Gibt die Anzahl Kommentare zurück (innerhalb des Loops)
  
  
  // Bereinigung und Absicherung
  
    antispambot();  // Verschlüsselt E-Mail-Adressen als "HTML-Entities" vor der Ausgabe um diese simpel vor Spambots zu schützen
    esc_url();      // Bereinigt ("Sanitized") URLs. Auch Anführungszeichen werden sauber umgewandelt
    esc_html();     // Bereinigt HTML-Ausgaben. Auch Anführungszeichen werden sauber umgewandelt. 
    
  
  // Spezielle Theme-Optionen aktivieren (gehört in die Datei functions.php!)
    
    add_theme_support( 'post-thumbnails' );                           // Aktiviert Beitragsbilder im Theme für alle Posts
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Aktiviert diese nur für Beiträge und Custom Post Type "movie"
    add_theme_support( 'custom-background' );                         // Individuelles Hintergrund-Bild (anpassbar via Theme-Customizer)
    add_theme_support( 'custom-header' );                             // Individuelles Kopfbild (anpassbar via Theme-Customizer)
    add_theme_support( 'custom-logo' );                               // Individuelles Logo (anpassbar via Theme-Customizer)
    add_theme_support( 'title-tag' );                                 // Erlaubt Plugins den <title>-Tag zu beeeinflussen (z.B. Yoast)
  
  
  // Registrierung (gehört in die Datei functions.php)
  
    register_sidebar();     // Erlaubt die Registrierung einer neuen Sidebars im Theme
    register_nav_menu();    // Erlaubt die Registrierung eines neuen Menüs im Theme
    register_post_type();   // Erlaubt die Registrierung eines neuen Custom Post Types
    
  
  // Filter-Hooks & Action-Hooks (Beispiele der Vollständigkeit halber)
  
    add_action('init','myThemefunc');             // Führt die Funktion myThemeFunc() aus wenn das WordPress-Event "init" ausgeführt wird.
    add_filter('the_content', 'filterMyContent'); // Filtert die Ausgabe von the_content anhand der Funktion filterMyContent()
    
    
  
    
  