<div class="container">
  <div class="col-md-12">
    <div class="col-md-4 text-left">
    </div>
    <div class="col-md-4 text-center">
      <h4>Cuentas</h4>
    </div>
    <div class="col-md-4 text-right">

        <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar cuenta",array("controller" => "Cuentas", "method" => "add"),"glyphicon glyphicon-plus"); }?>

    </div>
  </div>
  <?php if (!empty($Cuenta)){ ?>
      <div class="table-responsive">
  <table class="table table-hover table-condensed">
    <Thead class="text-center">
     <tr>
       <th>Numero</th>
       <th>Usuario</th>
       <th>Descripcion</th>
       <?php if ($_SESSION["Tipo"] == 1) {?>
       <th>Acciones</th>
       <?php}else{ ?>
         <th></th>
         <?php } ?>
     </tr>
    </Thead>
    <tbody>

      <?php foreach ($Cuenta as $Datos): ?>
      <tr>
       <td><?php  echo $Datos["accounts"]["id"]; ?></td>
       <td><?php  echo $Datos["users"]["username"]; ?></td>
       <td><?php  echo $Datos["accounts"]["name"]; ?></td>

       <?php if ($_SESSION["Tipo"] == 1) {?>
         <td>
           <?php echo $this->HTML->link("Edit",array("controller" => "Cuentas", "method" => "edit", "arg" => $Datos["accounts"]["id"]),"glyphicon glyphicon-cog"); ?>
           <?php echo $this->HTML->link("Delete",array("controller" => "Cuentas", "method" => "delete", "arg" => $Datos["accounts"]["id"]),"glyphicon glyphicon-remove"); ?>
         </td>
       <?php}else{ ?>
         <td></td>
         <?php } ?>

      </tr>
    <?php endforeach ?>
    </tbody>
  </table>
</div>
  <?php } ?>

</div>
