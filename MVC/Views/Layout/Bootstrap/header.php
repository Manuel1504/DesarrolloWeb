<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height">
    <title>FrameWork Basico</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["route_css"]?>/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["route_css"]?>/responsiveNew.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["route_css"]?>/bootstrap-theme.css">
    <script src="<?php echo $_layoutParams["route_js"]?>/boostrap.js"></script>
    <script src="<?php echo $_layoutParams["route_js"]?>/jquery.js"></script>
    <style>
    #menu
    {
      font-size: 1.25em;
      width: 100%;
      background-color: white;
      border-radius: 0px;
    }
    #menu .btn-menu
    {
      display: block;
      padding: 10px;
      text-decoration: none;
      color: #333;
      font-weight: bold;

    }

    #menu span
    {
      float: right;
    }
    @media (min-width: 0px )
    {
      #Monitor
      {
        display: none;
      }
      #Telefono
      {
        display: block;
      }
    }
    @media (min-width: 768px )
    {
      #Monitor
      {
        display: block;
      }
      #Telefono
      {
        display: none;
      }
      #menu
      {
        display: none;
      }
    }
    </style>
    <script>
    $(document).ready(function(){

    $("#menu").click(function(){
        $("#Telefono").slideToggle("slow");

    });
    });


    </script>
  </head>
  <body>
    <div class="row" style="background-color:red; padding: 0 15px;"></div>
    <header class="well well-lg text-center">
      <h3>Personal Counter</h3>

    <div class="container-fluid">

      <nav id="NavPrincipal">
      <?php if (!empty($_SESSION["logged"])) {?>
        <div id="menu">
          <a href="#" class="btn-menu"><span class="caret"></span>Menu</a>
        </div>
          <ul id="Telefono"  class=" nav-pills nav-stacked col-xs-12  nav nav-tabs text-left ">
            <li role="presentation"> <?php echo $this->HTML->link("Inicio",array("controller" => "index", "method" => "index"),"glyphicon glyphicon-home"); ?> </li>
            <li role="presentation"><?php echo $this->HTML->link("Usuarios",array("controller" => "users", "method" => "index"),"glyphicon glyphicon-user"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Perfiles de usuario",array("controller" => "Perfiles", "method" => "index"),"glyphicon glyphicon-globe"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Categorias",array("controller" => "Categoria", "method" => "index"),"glyphicon glyphicon-th-list"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Cuentas",array("controller" => "Cuentas", "method" => "index"),"glyphicon glyphicon-phone"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Transacciones",array("controller" => "Transacciones", "method" => "index"),"glyphicon glyphicon-credit-card"); ?></li>
            <li id="btnSalir" role="presentation"><a style="text-decoration:none; color:gray;" href="<?php echo APP_URL."/users/logout";?>">SALIR</a></li>
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

          <ul id="Monitor" class=" col-xs-12  nav nav-tabs ">
            <li role="presentation"><?php echo $this->HTML->link("Inicio",array("controller" => "index", "method" => "index"),"glyphicon glyphicon-home"); ?> </li>
            <li role="presentation"><?php echo $this->HTML->link("Usuarios",array("controller" => "users", "method" => "index"),"glyphicon glyphicon-user"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Perfiles de usuario",array("controller" => "Perfiles", "method" => "index"),"glyphicon glyphicon-globe"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Categorias",array("controller" => "Categoria", "method" => "index"),"glyphicon glyphicon-th-list"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Cuentas",array("controller" => "Cuentas", "method" => "index"),"glyphicon glyphicon-phone"); ?></li>
            <li role="presentation"><?php echo $this->HTML->link("Transacciones",array("controller" => "Transacciones", "method" => "index"),"glyphicon glyphicon-credit-card"); ?></li>
            <li id="btnSalir1" role="presentation"><a style="text-decoration:none; hover: background-color:red;" href="<?php echo APP_URL."/users/logout";?>">SALIR</a></li>
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
      </nav>
      </header>
    </div>
    <div class="row"></div>
