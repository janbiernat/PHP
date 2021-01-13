<?php 
  function TylkoLiczbaZnakMinus($Str, $Dl = 0) { 
    //TylkoLiczbaZnakMinus - Funkcja wyciąga z podanego ciągu znaków tylko cyfry i znak minus. 
    $T = ""; $Tylko = ""; $Start = 0; 
    if($Dl < 2) { $Dl = 2; } 
    $T = trim(substr($Str, 0, $Dl)); 
    if($T != "") { 
      if($T[0] == "-") { $Tylko = $Tylko.$T[0]; $Start = 1; } 
      for($I = $Start; $I < strlen($T); $I++) { 
        if(($T[$I] >= "0") && ($T[$I] <= "9")) { $Tylko = $Tylko.$T[$I]; } 
      } 
      return (int)$Tylko; 
    } else { return ""; } 
  } 
  //Wywołanie funkcji "TylkoLiczbaZnakMinus". 
    $Dane[] = "0123456789"; 
    $Dane[] = " a0123456789 ab "; 
    $Dane[] = "? "; 
    $Dane[] = " "; 
    $Dane[] = " -a0123456789 ab "; 
    $Dane[] = "--a01234-56789 ab "; 
    $Dane[] = "--a01234-56789 ab --a01234-56789 ab "; 
    $Dane[] = "-0123456789 ab "; 
    $Dane[] = "-012345-6789 ab "; 
    $Dane[] = "-012345-6789 ab -012345-6789 ab "; 
    $Dane[] = " a01234dfsd56789 ab "; 
    $Dane[] = " a01234dfsd56789 ab  a01234dfsd56789 ab "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab  a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Dane); $I++) { 
      echo "<BR />$Dane[$I] = ".TylkoLiczbaZnakMinus($Dane[$I]); 
    } 
  //Wywołanie funkcji "TylkoLiczbaZnakMinus". 
    echo "<BR /><BR />(11 znaków)"; 
    $Dane[] = "0123456789"; 
    $Dane[] = " a0123456789 ab "; 
    $Dane[] = "? "; 
    $Dane[] = " "; 
    $Dane[] = " -a0123456789 ab "; 
    $Dane[] = "--a01234-56789 ab "; 
    $Dane[] = "--a01234-56789 ab --a01234-56789 ab "; 
    $Dane[] = "-0123456789 ab "; 
    $Dane[] = "-012345-6789 ab "; 
    $Dane[] = "-012345-6789 ab -012345-6789 ab "; 
    $Dane[] = " a01234dfsd56789 ab "; 
    $Dane[] = " a01234dfsd56789 ab  a01234dfsd56789 ab "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab  a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Dane); $I++) { 
      echo "<BR />$Dane[$I] = ".TylkoLiczbaZnakMinus($Dane[$I], 11); 
    } 
?> 