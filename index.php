<!DOCTYPE html>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta charset="UTF-8"> 
<meta name="description" content="NAGA Culture, coming soon."> 
<meta name="keywords" content="Naga,Culture">

<head>

<title>NAGA Culture</title>

<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="icon" type="image/png" href="assets/img/naga_favicon.png" />
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.6/angular.min.js"></script>
<script  href="assets/js/script.js"></script>

</head>

<body>

<div id='content'>

  <section id='main-content'>
    <img id='naga-logo' src="assets/img/logo.svg"/>
    <p id='naga-cultura'>
      O QUE É CULTURA PRA VOCÊ?
    </p>
    <p id='naga-chegando'>
      ESTAMOS CHEGANDO EM 2017
    </p>
    <p id='naga-assine'>
      Fique por dentro de todas as novidades, assine nossa newsletter.
    </p>

    <form id='form-email' method="POST" action="webservices/save.php">
      <input class='input-style' name='username' id="username" placeholder="SEU NOME">
      <input class='input-style' name='email' id="email" placeholder="SEU E-MAIL">
      <button id="btn-enviar"  onclick="submitForm();" class="btn-style">ENVIAR</button>
      
    </form>
    <p class="naga-mensagem">
    	<?php 
    		if($_GET['status'] == 'sucesso'){
    			echo 'E-mail cadastrado com sucesso.';
    		}else if($_GET['status'] == 'incompleto'){
    			echo 'Preencha todos os campos.';
    		}
    	 ?>
    </p>
  </section>
</div>
</body>

</html>