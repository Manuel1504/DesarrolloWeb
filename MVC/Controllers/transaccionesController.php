<?php

/**
 *
 * @author Jose Manuel Flores Rodriguez
 * @copyright copyright 2016 UTRM Manu y asociados
 * @return Object
 */
class transaccionesController extends Controller
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

    $this->set("Datos",$this->transacciones->find("transactions","all"));
    $this->set("Categoria",$this->transacciones->find("categories","all"));
    $this->set("Cuenta",$this->transacciones->find("accounts","all"));
    $this->set("c",$this->transacciones->find("transactions","Suma"));
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
          if ($this->transacciones->save("transactions",$_POST)) {
            $this->redirect(array("controller"=>"Transacciones", "method"=>"index"));
          }else
          {
            $this->redirect(array("controller"=>"Transacciones","method"=>"add"));
          }
        }
        $categoria = $this->transacciones->find("categories","all");
        $cuentas = $this->transacciones->find("accounts","all");
        $this->set("Categoria",$categoria);
        $this->set("Cuentas",$cuentas);
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
      $option = array("conditions"=>"transactions.id=".$id);
      $Categoria =  $this->transacciones->find("categories","all");
      $Cuenta = $this->transacciones->find("accounts","all");
      $Transaccion = $this->transacciones->find("transactions","first",$option);
      $this->set("Categoria",$Categoria);
      $this->set("Cuenta",$Cuenta);
      $this->set("Datos",$Transaccion);
      $this->_view->setLayout("Bootstrap");
    }

     if ($_POST){
      if ($this->transacciones->Update("transactions",$_POST)) {
        $this->redirect(array("controller"=>"Transacciones", "method" => "index"));
      }else {
        $this->redirect(array("controller"=>"Transacciones", "method"=> "edit/".$_POST["id"]));
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
      if ($this->transacciones->delete("transactions",$conditions)) {
        $this->redirect(array("controller"=>"Transacciones","method"=>"index"));
      }else {
        $this->redirect(array("controller"=>"Transacciones","method" => "add"));
      }
    }
  }

}

 ?>
