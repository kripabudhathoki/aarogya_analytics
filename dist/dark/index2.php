<?php
include("header.php");
include("sidebar.php");?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <!-- ----------------------------------------- -->
              <!-- Welcome Card -->
              <!-- ----------------------------------------- -->
              <div class="card text-bg-primary" >
                <div class="card-body" style="background-color: #1a2537;">
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="d-flex flex-column h-100">
                        <div class="hstack gap-3">
                          <!-- <span class="d-flex align-items-center justify-content-center round-48 bg-white rounded flex-shrink-0">
                            <iconify-icon icon="solar:course-up-outline" class="fs-7 text-muted"></iconify-icon>
                          </span> -->
                            <div class="col-sm-5 text-center text-md-end">
                              <img src="../assets/images/logos/favicon1.png" alt="Logo" height="50%" width="400" />
                            </div>
                        </div>
                        <!-- <div class="mt-4 mt-sm-auto">
                          <div class="row">
                            <div class="col-6">
                              <span class="opacity-75">Budget</span>
                              <h4 class="mb-0 text-white mt-1 text-nowrap fs-13 fw-bolder">
                                10M</h4>
                            </div>
                            <div class="col-6 border-start border-light" style="--bs-border-opacity: .15;">
                              <span class="opacity-75">Expense</span>
                              <h4 class="mb-0 text-white mt-1 text-nowrap fs-13 fw-bolder">
                                2450</h4>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-6">
                  <!-- ----------------------------------------- -->
                  <!-- Subscriptions -->
                  <!-- ----------------------------------------- -->
                  <div class="card bg-danger-subtle overflow-hidden shadow-none">
                    <div class="card-body px-4">
                      <div class="d-flex align-items-center justify-content-between mb-8">
                        <div>
                          <span class="text-dark-light fw-semibold fs-12">Total Survey Days </span>
                          <div class="hstack gap-2">
                            <h5 class="card-title fw-semibold mb-0 fs-7">1200</h5>
                            <span class="fs-11 text-dark-light fw-semibold">-12%</span>
                          </div>
                        </div>
                        <span class="round-48 d-flex align-items-center justify-content-center bg-white rounded">
                          <iconify-icon icon="solar:layers-linear" class="text-danger fs-6"></iconify-icon>
                        </span>
                      </div>
                      <div class="me-n2">
                        <div id="subscriptions" class="rounded-bars"></div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-md-6">
                  <!-- ----------------------------------------- -->
                  <!-- Users -->
                  <!-- ----------------------------------------- -->
                  <div class="card bg-secondary-subtle overflow-hidden shadow-none">
                    <div class="card-body px-4">
                      <div class="d-flex align-items-center justify-content-between mb-9">
                        <div>
                          <span class="text-dark-light fw-semibold">Users</span>
                          <div class="hstack gap-2">
                            <h5 class="card-title fw-semibold mb-0 fs-7">14,872</h5>
                            <span class="fs-11 text-dark-light fw-semibold">+6.4%</span>
                          </div>
                        </div>
                        <span class="round-48 d-flex align-items-center justify-content-center bg-white rounded">
                          <iconify-icon icon="solar:pie-chart-3-line-duotone" class="text-secondary fs-6"></iconify-icon>
                        </span>
                      </div>


                    </div>
                    <div id="users"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <!-- Revenue Forecast -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center justify-content-between mb-3">
                    <div>
                      <h5 class="card-title">Hypertension: Male Vs Female ratio</h5>
                      <!-- <p class="card-subtitle mb-0">Overview of Profit</p> -->
                    </div>

                    <div class="hstack gap-9 mt-4 mt-md-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="d-block flex-shrink-0 round-10 bg-primary rounded-circle"></span>
                        <span class="text-nowrap text-muted">Male</span>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                        <span class="d-block flex-shrink-0 round-10 bg-danger rounded-circle"></span>
                        <span class="text-nowrap text-muted">Female</span>
                      </div>
                    </div>
                  </div>
                  <div style="height: 305px;" class="me-n2 rounded-bars">
                    <div id="revenue-forecast"></div>
                  </div>
                  <div class="row mt-4 mb-2">
                    <div class="col-md-4">
                      <div class="hstack gap-6 mb-3 mb-md-0">
                        <span class="d-flex align-items-center justify-content-center round-48 bg-light rounded">
                          <iconify-icon icon="solar:pie-chart-2-linear" class="fs-7 text-dark"></iconify-icon>
                        </span>
                        <div>
                          <span>Total</span>
                          <h5 class="mt-1 fw-medium mb-0">95000</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="hstack gap-6 mb-3 mb-md-0">
                        <span class="d-flex align-items-center justify-content-center round-48 bg-primary-subtle rounded">
                          <iconify-icon icon="solar:dollar-minimalistic-linear" class="fs-7 text-primary"></iconify-icon>
                        </span>
                        <div>
                          <span>Male</span>
                          <h5 class="mt-1 fw-medium mb-0">42750</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="hstack gap-6">
                        <span class="d-flex align-items-center justify-content-center round-48 bg-danger-subtle rounded">
                          <iconify-icon icon="solar:database-linear" class="fs-7 text-danger"></iconify-icon>
                        </span>
                        <div>
                          <span>Female</span>
                          <h5 class="mt-1 fw-medium mb-0">52250</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <!-- Annual Profit -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Lifestyle Data</h5>
                  <div class="bg-primary bg-opacity-10 rounded-1 overflow-hidden mb-4">
                    <div class="p-4 mb-9">
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="text-dark-light">Alcohol Consumers</span>
                        <h3 class="mb-0">18.4%</h3>
                      </div>
                    </div>
                    <div id="annual-profit"></div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between pb-6 border-bottom">
                    <div>
                      <span class="text-muted fw-medium">KTM Ward 14</span>
                    
                    </div>
                    <div class="text-end">
                      <h6 class="fw-bolder mb-1 lh-base">2,667</h6>
                      <span class="fs-11 fw-medium text-success">+13.2%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between py-6 border-bottom">
                    <div>
                      <span class="text-muted fw-medium">KTM Ward 09</span>
                     
                    </div>
                    <div class="text-end">
                      <h6 class="fw-bolder mb-1 lh-base">3,347</h6>
                      <span class="fs-11 fw-medium text-danger">-7.4%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between pt-6">
                    <div>
                      <span class="text-muted fw-medium">KTM Ward 21</span>
                    </div>
                    <div class="text-end">
                      <h6 class="fw-bolder mb-1 lh-base">2,325</h6>
                      <span class="fs-11 fw-medium text-success">+9.3%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <!-- ----------------------------------------- -->
                <!-- New Customers -->
                <!-- ----------------------------------------- -->
                <div class="col-md-6 col-lg-12">
                  <div class="card">
                    <div class="card-body p-4">
                      <div class="d-flex align-items-center gap-6 mb-4 pb-9">
                        <span class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                          <iconify-icon icon="solar:football-outline" class="fs-7 text-secondary"> </iconify-icon>
                        </span>
                        <h6 class="mb-0 fs-4 fw-medium">Progress of KTM Ward 10</h6>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-6">
                        <h6 class="mb-0 fw-medium">Completion</h6>
                        <h6 class="mb-0 fw-medium">83%</h6>
                      </div>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-secondary" style="width: 83%"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ----------------------------------------- -->
                <!-- Total Income -->
                <!-- ----------------------------------------- -->
                <div class="col-md-6 col-lg-12">
                  <div class="card">
                    <div class="card-body p-4">
                      <div class="d-flex align-items-center gap-6 mb-4">
                        <span class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                          <iconify-icon icon="solar:box-linear" class="fs-7 text-danger"></iconify-icon>
                        </span>
                        <h6 class="mb-0 fs-4 fw-medium">Total Income</h6>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <h4 class="fs-7">680k</h4>
                          <span class="fs-11 text-success fw-semibold">+18%</span>
                        </div>
                        <div class="col-6">
                          <div id="total-income"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <!-- Weekly Schedules -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Weekly Scheduels</h5>
                  <div style="height: 300px;">
                    <div id="weekly-schedules" class="rounded-pill-bars"></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <div class="col-lg-8">
            <!-- Revenue by product -->
            <!-- ----------------------------------------- -->
              <div class="card mb-lg-0">
                <div class="card-body">
                  <div class="d-flex flex-wrap gap-3 mb-9 justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold mb-0">Data by Disease</h5>
                    <select class="form-select w-auto fw-semibold">
                      <option value="1">Sep 2024</option>
                      <option value="2">Oct 2024</option>
                      <option value="3">Nov 2024</option>
                    </select>
                  </div>

                  <!-- <div class="table-responsive">
                    <ul class="nav nav-tabs theme-tab gap-3 flex-nowrap" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#app" role="tab">
                          <div class="hstack gap-2">
                            <iconify-icon icon="solar:widget-linear" class="fs-4"></iconify-icon>
                            <span>App</span>
                          </div>

                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#mobile" role="tab">
                          <div class="hstack gap-2">
                            <iconify-icon icon="solar:smartphone-line-duotone" class="fs-4"></iconify-icon>
                            <span>Mobile</span>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#saas" role="tab">
                          <div class="hstack gap-2">
                            <iconify-icon icon="solar:calculator-linear" class="fs-4"></iconify-icon>
                            <span>SaaS</span>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#other" role="tab">
                          <div class="hstack gap-2">
                            <iconify-icon icon="solar:folder-open-outline" class="fs-4"></iconify-icon>
                            <span>Others</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div> -->
                  <div class="tab-content mb-n3">
                    <div class="tab-pane active" id="app" role="tabpanel">
                      <div class="table-responsive" data-simplebar>
                        <table class="table text-nowrap align-middle table-custom mb-0 last-items-borderless">
                          <thead>
                            <tr>
                              <th scope="col" class="fw-normal ps-0">Disease
                              </th>
                              <th scope="col" class="fw-normal">% of total</th>
                              <th scope="col" class="fw-normal">Risk</th>
                              <th scope="col" class="fw-normal">In numbers</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                  <img src="../assets/images/products/dash-prd-1.jpg" alt="prd1" width="48" class="rounded" />
                                  <div>
                                    <h6 class="mb-0">Cardiovascular Disease</h6>
                                    
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span>5%</span>
                              </td>
                              <td>
                                <span class="badge bg-success-subtle text-success">Low</span>
                              </td>
                              <td>
                                <span class="text-dark-light">75k</span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                  <img src="../assets/images/products/dash-prd-2.jpg" alt="prd1" width="48" class="rounded" />
                                  <div>
                                    <h6 class="mb-0">Asthma</h6>
                                    
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span>11%</span>
                              </td>
                              <td>
                                <span class="badge bg-warning-subtle text-warning">Medium</span>
                              </td>
                              <td>
                                <span class="text-dark-light">165k</span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                  <img src="../assets/images/products/dash-prd-3.jpg" alt="prd1" width="48" class="rounded" />
                                  <div>
                                    <h6 class="mb-0">Diabetes</h6>
                                    
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span>30%</span>
                              </td>
                              <td>
                                <span class="badge bg-secondary-subtle text-secondary">Very
                                  High</span>
                              </td>
                              <td>
                                <span class="text-dark-light">450k</span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-6">
                                  <img src="../assets/images/products/dash-prd-4.jpg" alt="prd1" width="48" class="rounded" />
                                  <div>
                                    <h6 class="mb-0">Hypertension</h6>
                                  
                                  </div>
                                </div>
                              </td>
                              <td>
                                <span>21%</span>
                              </td>
                              <td>
                                <span class="badge bg-danger-subtle text-danger">High</span>
                              </td>
                              <td>
                                <span class="text-dark-light">315k</span>
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
            <!-- ----------------------------------------- -->
            <!-- Sales from locations -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Sales from Locations</h5>
                  <p class="card-subtitle">Nepal</p>
                  <div class="h-280"><br><br>
                  <img src="../assets/images/logos/map.png" alt="Logo" height="70%" width="auto" />
                  </div>
                  <div class="mt-2">
                    <div class="hstack gap-4 mb-3">
                      <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">Kathmandu</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">28%</h6>
                    </div>
                    <div class="hstack gap-4 mb-3">
                      <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">Bhaktapur</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-secondary" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">21%</h6>
                    </div>
                    <div class="hstack gap-4 mb-3">
                      <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">Parsa</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-warning" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">18%</h6>
                    </div>
                    <div class="hstack gap-4">
                      <h6 class="mb-0 flex-shrink-0 w25 fs-3 text-dark-light">Banke</h6>
                      <div class="progress bg-light-subtle mt-1 w-100 h-5">
                        <div class="progress-bar text-bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <h6 class="mb-0 flex-shrink-0 w35 text-muted fs-3">12%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <!-- Weekly Stats -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-4">
              <div class="card mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title">Weekly Stats</h5>
                  <!-- <p class="card-subtitle">Overview of Profit</p> -->

                  <div class="me-n5">
                    <div id="weekly-stats"></div>
                  </div>
                  <div class="pt-7 mt-7 border-top">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="hstack gap-6 mb-3 mb-md-0">
                          <span class="d-flex align-items-center justify-content-center round-48 flex-shrink-0 bg-danger-subtle rounded">
                            <iconify-icon icon="solar:course-down-linear" class="fs-7 text-danger"></iconify-icon>
                          </span>
                          <div>
                            <span class="text-muted">Sales</span>
                            <h6 class="fw-bolder mb-0">36k</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="hstack gap-6">
                          <span class="d-flex align-items-center justify-content-center round-48 flex-shrink-0 bg-primary-subtle rounded">
                            <iconify-icon icon="solar:chart-linear" class="fs-7 text-primary"></iconify-icon>
                          </span>
                          <div>
                            <span class="text-muted">Expenses</span>
                            <h6 class="fw-bolder mb-0">45k</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <!-- Daily activities -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-4">
              <div class="card mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title mb-4">Daily activities</h5>
                  <ul class="timeline-widget mb-0 position-relative mb-n5" data-simplebar style="height: 397px;">
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time mt-n1 text-muted flex-shrink-0 text-end">09:46
                      </div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge bg-primary flex-shrink-0 mt-2"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-12 text-muted mt-n1">Payment received from John
                        Doe of $385.90</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                      </div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge bg-warning flex-shrink-0"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-12 text-dark-light mt-n8 fw-medium d-flex">
                        <span class="flex-shrink-0">New sale recorded</span>
                        <a href="javascript:void(0)" class="text-primary flex-shrink-0">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                      </div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge bg-warning flex-shrink-0"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-12 text-dark-light mt-n8">Payment was made of 64.95
                        to Michael</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                      </div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge bg-secondary flex-shrink-0"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-12 text-dark-light mt-n8 fw-medium d-flex">
                        <span class="flex-shrink-0">New sale recorded</span>
                        <a href="javascript:void(0)" class="text-primary flex-shrink-0">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                      </div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge bg-danger flex-shrink-0"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-12 text-dark-light mt-n8 fw-medium">Project meeting
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time mt-n8 text-muted flex-shrink-0 text-end">09:46
                      </div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge bg-primary flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-12 text-dark-light mt-n8">Payment received from John
                        Doe of 385.90</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- ----------------------------------------- -->
            <!-- Blog Card -->
            <!-- ----------------------------------------- -->
            <div class="col-lg-4">
              <div class="card mb-0">
                <img src="../assets/images/backgrounds/blog.jpg" alt="blog" class="card-img-top" />
                <div class="card-body">
                  <h5 class="mb-3">Figma tips and tricks with Stephan</h5>
                  
                  <ul class="hstack mb-0 pt-1">
                    <li class="ms-n8">
                      <a href="javascript:void(0)" class="me-1">
                        <img src="../assets/images/profile/user-4.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                      </a>
                    </li>
                    <li class="ms-n8">
                      <a href="javascript:void(0)" class="me-1">
                        <img src="../assets/images/profile/user-2.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                      </a>
                    </li>
                    <li class="ms-n8">
                      <a href="javascript:void(0)" class="me-1">
                        <img src="../assets/images/profile/user-3.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                      </a>
                    </li>
                    <li class="ms-n8">
                      <a href="javascript:void(0)" class="me-1">
                        <img src="../assets/images/profile/user-6.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="matdash-img">
                      </a>
                    </li>
                    <li class="ms-n8">
                      <span class="bg-primary-subtle text-primary round-40 rounded-circle d-flex align-items-center justify-content-center">+12</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

      <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
              <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
            </label>

            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
              <i class="icon ti ti-moon fs-7 me-2"></i>Dark
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="ltr-layout">
              <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
            </label>

            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="rtl-layout">
              <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

          <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="vertical-layout">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
              </label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="horizontal-layout">
                <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="boxed-layout">
              <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
            </label>

            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="full-layout">
              <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
            </label>
          </div>

          <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <a href="javascript:void(0)" class="fullsidebar">
              <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="full-sidebar">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
              </label>
            </a>
            <div>
              <input type="radio" class="btn-check" name="sidebar-type" id="mini-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="mini-sidebar">
                <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="card-with-border">
              <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
            </label>

            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="card-without-border">
              <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
            </label>
          </div>
        </div>
      </div>

      <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
</script>
    </div>

    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control" placeholder="Search here" id="search" />
            <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
              <i class="ti ti-x fs-5 ms-3"></i>
            </a>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Analytics</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">eCommerce</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">CRM</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard3</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Contacts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Posts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Detail</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Shop</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Modern</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Dashboard</span>
                  <span class="fs-2 d-block text-body-secondary">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Contacts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Posts</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Detail</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black rounded px-2">
                <a href="javascript:void(0)">
                  <span class="text-dark fw-semibold d-block">Shop</span>
                  <span class="fs-2 d-block text-body-secondary">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.dark.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/js/extra-libs/moment/moment.min.js"></script>
  <script src="../assets/js/vendor.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/js/extra-libs/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="../assets/js/dashboards/dashboard2.js"></script>
</body>

</html>