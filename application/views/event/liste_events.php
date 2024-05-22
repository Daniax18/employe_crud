<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <div class="d-flex flex-row justify-content-between align-items-center mb-5">
        <h4 class="card-title"> La liste des evenements en cours :</h4>
        <div class="nav-search">
            <button class="btn btn-outline-success">
                Ajouter event +
            </button>
        </div>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr class="text-center">
                <th>Reference</th>
                <th>Nom</th>
                <th >Deadline</th>
                <th> Besoin en Matiere </th>
                <th width="15%"></th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($events as $event){ ?>
                <tr>
                    <td> <?php echo $event['id_event'] ?> </td>
                    <td> <?php echo $event['nom_event'] ?> </td>
                    <td> <?php echo $event['deadline'] ?> </td>
                    <td class="text-right"> Ar <?php echo format($this -> Event-> getTotalExpenseEvent()) ?> </td>
                    <td class="text-center"> 
                        <a 
                            href="<?php echo site_url("event/eventController/listEventPack") . "/" . $event['id_event'] ?>"
                            class="btn btn-outline-secondary"
                        > 
                            Voir les packs 
                        </a>  
                    </td>
                   
                </tr>
            <?php } ?>
            
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>