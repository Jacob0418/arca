DELIMITER //
CREATE TRIGGER tr_animal_insert
AFTER INSERT ON animal
FOR EACH ROW
BEGIN
INSERT INTO animal_log (operacion,id_animal,nombre_animal,descripcion_animal,id_clasificacion_id,id_alimentacion_id,id_habitat_id,fecha)
VALUE('INSERT',NEW.id_animal,NEW.nombre_animal,NEW.descripcion_animal,NEW.id_clasificacion_id,NEW.id_alimentacion_id,NEW.id_habitat_id,NOW());
END;

DELIMITER //
CREATE TRIGGER tr_animal_update
AFTER UPDATE ON animal
FOR EACH ROW
BEGIN
INSERT INTO animal_log (operacion,id_animal,nombre_animal,descripcion_animal,id_clasificacion_id,id_alimentacion_id,id_habitat_id,fecha)
VALUE('UPDATE',OLD.id_animal,CONCAT('El nombre anterior: ',OLD.nombre_animal, ' El nombre nuevo: ', NEW.nombre_animal),OLD.descripcion_animal,
OLD.id_clasificacion_id,OLD.id_alimentacion_id,OLD.id_habitat_id,NOW());
END;

DELIMITER //
CREATE TRIGGER tr_animal_delete
BEFORE DELETE ON animal
FOR EACH ROW
BEGIN
INSERT INTO animal_log (operacion,id_animal,nombre_animal,descripcion_animal,id_clasificacion_id,id_alimentacion_id,id_habitat_id,fecha)
VALUE('DELETE',OLD.id_animal,OLD.nombre_animal,OLD.descripcion_animal,
OLD.id_clasificacion_id,OLD.id_alimentacion_id,OLD.id_habitat_id,NOW());
END;