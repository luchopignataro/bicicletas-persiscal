CREATE DATABASE testPersiscal DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE testPersiscal;

/*
ACLARACIÓN:
	Dado el ejercicio, se diseña esta base de datos, especialmente
    para este ejercicio.

    De haber sido algo escalable, la misma tendría otras tablas
    como Marcas, Modelos, Rodados, Materiales, Velocidades, etc.
    para poder agregar a futuro otras opciones y dejar todo de manera
    dinámica.
*/

CREATE TABLE testPersiscal.bicicletas(
  id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  modelo varchar(60) NOT NULL,
  marca varchar(60) NOT NULL,
  usuario enum('unisex','mujer','hombre') NOT NULL,
  rodado enum('24','26','28') NOT NULL,
  material enum('aluminio','carbono') NOT NULL,
  velocidades enum('4','6','8') NOT NULL,
  color enum('negro','blanco','azul') NOT NULL,
  peso float(2,2),
  foto varchar(255),
  foto_dir varchar(255)
);

INSERT INTO
	testPersiscal.bicicletas (modelo, marca, usuario, rodado, material, velocidades, color, peso)
VALUES
	('SuperNova 26', 'Mr Bike','unisex','26', 'carbono', '8', 'blanco','22'),
	('Enduro ST', 'Alonzo','hombre','24', 'aluminio', '6', 'azul','30'),
	('City', 'Plexxie','unisex','26', 'aluminio', '4', 'negro','28'),
	('E-Bike She', 'Mr Bike','mujer','24', 'carbono', '8', 'blanco','28'),
	('Smart Bike', 'Shure','unisex','28', 'carbono', '8', 'negro','33');
