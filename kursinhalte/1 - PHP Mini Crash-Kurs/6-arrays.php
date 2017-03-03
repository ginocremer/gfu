 <?php
   
  /* 
   * -- ARRAYS
   * Arrays sind praktische Datenspeicher. Im Gegensatz zu normalen Variablen kann man dort viele verschiedene Werte speichern.
   * Arrays sind am Anfang schwer zu verstehen, wenn man das Konzept einmal verinnerlicht hat, sind sie aber sehr nützlich.
   * Werte werden immer als Schlüssel-Wert-Paare gespeichert. 
   * Man unterschiedet zwischen assoziativen, eindimensionalen und mehrdimensionalen Arrays. Anders ausgedrückt:
   * Arrays können aus einfachen Schlüssel-Wert-Paaren bestehen (eindimensional) oder sogar weitere 
   * Arrays beinhalten (mehrdimensional). Normalerweise steuert man die Werte mit Zahlen an. 
   * Außer im Falle der assoziativen Arrays. Dort kann man klarere Bezeichnungen wählen.
   */ 
  
  
  
  /* 
   * ---- EINDIMENSIONALE ARRAYS
   * Ein eindimensionaler Array in seiner einfachsten Form. Die Ausgabe erfolgt über den Wert des Schlüssels beginnend bei 0.
   */
   
  $weekdays = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
  
  echo $weekdays[0]; // Gibt "Monday" aus
  echo $weekdays[1]; // Gibt "Tuesday" aus
  
  
  /* 
   * ---- MEHRDIMENSIONALE ARRAYS
   * Ein mehrdimensionaler Array
   */
  
  $coworker_names = array(
    array("Adrian", "Lambertz"),
    array("Marc", "Solheid"),
    array("Gino", "Cremer")
  );
  
  echo $coworker_names[0][0]; // Gibt "Adrian" aus
  echo $coworker_names[0][1]; // Gibt "Lambertz" aus
  
  echo $coworker_names[1][0]; // Gibt "Marc" aus
  echo $coworker_names[1][1]; // Gibt "Solheid" aus
  
  
  /*
   * ---- ASSOZIATIVE ARRAYS
   * Beispiel eines so genannten "Assoziativen Arrays" (Werte werden benannten Schlüsseln zugewiesen)
   */
   
  $coworker = array(
    "Adrian" => "Unser Mitarbeiter Adrian",
    "Marc" => "Unser Mitarbeiter Marc",
  );
  
  echo $coworker["Adrian"]; // Gibt "Unser Mitarbeiter Adrian" aus
  
  
  /*
   * ---- ARRAYS MIT WERTEN BEFÜLLEN
   */
  
  // Einem bestehenden Array weitere Werte hinzufügen
  $family = array("Naira","Gino");
  $family[] = "Janosch"; // Wird dem Array family hinzugefügt
  
  // Einem leeren Array Werte hinzufügen - Das gleiche Prinzip
  $family = array();
  $family[] = "Naira";
  $family[] = "Gino";
  $family[] = "Janosch";
  
  
  /*
   * ---- NÜTZLICHE ARRAY-FUNKTIONEN
   */
  
  array_key_exists($key, $array)  // Überprüft, ob der Schlüssel $key im $array existiert.
  count($array)  // Gibt die Anzahl der Elemente im $array zurück.
  in_array($suche, $array)  // Überprüft, ob der Wert $suche im $array existiert.
  sort($array)  // Sortiert ein Array aufsteigend, vom kleinsten zum größten Wert (A -> Z).
  rsort($array) // Sortiert ein Array absteigend, vom größten zum kleinsten Wert (Z -> A).
  shuffle($array) // Mischt nach dem Zufallsprinzip die Elemente des Arrays.
  
  