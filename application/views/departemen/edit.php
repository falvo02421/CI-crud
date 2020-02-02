<!DOCTYPE html>
<html>
<head>
    <title>{blog_title}</title>

    <link href="<?php echo base_url("CoolAdmin-master/css/font-face.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/font-awesome-4.7/css/font-awesome.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/font-awesome-5/css/fontawesome-all.min.css");?>" rel="stylesheet" media="all">
    // <link href="<?php echo base_url("CoolAdmin-master/vendor/mdi-font/css/material-design-iconic-font.min.css");?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url("CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.css");?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url("CoolAdmin-master/vendor/animsition/animsition.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-mastervendor/wow/animate.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/css-hamburgers/hamburgers.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/slick/slick.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/select2/select2.min.css");?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url("CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.css");?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url("CoolAdmin-master/css/theme.css");?>"" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view("theme/_partisi/navbar.php") ?>
        <?php $this->load->view("theme/_partisi/header.php") ?>


        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <div class="main-content">
                <div class="section__content section__content--p30 p-t-30">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form method="POST" action="<?php echo base_url().'departemen/update/'.
      $dep->id?>">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">ID</label>
                                            <input type="text" name="id" placeholder="Enter your id" class="form-control" value="<?php echo $dep->id; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Nama</label>
                                            <input type="text" name="nama" placeholder="Enter Your Full Name" class="form-control" value="<?php echo $dep->nama; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">ABBR</label>
                                            <input type="text" name="abbr" placeholder="Enter Your ABBR" class="form-control" value="<?php echo $dep->abbr; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Alamat</label>
                                            <textarea name="alamat" rows="9" placeholder="Content..." class="form-control">
                                            <?php echo $dep->alamat; ?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Telepon</label>
                                            <input type="text" name="telpon" placeholder="Enter Your Dep_ID" class="form-control" value="<?php echo $dep->telpon; ?>">
                                        </div>
                                        <div class="form-group"> 
                                            <input type="submit" value="Save" class="btn btn-success">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
                        
  </div>

  <script src="<?php echo base_url("CoolAdmin-master/vendor/jquery-3.2.1.min.js");?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url("CoolAdmin-master/vendor/bootstrap-4.1/popper.min.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.js");?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url("CoolAdmin-master/vendor/slick/slick.min.js");?>">
    </script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/wow/wow.min.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/animsition/animsition.min.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js");?>">
    </script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/counter-up/jquery.waypoints.min.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/counter-up/jquery.counterup.min.js");?>">
    </script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/circle-progress/circle-progress.min.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/chartjs/Chart.bundle.min.js");?>"></script>
    <script src="<?php echo base_url("CoolAdmin-master/vendor/select2/select2.min.js");?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url("CoolAdmin-master/js/main.js");?>"></script>

</body>
</html>