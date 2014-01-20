<?php
	class MiClase
    { 
     	public $var1 = "value1";
     	public $var2 = "value2";
     	public $var3 = "value3";
         
    } 

	$clase = new MiClase();
	$a_clase = array();

	foreach ($clase as $key => $value) {
		$a_clase[$key]=$value;
	}

	echo count($a_clase);

?>