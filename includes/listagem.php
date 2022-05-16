<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($ramais as $ramal){
    $resultados .= '<tr>
                      <td>'.$ramal->num_ramal.'</td>
                      <td>'.$ramal->loc_ramal.'</td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                            Nenhum Ramal encontrado
                                                       </td>
                                                    </tr>';

?>

<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="botoes">Cadastrar Ramal</button>
    </a>
  </section>

  <section>

    <table class="table">
        <thead>
          <tr>
            <th>Número</th>
            <th>Localização</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>

</main>