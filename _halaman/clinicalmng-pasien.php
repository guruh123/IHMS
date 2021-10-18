<?php
 $title="Clinical Management - Pasien";
?>
<div class="col-xl-3 col-xxl-12">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
                        <span class="mr-3 bgl-primary text-info">
                            <i class="fas fa-bed"></i>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">BOR (%)</p>
                            <h4 class="mb-0">75</h4>
                            <span class="badge badge-primary">+3.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body p-4">
                    <div class="media ai-icon">
                        <span class="mr-3 bgl-warning text-info">
                            <i class="fas fa-procedures"></i>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">Total Pasien</p>
                            <h4 class="mb-0">2500</h4>
                            <span class="badge badge-warning">+250</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card">
                <div class="card-body  p-4">
                    <div class="media ai-icon">
                        <span class="mr-3 bgl-danger text-info">
                            <i class="fas fa-door-open"></i>
                        </span>
                        <div class="media-body">
                            <p class="mb-1">Kamar Tersedia</p>
                            <h4 class="mb-0">70</h4>
                            <span class="badge badge-danger">Available</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg"href="">
                <div class="widget-stat card bg-success">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="flaticon-381-exit-1"></i>
                            </span>
                            <div class="media-body text-white text-right">
                                <p class="mb-1">Pemindahan</p>
                                <h3 class="text-white">Pasien</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
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

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="user" role="tabpanel">
                                <canvas id="activity" class="chartjs"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xl-6 col-xxl-6 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">Pasien (%)</h4>
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle light" data-toggle="dropdown" aria-expanded="false">
                            Mingguan
                        </button>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item" href="#">Harian</a>
                            <a class="dropdown-item" href="#">Mingguan</a>
                            <a class="dropdown-item" href="#">Tahunan</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <h4 class="text-dark font-w400">Total Pasien</h4>
                    <h3 class="text-primary font-w600">720 Orang</h3>
                    <div class="row mx-0 align-items-center">
                        <div class="col-sm-8 col-md-7  px-0">
                            <div id="chartCircle"></div>
                        </div>
                        <div class="col-sm-4 col-md-5 px-0">
                            <div class="patients-chart-deta">
                                <div class="col px-0">
                                    <span class="bg-danger"></span>	
                                    <div>
                                        <p>Bayi</p>
                                        <h3>64%</h3>
                                    </div>
                                </div>
                                <div class="col px-0">
                                    <span class="bg-success"></span>	
                                    <div>
                                        <p>Dewasa</p>
                                        <h3>36%</h3>
                                    </div>
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
        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Log Data Pasien</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="checkAll" required="">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>ID</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Nama Pasien</th>
                                                <th>Dokter</th>
                                                <th>Diagnosa</th>
                                                <th>Status</th>
                                                <th>Ruang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>#P-00001</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Tiger Nixon</td>
                                                <td>Dr. Cedric</td>
                                                <td>Batuk & Pilek</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-001</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>												
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
														<label class="custom-control-label" for="customCheckBox3"></label>
													</div>
												</td>
                                                <td>#P-00002</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Garrett Winters</td>
                                                <td>Dr. Cedric</td>
												<td>Insomnia</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-002</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
														<label class="custom-control-label" for="customCheckBox4"></label>
													</div>
												</td>
                                                <td>#P-00003</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
												<td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														Sembuh
													</span>
												</td>
                                                <td>AB-003</td>
												<td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox5" required="">
														<label class="custom-control-label" for="customCheckBox5"></label>
													</div>
												</td>
                                                <td>#P-00004</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-004</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox6" required="">
														<label class="custom-control-label" for="customCheckBox6"></label>
													</div>
												</td>
                                                <td>#P-00005</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Cedric</td>
                                                <td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-005</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox7" required="">
														<label class="custom-control-label" for="customCheckBox7"></label>
													</div>
												</td>
                                                <td>#P-00006</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                                <td>Insomnia</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-006</td>
												<td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox8" required="">
														<label class="custom-control-label" for="customCheckBox8"></label>
													</div>
												</td>
                                                <td>#P-00007</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-007</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox9" required="">
														<label class="custom-control-label" for="customCheckBox9"></label>
													</div>
												</td>
                                                <td>#P-00008</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Garrett </td>
                                                <td>Insomnia</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-008</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox10" required="">
														<label class="custom-control-label" for="customCheckBox10"></label>
													</div>
												</td>
                                                <td>#P-00009</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-009</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox11" required="">
														<label class="custom-control-label" for="customCheckBox11"></label>
													</div>
												</td>
                                                <td>#P-00010</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Insomnia</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-010</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox12" required="">
														<label class="custom-control-label" for="customCheckBox12"></label>
													</div>
												</td>
                                                <td>#P-00011</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Airi Satou</td>
                                                <td>Dr. Rhona</td>
                                                <td>Batuk & Pilek</td>
												<td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-011</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox13" required="">
														<label class="custom-control-label" for="customCheckBox13"></label>
													</div>
												</td>
                                                <td>#P-00012</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Insomnia</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-012</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox14" required="">
														<label class="custom-control-label" for="customCheckBox14"></label>
													</div>
												</td>
                                                <td>#P-00013</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Batuk & Pilek</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-013</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox15" required="">
														<label class="custom-control-label" for="customCheckBox15"></label>
													</div>
												</td>
                                                <td>#P-00014</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Insomnia</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-014</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox16" required="">
														<label class="custom-control-label" for="customCheckBox16"></label>
													</div>
												</td>
                                                <td>#P-00015</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
												<td>Dr. Rhona</td>
                                                <td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-015</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox17" required="">
														<label class="custom-control-label" for="customCheckBox17"></label>
													</div>
												</td>
                                                <td>#P-00016</td>
                                                <td>29/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
												<td>Insomnia</td>
												<td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-016</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox18" required="">
														<label class="custom-control-label" for="customCheckBox18"></label>
													</div>
												</td>
                                                <td>#P-00017</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
												<td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-017</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox19" required="">
														<label class="custom-control-label" for="customCheckBox19"></label>
													</div>
												</td>
                                                <td>#P-00018</td>
                                                <td>26/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Insomnia</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-018</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox20" required="">
														<label class="custom-control-label" for="customCheckBox20"></label>
													</div>
												</td>
                                                <td>#P-00019</td>
                                                <td>28/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Rhona</td>
                                                <td>Batuk & Pilek</td>
                                                <td>
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														Pasien Baru
													</span>
												</td>
                                                <td>AB-019</td>
												<td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
														</div>
													</div>
												</td>
                                            </tr>
                                            <tr>
												<td>
													<div class="custom-control custom-checkbox ml-2">
														<input type="checkbox" class="custom-control-input" id="customCheckBox21" required="">
														<label class="custom-control-label" for="customCheckBox21"></label>
													</div>
												</td>
                                                <td>#P-00020</td>
                                                <td>25/02/2020, 12:42 AM</td>
												<td>Sonya Frost</td>
                                                <td>Dr. Garrett</td>
                                                <td>Insomnia</td>
                                                <td>
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Dalam Perawatan
													</span>
												</td>
                                                <td>AB-020</td>
                                                <td>
													<div class="dropdown ml-auto text-right">
														<div class="btn-link" data-toggle="dropdown">
															<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#">Accept Patient</a>
															<a class="dropdown-item" href="#">Reject Order</a>
															<a class="dropdown-item" href="#">View Details</a>
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
    </div>
</div>