<?php
 $title="Hospital Management System";
?>
  <div class="content-wrapper">
    <!--**********************************
            Nulis LINK
        ***********************************-->
		<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

<?php include 'assets/templates/css/style.css'; ?>

   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-5 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h3 class="text-primary font-w600">Welcome to RS Bunda Surabaya</h3>
						<p class="mb-0">Hospital Admin Dashboard Template</p>
					</div>
					
					<div class="input-group search-area ml-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
						</div>
					</div>
					<a href="javascript:void(0);" class="btn btn-primary ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>

   <!--**********************************
            Kotak-Kotak 4
        ***********************************-->
                <div class="row">
				<div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<i class="fas fa-bed"></i> 
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Bed Occupancy</p>
										<h4 class="mb-0">3698</h4>
										<span class="badge badge-success">+1.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<i class="fas fa-wheelchair"></i> 
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Jumlah Pasien</p>
										<h4 class="mb-0">2093</h4>
										<span class="badge badge-success">+2.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<i class="fas fa-user-md"></i>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Jumlah Tenaga Kesehatan</p>
										<h4 class="mb-0">128</h4>
										<span class="badge badge-success">2.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>	
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-success text-success">
										<i class="fas fa-bed"></i>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Ketersediaan Kamar</p>
										<h4 class="mb-0">364</h4>
										<span class="badge badge-success">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>




   <!--**********************************
            Data Pasien Anak
        ***********************************-->


					<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Pasien Anak-Anak</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tag ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Penanggung Jawab</th>
                                                <th scope="col">Diagnosa</th>
                                                <th scope="col">Tanggal Masuk</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">More</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
										$servername = "localhost";
										$username = "root";
										$password = "";
										$database = "dbpasien";

										$kon= new mysqli($servername,
										$username, $password, $database);
										if (!$kon){
											die("Database connection failed" . mysqli_connection_error());
										}
										?>
										
										<?php
$content = mysqli_query($kon, "SELECT * FROM `tb_pasien_anak` WHERE 1");
if (!$content) {
    printf("Error: %s\n", mysqli_error($kon));
    exit();}?>
<?php while($data = mysqli_fetch_array($content)){?>


                                            <tr>
                                                <td><?php echo $data['tag_id'];?></td>
												<td><?php echo $data['nama_anak'];?></td>
                                                <td><?php echo $data['penanggung_jawab'];?></td>
                                                <td><?php echo $data['diagnosa'];?></td>
                                                <td><?php echo $data['tanggal_masuk'];?></td>
                                                <td><span class="badge badge-rounded badge-primary"><?php echo $data['status'];?></span></td>
                                                <td><?php echo $data['alamat'];?></td>
                                                <td>
                                                    <div class="dropdown custom-dropdown mb-0">
                                                        <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?php
											}

											?>


                                            <tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					

 