<?php 
  /* --== Pętla FOR i IF - Ćwiczenia z pętli FOR i IF. Łączenie warunków ==-- 
     Copyright (c)by Jan T. Biernat 
  */ 
  function TylkoLiczba($Str, $Dl = 0) {                                    //1 
    //TylkoLiczba - Funkcja wyciąga z podanego ciągu znaków tylko cyfry. 
    $T = ""; $Tylko = "";                                                  //2 
    if($Dl < 1) { $Dl = 1; }                                               //3 
    $T = trim(substr($Str, 0, $Dl));                                       //4 
    if($T != "") {                                                         //5 
      for($I = 0; $I < strlen($T); $I++) {                                 //6 
        if(($T[$I] >= "0") && ($T[$I] <= "9")) { $Tylko = $Tylko.$T[$I]; } //7 
      } 
      return (int)$Tylko;                                                  //8 
    } else { return ""; }                                                  //9 
  } 
  /* 
   Legenda: 
   1) Funkcja "TylkoLiczba". "TylkoLiczba" jest to nazwa funkcji. 
      Po nazwie funkcji występują (jeżeli jest taka potrzeba) parametry, które umieszczona są nawiasach. 
      Na przykład: $Str i $Dl. Parametr $Dl posiada przypisaną wartość 9 (tj. $Dl = 9). Dzięki takiej konstrukcji 
      nie ma potrzeby podawania drugiego parametru przy wywoływaniu funkcji, jeżeli domyślna przypisana wartość 
      określająca długość tekstu jest prawidłowa. 
   2) Zadeklarowanie zmiennej tekstowej "T" i "Tylko" z równoczesnym przypisaniem do nich pustych ciągów znakowych. 
      Zmienne deklaruje się poprzedzając nazwę zmiennej znakiem dolara "$". na przykład: "$Tylko". 
   3) Warunek sprawdza, czy podana długość jako liczba jest mniejsza od wartości 1. Jeżeli tak, to przypisz do zmiennej 
      $Dl wartość domyślną 1. 
   4) Usunięcie pustych zewnętrznych znaków podanego ciągu znaków. Na przykład: "   PHP jest bardzo przydatne.   ". 
      W wyniku działania instrukcji "trim" otrzymamy: "PHP jest bardzo przydatne.". 
      Wyciągnięcie fragmentu tekstu z podanego ciągu znaków za pomocą funkcji "substr". W tym przypadku z podanego 
      ciągu znaków zostanie wyodrębniony fragment, który rozpocznie się od znaku 1 (który jest na pozycji zerowej) 
      do znaku (który jest na pozycji np. 1). 
   5) Instrukcja warunkowa IF sprawdza, czy warunek umieszczony w nawiasach (tj. $T != "") jest spełniony. 
      Warunek będzie spełniony, gdy zawartość zmiennej tekstowej $T będzie zawierał przynajmniej jeden znak. 
      Jeżeli warunek jest spełniony, to wykonaj instrukcje umieszczone w klamrach za warunkiem. 
   6) Pętla FOR będzie wykonywana tyle razy ile znaków jest w podanym ciągu znaków. 
      Na przykład: Jeżeli podanym ciągiem znaków będzie wyraz "Atari", to pętla będzie wykonana 5 razy. 
                   Ponieważ wyraz "Atari" składa się z 5 liter. 
      Pętla FOR jest instrukcją posiadającą 3 parametry. 
            Parametr 1: Tutaj deklaruje się zmienną liczbową całkowitą (np. $I) z równoczesnym przypisaniem wartości 
                        początkowej (np. $I = 0). 
            Parametr 2: Jest to warunek, który decyduje ile razy pętla FOR będzie wykonana. 
                        Instrukcja "strlen" podaje nam ile znaków posiada podany ciąg znaków. 
            Parametr 3: $I++ - jest to zwiększenie zawartości zmiennej liczbowej całkowitej o wartość 1. 
   7) Są to warunki, które umożliwia wyciągnięcie z podanego ciągu znaków tylko cyfr. 
      Warunki te sprawdzają, czy pobrany znak z pomocą instrukcji $T[$I] mieści się w przedziale od 0 do 9. 
      Jeżeli tak, to znaczy że jest to cyfra. W takim razie wykonaj instrukcję, która umieszczona jest za warunkiem 
      (tj. "$Tylko = $Tylko.$T[$I];"). 
   8) Rzutowanie zawartości zmiennej $Tylko do typu int (czyli. integer). 
      Zwrócenie przez funkcję liczby typu całkowitego. 
   9) Funkcja zwróci ciąg pusty znaków, gdy warunek opisany w komentarzu nr 4 (tj. linia nr 6) będzie niespełniony. 
   */ 
  //Wywołanie funkcji "TylkoCyfry". 
    $Tablica[] = "0123456789"; 
    $Tablica[] = "? "; 
    $Tablica[] = " "; 
    $Tablica[] = " a0123456789 ab "; 
    $Tablica[] = " a01234dfsd56789 ab "; 
    $Tablica[] = " a01234dfsd56789 ab a01234dfsd56789 ab "; 
    $Tablica[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Tablica[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Tablica); $I++) { 
      echo "<BR />$Tablica[$I] = ".TylkoLiczba($Tablica[$I]); 
    } 
  //Wywołanie funkcji "TylkoCyfry". 
    echo "<BR /><BR />(9 znaków)"; 
    $Tablica[] = "0123456789"; 
    $Tablica[] = "? "; 
    $Tablica[] = " "; 
    $Tablica[] = " a0123456789 ab "; 
    $Tablica[] = " a01234dfsd56789 ab "; 
    $Tablica[] = " a01234dfsd56789 ab a01234dfsd56789 ab "; 
    $Tablica[] = " a0  d - 1 . f 2   g3f4g5j6j7i89 ab "; 
    $Tablica[] = "   !@#$&*() a0  d - 1 . f 2   g3f4g5j6j7i89 ab  0123456789 {}[]/<>,.+-="; 
    for($I = 0; $I < count($Tablica); $I++) { 
      echo "<BR />$Tablica[$I] = ".TylkoLiczba($Tablica[$I], 9); 
    } 
?> 