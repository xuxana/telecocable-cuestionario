var directores = [{"nombre":"Ridley Scott", "pais":"EEUU", "peliculas":[{"titulo":"Blade Runner","ano":1982},{"titulo":"Black Hawk Down", "ano":2001}]}, 
				{"nombre":"John Carpenter", "pais":"EEUU", "peliculas":[{"titulo":"Estan Vivos", "ano":1988},{"titulo":"Rescate en Nueva York", "ano":1981}]}];

//imprime contenido JSON
console.log(JSON.stringify(directores));

//1-. LONGITUD DEL JSON DIRECTAMENTE
console.log(Object.keys(directores).length);

//2-. RECORRES EL JSON Y MEDIANTE UN CONTADOR SABES CUANTOS ELEMENTOS HAY
var count = 0;
for (var i in directores) {
	count++;
}
console.log(count);

