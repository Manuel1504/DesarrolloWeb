<?php

/**
 * 
 * @author Jose Manuel Flores Rodriguez
 * @copyright copyright 2016 UTRM Manu y asociados
 * @return Object 
 */
class indexController extends Controller
{
	/**
	*@return Void
	* @author Jose Manuel Flores Rodriguez
	* @method void Metodo que llama a la vista del index y agrega un Layout para la vista
	*/
  public function index()
  {
   $this->_view->setLayout("Bootstrap");
  }
}


 ?>
