<HTML>
<HEAD>
 <meta charset='utf-8'/>
 <TITLE>Exemplo 13</TITLE>
</HEAD>
<BODY>
  <?php
   function soma($n1,$n2)
   {
   return $n1 + $n2;
   }
   
   function imprimir()
   {
   return "<h2>O resultado da soma é: </h2>";
   }
   
   echo imprimir(), soma(115,30);
   

  ?>
</BODY>
</HTML>
