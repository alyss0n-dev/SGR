<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Ramal');

use \App\Entity\Ramal;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
  } 

//CONSULTA A VAGA
$obRamal = Ramal::getRamal($_GET['id']);


//VALIDAÇÃO DA VAGA
if(!$obRamal instanceof Ramal){
    header('location: index.php?status=error');
    exit;
  }

if(isset($_POST['num_ramal'],$_POST['loc_ramal'])){

    $obRamal->num_ramal = $_POST['num_ramal'];
    $obRamal->loc_ramal = $_POST['loc_ramal'];
    print_r($obRamal);
    $obRamal->atualizar();

    header ('location: index.php?status=sucess');
    exit;
  }

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';