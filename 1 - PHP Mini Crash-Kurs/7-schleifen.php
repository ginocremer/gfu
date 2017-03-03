<?php
  
  /* 
   * -- SCHLEIFEN
   * Schleifen sind zentraler Bestandteil von Programmiersprachen. Sie führen Aufgaben mehrfach aus bis eine Bedingung erfüllt wurde.
   * Es gibt unterschiedliche Varianten von Schleifen. Die häufigste ist die While-Schleife
   */ 
 
  // Die While-Schleife
    while($number <= 10) { // Solange $number kleiner gleich 10
      echo $number.'<br>'; // gibt Zahl aus und einen HTML-Zeilenumbruch
    }; // Beende die Schleife wenn die Bedingung nicht mehr erfüllt ist.
    
  // Ebenfalls möglich
    while($number <= 10):
      echo $number.'<br>';
    endwhile;

  
  // Eine Do-While-Schleife - Prüft erst nach dem ersten Durchlauf - Nur in dieser Schreibweise möglich
    do {
      echo $number.'<br>'; // gibt Zahl aus und einen HTML-Zeilenumbruch
    } while ($number <= 10);
    
    
  // Eine For-Schleife kann Arrays durchlaufen bzw. iterieren. Ihr werden 3 Parameter übergeben.
    $weekdays = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
    
    for($i=0,$i <= count($weekdays), $i++) { // Lies: Starte $i mit 0, solange $i kleiner ist als Anzahl Wochentage, erhöhe um 1 pro 'Runde'
      echo $weekdays[$i].'<br>';
    }

  // Eine Foreach-Schleife kann ebenfalls genutzt werden
    foreach($weekdays as $weekday) {
      echo $weekday.'<br>'; 
    }
  
?>