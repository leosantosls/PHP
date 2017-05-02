<HTML>
<HEAD>
 <meta charset='utf-8'/>
 <TITLE>Exemplo 12</TITLE>
</HEAD>
<BODY>
  <?php
  function msn(){
  $msn ="Olá, Bem vindo as Funções no PHP";
  echo "<h1> $msn </h1>";
  }
  function imprimir($texto){
  echo "<h2> $texto </h2>";
  }
  
  msn();
  imprimir("Testando a Função");
  
  ?>
</BODY>
</HTML>
