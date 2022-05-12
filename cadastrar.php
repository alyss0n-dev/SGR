<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Ramal');

use \App\Entity\Ramal;

if(isset($_POST['num_ramal'],$_POST['loc_ramal'])){

    $obRamal = new Ramal;
    $obRamal->num_ramal = $_POST['num_ramal'];
    $obRamal->loc_ramal = $_POST['loc_ramal'];
    $obRamal->cadastrar();

    header ('location: index.php?status=sucess');
    exit;
  }

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';