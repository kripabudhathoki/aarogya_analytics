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
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
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
              <a class="nav-link active fs-4 fw-bold text-dark link-primary" href="../dark/frontend-blogpage.php">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link fs-4 fw-bold text-dark link-primary d-flex gap-2" href="../dark/frontend-portfoliopage.php">Portfolio
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
    <section class="py-5 bg-light-gray">
      <div class="container-fluid">
        <div class="d-flex justify-content-between flex-md-nowrap flex-wrap">
          <h2 class="fs-15 fw-bolder ">
            Our most recent articles
          </h2>
          <div class="d-flex align-items-center gap-6">
            <a href="../dark/frontend-landingpage.php" class="text-muted fw-bolder link-primary fs-3 text-uppercase">
              Matdash
            </a>
            <iconify-icon icon="solar:alt-arrow-right-outline" class="fs-5 text-muted"></iconify-icon>
            <a href="#" class="text-primary link-primary fw-bolder fs-3 text-uppercase">
              Blog posts
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Banner End -->
    <!-- ------------------------------------- -->

    <!-- ------------------------------------- -->
    <!-- List Start -->
    <!-- ------------------------------------- -->
    <section class="bg-light-gray pb-3 pb-md-7 pb-lg-12">
      <div class="container-fluid">
        <div class="card data-shadow rounded-3 overflow-hidden mb-7">
          <div class="row">
            <div class="col-lg-6 order-last order-lg-first">
              <div class="p-7 p-lg-5 flex-grow-1">
                <div class="py-lg-4 d-flex flex-column gap-3">
                  <div class="d-flex">
                    <p class="fs-2 px-2 py-1 rounded-pill bg-light-gray text-dark mb-0 fw-semibold">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php">
                    <h2 class="fw-bolder fs-8">
                      Early Black Friday Amazon deals: cheap TVs, headphones, laptops
                    </h2>
                  </a>
                  <p class="">
                    Learn the best practices for creating responsive websites that look great on any
                    device, from mobile phones to desktops.
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-semibold text-dark">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-semibold text-dark">3</p>
                      </div>
                    </div>
                    <div class="d-flex gap-2">
                      <i class="ti ti-circle"></i>
                      <p class="mb-0 fs-1 fw-semibold text-dark">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
              <div class="blog-bg d-flex flex-column justify-content-between p-9 h-100 flex-grow-1">
                <img src="../assets/images/profile/user-6.jpg" alt="user" width="44" height="44" class="rounded-circle">
                <div class="d-flex justify-content-end">
                  <p class="fs-2 py-1 px-2 bg-white rounded-1 fw-semibold mb-0 text-dark">2 min Read
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-1.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Presented by Max Rushden with Barry Glendenning, Philippe Auclair
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-2.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    As yen tumbles, gadget-loving Japan goes for iPhones
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-3.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Intel loses bid to revive antitrust case against patent foe Fortress
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-4.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Intel loses bid to revive antitrust case against patent foe Fortress
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-5.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Streaming video way before it was cool, go dark tomorrow
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-6.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Apple is apparently working on a new ‘streamlined’ accessibility
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-7.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    After Twitter Staff Cuts, Survivors Face ‘Radio Silence
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-8.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Why Figma is selling to Adobe for $20 billion
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card rounded-3 overflow-hidden">
              <a href="../dark/frontend-blogdetailpage.php" class="position-relative">
                <img src="../assets/images/frontend-pages/blog-9.jpg" alt="blog image" class="w-100 img-fluid">
                <div class="position-absolute bottom-0 end-0 me-9 mb-3">
                  <p class="text-dark fs-2 px-2 rounded-pill bg-white mb-0 ">2 min Read</p>
                </div>
                <div class="position-absolute bottom-0 ms-7 mb-n9">
                  <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="44px" height="44px">
                </div>
              </a>
              <div class="mt-7 px-7 pb-7 h-100">
                <div class="d-flex gap-3 flex-column h-100 justify-content-between">
                  <div class="d-flex">
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      Web Development
                    </p>
                  </div>
                  <a href="../dark/frontend-blogdetailpage.php" class="fs-5 fw-bolder">
                    Garmins Instinct Crossover is a rugged hybrid smartwatch
                  </a>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">6941</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-message fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-bold">3</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                      <i class="ti ti-circle fs-2"></i>
                      <p class="mb-0 fs-2 fw-bold">Tue, May 2</p>
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
    <!-- List End  -->
    <!-- ------------------------------------- -->

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
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/js/frontend-landingpage/homepage.js"></script>
</body>

</html>