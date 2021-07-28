-----Creando la base de datos con nombre registro----
CREATE DATABASE Registro
-----Usando la base de datos Registro----
USE Registro
----Crendo tablas----
---Tabla alumno----
CREATE TABLE alm_alumno (
alm_id INT PRIMARY KEY IDENTITY (1,1) NOT NULL,
alm_codigo VARCHAR(100) NOT NULL,
alm_nombre VARCHAR(300) NOT NULL,
alm_edad INT NOT NULL,
alm_sexo VARCHAR(300) NOT NULL,
alm_id_grd INT NOT NULL,
alm_observacion VARCHAR(300)
);
---Tabla materia---
CREATE TABLE mat_materia(
mat_id INT PRIMARY KEY IDENTITY (1,1) NOT NULL,
mat_nombre VARCHAR(100)
);

---Tabla Grado---
CREATE TABLE grd_grado(
grd_id INT PRIMARY KEY IDENTITY (1,1) NOT NULL,
grd_grado VARCHAR(100)
);

---Tabla pivote para materias y grado---
CREATE TABLE mxg_materiasxgrado(
mxg_id INT PRIMARY KEY IDENTITY (1,1) NOT NULL,
mxg_id_grd INT NOT NULL,
mxg_id_mat INT NOT NULL
)
---Insertando datos a la tabla grado---
INSERT INTO [grd_grado]
           ([grd_grado])
     VALUES
           ('primero');


SELECT [grd_id]
      ,[grd_grado]
  FROM [dbo].[grd_grado]

---prueba par accreacion de llave foranea---
ALTER TABLE dbo.mxg_materiasxgrado

ADD FOREIGN KEY (mxg_id_grd) REFERENCES grd_grado(grd_id);
---llave forannea materia--
ALTER TABLE dbo.mxg_materiasxgrado

ADD FOREIGN KEY (mxg_id_mat) REFERENCES mat_materia(mat_id);
---llave foranea de alummno--
ALTER TABLE dbo.alm_alumno
ADD FOREIGN KEY (alm_id_grd) REFERENCES grd_grado(grd_id);

 ---innerjoin para la tanla derivada---
 SELECT mxg_id_grd,mxg_id_mat
FROM mxg_materiasxgrado
INNER JOIN grd_grado
ON mxg_materiasxgrado.mxg_id_grd = grd_grado.grd_id ;
----INNER JOIN mat_materias ON mxg_materiasxgrado.mxg_id_mat=mat_id----
---Select para corrobaorar eliminar--
SELECT * FROM grd_grado;
---Select para alumnos---
SELECT * FROM	alm_alumno;
---Insert para ingresar datos---
INSERT INTO [dbo].[alm_alumno]
           ([alm_codigo]
           ,[alm_nombre]
           ,[alm_edad]
           ,[alm_sexo]
           ,[alm_id_grd]
           ,[alm_observacion])
     VALUES
           ('alm1000',
           'Juan',
           8,
           'masculino',
           1,
          'platica');

SELECT alm.alm_nombre,grd.grd_grado
FROM alm_alumno alm
INNER JOIN grd_grado grd
ON alm.alm_id_grd=grd.grd_id
INNER JOIN mat_materia mat 
ON grd.grd_grado
