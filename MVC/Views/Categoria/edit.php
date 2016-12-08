



<div class="col-md-12 text-center">
  <h2>Editar usuario</h2>
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="<?php echo APP_URL."/Categoria/edit/".$Datos["id"];;?>" method="post">
      <?PHP  ?>

      <input type="hidden" name="id" value="<?php echo $Datos["id"]; ?>">
      <p>
        <label for="username">Categoria</label>
        <input type="text" name="name" class="form-control" value="<?php echo $Datos["name"]?>">
      </p>
      <p>
        <input type="submit" class="btn btn-sm btn-success" value="Actualizar">
      </p>
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
