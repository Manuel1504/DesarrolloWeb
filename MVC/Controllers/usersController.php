<?php

/**
 * 
 * @author Jose Manuel Flores Rodriguez
 * @copyright copyright 2016 UTRM Manu y asociados
 * @return Object 
 */
class usersController extends Controller
{
  /**
   * @author Jose Manuel Flores Rodriguez
   * @return  Constructor de la clase
   * */
  public function __construct()
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

    $conditions = array("conditions" => "users.type_id = types.id");
    $this->set("users",$this->users->find("users, types","all", $conditions));
    $this->set("usersCount",$this->users->find("users","count"));
    $this->_view->setLayout("Bootstrap");

  }
/**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a la vista del form.
  */
  public function form()
  {

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
        if ($_POST) {
          $pass = new Password();
          $_POST["password"] = $pass->getPassword($_POST["password"]);
          if ($this->users->save("users",$_POST)) {
            $this->redirect(array("controller"=>"users"));
          }else
          {
            $this->redirect(array("controller"=>"add","method"=>"add"));
          }
        }
        $this->set("types",$this->users->find("types","all"));
        $this->_view->setLayout("Bootstrap");
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
      $option = array("conditions"=>"users.id=".$id);
      $user =  $this->users->find("users","first",$option);
      $this->set("user",$user);
      $this->set("types",$this->users->find("types","all"));
      $this->_view->setLayout("Bootstrap");
    }

     if ($_POST) {
      if (!empty($_POST["newPassword"])) {
        $pass = new Password();
        $_POST["password"] =$pass->getPassword($_POST["newPassword"]);

      }
      if ($this->users->Update("users",$_POST)) {
        $this->redirect(array("controller"=>"users", "method" => "index"));
      }else {
        $this->redirect(array("controller"=>"users", "method"=> "edit/".$_POST["id"]));
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
      if ($this->users->delete("users",$conditions)) {
        $this->redirect(array("controller"=>"users"));
      }else {
        $this->redirect(array("controller"=>"users","method" => "add"));
      }
    }
  }
  /**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a la vista del login, compara los datos recibidos con informacion de la base de datos y evalua si puede accesar o no.
  */
  public function login()
  {
    $this->_view->setLayout("Bootstrap");
    if ($_POST) {

      $pass = new Password();
      $auth = new Authorization();
      $filter = new Validations();

      $username = $filter->sanitizeText($_POST["username"]);
      $password = $filter->sanitizeText($_POST["password"]);

      $option = array("conditions" => "username = '$username'");
      $user = $this->users->find("users","first",$option);

      if ($pass->isValid($password,$user["password"])) {
        $auth->login($user);
        $this->redirect(array("controller" => "index","method" => "index"));
      }else
      {
        echo "usuario no valido";
      }
    }

  }
  /**
  *@return Void
  * @author Jose Manuel Flores Rodriguez
  * @method void Metodo que llama a al metodo de la clase Authorization que contiene el metodo de logout.
  */
  public function logout()
  {
    $auth = new Authorization();
    $auth->logout();

  }
}

 ?>
