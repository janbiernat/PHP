<?php 
/*--== Sesja [PHP] ==-- 
  Prosta obsługa czasu trwania sesji. 
  Copyright (c)by Jan T. Biernat*/ 
function Sesja_CzasNowy() { 
  return date("H:i:s", strtotime('+2 minutes')); 
} 
function Sesja_CzasSpr($NazwaZmiennej = "") { 
  $NazwaZmiennej = trim($NazwaZmiennej); 
  if(($NazwaZmiennej != "") && (isset($_SESSION[$NazwaZmiennej]) == true)) { 
    if(date('H:i:s') > $_SESSION[$NazwaZmiennej]) { return 1; } else { return 0; } 
  } else { return -1; } 
} 
function Sesja_AutoWylog($NazwaZmiennej = "", $AdresURL = "") { 
  $NazwaZmiennej = trim($NazwaZmiennej); 
  $AdresURL = strtolower(trim($AdresURL)); 
  if(($NazwaZmiennej != "") && ($AdresURL != "") 
  && (isset($_SESSION[$NazwaZmiennej]) == true)) { 
    if(date("H:i:s") > $_SESSION[$NazwaZmiennej]) { 
      //Usuwanie sesji. 
        $_SESSION = array();            //1. 
        @session_destroy();             //2. 
        header("Location: ".$AdresURL); //3. 
      return 1; 
    } else { 
             $_SESSION[$NazwaZmiennej] = Sesja_CzasNowy(); 
             return 0; 
           } 
  } else { echo "<br />ERROR -?"; return -1; } 
} 
/* 
  Legenda: 
    Funkcja strtotime(P) zwraca znacznik czasu 
    na podstawie podanego ciągu znaków. 
    Tym ciągiem znaku może być: 
      1) +1 day = dodaje 1 dzień, 
      2) +1 hour = dodaje 1 godzinę, 
      3) +1 minutes = dodaje 1 minutę, 
      4) +1 seconds = dodaje 1 sekundę. 
    Taki ciąg znaków umieszczamy 
    w parametrze P pomiędzy cudzysłowami. 
    == 
    Funkcja Sesja_AutoWylog: 
     1) Usunięcie wszystkich zmiennych występujących w sesji. 
        Tymczasowe zmienne są przechowywane w globalnej tablicy $_SESSION. 
     2) Zniszcz sesję. 
     3) Przejście do strony logowania. Np. header("Location: index.php");. 
*/ 
?> 