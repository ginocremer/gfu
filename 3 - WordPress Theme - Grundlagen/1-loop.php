<?php
// Gibt den Inhalt der Datei header.php aus
get_header(); 

  if( have_posts() ): // Prüft nach ob überhaupt Beiträge dargestellt werden sollen
  
    /* 
      DER WORDPRESS-LOOP
      Im Grunde eine normale Schleife, allerdings etwas "wordpress-typisch" aufgebaut
    */
    
    while( have_posts() ) : the_post(); // Solange es Beiträge gibt, sammelt the_post() für jeden Beitrag alle Daten zusammen
    
        /*
          BEITRAGS-AUSGABE
        */
        
    
    endwhile; // Beende Loop
    
  endif;
  
  
// Gibt den Inhalt der Datei footer.php aus  
get_footer(); 
?>