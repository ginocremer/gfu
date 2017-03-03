<?php 
  
  /* 
    CONDITIONAL TAGS
    Diese Funktionen erlauben die Überprüfen zahlreicher Bedingungen und werden rege genutzt in allen Themes.
    Dank dieser Conditional Tags können Anweisungen ausgeführt werden je nachdem ob eine Bedingung XY zutrifft.
  */
  
  if( is_front_page() ):
    echo 'Dieser Text wird nur auf der Startseite ausgegeben';
  endif;
  
  if( is_page() ):
    echo 'Dieser Text wird nur ausgegeben wenn der Beitrags-Typ eine Seite ist und kein Beitrag';
  endif;
  
  if( is_page(3) ):
    echo 'Dieser Text wird nur auf der Seite mit der ID 3 ausgebenen';
  endif;
  
  if( is_page('kontakt') ):
    echo 'Dieser Text wird nur auf der Seite mit dem Namen Kontakt ausgegeben';
  endif;
  
  if( is_single() ):
    echo 'Dieser Text wird nur in der Detailansicht eines Beitrages ausgegeben';
  endif;
  
  if( is_single(17) ):
    echo 'Dieser Text wird nur auf der Detailseite des Beitrages mit der ID 17 ausgegeben';
  endif;
  
  if( is_admin() ):
    echo 'Diesen Text kriegen nur Benutzer zu Gesicht, die als Administratoren eingeloggt sind';
  endif;
  
  if( is_logged_in() ):
    echo 'Dieser Text wird nur für eingeloggte Nutzer angezeigt';
  endif;
  
  if( has_post_thumbnail() ):
    echo 'Dieser Text wird nur ausgegeben wenn der Beitrag ein Beitragsbild hat';
  endif;
  
  if( is_category() ):
    echo 'Dieser Text wird nur in der Archiv-Ansicht einer Kategorie angezeigt';
  endif;
  
  if( is_category(2) ):
    echo 'Dieser Text wird nur in der Archiv-Ansicht der Kategorie mit ID 2 angezeigt';
  endif;
  
  if( is_category('allgemein') ):
    echo 'Dieser Text wird nur in der Archiv-Ansicht der Kategorie Allgemein angezeigt';
  endif;
  
  if( is_tag() ):
    echo 'Dieser Text wird nur in der Archiv-Ansicht eines Tags angezeigt';
  endif;
  
  if( comments_open() ):
    echo 'Dieser Text wird nur angezeigt wenn für diesen Beitrag die Kommentarfunktion aktiviert ist';
  endif;
  
  