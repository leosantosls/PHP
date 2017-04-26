<HTML>
<HEAD>
 <TITLE>Exemplo 5</TITLE>
</HEAD>
<BODY>
  <?php
  echo "<h1>******Operadores de comparacao******</h1><br>";
  $a=15;
  $b=42;
  $c=42.0;
  echo "$b == $c",$b==$c?"verdadeiro":"falso";
  echo "<br>"   ;
  echo "$b === $c",$b===$c?"verdadeiro":"falso";
  echo "<br>"  ;
  echo "$b != $c",$b!=$c?"verdadeiro":"falso";
  echo "<br>"  ;
  echo "$a <> $c",$a<>$c?"verdadeiro":"falso";
  echo "<br>"  ;
  echo "$a < $c",$a<$c?"verdadeiro":"falso";
  echo "<br>"  ;
  echo "$a > $c",$a>$c?"verdadeiro":"falso";
  echo "<br>"  ;
  echo "$a <= $c",$a<=$c?"verdadeiro":"falso";
  echo "<br>"       ;
  echo "$a >= $c",$a>=$c?"verdadeiro":"falso";
?>

</BODY>
</HTML>
