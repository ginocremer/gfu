 <?php
   
  /* 
   * -- BEDINGUNGEN
   * Bedingungen sind in allen Programmiersprachen allgegenwärtig. Sie prüfen ob etwas zutrifft um ggf. etwas anderes auszuführen.
   */ 
  
  // Simple If-Anweisung
  if($age == 3) {
    echo "Du bist erst 3 Jahre alt";
  }
  
  // Auch diese Schreibweise ist möglich
  if($age == 3):
    echo "Du bist erst 3 Jahre alt";
  endif;
  
  // Auf If kann mit else eine Ausgabe erfolgen, wenn if nicht zutrifft.
  if($age <= 18) {
    echo "Du bist leider noch nicht volljährig"; 
  }
  else {
    echo "Prima. Du bist 18 und darfst fortfahren!";
  }
  
  // Auch diese Schreibweise ist möglich
  if($age <= 18):
    echo "Du bist leider noch nicht volljährig"; 
  else:
    echo "Prima. Du bist 18 und darfst fortfahren!";
  endif;
  
  // Man kann mit elseif auch verschiedene Bedingungen prüfen
  if($age == 16) {
    echo "Du bist 16";
  }
  elseif($age == 17) {
    echo "Du bist 17";
  }
  else {
    echo "Du bist weder 16 noch 17";
  }

  // Bedingungen verknüpfen
  if($age >= 18 && $role == "Admin") { // Sowohl als auch
    echo "Dein Alter beträgt 18 und du bist gleichzeitig Admin. Prima!";
  }
  if($age >= 18 || $role == "Admin") { // Entweder oder
    echo "Dein Alter beträgt 18 oder du bist Admin. Das reicht. Prima!";
  }
  
  