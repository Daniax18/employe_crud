<div class="col-12 grid-margin stretch-card">

    <div class="card">
        <div class="card-body">
            
            <div class="d-flex flex-row justify-content-between align-items-center mb-5">
                <h4 class="card-title">Modification du pack : "<?php echo $pack['nom_pack'] ?>"</h4>
                <div class="nav-search">
                    <a 
                        href="<?php echo site_url("event/eventController/listEventPack"). "/" . $pack['id_event'] ?>"
                    > 
                        <button class="btn btn-outline-info">
                            Retour
                        </button>
                    </a>  
                </div>
            </div>
            
            <div class="d-flex flex-row justify-content-between">
                <div class="col-4 text-center shadow p-3 mb-5 bg-body rounded p-5">
                    <div class = "border border-5 rounded-pill">
                        <img 
                            src="<?php echo base_url() ?>assets/images/pack/<?php echo $pack['path_image'] ?>" 
                            alt="image"
                            width="150"
                            height="150px"
                        />
                    </div>
                    <div class="mt-5">
                        <a  
                            data-bs-toggle="modal" 
                            data-bs-target="#update_photo"
                            
                        >
                            <button class="btn btn-outline-secondary">
                                Modifier photo du pack
                            </button>
                        </a>  
                    </div>
                 
                </div>

                <div class="col-8 shadow p-3 mb-5 bg-body rounded p-5">
                    <form 
                        class="forms-sample" 
                        method="POST" 
                        enctype="multipart/form-data"
                        action="<?php echo site_url("event/packController/updatePackData") ?>"  
                    >
                        <input type="hidden" name="id_pack" value = "<?php echo $pack['id_pack'] ?>">
                        <!-- NOM DU PACK -->
                        <div class="form-group d-flex flex-row align-items-center mb-4">
                            <label style = "width: 20%" for="exampleInputName1">Nom</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="exampleInputName1" 
                                placeholder="Nom du pack"
                                name = "nom"
                                value="<?php echo $pack['nom_pack'] ?>"
                            >
                        </div>
                        
                        <!-- MONTANT DU PACK -->
                        <div class="form-group d-flex flex-row align-items-center mb-4">
                            <label style = "width: 20%" for="exampleInputEmail3">Montant</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="exampleInputtext3" 
                                placeholder="Prix de vente"
                                name ="montant"
                                value="<?php echo $pack['montant'] ?>"
                            >
                        </div>

                        <!-- REMARQUE DU PACK -->
                        <div class="form-group d-flex flex-row align-items-center mb-4">
                            <label style = "width: 20%" for="exampleInputtext3">Remarque</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="exampleInputtext3" 
                                placeholder="Remarque"
                                name ="remarque"  
                                value="<?php echo $pack['remarque'] ?>"  
                            >
                        </div>

                       
                    <div class=" text-center">
                        <button 
                            type="submit" 
                            class="btn btn-outline-secondary"
                        > 
                            Modifier 
                        </button>
                    </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CHANGEMENT DE PHOTO -->
    <div class="modal fade" id="update_photo" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalCenterTitle"> Choisir une photo : </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form 
                        action="<?php echo site_url("event/packController/updatePackImage") ?>"
                        method="post" 
                        enctype="multipart/form-data"
                    >
                    <input type="hidden" name="id_pack" value = "<?php echo $pack['id_pack'] ?>">

                     <!-- PHOTO DU PACK -->
                     <div class="form-group d-flex flex-row align-items-center mb-4">
                            <label style = "width: 40%"> Photo du pack </label>

                            <div class="input-group col-xs-12">
                                <input type="file" class="form-control file-upload-info" name="file">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" disabled type="button">Upload here</button>
                                </span>
                            </div>
                        </div>
                </div>
                <div class="modal-footer d-flex flex-row justify-content-between mx-auto">
                    <button type="submit" class="btn btn-primary"> Modifier la photo </button>
                    </form>
                </div>            
            </div>
                
        </div>
    </div>
</div>