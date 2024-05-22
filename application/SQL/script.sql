create database employe;

\c employe;
-- -----------------------------------------------------------
-- DEPARTEMENT -----

CREATE SEQUENCE seq_departement START WITH 1 INCREMENT BY 1;

create table departement (
    id_departement varchar(50) DEFAULT 'DEPT_' || nextval('seq_departement') primary key,
    nom_departement varchar(50)
);

-- ------------------------------------------------------------
-- EMPLOYE

CREATE SEQUENCE seq_employe START WITH 1 INCREMENT BY 1;

create table employe(
    id_employe varchar(100) DEFAULT 'EMP_' || nextval('seq_employe') primary key,
    nom_employe varchar(100),
    dtn date,
    experience int,
    mdp varchar(100),
    id_departement varchar(50),
    is_admin int,
    is_active int,  -- Employe mbola tsy voroaka
    foreign key (id_departement) references departement(id_departement)
);

-- -----------------------------------------------------
