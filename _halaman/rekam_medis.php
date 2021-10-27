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
            Chart Aktivitas Pasien
        ***********************************-->    

                <div class="row">
					<div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
							<h4 class="card-title">Aktivitas Pasien</h4>
								<div class="dropdown ml-auto">
									<div class="btn-link" data-toggle="dropdown">
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" rx="9" ry="3"></circle><circle fill="#000000"cx="12" cy="5" rx="9" ry="3"></circle><circle fill="#000000" cx="12" cy="5" rx="9" ry="3"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Edit</a>
										<a class="dropdown-item" href="#">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body px-3 pt-2">
						<div id="chartStrock"></div>
						</div>
					</div>
				</div>


   <!--**********************************
            Pasien Terakhir yang Ditambahkan
        ***********************************-->  
		
		<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Recent Patient Activity</h4>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Edit</a>
												<a class="dropdown-item" href="#">Delete</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive ">
											<table class="table patient-activity">
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-1">Media heading</h5>
																<p class="mb-0">41 Years Old</p>
															</div>
														</div>
													</td>
													<td>
														<p class="mb-0">Disease</p>
														<h5 class="my-0 text-primary">Allergies & Asthma</h5>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div>
																<p class="mb-1">Status</p>
																<h5 class="mt-0 mb-1 text-success">Recovered</h5>
																<small>22/03/2020 12:34 AM</small>
															</div>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" >
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded" width="78" src="./images/avatar/2.jpg" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-1">Angela Nurhayati</h5>
																<p class="mb-0">21 Years Old</p>
															</div>
														</div>
													</td>
													<td>
														<p class="mb-0">Disease</p>
														<h5 class="my-0 text-primary">Sleep Problem</h5>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div>
																<p class="mb-1">Status</p>
																<h5 class="mt-0 mb-1 text-danger">New Patient</h5>
																<small>22/03/2020 12:34 AM</small>
															</div>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr class="active">
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded" width="78" src="./images/avatar/3.jpg" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-1">James Robinson</h5>
																<p class="mb-0">25 Years Old</p>
															</div>
														</div>
													</td>
													<td>
														<p class="mb-0">Disease</p>
														<h5 class="my-0 text-primary">Dental Care</h5>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div>
																<p class="mb-1">Status</p>
																<h5 class="mt-0 mb-1 text-warning">In Treatment</h5>
																<small>22/03/2020 12:34 AM</small>
															</div>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded" width="78" src="./images/avatar/4.jpg" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-1">Thomas Jaja</h5>
																<p class="mb-0">7 Years Old</p>
															</div>
														</div>
													</td>
													<td>
														<p class="mb-0">Disease</p>
														<h5 class="my-0 text-primary">Diabetes</h5>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div>
																<p class="mb-1">Status</p>
																<h5 class="mt-0 mb-1 text-danger">New Patient</h5>
																<small>22/03/2020 12:34 AM</small>
															</div>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded" width="78" src="./images/avatar/5.jpg" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-1">Cindy Brownleee</h5>
																<p class="mb-0">71 Years Old</p>
															</div>
														</div>
													</td>
													<td>
														<p class="mb-0">Disease</p>
														<h5 class="my-0 text-primary">Covid-19 Suspect</h5>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div>
																<p class="mb-1">Status</p>
																<h5 class="mt-0 mb-1 text-success">Recovered</h5>
																<small>22/03/2020 12:34 AM</small>
															</div>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="media align-items-center">
															<img class="mr-3 img-fluid rounded" width="78" src="./images/avatar/6.jpg" alt="DexignZone">
															<div class="media-body">
																<h5 class="mt-0 mb-1">Oconner Jr.</h5>
																<p class="mb-0">17 Years Old</p>
															</div>
														</div>
													</td>
													<td>
														<p class="mb-0">Disease</p>
														<h5 class="my-0 text-primary">Dental Care</h5>
													</td>
													<td>
														<div class="d-flex align-items-center">
															<div>
																<p class="mb-1">Status</p>
																<h5 class="mt-0 mb-1 text-warning">In Treatment</h5>
																<small>22/03/2020 12:34 AM</small>
															</div>
															<div class="dropdown ml-auto">
																<div class="btn-link" data-toggle="dropdown">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit</a>
																	<a class="dropdown-item" href="#">Delete</a>
																</div>
															</div>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</div>

   <!--**********************************
            Kotak-Kotak 4 (2)
        ***********************************-->
		<div class="row">	
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
										<p class="mb-1">Jumlah Dokter</p>
										<h4 class="mb-0">364</h4>
										<span class="badge badge-success">-3.5%</span>
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
										<p class="mb-1">Jumlah Perawat</p>
										<h4 class="mb-0">364</h4>
										<span class="badge badge-success">-3.5%</span>
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
										<i class="fas fa-user-tie"></i>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Jumlah Karyawan</p>
										<h4 class="mb-0">364</h4>
										<span class="badge badge-success">-3.5%</span>
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
										<p class="mb-1">Patient</p>
										<h4 class="mb-0">364</h4>
										<span class="badge badge-success">-3.5%</span>
									</div>
								</div>
							</div>
						</div>
                    </div>				
					
   <!--**********************************
            Log Aktivitas Pasien
        ***********************************-->


					<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Log Aktivitas Pasien</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tag ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Diagnosa</th>
                                                <th scope="col">Tanggal Masuk</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Bills</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>Mr. Bobby</td>
                                                <td>Diare</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Rawat Inap</span></td>
                                                <td>$120</td>
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
                                            <tr>
                                                <td>10 </td>
                                                <td>Mr. Dexter</td>
                                                <td>Pusing</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Rawat Jalan</span></td>
                                                <td>$540</td>
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
                                            <tr>
                                                <td>03 </td>
                                                <td>Mr. Nathan</td>
                                                <td>Vertigo</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Rawat Jalan</span></td>
                                                <td>$301 (opsional)</td>
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
                                            <tr>
                                                <td>05</td>
                                                <td>Mrs. Aurora</td>
                                                <td>Diare</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Rawat Inap</span></td>
                                                <td>$099</td>
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
                                            <tr>
                                                <td>06</td>
                                                <td>Mr. Matthew</td>
                                                <td>Pusing</td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Rawat Jalan</span></td>
                                                <td>$520</td>
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
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					

 