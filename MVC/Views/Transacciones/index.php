
<div class="container">
  <div class="col-md-12">
    <div class="col-md-4 text-left">

    </div>
    <div class="col-md-4 text-center">
      <h4>Transacciones</h4>
    </div>
    <div class="col-md-4 text-right">
        <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar transaccion",array("controller" => "Transacciones", "method" => "add"),"glyphicon glyphicon-plus");}?>
    </div>
  </div>
  <?php if (!empty($Datos)){ ?>

    <p>
      <label>Balance General:</label> <strong> <?php print_r($c);?> </strong>
    </p>
    <div class="table-responsive">
  <table class="table table-hover table-condensed ">
    <Thead class="text-center">
     <tr>
       <th>Serie</th>
       <th>Cuenta</th>
       <th>Categoria</th>
       <th>Descripcion</th>
       <th>Fecha</th>
       <th>Cantidad</th>
       <?php if ($_SESSION["Tipo"] == 1) {?>
       <th>Acciones</th>
       <?php}else{ ?>
         <th></th>
         <?php } ?>
     </tr>
    </Thead>
    <tbody>

      <?php foreach ($Datos as $data){ ?>
      <tr>
       <td><?php  echo $data["transactions"]["id"]; ?></td>
       <?php  foreach ($Cuenta as $key) {
         if ($key["accounts"]["id"] == $data["transactions"]["account_id"]) { ?>
       <td><?php  echo $key["accounts"]["name"]; ?></td>
        <?php }
       } ?>

       <?php  foreach ($Categoria as $key) {
         if ($key["categories"]["id"] == $data["transactions"]["category_id"]) { ?>
       <td><?php  echo $key["categories"]["name"]; ?></td>
        <?php }
       } ?>


       <td><?php  echo $data["transactions"]["description"]?></td>
       <td><?php  echo $data["transactions"]["date"]?></td>
       <?php if ($data["transactions"]["amount"] > 0){ ?>
                <td style="color:green;">$<?php  echo number_format($data["transactions"]["amount"], 2 , "." ,",");?></td>
       <?php } else { ?>
            <td style="color:red;">$<?php  echo number_format($data["transactions"]["amount"], 2 , "." ,",");?></td>
            <?php } ?>
       <?php if ($_SESSION["Tipo"] == 1) {?>
         <td>
           <?php echo $this->HTML->link("Edit",array("controller" => "Transacciones", "method" => "edit", "arg" => $data["transactions"]["id"]),"glyphicon glyphicon-cog"); ?>
           <?php echo $this->HTML->link("Delete",array("controller" => "Transacciones", "method" => "delete", "arg" => $data["transactions"]["id"]),"glyphicon glyphicon-remove"); ?>
         </td>
       <?php}else{ ?>
         <td></td>
         <?php } ?>

      </tr>
    <?php } ?>
    </tbody>
  </table>
  </div>
  <?php } ?>

</div>
