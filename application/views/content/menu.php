<?php 
     $user = $this->session->userdata('user_data');
?>


<!-- partial -->
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <div class="d-flex sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="<?php echo base_url() ?>assets/images/faces/face29.png" alt="image">
                <span class="sidebar-status-indicator"></span>
            </div>
            <div class="sidebar-profile-name">
                <p class="sidebar-name">
                <?php echo $user['nom_user'] ?>
                </p>
                <p class="sidebar-designation">
                    Welcome
                </p>
            </div>
        </div>

        <p class="sidebar-menu-title"> ACTIVITES </p>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>/welcome/index">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="typcn typcn-briefcase menu-icon"></i>
        <span class="menu-title">Event</span>
        <i class="typcn typcn-chevron-right menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a 
                    class="nav-link" 
                    href="<?php echo site_url("event/eventController/listEventEnCours") ?>"
                >
                    En cours
                </a>
            </li>
            <li class="nav-item">
                <a 
                    class="nav-link" 
                    href="pages/ui-features/buttons.html"
                >
                    Tous
                </a>
            </li>
        </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="typcn typcn-compass menu-icon"></i>
        <span class="menu-title">Paiement</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> 
                <a 
                    class="nav-link" 
                    href="<?php echo site_url("vente/venteController/listeVenteEtudiant") ?>"
                >
                    Liste des ventes
                </a>
            </li>
        </ul>
        </div>
    </li>
    
    </ul>
</nav>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">