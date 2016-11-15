



<div class="col-md-12 text-center">
  <h2>Editar usuario</h2>
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="<?php echo APP_URL."/perfiles/edit/".$Perfil["id"];;?>" method="post">
      <?PHP  ?>

      <input type="hidden" name="id" value="<?php echo $Perfil["id"]; ?>">
      <p>
        <label for="username">Usuario</label>
        <input type="text" name="name" class="form-control" value="<?php echo $Perfil["name"]?>">
      </p>
      <p>
        <input type="submit" class="btn btn-sm btn-success" value="Actualizar">
      </p>
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
