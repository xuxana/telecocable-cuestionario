<?php
class MiClasePadre{

	public function getNumFilas()
	{
		//Suponemos que la siguiente sentencia deduelve el número de filas
		//$numfilas=Productos::model()->getTotalProductos();
		return $numfilas=2345;  
	}
}

class MiClaseHijo extends MiClasePadre{

	public function getNumFilas()
	{
		return parent::getNumFilas()*100;
	}

}

$objHijo=new MiClaseHijo();
echo $objHijo->getNumFilas();

?>