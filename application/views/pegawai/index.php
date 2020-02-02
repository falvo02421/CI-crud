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
                    		<div class="col-sm-4">
                    			<div class="card">
                    				<div class="card-header">
                                        Add Data
                                    </div>
                                    <div class="card-body card-block">
										<button type="reset" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#createdata">
	                                    	<i class="fa fa-plus"></i>&nbsp; Create Data
	                                    </button>
	                                </div>
								</div>
                    		</div>
                            <div class="col-md-12">
								<div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>{blog_heading}</h3>
                                    <div class="filters m-b-45">
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID</td>
                                                    <td>NIP</td>
                                                    <td>Nama</td>
                                                    <td>Gender</td>
                                                    <td>Tempat Lahir</td>
                                                    <td>Tanggal Lahir</td>
                                                    <td>Alamat</td>
                                                    <td>Dep_ID</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
												    $nomor =1;
											 		foreach($pegs as $row){
											 			// echo '<tr><td>'.$nomor.'</td>';
											 			// echo '<td>'.$row->id.'</td>';
											 			// echo '<td>'.$row->nama.'</td>';
											 			// echo '<td>'.$row->abbr.'</td>';
											 			// echo '<td>'.$row->alamat.'</td>';
											 			// echo '<td>'.$row->telpon.'</td>';
											 			// echo '<td><a href="'.base_url('departemen/edit/'.$row->id).'">Edit</a> |
											 			// 	<a href="'.base_url('departemen/delete/'.$row->id).'">Hapus</a>
											 			// </td>';
											 			// echo '</tr>';
											 			// $nomor++;
											 		?>
											 		<tr>
												 		<td class="center"><?php echo $nomor; ?></td>
												        <td class="center"><?php echo $row->id; ?></td>
												        <td class="center"><?php echo $row->nip; ?></td>
                                                        <td class="center"><?php echo $row->nama; ?></td>
												        <td class="center"><?php echo $row->gender; ?></td>
                                                        <td class="center"><?php echo $row->tmp_lahir; ?></td>
                                                        <td class="center"><?php echo $row->tgl_lahir; ?></td>
												        <td class="center"><?php echo $row->alamat; ?></td>
												        <td class="center"><?php echo $row->dep_id; ?></td>
												        <td class="center">
												            <a class="btn btn-warning" href="<?php echo base_url();?>pegawai/edit/<?php echo $row->id;?>">
                                                                edit
                                                            </a>
                                                            <button type="reset" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletepopup">
												           <!--  <a class="btn btn-danger" href="<?php echo base_url();?>pegawai/delete/<?php echo $row->id;?>"> -->
												                delete
												           <!--  </a> -->
                                                            </button>
												        </td>
												    </tr>
											 	<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php $this->load->view("theme/_partisi/footer.php") ?>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="createdata" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollmodalLabel">Add Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">
                                        <form method="POST" action="<?php echo base_url().'pegawai/add'?>">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">ID</label>
                                            <input type="text" name="id" placeholder="Enter your id" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">NIP</label>
                                            <input type="text" name="nip" placeholder="Enter Your NIP" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Nama</label>
                                            <input type="text" name="nama" placeholder="Enter Your Full Name" class="form-control">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Tempat Lahir</label>
                                                    <input type="text" name="tmp_lahir" placeholder="Enter your Born" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Tanggal Lahir</label>
                                                    <input type="date" name="tgl_lahir" placeholder="Enter Date Birthday" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Alamat</label>
                                            <textarea name="alamat" rows="9" placeholder="Content..." class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Departemen ID</label>
                                            <input type="text" name="dep_id" placeholder="Enter Your Dep_ID" class="form-control">
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


            <div class="modal fade" id="deletepopup" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
             data-backdrop="static">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                Data akan di hapus
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary">
                                <a href="<?php echo base_url();?>pegawai/delete/<?php echo $row->id;?>" class="c-white-1">
                                Yes
                                </a>
                            </button>
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