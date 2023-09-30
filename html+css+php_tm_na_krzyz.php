<HTML><HEAD><META CHARSET="utf-8" />
<META NAME="keywords" CONTENT="Tabliczka, mnożenia, mnożenie" />
<META NAME="description" CONTENT ="Generuje tabliczkę mnożenia na krzyż." />
<LINK REL="stylesheet" HREF="style.css" />
<STYLE>
body {
  background-color     : gray;
  font-family          : arial, "times new roman";
  font-size            : 16pt;
  background-image     : url('tlo.jpg');
  background-attachment: fixed;
}
table { background-color:white; border-collapse:collapse; }
td { padding: 4px; text-align:right; }
.tab_nag { background-color:silver; font-weight:bold; }
</STYLE>
<TITLE>HTML+CSS+PHP, Tabliczka mnożenia na krzyż (c)by Jan T. Biernat</TITLE>
</HEAD>
<BODY>
<FONT STYLE="font-size:7pt;">
HTML+CSS+PHP, Tabliczka mnożenia na krzyż.<BR />
Copyright (c)by Jan T. Biernat
</FONT>
<CENTER>
<?php
  define('Zakres', 10); //Deklaracja stałej.
  echo '<TABLE BORDER="1">';
  echo '<TR><TD CLASS="tab_nag">&nbsp;</TD>';
    for($I = 0; $I < Zakres; $I++) {
      echo '<TD CLASS="tab_nag">'.($I+1).'</TD>';
    }
  echo '</TR>';
  for($A = 0; $A < Zakres; $A++) {
    echo '<TR><TD CLASS="tab_nag">'.($A+1).'</TD>';
    for($B = 0; $B < Zakres; $B++) {
      echo '<TD>'.(($A+1)*($B+1)).'</TD>';
    }
    echo '</TR>';
  }
  echo '</TABLE>';
 ?>
</CENTER>
</BODY>
</HTML>