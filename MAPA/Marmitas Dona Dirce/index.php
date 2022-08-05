<!DOCTYPE html>

<html lang="pt-BR">

 <head>

 	<meta charset="UTF-8"> 	  	

  	<meta name="author" content="Luan Gabriel de V. Oliveira - 21180457-5">

    <meta name="description" content="Marmitas da Dona Rita">

    <meta name="keywords" content="marmitas, Dona, Rita, comida, gostosa">

  <title>

Marmitas da Dona Rita

  </title>

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	

<!-- Bootstrap -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- JavaScript -->

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
 <!-- CSS -->
 <link rel="stylesheet" type="text/css" href="mapa.css">
 
 <!-- Font Google -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet"> 

 </head> 

<body>

<header>

<div class="container">
	<div class="row">
		<div class="col-sm"> 
	
<p class="titulo"> Marmitas da dona Dirce </p>


<figure><img src="imagens/marmita.png"></figure>

</div>
<div class="col-sm">


<div id="links">
	<a href="#"> HOME </a><span class="text-center"> | </span>
	<a href="#"> Blog </a><span class="text-center"> | </span>
	<a href="#"> Conheça a dona Dirce </a><span class="text-center"> | </span>
	<a href="#"> Contato </a>
</div>

</div>
</div>
</div>

</header>

<section class="secao1">

<h1>  Venha para a casa da  Dona Dirce, e escolha a sua marmita!!!  </h1>

<h3> Impossível não voltar novamente </h3>

<center><button>Saiba mais  </button></center>

</section> 

<h2>Confira nossas marmitas</h2> 
<h8> Aqui você encontra o nosso cardápio das marmitas </h8>

<section class="secao_cardapio">
  
<div class="container">
  <div class="row">

<?php

$dados = array (
  array("img"=>"imagens\cardapio\caseira.jpg", "titulo"=>"Marmita caseira", "info"=>"Deliciosa comida caseira, por somente <b>R$ 12,99</b>.")
);

foreach ($dados as $caseira) {

?>

    <div class="col img-produto"><img src="<?php echo $caseira['img'];   ?>">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#caseira" role="button" aria-expanded="false" aria-controls="caseira">
    <?php echo $caseira['titulo'];   ?>
  </a>
</p>
<div class="collapse" id="caseira">
  <div class="card card-body">
    <?php echo $caseira['info']; }  ?>
  </div>
</div>
</div>

  <?php

$dados = array (
  array("img"=>"imagens\cardapio\churrasco.jpg", "titulo"=>"Marmita com churrasco", "info"=>"Deliciosa comida com churrasco, com direiro a carne, linguiça ou frango, por apenas <b>R$ 17,99</b>.")
);

foreach ($dados as $churrasco) {

?>

    <div class="col img-produto"><img src="<?php echo $churrasco['img'];   ?>">
    
    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#churrasco" role="button" aria-expanded="false" aria-controls="churrasco">
    <?php echo $churrasco['titulo'];   ?>
  </a>
</p>
<div class="collapse" id="churrasco">
  <div class="card card-body">
    <?php echo $churrasco['info'];  } ?>
  </div>
</div>
</div>

<?php

$dados = array (
  array("img"=>"imagens\cardapio\cucuz.jpg", "titulo"=>"Marmita com cucuz", "info"=>"Deliciosa comida com farofa de cucuz, por apenas <b>R$ 11,99</b>.")
);

foreach ($dados as $cucuz) {

?>

    <div class="col img-produto"><img src="<?php echo $cucuz['img'];   ?>">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#cucuz" role="button" aria-expanded="false" aria-controls="cucuz">
    <?php echo $cucuz['titulo'];   ?>
  </a>
</p>
<div class="collapse" id="cucuz">
  <div class="card card-body">
    <?php echo $cucuz['info'];  } ?>
  </div>
</div>
</div>

  <?php

$dados = array (
  array("img"=>"imagens\cardapio\espaguete.jpg", "titulo"=>"Marmita com espaguete", "info"=>"Deliciosa comida com espaguete, por apenas <b>R$ 15,99</b>.")
);

foreach ($dados as $espaguete) {

  ?>  


    <div class="col img-produto"><img src="<?php echo $espaguete['img'];   ?>">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#espaguete" role="button" aria-expanded="false" aria-controls="espaguete">
    <?php echo $espaguete['titulo']; ?>
  </a>
</p>
<div class="collapse" id="espaguete">
  <div class="card card-body">
    <?php echo $espaguete['info'];  } ?>
    </div>
  </div>
</div>
  </div>

  <div class="row">

    <?php

$dados = array (
  array("img"=>"imagens\cardapio\ovo.jpg", "titulo"=>"Marmita com ovo", "info"=>"Deliciosa comida com ovo, repleta de nutrientes! Por apenas <b>R$ 10,99</b>.")
);

foreach ($dados as $ovo) {

?>

    <div class="col img-produto"><img src="<?php echo $ovo['img'];   ?>">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#ovo" role="button" aria-expanded="false" aria-controls="ovo">
    <?php echo $ovo['titulo']; ?>
  </a>
</p>
<div class="collapse" id="ovo">
  <div class="card card-body">
    <?php echo $ovo['info'];  } ?>
  </div>
</div>
</div>

<?php

$dados = array (
  array("img"=>"imagens\cardapio\saudavel.jpg", "titulo"=>"Marmita saudável", "info"=>"Deliciosa comida saudável, por apenas <b>R$ 14,99</b>.")
);

foreach ($dados as $saudavel) {

?>


    <div class="col img-produto"><img src="<?php echo $saudavel['img']; ?>">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#saudavel" role="button" aria-expanded="false" aria-controls="saudavel">
    <?php echo $saudavel['titulo']; ?>
  </a>
</p>
<div class="collapse" id="saudavel">
  <div class="card card-body">
    <?php echo $saudavel['info'];  } ?>
  </div>
</div>
</div>

  <?php

$dados = array (
  array("img"=>"imagens\cardapio\strogonoff.jpg", "titulo"=>"Marmita com strogonoff de frango", "info"=>"Deliciosa comida com strogonoff de frango, por apenas <b>R$ 16,99</b>.")
);

foreach ($dados as $strogonoff) {

?>

    <div class="col img-produto"><img src="<?php echo $strogonoff['img']; ?>">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#strogonoff" role="button" aria-expanded="false" aria-controls="strogonoff">
    <?php echo $saudavel['strogonoff']; ?>
  </a>
</p>
<div class="collapse" id="strogonoff">
  <div class="card card-body">
    <?php echo $saudavel['strogonoff'];  } ?>
  </div>
</div>
</div>



    <div class="col img-produto"><img src="imagens\cardapio\tradicional.jpg">

    <p>
  <a class="btn btn-info" data-toggle="collapse" href="#tradicional" role="button" aria-expanded="false" aria-controls="tradicional">
    Marmita tradicional
  </a>
</p>
<div class="collapse" id="tradicional">
  <div class="card card-body">
    Deliciosa comida tradicional, como fazia nossa avó! Por apenas <b>R$ 12,99</b>
  </div>
</div>
</div>



  </div>
</div>

</section>

<footer>

<h4> Quer saber mais? </h4>

<table>

  <tr>
  <th> Nossas páginas </th>
  <th>Links úteis</th>
  <th>Sobre o projeto</th>
  </tr>
  <tr>
  <td>Home</td>
  <td>Políticas de privacidade</td>
  <td>Projeto de divulgação das marmitas da dona Dirce</td>
  </tr>
<tr>
  <td>Blog</td>
  <td>Aviso legal</td>
<tr>  
<tr>
  <td>Conheça a dona Dirce</td>
  <td>Termos de uso</td>
</tr>
<tr>
  <td>Contato</td>
</tr>
</table>

<hr>

<center><p style="padding-bottom: 1.7%;"> Desenvolvido por Luan Gabriel de Vasconcelos OLiveira </p></center>

</footer>

</body>
</html>
