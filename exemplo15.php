<HTML>
<HEAD>
 <meta charset='utf-8'/>
 <TITLE>Exemplo 15</TITLE>
</HEAD>
<BODY>
  <?php
    function mais5($numero)
    {
     $numero += 5;
    }
    
    echo "<h1>********************Passagem de Parâmetros por *********************</h1>";
    $a = 3;
    mais5($a);
    echo "Valor da variável a = $a <br>";

  ?>
</BODY>
</HTML>
