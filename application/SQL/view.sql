-- VIEW EMPLOYE GENERAL
create or replace view v_employe_detail as (
    select 
        departement.nom_departement,
        employe.*
    from employe
    join departement on departement.id_departement = employe.id_departement
);

-- -----------------------------------------