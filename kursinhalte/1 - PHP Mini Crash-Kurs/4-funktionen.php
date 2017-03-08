<?php
  
  /* 
   * -- FUNKTIONEN
   * Eine Funktion kann in PHP viele verschiedene Anweisungen umfassen. Man kann eine Funktion also auch als eine Aufgaben-Sammlung bezeichnen.
   * Funktionen können Parameter übergeben werden, die dann innerhalb der Funktionen verwertet werden. Zudem können Funktionen
   * Werte zurückgeben (die dann wiederum weiterverwertet werden können außerhalb der Funktion) oder Werte ausgeben. 
   */ 
  
  function sendAge($age) {
    $output = 'Ich bin '.$age.' Jahre alt';
    echo $output; // echo gibt direkt aus
  }
  
  function getAge($age) {
    $output = 'Ich bin '.$age.' Jahre alt';
    return $output; // return übergibt nur den Wert und gibt ihn nicht direkt aus
  }
  
  sendAge(13); // Gibt 'Ich bin 13 Jahre alt' aus
  
  getAge(13); // Gibt 'Ich bin 13 Jahre alt' zurück - nicht aus
  
  /*
   * ---- ÜBERGABE MEHRERER PARAMETER
   *  Gerade im WordPress-Kontext werden oftmals mehrere Parameter übergeben und verwertet. Hier können auch Standardwerte mitgegeben werden
   */
  
  function personalInfo($age = 18,$name = 'Mustermann') {
    $output = 'Ich bin '.$age.' Jahre alt und heisse '.$name.'!';
    echo $output;
  }
  personalInfo(2,'Janosch'); // Ich bin 2 Jahre alt und heisse Janosch!
  personalInfo(); // Ich bin 18 Jahre alt und heisse Mustermann!
  
?>
  