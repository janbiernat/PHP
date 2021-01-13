<?php 
  function wielka1Litera($Str = "") { 
    //wielka1Litera - Funkcja zwraca ciąg znaków, w którym 
    //każdy wyraz rozpoczyna się z Wielkiej Litery. 
    return ucwords(mb_strtolower(trim($Str))); 
  } 
  function wielka1Litera2($Str = "") { 
    //wielka1Litera2 - Funkcja zwraca ciąg znaków, w którym 
    //każdy wyraz rozpoczyna się z Wielkiej Litery. 
    //Zamiast MB_CASE_TITLE można jeszcze wprowadzić: MB_CASE_UPPER - zamienia wszystkie litery na DUŻE, 
    //                                                MB_CASE_LOWER - ZAMIENIA WSZYSTKIE LITERY NA małe. 
    return mb_convert_case(trim($Str), MB_CASE_TITLE, "UTF-8"); 
  } 
  //Wywołanie funkcji "wielka1Litera" i "wielka1Litera2". 
    $Tablica[] = "Jan T. Biernat"; 
    $Tablica[] = "JĘZYK PHP"; 
    $Tablica[] = "Lubię proGRAmoWać"; 
    $Tablica[] = ""; 
    $Tablica[] = "mama oraz TATA"; 
    for($I = 0; $I < count($Tablica); $I++) { 
      echo "<BR />$Tablica[$I] = ".wielka1Litera($Tablica[$I])." = ".wielka1Litera2($Tablica[$I]); 
    } 
?> 