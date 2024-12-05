<?php include("header.php");?>
  <!-- Toast -->
  <!-- <div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body hstack align-items-start gap-6">
      <i class="ti ti-alert-circle fs-6"></i>
      <div>
        <h5 class="text-white fs-3 mb-1">Welcome to MatDash</h5>
        <h6 class="text-white fs-2 mb-0">Easy to costomize the Template!!!</h6>
      </div>
      <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div> -->


    <!-- Sidebar Start -->
<?php include("sidebar.php");?>
    <!--  Sidebar End -->




      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5">
              <!-- -------------------------------------------- -->
              <!-- Welcome Card -->
              <!-- -------------------------------------------- -->
              <div class="card text-bg-primary">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="d-flex flex-column h-100">
                        <div class="hstack gap-3">
                          <span class="d-flex align-items-center justify-content-center round-48 bg-white rounded flex-shrink-0">
                            <iconify-icon icon="solar:course-up-outline" class="fs-7 text-muted"></iconify-icon>
                          </span>
                          <h5 class="text-white fs-6 mb-0 text-nowrap">Welcome Back
                            <br />Shraddhesh
                          </h5>
                        </div>
                        <div class="mt-4 mt-sm-auto">
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
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-md-end">
                      <img src="../assets/images/logos/favicon1.png" alt="welcome" class="img-fluid mb-n7 mt-2" width="500" />
                    </div>
                  </div>


                </div>
              </div>
              <div class="row">
                <!-- -------------------------------------------- -->
                <!-- Customers -->
                <!-- -------------------------------------------- -->
                <div class="col-md-6">
                  <div class="card bg-secondary-subtle overflow-hidden shadow-none">
                    <div class="card-body p-4">
                      <span class="text-dark-light">Total Data Set</span>
                      <div class="hstack gap-6">
                        <h5 class="mb-0 fs-7">1.5M</h5>
                        <span class="fs-11 text-dark-light fw-semibold">-12%</span>
                      </div>
                    </div>
                    <div id="customers"></div>
                  </div>
                </div>
                <!-- -------------------------------------------- -->
                <!-- Projects -->
                <!-- -------------------------------------------- -->
                <div class="col-md-6">
                  <div class="card bg-danger-subtle overflow-hidden shadow-none">
                    <div class="card-body p-4">
                      <span class="text-dark-light">Total Survey Days</span>
                      <div class="hstack gap-6 mb-4">
                        <h5 class="mb-0 fs-7">1200</h5>
                        <span class="fs-11 text-dark-light fw-semibold">+31.8%</span>
                      </div>
                      <div class="mx-n1">
                        <div id="projects"></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <!-- -------------------------------------------- -->
              <!-- Revenue Forecast -->
              <!-- -------------------------------------------- -->
              <div class="card">
                <div class="card-body pb-4">
                  <div class="d-md-flex align-items-center justify-content-between mb-4">
                    <div class="hstack align-items-center gap-3">
                      <span class="d-flex align-items-center justify-content-center round-48 bg-primary-subtle rounded flex-shrink-0">
                        <iconify-icon icon="solar:layers-linear" class="fs-7 text-primary"></iconify-icon>
                      </span>
                      <div>
                        <h5 class="card-title">Total Data Acquired</h5>
                        <p class="card-subtitle mb-0">Year 2024</p>
                      </div>
                    </div>

                    <div class="hstack gap-9 mt-4 mt-md-0">
                      <div class="d-flex align-items-center gap-2">
                        <span class="d-block flex-shrink-0 round-8 bg-primary rounded-circle"></span>
                        <span class="text-nowrap text-muted">Q1</span>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                        <span class="d-block flex-shrink-0 round-8 bg-danger rounded-circle"></span>
                        <span class="text-nowrap text-muted">Q2</span>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                        <span class="d-block flex-shrink-0 round-8 bg-secondary rounded-circle"></span>
                        <span class="text-nowrap text-muted">Q3</span>
                      </div>
                    </div>
                  </div>
                  <div style="height: 285px;" class="me-n7">
                    <div id="revenue-forecast"></div>
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
                          <h5 class="card-title fw-semibold">Age 13-25</h5>
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
                      <h5 class="card-title fw-semibold">Performance overview</h5>
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
<?php include("footer.php");?>