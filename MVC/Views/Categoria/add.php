<div class="col-md-12 text-center">
  <h2>Agregar categoria</h2>
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <form action="<?php echo APP_URL."/Categoria/add";?>" method="post">
      <p>
        <label for="name">Nombre</label>
        <input type="text" class="form-control" placeholder="Categoria" name="name">
      </p>

      <p class="text-center">
        <input type="submit" class="btn btn-success" value="Guardar">
      </p>
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
