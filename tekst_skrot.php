<?php 
function TekstSkrot($Str = "") { 
//TekstSkrot - Funkcja generuje skrót z podanego ciągu znaków 
//             (np. Systemy Operacyjne i Sieci Komputerowe -> SOiSK). 
  $T = ""; 
  $Str = mb_strtolower(trim($Str)); 
  if($Str != "") { 
    $Str = " ".$Str; 
    for($I = 0; $I < strlen($Str); $I++) { 
      if(($Str[$I-1] == " ") && ($Str[$I] != " ")) { 
        if($Str[$I+1] == " ") { $T = $T.$Str[$I]; } else { $T .= mb_strtoupper($Str[$I]); } 
      } 
    } 
  } 
  return $T; 
} 
//Wywołanie funkcji "TekstSkrot". 
  echo "<BR />"; 
  echo "<BR />Test1: Funkcja wywołana bez parametru: [".TekstSkrot()."]."; 
  $Tym = ""; $Tym = "Jan T. Biernat"; 
  echo "<BR />Test2: \"".$Tym."\" => [".TekstSkrot($Tym)."]."; 
  $Tym = ""; $Tym = "Układ scalony"; 
  echo "<BR />Test3: \"".$Tym."\" => [".TekstSkrot($Tym)."]."; 
  $Tym = ""; $Tym = "Urządzenia Techniki Komputerowej"; 
  echo "<BR />Test4: \"".$Tym."\" => [".TekstSkrot($Tym)."]."; 
  $Tym = ""; $Tym = "Systemy Operacyjne i Sieci Komputerowe"; 
  echo "<BR />Test5: \"".$Tym."\" => [".TekstSkrot($Tym)."]."; 
?> 