
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Eval | Tsakitsaky</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url() ?>assets/images/logo.svg" alt="logo">
              </div>
              <h4> Bienvenue sur Event </h4>
              <h6 class="font-weight-light"> Veuillez vous connecter </h6>
              <?php if(isset($etat)){ ?>
                <div style="padding: 2% 2% 2% 2%; color: red" >
                    <i> <?php echo $etat ?> </i> 
                </div>
              <?php } ?>
              <form 
                class="pt-3"
                method="post" 
                action="<?php echo site_url("loginController/verifyLogin") ?>"
              >
                <div class="form-group">
                    <input 
                        type="text" 
                        class="form-control form-control-lg"
                        id="exampleInputEmail1" 
                        placeholder="Username"
                        name = "user"
                    >
                </div>
                <div class="form-group">
                    <input 
                        type="password" 
                        class="form-control form-control-lg" 
                        id="exampleInputPassword1" 
                        placeholder="Password"
                        name = "mdp"
                    >
                </div>
                <div class="mt-3">
                  <button 
                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" 
                    href="../../index.html"
                  >Se connecter</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
