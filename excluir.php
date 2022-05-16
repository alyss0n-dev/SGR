<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Ramal;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTAR O RAMAL
$obRamal = Ramal::getRamal($_GET['id']);

//VALIDAÇÃO DO RAMAL
if(!$obRamal instanceof Ramal){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obRamal->excluir();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';