<main>
<h2 class="mt-3"><?=TITLE?></h2>

<form method="post">

  <div class="form-group">
    <label>Número</label>
    <input type="text" class="form-control" name="num_ramal" value="<?=$obRamal->num_ramal?>">
  </div>

  <div class="form-group">
    <label>Localização</label>
    <input type="text" class="form-control" name="loc_ramal" value="<?=$obRamal->loc_ramal?>">
  </div>

   <div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>

</form>

</main>