<!-- Apertura php -->
<?php

  // Creazione variabile testo
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  // Lunghezza testo
  $text_length = strlen($text);
  echo 'Testo: <br />'. $text .'<br /><br />';
  echo 'La lunghezza del testo é '. $text_length . ' caratteri. <br /><br />';

  // Sostituzione parola presa con GET con ***
  $badword = $_GET['badword'];
  $text_modificated = str_replace($badword,'***',$text);
  echo 'Testo modificato: <br />'. $text_modificated;

?>
<!-- Chiusura php -->
