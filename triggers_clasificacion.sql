DELIMITER //
CREATE TRIGGER tr_clasificacion_insert
AFTER INSERT ON clasificacion
FOR EACH ROW
BEGIN
INSERT INTO clasificacion_log (operacion,id_clasificacion,nombre_clasificacion,fecha)
VALUE('INSERT',NEW.id_clasificacion,NEW.nombre_clasificacion,NOW());
END;

DELIMITER //
CREATE TRIGGER tr_clasificacion_update
AFTER UPDATE ON clasificacion
FOR EACH ROW
BEGIN
INSERT INTO clasificacion_log (operacion,id_clasificacion,nombre_clasificacion,fecha)
VALUE('UPDATE',OLD.id_clasificacion,CONCAT('El nombre anterior: ',OLD.nombre_clasificacion, ' El nombre nuevo: ', NEW.nombre_clasificacion),NOW());
END;

DELIMITER //
CREATE TRIGGER tr_clasificacion_delete
BEFORE DELETE ON clasificacion
FOR EACH ROW
BEGIN
INSERT INTO clasificacion_log (operacion,id_clasificacion,nombre_clasificacion,fecha)
VALUE('DELETE',OLD.id_clasificacion,OLD.nombre_clasificacion,NOW());
END;