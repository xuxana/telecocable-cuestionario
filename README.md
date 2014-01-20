telecocable_cuestionario
========================

Cuestionario oferta empleo telecocable

Tratando siempre de conseguir el resultado mas óptimo y definiendo los elementos que necesites para cada pregunta, escribe el código necesario si se requiere para contestar a las siguientes preguntas:

a. Escribe el código necesario para recorrer un array del tipo siguiente en javascript
array( array( ‘nombre’,’apellidos’,’dni’) )
Si hubiera 20 índices y quisiéramos diseñar un tabla e insertarla en el cuerpo de la pagina (siempre usando el DOM)

b. Enumera todas las maneras que conoces para conocer la longitud de objeto json en js. Indica también las formas que conoces de hacer la misma operación en php.

c. Teniendo la estructura de html en cualquier lugar de nuestra página, y sin poder editarlo...
<div id=’message’><div><span>Welcome</span> <span>user</span></div><button>Ok</button></div>
Cual sería la manera mas sencilla, utilizando jquery, de aplicar un evento tal que cuando se pulse sobre el botón, reemplace el texto Welcome, por Bienvenido 

d. Enumera todas las formas que conozcas de cargar y ejecutar javascript en tu página de forma asíncrona

e. ¿Que formas conoces para dotar a las aplicaciones basadas en ajax (Single Page Application) la funcionalidad de avanzar y retroceder en el historial? 

f. Transforma el código necesario con el objetivo de definir un callback que se ejecute al final de todo el proceso y nos devuelva el valor de n. Suponemos que data responderá el valor del parámetro num
function(){
	var n = 0;
	$.get(‘data’, {num: 10}, function(res){
		n = n * res;
	});
	setTimeout(function(){
		n = n * 2;
	}, 0);
	n = n + 2;
};

g. En php, teniendo una clase la cual es extendida por varias y que dispone de un método que necesitamos utilizar... ¿Que opciones tenemos para saber cual es el tipo de objeto sobre el que estamos actualmente dentro de este método? 
Además, de que métodos dispondríamos para obtener el mismo resultado si se tratara de una función estática?

h. Describe y explica con código php la estructura de una clase que pueda ser iterada mediante la función foreach y que nos devuelva su número de índices mediante la función count

i. En php, dada una clase padre que tiene una función cuya salida es el número de filas que existen en una supuesta tabla de nuestra base de datos denominada “productos”, muestra en código como sería una clase que extienda de esta y que devuelva el número de filas de la misma tabla, pero multiplicado por 100. Has de tener en cuenta que que los nombres de la función deben tener el mismo nombre en ambos casos.

j. Describe brevemente los componentes (clases, estructuras, frameworks) que utilizarías en una aplicación en php con soporte para múltiples idiomas

k. Dada una tabla de “empleados”, otra de “solicitudes” (por ej solicitud de revisión médica o de algún tipo de documentación) y otra “estados” donde se define el histórico de estados de estas, forma la query necesaria para obtener de un solo empleado la información de este, de las solicitudes y sus estados 

l. Indica la SQL necesaria para particionar una tabla si tenemos que la columna ‘tipo’ identifica los tipos de fila que existen, teniendo solo los tipos 1, 2 y 3.

