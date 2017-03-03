<?php
  
  /* 
   * -- FUNKTIONEN
   * Eine Funktion kann in PHP viele verschiedene Anweisungen umfassen. Man kann eine Funktion also auch als eine Aufgaben-Sammlung bezeichnen.
   * Funktionen können Parameter übergeben werden, die dann innerhalb der Funktionen verwertet werden. Zudem können Funktionen
   * Werte zurückgeben (die dann wiederum weiterverwertet werden können außerhalb der Funktion) oder Werte ausgeben. 
   */ 
  
  function giveAge($age) {
    $output = 'Ich bin '.$age.' Jahre alt';
    echo $output; // echo gibt direkt aus
  }
  
  function returnAge($age) {
    $output = 'Ich bin '.$age.' Jahre alt';
    return $output; // return übergibt nur den Wert und gibt ihn nicht direkt aus
  }
  
  giveAge(13); // Gibt 'Ich bin 13 Jahre alt' aus
  
  returnAge(13); // Gibt 'Ich bin 13 Jahre alt' zurück - nicht aus
  
  /*
   * ---- ÜBERGABE MEHRERER PARAMETER
   *  Gerade im WordPress-Kontext werden oftmals mehrere Parameter übergeben und verwertet
   */
  
  function personalInfo($age,$name) {
    $output = 'Ich bin '.$age.' Jahre alt und heisse '.$name.'!';
    echo $output;
  }
  personalInfo(2,'Janosch');
?>
  