<?php

/**
 * 
 * @author Jose Manuel Flores Rodriguez
 * @copyright copyright 2016 UTRM Manu y asociados
 * @return Object 
 */
class perfilesController extends Controller
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

    $this->set("types",$this->perfiles->find("types","all"));
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
          if ($this->perfiles->save("types",$_POST)) {
            $this->redirect(array("controller"=>"perfiles", "method"=>"index"));
          }else
          {
            $this->redirect(array("controller"=>"perfiles","method"=>"add"));
          }
        }
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
      $option = array("conditions"=>"types.id=".$id);
      $perfil =  $this->perfiles->find("types","first",$option);
      $this->set("Perfil",$perfil);
      $this->_view->setLayout("Bootstrap");
    }

     if ($_POST) {
      if ($this->perfiles->Update("types",$_POST)) {
        $this->redirect(array("controller"=>"perfiles", "method" => "index"));
      }else {
        $this->redirect(array("controller"=>"perfiles", "method"=> "edit/".$_POST["id"]));
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
      if ($this->perfiles->delete("types",$conditions)) {
        $this->redirect(array("controller"=>"perfiles","method"=>"index"));
      }else {
        $this->redirect(array("controller"=>"perfiles","method" => "add"));
      }
    }
  }

}

 ?>
