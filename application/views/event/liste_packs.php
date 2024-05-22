
<?php
    $this->load->helper('my_helper');
?> 

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between align-items-center mb-5">
                <h4 class="card-title"> La liste des packs de l'event : "<?php echo $event['nom_event'] ?>"</h4>
                <div class="nav-search">
                    <a 
                        data-bs-toggle="modal" 
                        data-bs-target="#vente"
                    > 
                        <button class="btn btn-success">
                            Vente billet
                        </button>
                    </a>  

                    <a 
                        href="<?php echo site_url("event/eventController/insertEventPack") . "/" . $event['id_event'] ?>"
                    > 
                        <button class="btn btn-outline-success">
                            Ajouter pack +
                        </button>
                    </a>  
                </div>
            </div>

            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr class="text-center">
                    <th>Photo</th>
                    <th>Reference</th>
                    <th>Nom pack</th>
                    <th >Montant</th>
                    <th >Remarque</th>
                    <th width="10%"></th>
                    <th width="10%"></th>
                    <th width="10%"></th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($packs as $pack){ ?>
                    <tr>
                        <td class="py-1 text-center">
                            <img 
                            src="<?php echo base_url() ?>assets/images/pack/<?php echo $pack['path_image'] ?>" 
                            alt="image"
                            width="100px"
                            height="100px"
                            />
                        </td>
                        <td> <?php echo $pack['id_pack'] ?> </td>
                        <td> <?php echo $pack['nom_pack'] ?> </td>
                        <td class="text-right"> Ar <?php echo format($pack['montant']) ?> </td>
                        <td> <?php echo $pack['remarque'] ?> </td>
                        <td class="text-center"> 
                            <a 
                                href="<?php echo site_url("event/DetailPackContoller/listeDetailPack") . "/" . $pack['id_pack'] ?>"
                            > 
                                Voir details
                            </a>  
                        </td>
                        <td class="text-center"> 
                            <a 
                                href="<?php echo site_url("event/packController/updatePackPage") . "/" . $pack['id_pack']  ?>"
                                class="btn btn-outline-secondary"
                            > 
                                Modifier
                            </a>  
                        </td>
                        <td class="text-center"> 
                            <a 
                                href="<?php echo site_url("produit/enqueteController/detailProduitEnquete") ?>"
                                class="btn btn-outline-danger"
                            > 
                                Supprimer   
                            </a>  
                        </td>
                    </tr>
                <?php } ?>
                
                </tbody>
            </table>
            </div>
        </div>
    </div>
     <!-- MODAL AJOUT VENTE -->
     <div class="modal fade" id="vente" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle"> Choisir une photo : </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form 
                        action="<?php echo site_url("vente/venteController/insertVente") ?>"
                        method="post" 
                    >
                    <input type="hidden" name="id_event" value = "<?php echo $event['id_event'] ?>">

                    <!-- CONTRIBUTORS -->
                    <div class="form-group d-flex flex-row justify-content-between align-items-center">
                        <label for="exampleSelectGender">Etudiant :</label>
                        <select 
                            style="width: 80%"
                            class="form-control" 
                            id="exampleSelectGender" 
                            name = "id_contributor"
                        >
                            <option> 
                                Choisir parmi les etudiants ...
                            </option>
                            <?php foreach($contributors as $contributor){ ?>
                                <option value="<?php echo $contributor['id_contributor'] ?>"> 
                                    <?php echo $contributor['nom_contributor'] ?> 
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <!-- PACKS -->
                    <div class="form-group d-flex flex-row justify-content-between align-items-center">
                        <label for="exampleSelectGender">PACK :</label>
                        <select 
                            style="width: 80%"
                            class="form-control" 
                            id="exampleSelectGender" 
                            name = "id_pack"
                        >
                            <option> 
                                Choisir parmi les packs ...
                            </option>
                            <?php foreach($packs as $pack){ ?>
                                <option value="<?php echo $pack['id_pack'] ?>"> 
                                    <?php echo $pack['nom_pack'] ?> 
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                     <!-- NOMBRE DE BILLET -->
                     <div class="form-group d-flex flex-row justify-content-between align-items-center">
                            <label for="exampleInputName1">Billet : </label>
                            <input
                                style="width: 80%"
                                type="number" 
                                class="form-control" 
                                id="exampleInputName1" 
                                placeholder="Nombre de billet"
                                name = "billet"
                            >
                        </div>
                        
                        <!-- CLIENT -->
                        <div class="form-group d-flex flex-row justify-content-between align-items-center">
                            <label for="exampleInputEmail3">Client :</label>
                            <input
                                style="width: 80%"
                                type="text" 
                                class="form-control" 
                                id="exampleInputtext3" 
                                placeholder="Nom du client"
                                name ="client"
                            >
                        </div>

                         <!-- LIEU DE LIVRAISON -->
                         <div class="form-group d-flex flex-row justify-content-between align-items-center">
                            <label for="exampleInputEmail3">Lieu :</label>
                            <input
                                style="width: 80%"
                                type="text" 
                                class="form-control" 
                                id="exampleInputtext3" 
                                placeholder="Lieu de livraison"
                                name ="lieu"
                            >
                        </div>

                </div>
                <div class="modal-footer d-flex flex-row justify-content-between mx-auto">
                    <button type="submit" class="btn btn-primary"> Enregistrer vente </button>
                    </form>
                </div>            
            </div>
                
        </div>
    </div>
</div>