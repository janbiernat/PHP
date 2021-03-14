<HTML><HEAD><META CHARSET="utf-8" /> 
<TITLE>Select ala ComboBox (c)by Jan T. Biernat</TITLE> 
</HEAD> 
<?php 
  function ListaSelect($Tablica, $Sortuj = false, $Nazwa = "") { 
  //ListaSelect - Generowanie rozwijanej listy wyboru ala ComboBox. 
    if($Sortuj == true) { Sort($Tablica); } 
    if(trim($Nazwa) != "") { echo "<SELECT ".$Nazwa.">\n"; } 
    echo "<OPTION>&nbsp;</OPTION>"; 
    for($I = 0; $I < count($Tablica); $I++) { 
      echo "\n<OPTION>".$Tablica[$I]."</OPTION>"; 
    } 
    if(trim($Nazwa) != "") { echo "\n</SELECT>\n"; } 
  } 
?> 
<BODY> 
<!-- Wywołanie funkcji "ListaSelect". --> 
Komputery:&nbsp;<SELECT NAME="ComboBox"> 
<?php 
  //Wywołanie funkcji "ListaSelect" - metoda 1. 
    $Dane = array( 
                   "Atari", 
                   "Commodore", 
                   "ZX Spectrum", 
                   "Amstrad", 
                   "Cry", 
                   "IBM", 
                   "Amiga", 
                   "Atari ST", 
                   "Atari TT", 
                   "Atari Portfolio" 
                  ); 
    ListaSelect($Dane); 
?> 
</SELECT> 
<BR /><BR /> 
Komputery: 
<?php 
  //Wywołanie funkcji "ListaSelect" - metoda 2. 
    $Dane2[] = "Atari"; 
    $Dane2[] = "Commodore"; 
    $Dane2[] = "ZX Spectrum"; 
    $Dane2[] = "Amstrad"; 
    $Dane2[] = "Cry"; 
    $Dane2[] = "IBM"; 
    $Dane2[] = "Amiga"; 
    $Dane2[] = "Atari ST"; 
    $Dane2[] = "Atari TT"; 
    $Dane2[] = "Atari Portfolio"; 
    ListaSelect($Dane2, true, 'NAME="Lista" STYLE="width:150px;"'); 
?> 
</BODY> 
</HTML> 