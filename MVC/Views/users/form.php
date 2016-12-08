<form class="container" action="" method="post">

<label for="nombre">Nombre: </label>
<input type="text" class="form-control"  name="nombre" autocomplete="off" autofocus><br>

<label for="correo">Correo electronico:</label>
<input type="email" class="form-control" name="correo"><br>

<label for="busqueda">Busqueda:</label>
<input type="search" class="form-control" name="busqueda"><br>

<label for="edad">Edad:</label>
<input type="number" class="form-control" name="edad"><br>

<label for="fecha">Fecha:</label>
<input type="date" class="form-control" name="fecha"><br>

<label for="pagina">Pagina:</label>
<input type="url" class="form-control" name="pagina"><br>

<label for="telefono">Telefono:</label>
<input type="tel" class="form-control" name="telefono"><br>
<p>
  <input list="navegadores" class="form-control">
  <datalist id="navegadores">
    <option value="Internet explorer"></option>
    <option value="Firefox"></option>
    <option value="Chrome"></option>
    <option value="Opera"></option>
    <option value="Safari"></option>
  </datalist>
</p>
<p>
  <label for="cal">Calificacion</label>
  <input type="range"  class="form-control" name="cal">
</p>
<p>
  <label for="cp">CP</label>
  <input type="text" class="form-control" name="cp" pattern="[0-9]{5}" max="6">
</p>

<button type="button" class="btn btn-info" onclick="alert('Hola mundo!')">Hola mundo</button>
<input type="submit" class="btn btn-success">
<input type="reset" class="btn btn-danger">


</form>
