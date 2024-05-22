<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Insertion pack dans l'event : "<?php echo $event['nom_event'] ?>"</h4>
         
            <form 
                class="forms-sample" 
                method="POST" 
                enctype="multipart/form-data"
                action="<?php echo site_url("event/packController/savePack") ?>"  
            >
                <input type="hidden" name="id_event" value = "<?php echo $event['id_event'] ?>">
                <!-- NOM DU PACK -->
                <div class="form-group d-flex flex-row align-items-center mb-4">
                    <label style = "width: 20%" for="exampleInputName1">Nom</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="exampleInputName1" 
                        placeholder="Nom du pack"
                        name = "nom"
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
                    >
                </div>

                 <!-- PHOTO DU PACK -->
                <div class="form-group d-flex flex-row align-items-center mb-4">
                    <label style = "width: 20%"> Photo du pack </label>

                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" name="file">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" disabled type="button">Upload here</button>
                        </span>
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>

            </form>
        </div>
    </div>
</div>