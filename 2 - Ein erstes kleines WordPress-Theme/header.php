<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); // Wichtig damit Plugins sich in <head> einhaken können ?>
</head>

<body <?php body_class(); // Wichtig damit spezifische Klassen von WordPress gesetzt werden können ?>>
  <p>Dieser Text steht in der Datei header.php</p>  