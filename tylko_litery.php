<?php 
  function TylkoLitery($Str, $Dl = 0) { 
    //TylkoLitery - Funkcja wyciąga z podanego ciągu znaków tylko litery. 
    $T = ""; $Tylko = ""; 
    if($Dl < 1) { $Dl = 1; } 
    $T = trim(substr($Str, 0 , $Dl)); 
    if($T != "") { 
      for($I = 0; $I < strlen($T); $I++) { 
        if(($T[$I] >= "A") && ($T[$I] <= "Z") 
        || ($T[$I] >= "a") && ($T[$I] <= "z") 
        || ($T[$I] == " ") || ($T[$I] > "~")) { $Tylko = $Tylko.$T[$I]; } 
      } 
      return $Tylko; 
    } else { return ""; } 
  } 
  //= 
  function TylkoLiteryZ($Str, $Dl = 0) { 
    //TylkoLiteryZ - Funkcja wyciąga z podanego ciągu znaków tylko litery. 
    $T = ""; $Tylko = ""; 
    if($Dl < 1) { $Dl = 1; } 
    $T = trim(substr($Str, 0, $Dl)); 
    if($T != "") { 
      for($I = 0; $I < strlen($T); $I++) { 
        if(($T[$I] >= "A") && ($T[$I] <= "Z") 
        || ($T[$I] >= "a") && ($T[$I] <= "z") 
        || ($T[$I] == "(") || ($T[$I] == ")") 
        || ($T[$I] == "/") || ($T[$I] == ".") 
        || ($T[$I] == " ") || ($T[$I] > "~")) { $Tylko = $Tylko.$T[$I]; } 
      } 
      return $Tylko; 
    } else { return ""; } 
  } 
  //Wywołanie funkcji "TylkoLitery". 
    $Znaki[] = "Jan T. Biernat"; 
    $Znaki[] = "To jest przykład jak wyciągnąć z podanego ciągu znaków tylko litery."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLitery($Znaki[$I]); 
    } 
  //Wywołanie funkcji "TylkoLitery". 
    echo "<BR /><BR />"; 
    $Znaki[] = "Jan T. Biernat"; 
    $Znaki[] = "To jest przykład jak wyciągnąć z podanego ciągu znaków tylko litery."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLitery($Znaki[$I], 15); 
    } 
  //Wywołanie funkcji "TylkoLitery". 
    echo "<BR /><BR />"; 
    $Znaki[] = "Jan T. Biernat"; 
    $Znaki[] = "To jest przykład jak wyciągnąć z podanego ciągu znaków tylko litery."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLitery($Znaki[$I], 40); 
    } 
  //Wywołanie funkcji "TylkoLiteryZ". 
    echo "<BR /><BR />"; 
    $Znaki[] = "Jan T. Biernat"; 
    $Znaki[] = "To jest przykład jak wyciągnąć z podanego ciągu znaków tylko litery."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLiteryZ($Znaki[$I]); 
    } 
  //Wywołanie funkcji "TylkoLiteryZ". 
    echo "<BR /><BR />"; 
    $Znaki[] = "Jan T. Biernat"; 
    $Znaki[] = "To jest przykład jak wyciągnąć z podanego ciągu znaków tylko litery."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLiteryZ($Znaki[$I], 15); 
    } 
  //Wywołanie funkcji "TylkoLiteryZ". 
    echo "<BR /><BR />"; 
    $Znaki[] = "Jan T. Biernat"; 
    $Znaki[] = "To jest przykład jak wyciągnąć z podanego ciągu znaków tylko litery."; 
    $Znaki[] = "SELECT * FROM `baza` WHERE godz = (SELECT MAX(godz) FROM `baza`)"; 
    $Znaki[] = "To jest tekst z dowolnymi znakami np.: 1 @#$%()[]{}\|><,.?/=-_)(*&%$#@!`~~/"; 
    for($I = 0; $I < count($Znaki); $I++) { 
      echo "<BR />$Znaki[$I] = ".TylkoLiteryZ($Znaki[$I], 40); 
    } 
?> 