<HTML><HEAD><META CHARSET="utf-8" /> 
<TITLE>Select ala ComboBox 2 (c)by Jan T. Biernat</TITLE> 
</HEAD> 
<?php 
  function ListaSelect($Tablica, $Znajdz = "", $Sortuj = false, $Nazwa_i_Parametry = "") { 
  //ListaSelect - Generowanie rozwijanej listy wyboru ala ComboBox. 
    if($Sortuj == true) { Sort($Tablica); } 
    if($Nazwa_i_Parametry != "") { echo "<SELECT ".$Nazwa_i_Parametry.">\n"; } 
    echo "<OPTION>&nbsp;</OPTION>"; 
    for($I = 0; $I < count($Tablica); $I++) { 
      echo "\n<OPTION VALUE=\"".$Tablica[$I]."\""; 
           if(mb_strtolower(trim($Znajdz)) == mb_strtolower(trim($Tablica[$I]))) { echo " SELECTED"; } 
      echo ">".$Tablica[$I]."</OPTION>"; 
    } 
    if($Nazwa_i_Parametry != "") { echo "\n</SELECT>\n"; } 
    return count($Tablica); 
  } 
?> 
<BODY> 
<!-- Wywołanie funkcji "ListaSelect". --> 
Komputery - metoda 1:&nbsp;<SELECT NAME="ComboBox1"> 
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
    echo "<BR />Ilość elementów: ".ListaSelect($Dane); 
?> 
</SELECT> 
<BR /><BR /> 
Komputery - metoda 2:&nbsp;<SELECT NAME="ComboBox2"> 
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
    echo "<BR />Ilość elementów: ".ListaSelect($Dane2, "Atari ST"); 
?> 
</SELECT> 
<BR /><BR /> 
Komputery - metoda 3: 
<?php 
  //Wywołanie funkcji "ListaSelect" - metoda 3. 
    $Dane3[] = "Atari"; 
    $Dane3[] = "Commodore"; 
    $Dane3[] = "ZX Spectrum"; 
    $Dane3[] = "Amstrad"; 
    $Dane3[] = "Cry"; 
    $Dane3[] = "IBM"; 
    $Dane3[] = "Amiga"; 
    $Dane3[] = "Atari ST"; 
    $Dane3[] = "Atari TT"; 
    $Dane3[] = "Atari Portfolio"; 
    echo "<BR />Ilość elementów: ".ListaSelect($Dane3, "Atari portFOLIO", false, 'NAME="Lista1" STYLE="width:150px;"'); 
?> 
<BR /><BR /> 
Komputery - metoda 4: 
<?php 
  //Wywołanie funkcji "ListaSelect" - metoda 4. 
    $Dane4[] = "Atari"; 
    $Dane4[] = "Commodore"; 
    $Dane4[] = "ZX Spectrum"; 
    $Dane4[] = "Amstrad"; 
    $Dane4[] = "Cry"; 
    $Dane4[] = "IBM"; 
    $Dane4[] = "Amiga"; 
    $Dane4[] = "Atari ST"; 
    $Dane4[] = "Atari TT"; 
    $Dane4[] = "Atari Portfolio"; 
    echo "<BR />Ilość elementów: ".ListaSelect($Dane4, "coMMoDOre", true, 'NAME="Lista2" STYLE="width:150px;"'); 
?> 
</BODY> 
</HTML> 