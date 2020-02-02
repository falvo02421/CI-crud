
<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>

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
        <div class="page-container">
		<?php $this->load->view("theme/_partisi/header.php") ?>


            <div class="main-content">
                <div class="section__content section__content--p30 p-t-30">
                    <div class="container-fluid">
                    	<div class="row">
                            <div class="col-md-12">
								<div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>kategory data</h3>
                                    <div class="filters m-b-45">
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID</td>
                                                    <td>Nama</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
											    	$nomor =1;
										 			foreach($kategoris as $row){
		                                                echo '<tr><td>'.$nomor.'</td>';
										 				echo '<td>'.$row->id.'</td>';
										 				echo '<td>'.$row->nama.'</td>';
										 				echo '</tr>';
										 				$nomor++;
	                                            	}
                                            	?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $this->load->view("theme/_partisi/footer.php") ?>
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