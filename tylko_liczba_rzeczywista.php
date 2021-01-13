<?php 
  /* --== Pętla FOR i IF - Ćwiczenia z pętli FOR i IF. Łączenie warunków ==-- 
     Copyright (c)by Jan T. Biernat 
  */ 
  function TylkoLiczbaR($Str, $Dl = 0, $IlePoKropce = 2) { 
    //TylkoLiczbaR - Funkcja wyciąga z podanego ciągu znaków tylko cyfry, znak minus i kropkę. 
    $T = ""; $Tylko = ""; $Start = 0; $Kropka = false; $KropkaLicz = 0; 
    if($Dl < 3) { $Dl = 3; } 
    $T = trim(substr($Str, 0, $Dl)); 
    if($IlePoKropce < 2) { $IlePoKropce = 2; } 
    if($T != "") { 
      if($T[0] == "-") { $Tylko = $Tylko.$T[0]; $Start = 1; } 
      for($I = $Start; $I < strlen($T); $I++) { 
        if(($T[$I] >= "0") && ($T[$I] <= "9") && ($KropkaLicz < $IlePoKropce)) { 
          $Tylko = $Tylko.$T[$I]; 
          if($Kropka == true) { $KropkaLicz++; } 
        } else if(($T[$I] == ".") && ($Kropka == false)) { $Tylko = $Tylko.$T[$I]; $Kropka = true; } 
      } 
      return (float)$Tylko; 
    } else { return ""; } 
  } 
  //Wywołanie funkcji "TylkoLiczbaR". 
    $Dane[] = "0123456789"; 
    $Dane[] = "? "; 
    $Dane[] = " "; 
    $Dane[] = "012.3456789"; 
    $Dane[] = " a0123456789 ab "; 
    $Dane[] = " a0123456789 ab a0123456789 ab "; 
    $Dane[] = " -a012345678.9 ab "; 
    $Dane[] = "--a01234-56789 ab "; 
    $Dane[] = "-0123456789 ab "; 
    $Dane[] = "-01234567.89 ab "; 
    $Dane[] = "-01234567.89 ab -01234567.89 ab "; 
    $Dane[] = "-01234567..89 ab "; 
    $Dane[] = "-0123..4567..89 ab "; 
    $Dane[] = "-01234567..89 ab -01234567..89 ab "; 
    $Dane[] = "-012345-6789 ab "; 
    $Dane[] = "-012345-6.7.89 ab "; 
    $Dane[] = " a0123.4d.fsd....56789 ab. "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Dane); $I++) { 
      echo "<BR />$Dane[$I] = ".TylkoLiczbaR($Dane[$I]); 
    } 
  //Wywołanie funkcji "TylkoLiczbaR". 
    echo "<BR /><BR />=>(5 znaków)"; 
    $Dane[] = "0123456789"; 
    $Dane[] = "? "; 
    $Dane[] = " "; 
    $Dane[] = "012.3456789"; 
    $Dane[] = " a0123456789 ab "; 
    $Dane[] = " a0123456789 ab a0123456789 ab "; 
    $Dane[] = " -a012345678.9 ab "; 
    $Dane[] = "--a01234-56789 ab "; 
    $Dane[] = "-0123456789 ab "; 
    $Dane[] = "-01234567.89 ab "; 
    $Dane[] = "-01234567.89 ab -01234567.89 ab "; 
    $Dane[] = "-01234567..89 ab "; 
    $Dane[] = "-0123..4567..89 ab "; 
    $Dane[] = "-01234567..89 ab -01234567..89 ab "; 
    $Dane[] = "-012345-6789 ab "; 
    $Dane[] = "-012345-6.7.89 ab "; 
    $Dane[] = " a0123.4d.fsd....56789 ab. "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Dane); $I++) { 
      echo "<BR />$Dane[$I] = ".TylkoLiczbaR($Dane[$I], 5); 
    } 
  //Wywołanie funkcji "TylkoLiczbaR". 
    echo "<BR /><BR />(15 znaków i 3 cyfry po przecinku)"; 
    $Dane[] = "0123456789"; 
    $Dane[] = "? "; 
    $Dane[] = " "; 
    $Dane[] = "012.3456789"; 
    $Dane[] = " a0123456789 ab "; 
    $Dane[] = " a0123456789 ab a0123456789 ab "; 
    $Dane[] = " -a012345678.9 ab "; 
    $Dane[] = "--a01234-56789 ab "; 
    $Dane[] = "-0123456789 ab "; 
    $Dane[] = "-01234567.89 ab "; 
    $Dane[] = "-01234567.89 ab -01234567.89 ab "; 
    $Dane[] = "-01234567..89 ab "; 
    $Dane[] = "-0123..4567..89 ab "; 
    $Dane[] = "-01234567..89 ab -01234567..89 ab "; 
    $Dane[] = "-012345-6789 ab "; 
    $Dane[] = "-012345-6.7.89 ab "; 
    $Dane[] = " a0123.4d.fsd....56789 ab. "; 
    $Dane[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Dane[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Dane); $I++) { 
      echo "<BR />$Dane[$I] = [".TylkoLiczbaR($Dane[$I], 15, 3); 
    } 
?> 