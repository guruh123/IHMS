<?php
 $title="Dashboard";
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
                                        <p>In Treatment</p>
                                        <h3>48%</h3>
                                    </div>
                                </div> --}} -->
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
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
                                        <img class="mr-3 img-fluid rounded" width="78" src="<?=templates()?>images/avatar/1.jpg" alt="DexignZone">
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
                                        <img class="mr-3 img-fluid rounded" width="78" src="<?=templates()?>images/avatar/2.jpg" alt="DexignZone">
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
                                        <img class="mr-3 img-fluid rounded" width="78" src="<?=templates()?>images/avatar/3.jpg" alt="DexignZone">
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
                                        <img class="mr-3 img-fluid rounded" width="78" src="<?=templates()?>images/avatar/4.jpg" alt="DexignZone">
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
                                        <img class="mr-3 img-fluid rounded" width="78" src="<?=templates()?>images/avatar/5.jpg" alt="DexignZone">
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
                                        <img class="mr-3 img-fluid rounded" width="78" src="<?=templates()?>images/avatar/6.jpg" alt="DexignZone">
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
                <div class="card-footer border-0 pt-0 text-center">
                    <a href="#" class="btn-link">See More >></a>
                </div>
            </div>
        </div>
    </div>
</div>