<?php
include("header.php");
include("sidebar.php");?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-4 pb-0" data-simplebar="">
                  <div class="row flex-nowrap">
                    <div class="col">
                      <div class="card primary-gradient">
                        <div class="card-body text-center px-9 pb-4">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-primary flex-shrink-0 mb-3 mx-auto">
                            <iconify-icon icon="solar:dollar-minimalistic-linear" class="fs-7 text-white"></iconify-icon>
                          </div>
                          <h6 class="fw-normal fs-3 mb-1">Diabetic</h6>
                          <h4 class="mb-3 d-flex align-items-center justify-content-center gap-1">
                            16,689</h4>
                          <a href="javascript:void(0)" class="btn btn-white fs-2 fw-semibold text-nowrap">View
                            Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card warning-gradient">
                        <div class="card-body text-center px-9 pb-4">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-warning flex-shrink-0 mb-3 mx-auto">
                            <iconify-icon icon="solar:recive-twice-square-linear" class="fs-7 text-white"></iconify-icon>
                          </div>
                          <h6 class="fw-normal fs-3 mb-1">Mental Health</h6>
                          <h4 class="mb-3 d-flex align-items-center justify-content-center gap-1">
                            148</h4>
                          <a href="javascript:void(0)" class="btn btn-white fs-2 fw-semibold text-nowrap">View
                            Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card secondary-gradient">
                        <div class="card-body text-center px-9 pb-4">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-secondary flex-shrink-0 mb-3 mx-auto">
                            <iconify-icon icon="ic:outline-backpack" class="fs-7 text-white"></iconify-icon>
                          </div>
                          <h6 class="fw-normal fs-3 mb-1">Hypertension</h6>
                          <h4 class="mb-3 d-flex align-items-center justify-content-center gap-1">
                            1,568</h4>
                          <a href="javascript:void(0)" class="btn btn-white fs-2 fw-semibold text-nowrap">View
                            Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card danger-gradient">
                        <div class="card-body text-center px-9 pb-4">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-danger flex-shrink-0 mb-3 mx-auto">
                            <iconify-icon icon="ic:baseline-sync-problem" class="fs-7 text-white"></iconify-icon>
                          </div>
                          <h6 class="fw-normal fs-3 mb-1">Alcohol Addiction</h6>
                          <h4 class="mb-3 d-flex align-items-center justify-content-center gap-1">
                            64</h4>
                          <a href="javascript:void(0)" class="btn btn-white fs-2 fw-semibold text-nowrap">View
                            Details</a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card success-gradient">
                        <div class="card-body text-center px-9 pb-4">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded text-bg-success flex-shrink-0 mb-3 mx-auto">
                            <iconify-icon icon="ic:outline-forest" class="fs-7 text-white"></iconify-icon>
                          </div>
                          <h6 class="fw-normal fs-3 mb-1">Asthma</h6>
                          <h4 class="mb-3 d-flex align-items-center justify-content-center gap-1">
                            3,675</h4>
                          <a href="javascript:void(0)" class="btn btn-white fs-2 fw-semibold text-nowrap">View
                            Details</a>
                        </div>
                      </div>
                    </div>
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
            <div class="col-lg-5">
              <!-- -------------------------------------------- -->
              <!-- Your Performance -->
              <!-- -------------------------------------------- -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Area Covered</h5>
                  <p class="card-subtitle mb-0 lh-base">Last check on 25 february</p>

                  <div class="row mt-4">
                    <div class="col-md-6">
                      <div class="vstack gap-9 mt-2">
                        <div class="hstack align-items-center gap-3">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded bg-primary-subtle flex-shrink-0">
                            <iconify-icon icon="solar:shop-2-linear" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 text-nowrap">10 wards</h6>
                            <span>Processing</span>
                          </div>

                        </div>
                        <div class="hstack align-items-center gap-3">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded bg-danger-subtle">
                            <iconify-icon icon="solar:filters-outline" class="fs-7 text-danger"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0">4 wards</h6>
                            <span>On hold</span>
                          </div>

                        </div>
                        <div class="hstack align-items-center gap-3">
                          <div class="d-flex align-items-center justify-content-center round-48 rounded bg-secondary-subtle">
                            <iconify-icon icon="solar:pills-3-linear" class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0">18 wards</h6>
                            <span>Completed</span>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="text-center mt-sm-n7">
                        <div id="your-preformance"></div>
                        <h2 class="fs-8">32</h2>
                        <p class="mb-0">
                          Ward's data has been analyzed
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="row">
                <div class="col-md-6">
                  <!-- -------------------------------------------- -->
                  <!-- Customers -->
                  <!-- -------------------------------------------- -->
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div>
                          <h5 class="card-title fw-semibold">Customers</h5>
                          <p class="card-subtitle mb-0">Last 7 days</p>
                        </div>
                        <span class="fs-11 text-success fw-semibold lh-lg">+26.5%</span>
                      </div>
                      <div class="py-4 my-1">
                        <div id="customers-area"></div>
                      </div>
                      <div class="d-flex flex-column align-items-center gap-2 w-100 mt-3">
                        <div class="d-flex align-items-center gap-2 w-100">
                          <span class="d-block flex-shrink-0 round-8 bg-primary rounded-circle"></span>
                          <h6 class="fs-3 fw-normal text-muted mb-0">April 07 - April 14</h6>
                          <h6 class="fs-3 fw-normal mb-0 ms-auto text-muted">6,380</h6>
                        </div>
                        <div class="d-flex align-items-center gap-2 w-100">
                          <span class="d-block flex-shrink-0 round-8 bg-light rounded-circle"></span>
                          <h6 class="fs-3 fw-normal text-muted mb-0">Last Week</h6>
                          <h6 class="fs-3 fw-normal mb-0 ms-auto text-muted">4,298</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <!-- -------------------------------------------- -->
                  <!-- Sales Overview -->
                  <!-- -------------------------------------------- -->
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title fw-semibold">Performance Overview</h5>
                      <p class="card-subtitle mb-1">Last 7 days</p>

                      <div class="position-relative labels-chart">
                        <span class="fs-11 label-1">0%</span>
                        <span class="fs-11 label-2">25%</span>
                        <span class="fs-11 label-3">50%</span>
                        <span class="fs-11 label-4">75%</span>
                        <div id="sales-overview"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-8">
              <!-- -------------------------------------------- -->
              <!-- Revenue by Product -->
              <!-- -------------------------------------------- -->
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
            <div class="col-lg-4">
              <!-- -------------------------------------------- -->
              <!-- Total settlements -->
              <!-- -------------------------------------------- -->
              <div class="card bg-primary-subtle mb-0">
                <div class="card-body">
                  <div class="hstack align-items-center gap-3 mb-4">
                    <span class="d-flex align-items-center justify-content-center round-48 bg-white rounded flex-shrink-0">
                      <iconify-icon icon="solar:box-linear" class="fs-7 text-primary"></iconify-icon>
                    </span>
                    <div>
                      <p class="mb-1 text-dark-light">Medical Consumers</p>
                      <!-- <h4 class="mb-0 fw-bolder">$122,580</h5> -->
                    </div>
                  </div>
                  <div style="height: 278px;">
                    <div id="settlements"></div>
                  </div>
                  <div class="row mt-4 mb-2">
                    <div class="col-md-6 text-center">
                      <p class="mb-1 text-dark-light lh-lg">Total</p>
                      <h4 class="mb-0 text-nowrap">12970</h4>
                    </div>
                    <div class="col-md-6 text-center mt-3 mt-md-0">
                      <p class="mb-1 text-dark-light lh-lg">Consumers</p>
                      <h4 class="mb-0">31550</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-12">
              <div class="card mb-0">
                <div class="card-body calender-sidebar app-calendar">
                  <div id="calendar"></div>
                </div>
              </div> -->
              <!-- BEGIN MODAL -->
              <!-- <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="eventModalLabel">
                        Add / Edit Event
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-12">
                          <div>
                            <label class="form-label">Event Title</label>
                            <input id="event-title" type="text" class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-12 mt-6">
                          <div>
                            <label class="form-label">Event Color</label>
                          </div>
                          <div class="d-flex">
                            <div class="n-chk">
                              <div class="form-check form-check-primary form-check-inline">
                                <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                                <label class="form-check-label" for="modalDanger">Danger</label>
                              </div>
                            </div>
                            <div class="n-chk">
                              <div class="form-check form-check-warning form-check-inline">
                                <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                                <label class="form-check-label" for="modalSuccess">Success</label>
                              </div>
                            </div>
                            <div class="n-chk">
                              <div class="form-check form-check-success form-check-inline">
                                <input class="form-check-input" type="radio" name="event-level" value="Primary" id="modalPrimary" />
                                <label class="form-check-label" for="modalPrimary">Primary</label>
                              </div>
                            </div>
                            <div class="n-chk">
                              <div class="form-check form-check-danger form-check-inline">
                                <input class="form-check-input" type="radio" name="event-level" value="Warning" id="modalWarning" />
                                <label class="form-check-label" for="modalWarning">Warning</label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-12 mt-6">
                          <div>
                            <label class="form-label">Enter Start Date</label>
                            <input id="event-start-date" type="date" class="form-control" />
                          </div>
                        </div>

                        <div class="col-md-12 mt-6">
                          <div>
                            <label class="form-label">Enter End Date</label>
                            <input id="event-end-date" type="date" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                        Update changes
                      </button>
                      <button type="button" class="btn btn-primary btn-add-event">
                        Add Event
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- END MODAL -->
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
  <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
  <script src="../assets/js/apps/calendar-init.js"></script>
  <script src="../assets/js/vendor.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/js/dashboards/dashboard3.js"></script>
</body>

</html>