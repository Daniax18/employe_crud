-- ---------------------------------------
-- DONNES DE TEST
-- ---------------------------------------

-- INSERTION DEPARTEMENT (Mety daholo eto fa par default le iray)

insert into departement values('DEPT1', 'Production');
insert into departement(nom_departement) values('Commercial');

-- INSERTION EMPLOYE
insert into employe values('E1', 'Admin', '2000-10-10', 10, 'admin', 'DEPT1', 1, 0);
insert into employe values('E2', 'Rasoa', '2000-10-10', 4, 'rasoa', 'DEPT_1', 0, 0);