<?php
  
  /* 
   * -- SCHLEIFEN
   * Schleifen sind zentraler Bestandteil von Programmiersprachen. Sie führen Aufgaben mehrfach aus bis eine Bedingung erfüllt wurde.
   * Es gibt unterschiedliche Varianten von Schleifen. Die häufigste ist die While-Schleife
   */ 
 
  // Die While-Schleife
    while($number <= 10) { // Solange $number kleiner gleich 10
      echo $number.'<br>'; // gibt Zahl aus und einen HTML-Zeilenumbruch
      $number++; // Erhöht den Wert von $number um 1 um eine endlose Schleife zu umgehen.
    }; // Beende die Schleife wenn die Bedingung nicht mehr erfüllt ist.
    
  // Ebenfalls möglich als alternative Schreibweise:
    while($number <= 10):
      echo $number.'<br>';
    endwhile;
    
  // Eine For-Schleife kann Arrays durchlaufen bzw. iterieren. Ihr werden 3 Parameter übergeben.
    $weekdays = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
    
    for($i=0,$i <= count($weekdays), $i++) { // Lies: Starte $i mit 0, solange $i kleiner ist als Anzahl Wochentage, erhöhe um 1 pro 'Runde'
      echo $weekdays[$i].'<br>';
    }

  // Eine Foreach-Schleife kann ebenfalls genutzt werden
    foreach($weekdays as $weekday) {
      echo $weekday.'<br>'; 
    }


  // Eine Foreach-Schleife kann ebenfalls genutzt werden
    foreach($weekdays as $weekday->$name) {
      echo $weekday.'<br>'; 
    }


  
?>
