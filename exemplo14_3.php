<HTML>
<HEAD>
 <meta charset='utf-8'/>
 <TITLE>Exemplo 14.2</TITLE>
</HEAD>
<BODY>
  <?php
    function testeStatic ()
    {
    static $a = 0;
    $a += 25;
    echo "Valor da variável a = $a <br>";
    }

    echo "<h1> Variável Estática </h1>";
    testeStatic();
    testeStatic();
    testeStatic();

  ?>
</BODY>
</HTML>
