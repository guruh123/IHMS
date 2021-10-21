<?php
 $title="Hospital Management System";
?>

   <!--**********************************
            Content body start
        ***********************************-->
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

		<div class="col-xl-6 col-xxl-12">
    <div class="row">
        <!-- <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12"> -->
            <div class="col-xl-6 col-xxl-6 col-lg-12 col-sm-12">
                <div id="user-activity" class="card">
                    <div class="card-header border-0 pb-0 d-sm-flex d-block">
                        <h4 class="card-title">Aktivitas Pengunjung</h4>
                        <div class="card-action mb-sm-0 my-2">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#user" role="tab">
                                        Day
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
                                        Month
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
                                        Year
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


		<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Log Aktivitas Tenaga Medis</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tag ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Function</th>
                                                <th scope="col">Tanggal Masuk</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>dr. Bobby</td>
                                                <td>Dokter Umum</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                                <td>Dexter, Amd, Kep</td>
                                                <td>Perawat</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                                <td>drg. Nathan</td>
                                                <td>Dokter Gigi</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Absen</span></td>
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
                                                <td>Aurora, Skep</td>
                                                <td>Perawat</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                                <td>Matthew, S.Kebid</td>
                                                <td>Bidan</td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                <!-- {{-- <div class="col px-0">
                                    <span class="bg-warning"></span>	
                                    <div>
                                        <p>Dalam Perawatan</p>
                                        <h3>48%</h3>
                                    </div>
                                </div> --}} -->
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
   <!--**********************************
            Kotak-Kotak 4 (2)
        ***********************************-->
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
                                                <td><span class="badge badge-rounded badge-warning">Rawat Jalan</span></td>
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
                                                <td><span class="badge badge-rounded badge-danger">Rawat Jalan</span></td>
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
					

   <!--**********************************
            Log Aktivitas Tenaga Medis
        ***********************************-->


		<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Log Aktivitas Tenaga Medis</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tag ID</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Function</th>
                                                <th scope="col">Tanggal Masuk</th>
                                                <th scope="col">Status</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
												<td>dr. Bobby</td>
                                                <td>Dokter Umum</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                                <td>Dexter, Amd, Kep</td>
                                                <td>Perawat</td>
												<td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                                <td>drg. Nathan</td>
                                                <td>Dokter Gigi</td>
												<td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Absen</span></td>
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
                                                <td>Aurora, Skep</td>
                                                <td>Perawat</td>
												<td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
                                                <td>Matthew, S.Kebid</td>
                                                <td>Bidan</td>
												<td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Hadir</span></td>
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
					


   <!--**********************************
            Log Aktivitas Aset
        ***********************************-->					


					<div class="col-xl-20 col-lg-12">
                        <div class="card">
                            <div class="card-header  border-0 pb-0">
                                <h4 class="card-title">Log Aktivitas Aset Rumah Sakit</h4>
                            </div>
                            <div class="card-body"> 
                                <div id="DZ_W_Todo1" class="widget-media dz-scroll" style="height:370px;">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">dr. Annie Rey</h5>
													<small class="d-block">Nama Aset: Xray <br> </small>
													<small class="d-block">RFID Tag Number: AA12826</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Lacak</a>
														<a class="dropdown-item" href="#">Detail</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-info">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Aurora, Skep</h5>
													<small class="d-block">Nama Aset: Kursi Roda <br> </small>
													<small class="d-block">RFID Tag Number: AA12826</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-info light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Lacak</a>
														<a class="dropdown-item" href="#">Detail</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-success">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Matthew, S.Kebid</h5>
													<small class="d-block">Nama Aset: Kursi Roda <br> </small>
													<small class="d-block">RFID Tag Number: AA12826</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Lacak</a>
														<a class="dropdown-item" href="#">Detail</a>
													</div>
												</div>
											</div>
                                        </li>
										 <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50" src="images/avatar/1.jpg">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1">dr. Deanz</h5>
													<small class="d-block">Nama Aset: Kursi Roda <br> </small>
													<small class="d-block">RFID Tag Number: AA12826</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Lacak</a>
														<a class="dropdown-item" href="#">Detail</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2 media-danger">
													KG
												</div>
												<div class="media-body">
													<h5 class="mb-1">Wina, S.Kep</h5>
													<small class="d-block">Nama Aset: Kursi Roda <br> </small>
													<small class="d-block">RFID Tag Number: AA12826</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Lacak</a>
														<a class="dropdown-item" href="#">Detail</a>
													</div>
												</div>
											</div>
                                        </li>
                                        <li>
                                            <div class="timeline-panel">
                                                <div class="media mr-2 media-primary">
													<i class="fa fa-home"></i>
												</div>
												<div class="media-body">
													<h5 class="mb-1">Rihanna, Skebid</h5>
													<small class="d-block">Nama Aset: Kursi Roda <br> </small>
													<small class="d-block">RFID Tag Number: AA12826</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Lacak</a>
														<a class="dropdown-item" href="#">Detail</a>
													</div>
												</div>
											</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
					</div>