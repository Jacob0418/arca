DELIMITER //
CREATE TRIGGER tr_habitat_insert
AFTER INSERT ON habitat
FOR EACH ROW
BEGIN
INSERT INTO habitat_log (operacion,id_habitat,nombre_habitat,fecha)
VALUE('INSERT',NEW.id_habitat,NEW.nombre_habitat,NOW());
END;

DELIMITER //
CREATE TRIGGER tr_habitat_update
AFTER UPDATE ON habitat
FOR EACH ROW
BEGIN
INSERT INTO habitat_log (operacion,id_habitat,nombre_habitat,fecha)
VALUE('UPDATE',OLD.id_habitat,CONCAT('El nombre anterior: ',OLD.nombre_habitat, ' El nombre nuevo: ', NEW.nombre_habitat),NOW());
END;

DELIMITER //
CREATE TRIGGER tr_habitat_delete
BEFORE DELETE ON habitat
FOR EACH ROW
BEGIN
INSERT INTO habitat_log (operacion,id_habitat,nombre_habitat,fecha)
VALUE('DELETE',OLD.id_habitat,OLD.nombre_habitat,NOW());
END;