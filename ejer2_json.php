<?php
$directores = '[{"nombre":"Ridley Scott", "pais":"EEUU", "peliculas":[{"titulo":"Blade Runner","ano":1982},{"titulo":"Black Hawk Down", "ano":2001}]}, {"nombre":"John Carpenter", "pais":"EEUU", "peliculas":[{"titulo":"Estan Vivos", "ano":1988},{"titulo":"Rescate en Nueva York", "ano":1981}]}]';

$a_directores = json_decode($directores);

//1-. TRANSFORMAS EL JSON EN ARRAY Y UTILIZAS COUNT
echo count($a_directores);

//2-. RECORRES EL JSON COMO UN ARRAY Y MEDIANTE UN CONTADOR SABES CUANTOS ELEMENTOS HAY
$count=0;
foreach ($a_directores as $director) {
	$count++;
}
echo $count;

?>