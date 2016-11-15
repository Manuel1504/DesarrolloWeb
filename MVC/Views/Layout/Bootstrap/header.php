<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>FrameWork Basico</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["route_css"]?>/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["route_css"]?>/bootstrap-theme.css">
    <script src="<?php echo $_layoutParams["route_js"]?>/boostrap.js"></script>

  </head>
  <body>
    <header class="well well-lg text-center">
      <h3>Manuel Flores</h3>
    </header>
    <div class="container ">
      <?php if (!empty($_SESSION["logged"])) {?>
          <ul class="nav nav-tabs navbar navbar-inverse">
            <li role="presentation"> <?php echo $this->HTML->link("HOME",array("controller" => "index", "method" => "index"),"glyphicon glyphicon-home"); ?> </li>
            <li role="presentation"><?php echo $this->HTML->link("USERS",array("controller" => "users", "method" => "index"),"glyphicon glyphicon-user"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Perfiles de usuario",array("controller" => "Perfiles", "method" => "index"),"glyphicon glyphicon-globe"); ?></li>
            <li role="presentation"><a href="<?php echo APP_URL."/users/logout";?>">SALIR</a></li>
          <!--  <li class="dropdown">
              <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION["username"]; ?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
              </ul>
            </li>-->
          </ul>
        <?php  } ?>
    </div>
