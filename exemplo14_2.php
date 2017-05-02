<HTML>
<HEAD>
 <meta charset='utf-8'/>
 <TITLE>Exemplo 14.2</TITLE>
</HEAD>
<BODY>
  <?php
    function testeGlobal ()
    {
    global $a;
    $a = 25;
    }
    
    echo "<h1> Variável Global </h1>";
    $a = 0;
    testeGlobal();
    echo "Valor da variável a=$a";
  ?>
</BODY>
</HTML>
