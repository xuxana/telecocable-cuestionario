/*SELECCIONAMOS ÚNICAMENTE LOS CAMPOS QUE ME PUEDEN SERVIR PARA MOSTRAR INFORMACIÓN
//DESPUES HACEMOS 2 JOIN PRIMERO EMPLEADOS Y SOLICITUDES (SOLO SE DEVOLVERAN LOS EMPLEADOS QUE TENGAN SOLICITUDES)
//EL SEGUNDO JOIN DEVOLVERA TODOS LOS ESTADOS DE LAS SOLICITUDES ENCONTRADAS
//FINALMENTE SE FILTRA A UN ÚNICO EMPLEADO
*/
SELECT e.id as id_empleado, e.nombre, e.apellidos, e.dni, s.id as id_solicitud, s.tipo, s.referencia,
		s.fecha_solicitud, se.id as id_estado, se.estado, se.fecha_estado 
FROM (
 `empleados` AS e
INNER JOIN `solicitudes` AS s ON e.id = s.empleados_id
)
INNER JOIN `solicitudes_estados` AS se ON se.solicitudes_id = s.id
WHERE e.id = '1'
