DELIMITER //
CREATE TRIGGER tr_alimentacion_insert
AFTER INSERT ON alimentacion
FOR EACH ROW
BEGIN
INSERT INTO alimentacion_log (operacion,id_alimentacion,tipo_alimento,fecha)
VALUE('INSERT',NEW.id_alimentacion,NEW.tipo_alimento,NOW());
END;

DELIMITER //
CREATE TRIGGER tr_alimentacion_update
AFTER UPDATE ON alimentacion
FOR EACH ROW
BEGIN
INSERT INTO alimentacion_log (operacion,id_alimentacion,tipo_alimento,fecha)
VALUE('UPDATE',OLD.id_alimentacion,CONCAT('El nombre anterior: ',OLD.tipo_alimento, ' El nombre nuevo: ', NEW.tipo_alimento),NOW());
END;

DELIMITER //
CREATE TRIGGER tr_alimentacion_delete
BEFORE DELETE ON alimentacion
FOR EACH ROW
BEGIN
INSERT INTO alimentacion_log (operacion,id_alimentacion,tipo_alimento,fecha)
VALUE('DELETE',OLD.id_alimentacion,OLD.tipo_alimento,NOW());
END;/*no terminado 