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
    echo "Valor da vari�vel a = $a <br>";
    }

    echo "<h1> Vari�vel Est�tica </h1>";
    testeStatic();
    testeStatic();
    testeStatic();

  ?>
</BODY>
</HTML>
