<div class="container">
  <div class="col-md-12">
    <div class="col-md-4 text-left">
      <h4>Numero de usuarios:</h4><?php echo $usersCount; ?>
    </div>
    <div class="col-md-4 text-center">
      <h4>Usuarios</h4>
    </div>
    <div class="col-md-4 text-right">
        <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar usuario",array("controller" => "users", "method" => "add"),"glyphicon glyphicon-plus");}?>
    </div>
  </div>
  <?php if (!empty($users)){ ?>
    <div class="table-responsive">
  <table class="table table-hover table-condensed">
    <Thead class="text-center">
     <tr>
       <th>Numero</th>
       <th>Usuario</th>

       <th>Rol</th>
       <?php if ($_SESSION["Tipo"] == 1) {?>
       <th>Acciones</th>
       <?php}else{ ?>
         <th></th>
         <?php } ?>
     </tr>
    </Thead>
    <tbody>

      <?php foreach ($users as $user): ?>
      <tr>
       <td><?php  echo $user["users"]["id"]; ?></td>
       <td><?php  echo $user["users"]["username"]; ?></td>

       <td><?php  echo $user["types"]["name"]?></td>

       <?php if ($_SESSION["Tipo"] == 1) {?>
         <td>
           <?php echo $this->HTML->link("Edit",array("controller" => "users", "method" => "edit", "arg" => $user["users"]["id"]),"glyphicon glyphicon-cog"); ?>
           <?php echo $this->HTML->link("Delete",array("controller" => "users", "method" => "delete", "arg" => $user["users"]["id"]),"glyphicon glyphicon-remove"); ?>
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
