<div class="container">
  <div class="col-md-12">
    <div class="col-md-4 text-left">
    </div>
    <div class="col-md-4 text-center">
      <h4>Categorias</h4>
    </div>
    <div class="col-md-4 text-right">

        <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar categoria",array("controller" => "Categoria", "method" => "add"),"glyphicon glyphicon-plus"); }?>

    </div>
  </div>
  <?php if (!empty($Datos)){ ?>
  <table class="table table-hover table-condensed table-responsive">
    <Thead class="text-center">
     <tr>
       <th>Numero</th>
       <th>Descripcion</th>
       <?php if ($_SESSION["Tipo"] == 1) {?>
       <th>Acciones</th>
       <?php}else{ ?>
         <th></th>
         <?php } ?>
     </tr>
    </Thead>
    <tbody>

      <?php foreach ($Datos as $tipo): ?>
      <tr>
       <td><?php  echo $tipo["categories"]["id"]; ?></td>
       <td><?php  echo $tipo["categories"]["name"]; ?></td>

       <?php if ($_SESSION["Tipo"] == 1) {?>
         <td>
           <?php echo $this->HTML->link("Edit",array("controller" => "Categoria", "method" => "edit", "arg" => $tipo["categories"]["id"]),"glyphicon glyphicon-cog"); ?>
           <?php echo $this->HTML->link("Delete",array("controller" => "Categoria", "method" => "delete", "arg" => $tipo["categories"]["id"]),"glyphicon glyphicon-remove"); ?>
         </td>
       <?php}else{ ?>
         <td></td>
         <?php } ?>

      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
  <?php } ?>

</div>
