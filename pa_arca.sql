DELIMITER //
CREATE PROCEDURE p_vrHabitat()
BEGIN
SELECT * FROM habitat;
END //

DELIMITER //
CREATE PROCEDURE p_vrClasificacion()
BEGIN
SELECT * FROM clasificacion;
END //

DELIMITER //
CREATE PROCEDURE p_vrAlimentacion()
BEGIN
SELECT * FROM alimentacion;
END //

DELIMITER //
CREATE PROCEDURE p_vrdosAlimentacion(IN alimentacion_id INT)
BEGIN
SELECT * FROM alimentacion WHERE id_alimentacion = alimentacion_id;
END//

DELIMITER //
CREATE PROCEDURE p_vrdosClasificacion(IN clasificacion_id INT)
BEGIN
SELECT * FROM clasificacion WHERE id_clasificacion = clasificacion_id;
END//

DELIMITER //
CREATE PROCEDURE p_vrdosHabitat(IN habitat_id INT)
BEGIN
SELECT * FROM habitat WHERE id_habitat = habitat_id;
END//

DELIMITER //
CREATE PROCEDURE p_vrdosAnimal(IN animal_id INT)
BEGIN
SELECT id_animal, nombre_animal, descripcion_animal, nombre_clasificacion, tipo_alimento, nombre_habitat
FROM animal
INNER JOIN clasificacion
ON animal.id_clasificacion_id = clasificacion.id_clasificacion
INNER JOIN alimentacion
ON animal.id_alimentacion_id = alimentacion.id_alimentacion
INNER JOIN habitat
ON animal.id_habitat_id = habitat.id_habitat
WHERE id_animal = animal_id
ORDER BY id_animal;
END//

DELIMITER //
CREATE PROCEDURE p_upAlimentacion(IN alimento_tipo VARCHAR(50), IN alimentacion_id INT)
BEGIN
UPDATE alimentacion SET tipo_alimento = alimento_tipo WHERE id_alimentacion = alimentacion_id;
END//

DELIMITER //
CREATE PROCEDURE p_upClasificacion(IN clasif_nombre VARCHAR(50), IN clasificacion_id INT)
BEGIN
UPDATE clasificacion SET nombre_clasificacion = clasif_nombre  WHERE id_clasificacion = clasificacion_id;
END//

DELIMITER //
CREATE PROCEDURE p_upHabitat(IN habitat_nombre VARCHAR(50), IN habitat_id INT)
BEGIN
UPDATE habitat SET nombre_habitat = habitat_nombre WHERE id_habitat = habitat_id;
END//

DELIMITER //
CREATE PROCEDURE p_upAnimal(IN animal_nombre VARCHAR(50), IN descr_animal VARCHAR(700), IN id_clasf_id INT, IN id_alim_id INT, IN id_hab_id INT, IN animal_id INT)
BEGIN
UPDATE animal SET nombre_animal = animal_nombre, descripcion_animal = descr_animal, id_clasificacion_id = id_clasf_id,
id_alimentacion_id = id_alim_id, id_habitat_id = id_hab_id
WHERE id_animal = animal_id;
END//

DELIMITER //
CREATE PROCEDURE p_insHabitat(IN nom_habitat VARCHAR(50))
BEGIN
INSERT INTO habitat (nombre_habitat) VALUES (nom_habitat);
END//

DELIMITER //
CREATE PROCEDURE p_insClasificacion(IN nom_clasif VARCHAR(50))
BEGIN
INSERT INTO clasificacion (nombre_clasificacion) VALUES (nom_clasif);
END//

DELIMITER //
CREATE PROCEDURE p_insAlimentacion(IN nom_alimento VARCHAR(50))
BEGIN
INSERT INTO alimentacion (tipo_alimento) VALUES (nom_alimento);
END//

DELIMITER //
CREATE PROCEDURE p_insAnimal(IN nom_anim VARCHAR(50),IN descr_animal VARCHAR(700),IN id_clasif_id INT,IN id_alim_id INT, IN id_hab_id INT)
BEGIN
INSERT INTO animal (nombre_animal, descripcion_animal, id_clasificacion_id, id_alimentacion_id, id_habitat_id) 
VALUES (nom_anim,descr_animal,id_clasif_id,id_alim_id,id_hab_id);
END//

DELIMITER //
CREATE PROCEDURE p_delHabitat(IN habitat_id INT)
BEGIN
DELETE FROM habitat WHERE id_habitat = habitat_id;
END//

DELIMITER //
CREATE PROCEDURE p_delClasificacion(IN clasif_id INT)
BEGIN
DELETE FROM clasificacion WHERE id_clasificacion = clasif_id;
END//

DELIMITER //
CREATE PROCEDURE p_delAlimentacion(IN aliment_id INT)
BEGIN
DELETE FROM alimentacion WHERE id_alimentacion = aliment_id;
END//

DELIMITER //
CREATE PROCEDURE p_delAnimal(IN animal_id INT)
BEGIN
DELETE FROM animal WHERE id_animal = animal_id;
END//

CREATE PROCEDURE p_vrAnimal()
BEGIN
SELECT id_animal, nombre_animal, descripcion_animal, nombre_clasificacion, tipo_alimento, nombre_habitat
FROM animal
INNER JOIN clasificacion
ON animal.id_clasificacion_id = clasificacion.id_clasificacion
INNER JOIN alimentacion
ON animal.id_alimentacion_id = alimentacion.id_alimentacion
INNER JOIN habitat
ON animal.id_habitat_id = habitat.id_habitat
WHERE id_animal = animal_id
ORDER BY id_animal;
END//

DELIMITER //
CREATE PROCEDURE p_vrAlimentacion_log()
BEGIN
SELECT * FROM arca.alimentacion_log;
END//

DELIMITER //
CREATE PROCEDURE p_vrAnimal_log()
BEGIN
SELECT * FROM arca.animal_log;
END//

DELIMITER //
CREATE PROCEDURE p_vrClasificacion_log()
BEGIN
SELECT * FROM arca.clasificacion_log;
END//

DELIMITER //
CREATE PROCEDURE p_vrHabitat_log()
BEGIN
SELECT * FROM arca.habitat_log;
END//

DELIMITER //
CREATE PROCEDURE p_contaAlimentacion()
BEGIN
SELECT id_alimentacion, COUNT(id_alimentacion) AS total FROM alimentacion;
END//

DELIMITER //
CREATE PROCEDURE p_contaClasificacion()
BEGIN
SELECT id_clasificacion, COUNT(id_clasificacion) AS total FROM clasificacion;
END//

DELIMITER //
CREATE PROCEDURE p_contaHabitat()
BEGIN
SELECT id_habitat, COUNT(id_habitat) AS total FROM habitat;
END//

DELIMITER //
CREATE PROCEDURE p_contaAnimal()
BEGIN
SELECT id_animal, COUNT(id_animal) AS total FROM animal;
END//