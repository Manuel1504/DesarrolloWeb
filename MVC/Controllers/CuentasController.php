<?php

/**
 *
 * @author Jose Manuel Flores Rodriguez
 * @copyright copyright 2016 UTRM Manu y asociados
 * @return Object
 */
class CuentasController extends Controller
{
/**
   * @author Jose Manuel Flores Rodriguez
   * @return  Constructor de la clase
   * */
  function __construct()
  {
    parent::__construct();
  }

/**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a la vista del index, agrega un Layout para la vista y manda una variable a la vista con informacion.
  */
  public function index()
  {


    $this->set("Cuenta",$this->cuentas->find("accounts,users","all"));
    $this->_view->setLayout("Bootstrap");

  }

/**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a la vista del add, agrega un Layout para la vista y agrega datos a la base de datos
  */
  public function add()
  {
    if ($_SESSION["Tipo"] == "1")
    {
     if ($_SESSION["Tipo"] == "1") {
        if ($_POST) {
          if ($this->cuentas->save("accounts",$_POST)) {
            $this->redirect(array("controller"=>"Cuentas", "method"=>"index"));
          }else
          {
            $this->redirect(array("controller"=>"Cuentas","method"=>"add"));
          }
        }
        $this->set("Users",$this->cuentas->find("users","all"));
        $this->_view->setLayout("Bootstrap");
     }
    }
  }
/**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a la vista del edit, agrega un Layout para la vista, manda datos recuperados a la base de datos en una variable y actualiza datos a la base de datos.
  */
  public function edit($id)
  {
    if ($_SESSION["Tipo"] == "1")
    {
     if ($id) {
      $option = array("conditions"=>"accounts.id=".$id);
      $Cuenta =  $this->cuentas->find("accounts","first",$option);
      $user = $this->cuentas->find("users","all");
      $this->set("Datos",$Cuenta);
      $this->set("Usuario",$user);
      $this->_view->setLayout("Bootstrap");
    }

     if ($_POST){
      if ($this->cuentas->Update("accounts",$_POST)) {
        $this->redirect(array("controller"=>"Cuentas", "method" => "index"));
      }else {
        $this->redirect(array("controller"=>"Cuentas", "method"=> "edit/".$_POST["id"]));
      }
    }
    }
  }
/**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a la vista del delete, agrega un Layout para la vista, elimina un registro.
  */
  public function delete($id)
  {
    if ($_SESSION["Tipo"] == "1")
    {
      $conditions = "id =".$id;
      if ($this->cuentas->delete("accounts",$conditions)) {
        $this->redirect(array("controller"=>"Cuentas","method"=>"index"));
      }else {
        $this->redirect(array("controller"=>"Cuentas","method" => "add"));
      }
    }
  }

}

 ?>
