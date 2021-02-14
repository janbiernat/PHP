<HTML><HEAD><META CHARSET="utf-8" /> 
<TITLE>Losowanie tapety</TITLE> 
</HEAD> 
<?php 
  function TapetaLosuj($Ilosc = -1) { 
    //TapetaLosuj - Funkcja losuje tapetę dla strony. 
    if($Ilosc < 0) { $Ilosc = 0; } 
    $Liczba = 0; $Liczba = rand(0, $Ilosc); 
    echo "body { background-color     : #c0c0c0; 
                 background-attachment: fixed; /*Przewijania tła strony zostało zablokowane.*/ 
                 background-repeat    : repeat; 
                 background-image     : url('tapeta".$Liczba.".png'); 
                 font-family          : verdana; 
                 font-size            : 16pt; 
                 color                : black; 
               }"; 
  } 
?> 
<STYLE> 
<?php 
  //Wywołanie funkcji "TapetaLosuj". 
  TapetaLosuj(); 
?> 
</STYLE> 
<BODY> 
  <TABLE BORDER="1" STYLE="background-color:white;"><TR><TD>Losowanie tapety</TD></TR></TABLE> 
</BODY> 
</HTML> 