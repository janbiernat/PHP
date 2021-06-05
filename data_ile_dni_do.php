<HTML><HEAD><META CHARSET="utf-8" /> 
<TITLE>PHP - Ile dni zostało do ?</TITLE> 
</HEAD> 
<?php 
  function IleDniDoDaty($Dzien, $Miesiac, $Rok) { 
    return ceil((mktime(0, 0, 0, $Miesiac, $Dzien, $Rok)-time()) / 86400); 
    /* 
      Legenda: 
        Funkcja "mktime()" - zwraca UNIX-owy znacznik czasu w postaci długiej liczby 
                             całkowitej (w formacie liczby sekund od początku epoki komputerów, 
                             czyli od 1 stycznia 1970 roku) dla danej daty. 
        Funkcja "time()"   - zwraca aktualny czas systemowy określony jako liczba sekund, 
                             która upłynęła od początku epoki komputerów. 
        Funkcja "ceil"     - zaokrągla do najbliższej liczby całkowitej w gorę. 
        = 
        Jeśli odejmiemy od siebie wynik działania funkcji "mktime()" od wyniku działania 
        funkcji "time()", a otrzymaną liczbę podzielimy przez 86400 sekund (1 dzień = 86400 sekund), 
        to otrzymamy poszukiwaną liczbę dni, które pozostały do wskazanej daty. 
     */ 
  } 
?> 
<BODY> 
     <CENTER> 
            Do podanej daty (tj. 12-06-2021) zostało: <?php  echo IleDniDoDaty(13,06,2021); ?> dni! 
     </CENTER> 
</BODY> 
</HTML> 