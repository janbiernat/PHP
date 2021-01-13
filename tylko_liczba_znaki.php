<?php 
  function TylkoLiczbaZnaki($Str, $Dl = 0) { 
    //TylkoLiczbaZnaki - Funkcja wyciąga z podanego ciągu znaków tylko liczby i znaki od A(a) do Z(z). 
    $T = ""; $Tylko = ""; 
    if($Dl < 2) { $Dl = 2; } 
    $T = trim(substr($Str, 0, $Dl)); 
    if($T != "") { 
      for($I = 0; $I < strlen($T); $I++) { 
        if(($T[$I] >= "0") && ($T[$I] <= "9") 
        || ($T[$I] >= "A") && ($T[$I] <= "Z") 
        || ($T[$I] >= "a") && ($T[$I] <= "z")) { $Tylko = $Tylko.$T[$I]; } 
      } 
      return $Tylko; 
    } else { return ""; } 
  } 
  //Wywołanie funkcji "TylkoLiczbaZnaki". 
    $Znaki[] = "? "; 
    $Znaki[] = ""; 
    $Znaki[] = " "; 
    $Znaki[] = "13łźa"; 
    $Znaki[] = "0123456789abcdefghijklmnoprqsxyz,ABCDEFGHIJKLMNOPRQSXYZ,ąćęłńóśżź,ĄĆĘŁŃÓŚŻŹ,."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    $Znaki[] = "To  jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    $Znaki[] = "303a"; 
    $Znaki[] = "a303"; 
    $Znaki[] = "303B"; 
    $Znaki[] = "B303"; 
    $Znaki[] = "303,a"; 
    $Znaki[] = "303ms,MS,"; 
    $Znaki[] = "303,MS,"; 
    $Znaki[] = "303BC,"; 
    $Znaki[] = "303BC"; 
    $Znaki[] = "303B,"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLiczbaZnaki($Znaki[$I]); 
    } 
  //Wywołanie funkcji "TylkoLiczbaZnaki". 
    echo "<BR /><BR />"; 
    $Znaki[] = "? "; 
    $Znaki[] = ""; 
    $Znaki[] = " "; 
    $Znaki[] = "13łźa"; 
    $Znaki[] = "0123456789abcdefghijklmnoprqsxyz,ABCDEFGHIJKLMNOPRQSXYZ,ąćęłńóśżź,ĄĆĘŁŃÓŚŻŹ,."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    $Znaki[] = "To  jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    $Znaki[] = "303a"; 
    $Znaki[] = "a303"; 
    $Znaki[] = "303B"; 
    $Znaki[] = "B303"; 
    $Znaki[] = "303,a"; 
    $Znaki[] = "303ms,MS,"; 
    $Znaki[] = "303,MS,"; 
    $Znaki[] = "303BC,"; 
    $Znaki[] = "303BC"; 
    $Znaki[] = "303B,"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLiczbaZnaki($Znaki[$I], 4); 
    } 
?> 