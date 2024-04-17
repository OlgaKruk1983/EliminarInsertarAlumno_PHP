CREATE DATABASE base1;
use base1;
CREATE TABLE cursos(
    codigo int(10),
    nombrecurso varchar(30),
    email varchar(30)
);
INSERT INTO cursos(codigo, nombrecurso, email)VALUES(352,"carlos","krukolga2017@gmail.com");
drop table cursos;


CREATE TABLE alumnos(
    codigo int(20),
    nombre VARCHAR(30),
    email VARCHAR(30)
    );

    INSERT INTO alumnos(codigo,nombre,email)VALUES(1,"Carlos","aaa@ee");
    INSERT INTO alumnos(codigo,nombre,email)VALUES(1,"Carlos","aaa@ee");