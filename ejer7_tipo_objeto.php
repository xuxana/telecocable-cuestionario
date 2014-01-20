<?php
//CLASE PADRE
class MiClasePadre {
	
    public function getTipoObjeto()
    {
        return "Soy del tipo: " . get_class($this);
    }

    public static function getTipoObjetoEstatico()
    {
        return "Soy del tipo: " . get_called_class();
    }
}
//CLASE HIJO 1
class MiClaseHijo1 extends MiClasePadre{}
//CLASE HIJO 2
class MiClaseHijo2 extends MiClasePadre{}


//SE CREA UN OBJETO DE TIPO MiClaseHijo2 PARA PROBAR METODO CON get_class()
$obj2 = new MiClaseHijo2();
//IMPRIME EL NOMBRE DE LA CLASE DEL OBJETO 2
echo $obj2->getTipoObjeto();
echo "<br><br>";


//PARA EL METODO ESTÁTICO NO HACE FALTA INSTANCIAR EL OBJETO
//HACEMOS LA COMPROBACIÓN DE LA FUNCIÓN get_called_class() CON UN OBJETO DE TIPO MiClaseHijo1
echo MiClaseHijo1::getTipoObjetoEstatico();
?>