<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
  <link rel="stylesheet" href="../assets/libs/magnific-popup/dist/magnific-popup.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <!-- ------------------------------------- -->
  <!-- Top Bar Start -->
  <!-- ------------------------------------- -->
  <div class="topbar-image bg-dark py-8 rounded-0 mb-0 alert alert-dismissible fade show" role="alert">
    <div class="d-flex justify-content-center gap-sm-3 gap-2 align-items-center text-center flex-md-nowrap flex-wrap">
      <span class="badge bg-white bg-opacity-10 fs-2 fw-bolder px-2">New</span>
      <p class="mb-0 text-white fw-bold">Frontend Pages Included!</p>
    </div>
    <button type="button" class="btn-close btn-close-white p-3 fs-2" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  <!-- ------------------------------------- -->
  <!-- Top Bar End -->
  <!-- ------------------------------------- -->

  <!-- -------------------------------------------- -->
  <!-- Header start -->
  <!-- -------------------------------------------- -->
  <header class="header-fp p-0 w-100 bg-light-gray">
    <nav class="navbar navbar-expand-lg py-10">
      <div class="container-fluid d-flex justify-content-between">
        <a href="../dark/frontend-landingpage.php" class="text-nowrap logo-img">
          <img src="../assets/images/logos/logo.svg" alt="Logo" />
        </a>
        <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <i class="ti ti-menu-2 fs-8"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-8 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../dark/frontend-aboutpage.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../dark/frontend-blogpage.php">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active fs-4 fw-bold text-dark link-primary d-flex gap-2" href="../dark/frontend-portfoliopage.php">Portfolio
                <span class="badge text-primary bg-primary-subtle fs-2 fw-bolder hstack">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../dark/index.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../dark/frontend-pricingpage.php">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../dark/frontend-contactpage.php">Contact</a>
            </li>
          </ul>
          <a href="javascript:void(0)">
            <a href="../dark/authentication-login.php" class="btn btn-dark btn-sm py-2 px-9">Log
              In</a>
          </a>
        </div>
      </div>
    </nav>
  </header>
  <!-- -------------------------------------------- -->
  <!-- Header End -->
  <!-- -------------------------------------------- -->

  <!-- ------------------------------------- -->
  <!-- Responsive Header Start -->
  <!-- ------------------------------------- -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <a href="../dark/frontend-landingpage.php" class="text-nowrap logo-img">
        <img src="../assets/images/logos/logo.svg" alt="Logo" />
      </a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <a href="../dark/frontend-aboutpage.php" class="px-0 fs-4 d-block text-dark link-primary w-100 py-2">
            About Us
          </a>
        </li>

        <li class="mb-1">
          <a href="../dark/frontend-blogpage.php" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Blog
          </a>
        </li>

        <li class="mb-1">
          <a href="../dark/frontend-portfoliopage.php" class="px-0 fs-4 d-flex align-items-center justify-content-start gap-2 w-100 py-2 text-dark link-primary">
            Portfolio
            <span class="badge text-primary bg-primary-subtle fs-2 fw-bolder hstack">New</span>
          </a>
        </li>

        <li class="mb-1">
          <a href="../dark/index.php" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Dashboard
          </a>
        </li>

        <li class="mb-1">
          <a href="../dark/frontend-pricingpage.php" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Pricing
          </a>
        </li>

        <li class="mb-1">
          <a href="../dark/frontend-contactpage.php" class="px-0 fs-4 d-block w-100 py-2 text-dark link-primary">
            Contact
          </a>
        </li>
        <li class="mt-3">
          <a href="../dark/authentication-login.php" class="btn btn-primary w-100">Log In</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- ------------------------------------- -->
  <!-- Responsive Header End -->
  <!-- ------------------------------------- -->

  <div class="main-wrapper overflow-hidden">
    <!-- ------------------------------------- -->
    <!-- Banner Start -->
    <!-- ------------------------------------- -->
    <section class="py-7 py-md-5 bg-light-gray">
      <div class="container-fluid">
        <div class="d-flex justify-content-between flex-md-nowrap flex-wrap">
          <h2 class="fs-15 fw-bolder mb-0">
            Explore Our Latest Works
          </h2>
          <div class="d-flex align-items-center gap-6">
            <a href="../dark/frontend-landingpage.php" class="text-muted fw-bolder link-primary fs-3 text-uppercase">
              Matdash
            </a>
            <iconify-icon icon="solar:alt-arrow-right-outline" class="fs-5 text-muted"></iconify-icon>
            <a href="#" class="text-primary link-primary fw-bolder fs-3 text-uppercase">
              Portfolio
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Banner End -->
    <!-- ------------------------------------- -->

    <section class="pt-5 pt-md-14 pb-4 pb-md-5">
      <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h3 class="mb-3 mb-sm-0 fw-semibold d-flex align-items-center">Portfolio <span class="badge text-bg-secondary fs-2 rounded-4 py-1 px-2 ms-2">12</span>
          </h3>
          <form class="position-relative">
            <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Photos">
            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y text-dark ms-3"></i>
          </form>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s1.jpg">
                    <img src="../assets/images/products/s1.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Isuava wakceajo fe.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s2.jpg">
                    <img src="../assets/images/products/s2.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Ip docmowe vemremrif.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s3.jpg">
                    <img src="../assets/images/products/s3.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Duan cosudos utaku.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s4.jpg">
                    <img src="../assets/images/products/s4.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Fu netbuv oggu.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s5.jpg">
                    <img src="../assets/images/products/s5.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Di sekog do.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s6.jpg">
                    <img src="../assets/images/products/s6.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Lo jogu camhiisi.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s7.jpg">
                    <img src="../assets/images/products/s7.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Orewac huosazud robuf.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s8.jpg">
                    <img src="../assets/images/products/s8.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Nira biolaizo tuzi.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s9.jpg">
                    <img src="../assets/images/products/s9.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Peri metu ejvu.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s10.jpg">
                    <img src="../assets/images/products/s10.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Vurnohot tajraje isusufuj.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s11.jpg">
                    <img src="../assets/images/products/s11.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Juc oz ma.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card overflow-hidden">
              <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1 w-100 overflow-hidden position-relative">
                  <a class="image-popup-vertical-fit" href="../assets/images/products/s12.jpg">
                    <img src="../assets/images/products/s12.jpg" class="d-block position-relative w-100 w-100 object-fit-cover" height="220" alt="user" />
                  </a>
                  <div class="p-4 d-flex align-items-center justify-content-between">
                    <div>
                      <h6 class="mb-0 fs-4 fw-semibold">Povipvez marjelliz zuuva.jpg</h6>
                      <span class="text-dark fs-2">Wed, Dec 14, 2024</span>
                    </div>
                    <div class="dropdown">
                      <a class="text-muted fw-semibold d-flex align-items-center p-1 fs-4" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-dots-vertical"></i>
                      </a>
                      <ul class="dropdown-menu overflow-hidden">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">Isuava wakceajo
                            fe.jpg</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ------------------------------------- -->
    <!-- Focus Start -->
    <!-- ------------------------------------- -->
    <section class="bg-primary py-lg-11 py-5 position-relative">
      <div class="position-absolute top-50 start-0 translate-middle-y">
        <img src="../assets/images/frontend-pages/screenshot-1.png" alt="image" class="d-xxl-block d-none">
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-9 text-center">
            <a class="round-56 mx-auto rounded-2 shadow bg-white hstack justify-content-center" href="../dark/frontend-landingpage.php">
              <img src="../assets/images/logos/logo-icon.svg" alt="logo">
            </a>
            <h2 class="fs-15 my-9 fw-bolder text-white text-center lh-sm">
              Focus on what truly matters—creating stunning, functional designs.
            </h2>
            <p class="text-white fs-5 mb-9 px-xl-11">
              Designed for ease of use and customization, this template help you build professional
              dashboards
              faster.
            </p>
            <a href="../dark/authentication-register.php" class="btn btn-outline-light">
              Register
            </a>
          </div>
        </div>
      </div>
      <div class="position-absolute top-50 end-0 translate-middle-y">
        <img src="../assets/images/frontend-pages/screenshot-2.png" alt="image" class="d-xxl-block d-none">
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Focus End -->
    <!-- ------------------------------------- -->
  </div>

  <!-- ------------------------------------- -->
  <!-- Footer Start -->
  <!-- ------------------------------------- -->
  <footer class="bg-dark">
    <div class="container-fluid">
      <div class="row py-7 py-md-14 py-lg-11">
        <div class="col-md-3 col-6 mb-7 mb-md-0">
          <img src="../assets/images/logos/white-logo.svg" alt="white logo">

          <ul class="d-flex flex-column gap-9 mt-7 mb-0">
            <li>
              <a href="../dark/app-kanban.php" class="fs-4 text-light link-primary">Kanban</a>
            </li>
            <li>
              <a href="../dark/app-invoice.php" class="fs-4 text-light link-primary">Invoice
                List</a>
            </li>
            <li>
              <a href="../dark/eco-shop.php" class="fs-4 text-light link-primary">eCommerce</a>
            </li>
            <li>
              <a href="../dark/app-chat.php" class="fs-4 text-light link-primary">Chat</a>
            </li>
            <li>
              <a href="../dark/app-calendar.php" class="fs-4 text-light link-primary">Calendar</a>
            </li>
            <li>
              <a href="../dark/blog-posts.php" class="fs-4 text-light link-primary">Blog</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-6 mb-7 mb-md-0">
          <h3 class="fs-4 text-white fw-semibold mb-7">Forms</h3>
          <ul class="d-flex flex-column gap-9 mb-0">
            <li>
              <a href="../dark/form-basic.php" class="fs-4 text-light link-primary">Form
                Basic</a>
            </li>
            <li>
              <a href="../dark/form-horizontal.php" class="fs-4 text-light link-primary">Form
                Horizontal</a>
            </li>
            <li>
              <a href="../dark/form-wizard.php" class="fs-4 text-light link-primary">Form
                Wizard</a>
            </li>
            <li>
              <a href="../dark/form-bootstrap-validation.php" class="fs-4 text-light link-primary">Form Validation
              </a>
            </li>
            <li>
              <a href="../dark/form-editor-quill.php" class="fs-4 text-light link-primary">Quill
                Editor</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-6 mb-7 mb-md-0">
          <h3 class="fs-4 text-white fw-semibold mb-7">Tables</h3>
          <ul class="d-flex flex-column gap-9 mb-0">
            <li>
              <a href="../dark/table-basic.php" class="fs-4 text-light link-primary">Basic
                Table</a>
            </li>
            <li>
              <a href="../dark/table-dark-basic.php" class="fs-4 text-light link-primary">Table
                Dark Basic</a>
            </li>
            <li>
              <a href="../dark/table-sizing.php" class="fs-4 text-light link-primary">Table
                Sizing</a>
            </li>
            <li>
              <a href="../dark/table-layout-coloured.php" class="fs-4 text-light link-primary">Coloured Table</a>
            </li>
            <li>
              <a href="../dark/table-datatable-basic.php" class="fs-4 text-light link-primary">Basic Initialisation</a>
            </li>
            <li>
              <a href="../dark/table-datatable-api.php" class="fs-4 text-light link-primary">API</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-6 mb-7 mb-md-0">
          <h3 class="fs-4 text-white fw-semibold mb-7">Follow us</h3>
          <div class="d-flex gap-9">
            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Facebook">
              <img src="../assets/images/frontend-pages/icon-facebook.svg" alt="facebook">
            </a>
            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Twitter">
              <img src="../assets/images/frontend-pages/icon-twitter.svg" alt="twitter">
            </a>
            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Instagram">
              <img src="../assets/images/frontend-pages/icon-instagram.svg" alt="instagram">
            </a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between flex-md-nowrap flex-wrap py-13 border-top border-dark-subtle">
        <div class="d-flex gap-3">
          <img src="../assets/images/logos/logo-icon-white.svg" alt="logo">
          <p class="text-white opacity-50 mb-0">All rights reserved by MatDash. </p>
        </div>
        <div>
          <p class="text-white mb-0">
            <span class="opacity-50">Produced by</span>
            <a href="https://adminmart.com/" class="text-white link-primary">AdminMart</a>.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ------------------------------------- -->
  <!-- Footer End -->
  <!-- ------------------------------------- -->

  <!-- Scroll Top -->
  <a href="javascript:void(0)" class="top-btn btn btn-primary d-flex align-items-center justify-content-center round-54 p-0 rounded-circle">
    <i class="ti ti-arrow-up fs-7"></i>
  </a>

  <script src="../assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.dark.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/plugins/meg.init.js"></script>
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/js/frontend-landingpage/homepage.js"></script>
</body>

</html>