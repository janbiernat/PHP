<?php 
  function ZeroPrzed($Str = "") { 
    //ZeroPrzed - Funkcja dodaje zero przed cyfrą (np.: 1 -> 01). 
    $Str = trim(substr($Str, 0, 2)); 
    if(strlen($Str) == 1) { return "0".$Str; } 
    else { return $Str; } 
  } 
  function CzasSpr($Czas = "") { 
    //CzasSpr - Funkcja sprawdza, czy wprowadzony czas jest prawidłowy. 
    $G = ""; $M = ""; $S = ""; 
    $Czas = trim(substr($Czas, 0, 8)); 
    if($Czas != "") { 
      $G = substr($Czas, 0, 2); 
      $M = substr($Czas, 3, 2); 
      $S = substr($Czas, 6, 2); 
      if(((int)$G > -1) && ((int)$G < 24) 
      && ((int)$M > -1) && ((int)$M < 60) 
      && ((int)$S > -1) && ((int)$S < 60)) { 
        return ZeroPrzed(((int)$G)).":".ZeroPrzed(((int)$M)).":".ZeroPrzed(((int)$S)); 
      } else { return ""; } 
    } else { return ""; } 
  } 
  //Wywołanie funkcji "ZeroPrzed" i "CzasSpr". 
    echo "<BR /> Nic: ".ZeroPrzed(); 
    echo "<BR /> Nic: ".ZeroPrzed(""); 
    echo "<BR /> Liczba 1: ".ZeroPrzed("1"); 
    echo "<BR /> Liczba 01: ".ZeroPrzed("01"); 
    echo "<BR /> Liczba 12: ".ZeroPrzed("12"); 
    echo "<BR /> Liczba 123: ".ZeroPrzed("123"); 
    echo "<BR /><BR />"; 
    echo "<BR />Czas - nic: ".CzasSpr(); 
    echo "<BR />Czas - nic: ".CzasSpr(""); 
    echo "<BR />Czas [00:00:00]tak: ".CzasSpr("00:00:00"); 
    echo "<BR />Czas [00:00:00ab]tak: ".CzasSpr("00:00:00ab"); 
    echo "<BR />Czas [00:00.00ab]tak: ".CzasSpr("00:00.00ab"); 
    echo "<BR />Czas [12:13:14ab]tak: ".CzasSpr("12:13:14ab"); 
    echo "<BR />Czas [00:00:00]tak: ".CzasSpr("00:00:00"); 
    echo "<BR />Czas [23:59:59]tak: ".CzasSpr("23:59:59"); 
    echo "<BR />Czas [23:59:59ab]tak: ".CzasSpr("23:59:59ab"); 
    echo "<BR />Czas [G0:M0:01ab]: ".CzasSpr("G0:M0:01ab"); 
    echo "<BR />Czas [00:M0:01ab]: ".CzasSpr("0:M0:01ab"); 
    echo "<BR />Czas [G0:00:01ab]: ".CzasSpr("G0:00:01ab"); 
    echo "<BR />Czas [23:59:60ab]?: ".CzasSpr("23:59:60ab"); 
    echo "<BR />Czas [23:60:59ab]?: ".CzasSpr("23:60:59ab"); 
    echo "<BR />Czas [24:59:59ab]?: ".CzasSpr("24:59:59ab"); 
    echo "<BR />Czas [24:60:60ab]?: ".CzasSpr("24:60:60ab"); 
    if(CzasSpr("24:60:60ab") == "") { echo "BŁĄD -?Wprowadzony czas jest nieprawidłowy!"; } 
?> 