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
              <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../dark/frontend-blogpage.php">Blog</a>
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
    <!-- banner Start -->
    <!-- ------------------------------------- -->
    <section class="py-lg-7 pt-lg-12 bg-light-gray overflow-hidden">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div>
              <h1 class="fs-14 fw-medium lh-sm mb-4">
                <b>A feature-packed dashboard</b> built for developers' needs.
              </h1>
              <div class="d-flex align-items-center gap-6 mb-4">
                <ul class="hstack mb-0">
                  <li class="">
                    <a href="javascript:void(0)" class="me-1">
                      <img src="../assets/images/profile/user-5.jpg" class="rounded-circle border border-2 border-white" width="40" height="40" alt="Matdash-img">
                    </a>
                  </li>
                  <li class="ms-n8">
                    <a href="javascript:void(0)" class="me-1">
                      <img src="../assets/images/profile/user-2.jpg" class="rounded-circle border border-2 border-white" width="40" height="40" alt="Matdash-img">
                    </a>
                  </li>
                  <li class="ms-n8">
                    <a href="javascript:void(0)" class="me-1">
                      <img src="../assets/images/profile/user-6.jpg" class="rounded-circle border border-2 border-white" width="40" height="40" alt="Matdash-img">
                    </a>
                  </li>
                </ul>
                <p class="fs-4 mb-0 fw-medium">52,589+ developers & agencies using our templates
                </p>
              </div>
              <div class="d-flex align-items-center gap-6 mb-4">
                <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Bootstrap">
                  <img src="../assets/images/frontend-pages/icon-bootstrap.svg" width="28" height="28" alt="icon">
                </a>
                <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Sass">
                  <img src="../assets/images/frontend-pages/icon-sass.svg" width="28" height="28" alt="icon">
                </a>
                <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Gulp">
                  <img src="../assets/images/frontend-pages/icon-gulp.svg" width="28" height="28" alt="icon">
                </a>
                <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Figma">
                  <img src="../assets/images/frontend-pages/icon-figma.svg" width="24" height="24" alt="icon">
                </a>
                <a class="d-flex align-items-center justify-content-center bg-white rounded-3 round-54 shadow" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-title="Apexchart">
                  <img src="../assets/images/frontend-pages/icon-apexchart.svg" width="24" height="24" alt="icon">
                </a>
              </div>
              <a href="javascript:void(0)">
                <a href="../dark/authentication-login.php" class="btn btn-primary">Log
                  In</a>
              </a>
            </div>
          </div>
          <div class="col-lg-6 d-none d-lg-block">
            <div class="banner-image overflow-hidden">
              <img src="../assets/images/frontend-pages/banner-image.png" class="img-fluid" alt="banner">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- banner End -->
    <!-- ------------------------------------- -->

    <!-- ------------------------------------- -->
    <!-- Count Start -->
    <!-- ------------------------------------- -->
    <section class="pt-7 pt-md-14 pt-lg-11 pb-7 pb-lg-5">
      <div class="container-fluid">
        <div class="row justify-content-between">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h2 class="fs-15 fw-bolder mb-4">
              Over 45,000 clients and counting.
            </h2>
            <p class="fs-5 text-muted mb-4">
              Pellentesque varius semper odio non pretium. Nullam sagittis neque orci, eu elementum
              enim.
            </p>
            <a href="javascript:void(0)" class="fs-4 fw-bolder pb-2 border-dark border-2 border-bottom request-callback">
              Request a Callback
            </a>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6 mb-7 mb-lg-5">
                <div class="d-flex flex-column align-items-start gap-3">
                  <div class="bg-danger-subtle rounded-2 round-48 hstack justify-content-center">
                    <iconify-icon icon="mingcute:bubble-line" class="fs-7 text-danger "></iconify-icon>
                  </div>
                  <h4 class="fw-semibold mb-0">
                    Expert Advisor
                  </h4>
                  <p class="fs-4 text-muted mb-0">
                    Suspendisse vestibulum eu erat ac scelerisque.
                  </p>
                </div>
              </div>
              <div class="col-md-6 mb-7 mb-lg-5">
                <div class="d-flex flex-column align-items-start gap-3">
                  <div class="bg-primary-subtle rounded-2 round-48 hstack justify-content-center">
                    <iconify-icon icon="tabler:building-store" class="fs-7 text-primary "></iconify-icon>
                  </div>
                  <h4 class="fw-semibold mb-0">
                    Effective Support
                  </h4>
                  <p class="fs-4 text-muted mb-0">
                    Suspendisse vestibulum eu erat ac scelerisque.
                  </p>
                </div>
              </div>
              <div class="col-md-6 mb-7 mb-lg-5">
                <div class="d-flex flex-column align-items-start gap-3">
                  <div class="bg-info-subtle rounded-2 round-48 hstack justify-content-center">
                    <iconify-icon icon="material-symbols:category-outline" class="fs-7 text-info "></iconify-icon>
                  </div>
                  <h4 class="fw-semibold mb-0">
                    Low Fees
                  </h4>
                  <p class="fs-4 text-muted mb-0">
                    Suspendisse vestibulum eu erat ac scelerisque.
                  </p>
                </div>
              </div>
              <div class="col-md-6 mb-7 mb-lg-5">
                <div class="d-flex flex-column align-items-start gap-3 ">
                  <div class="bg-light-subtle rounded-2 round-48 hstack justify-content-center">
                    <iconify-icon icon="material-symbols:earthquake" class="fs-7 text-dark "></iconify-icon>
                  </div>
                  <h4 class="fw-semibold mb-0">
                    Loan Facility
                  </h4>
                  <p class="fs-4 text-muted mb-0">
                    Suspendisse vestibulum eu erat ac scelerisque.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Count End -->
    <!-- ------------------------------------- -->

    <!-- ------------------------------------- -->
    <!-- Tabs Start -->
    <!-- ------------------------------------- -->
    <section class="py-7 py-md-14 py-lg-11 bg-light-gray">
      <div class="container-fluid">
        <ul class="nav nav-pills tabs-pills justify-content-between gap-3" id="pills-tab" role="tablist">
          <li class="nav-item flex-grow-1" role="presentation">
            <button class="nav-link active fs-4 fw-semibold px-4 py-6 tabs-shadow" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
              <iconify-icon icon="material-symbols:groups-outline-rounded" class="fs-7 "></iconify-icon>
              Team Scheduling
            </button>
          </li>
          <li class="nav-item flex-grow-1" role="presentation">
            <button class="nav-link fs-4 fw-semibold px-4 py-6 tabs-shadow" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
              <iconify-icon icon="material-symbols:account-balance-outline" class="fs-7"></iconify-icon>
              Payments
            </button>
          </li>
          <li class="nav-item flex-grow-1" role="presentation">
            <button class="nav-link fs-4 fw-semibold px-4 py-6 tabs-shadow" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
              <iconify-icon icon="material-symbols-light:photo-frame-outline-sharp" class="fs-7"></iconify-icon>
              Embedding
            </button>
          </li>
          <li class="nav-item flex-grow-1" role="presentation">
            <button class="nav-link fs-4 fw-semibold px-4 py-6 tabs-shadow" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">
              <iconify-icon icon="material-symbols:widgets-outline-rounded" class="fs-7"></iconify-icon>
              Workflows
            </button>
          </li>
        </ul>
        <div class="tab-content mt-7 mt-lg-12 pb-lg-9" id="myTabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="team-tab" tabindex="0">
            <div class="row gap-lg-0 gap-7">
              <div class="col-lg-6">
                <div class="bg-primary-subtle rounded-24 p-13">
                  <img src="../assets/images/frontend-pages/tabsimage.png" alt="icon" class="w-100">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100 justify-content-center align-items-start ps-lg-7 ms-lg-8">
                  <h2 class="fs-10 fw-bolder mb-0">Defend your focus</h2>
                  <div class="accordion tabs-accordion my-4 w-100" id="accordionExample1">
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Combine teammate schedules
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Factor in outside colleagues
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Round robin pooling
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0)">
                    <button class="btn btn-primary px-9 py-6">Learn More</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
            <div class="row gap-lg-0 gap-7">
              <div class="col-lg-6">
                <div class="bg-primary-subtle rounded-24 p-13">
                  <img src="../assets/images/frontend-pages/tabsimage.png" alt="icon" class="w-100">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100 justify-content-center align-items-start ps-lg-7">
                  <h2 class="fs-10 fw-bolder mb-0">Defend your focus</h2>
                  <div class="accordion tabs-accordion my-4 w-100" id="accordionExample2">
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Combine teammate schedules
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Factor in outside colleagues
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Round robin pooling
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0)">
                    <button class="btn btn-primary px-9 py-6">Learn More</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="embedding-tab" tabindex="0">
            <div class="row gap-lg-0 gap-7">
              <div class="col-lg-6">
                <div class="bg-primary-subtle rounded-24 p-13">
                  <img src="../assets/images/frontend-pages/tabsimage.png" alt="icon" class="w-100">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100 justify-content-center align-items-start ps-lg-7">
                  <h2 class="fs-10 fw-bolder mb-0">Defend your focus</h2>
                  <div class="accordion tabs-accordion my-4 w-100" id="accordionExample3">
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Combine teammate schedules
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample3">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Factor in outside colleagues
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Round robin pooling
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0)">
                    <button class="btn btn-primary px-9 py-6">Learn More</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="workflows-tab" tabindex="0">
            <div class="row gap-lg-0 gap-7">
              <div class="col-lg-6">
                <div class="bg-primary-subtle rounded-24 p-13">
                  <img src="../assets/images/frontend-pages/tabsimage.png" alt="icon" class="w-100">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100 justify-content-center align-items-start ps-lg-7">
                  <h2 class="fs-10 fw-bolder mb-0">Defend your focus</h2>
                  <div class="accordion tabs-accordion my-4 w-100" id="accordionExample4">
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Combine teammate schedules
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample4">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header ">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Factor in outside colleagues
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item border-0 border-bottom">
                      <h2 class="accordion-header">
                        <button class="accordion-button shadow-none collapsed px-0 fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Round robin pooling
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                        <div class="accordion-body px-0 fs-4">
                          Factor in availability for required attendees, and skip checking
                          for
                          conflicts for optional attendees.
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:void(0)">
                    <button class="btn btn-primary px-9 py-6">Learn More</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Tabs End -->
    <!-- ------------------------------------- -->

    <!-- ------------------------------------- -->
    <!-- Team Start -->
    <!-- ------------------------------------- -->
    <section class="bg-dark py-7 py-md-14 py-lg-11">
      <div class="container-fluid">
        <div class="row mb-7 mb-lg-0">
          <div class="col-lg-7">
            <h2 class="text-white fs-15 fw-bolder mb-lg-0 lh-sm">
              Meet our team
            </h2>
          </div>
          <div class="col-lg-5">
            <p class="mb-0 fs-4">
              Our robust analytics offer rich insights into the
              <br /> information buyers want, informing
              where teams
            </p>
          </div>
        </div>
        <div class="owl-carousel leadership-carousel owl-theme mt-lg-5 mb-lg-7">
          <div class="item">
            <div class="meet-our-team position-relative rounded-3 overflow-hidden">
              <img src="../assets/images/frontend-pages/alex.jpg" alt="leader" class="">
              <div class="leadership-card z-1 bg-white rounded py-3 px-8 mx-6 my-6 w-90 text-center">
                <h4 class="fs-5 fw-bold mb-8">Alex Martinez</h4>
                <p class="fs-3 mb-0">CEO & Co-Founder</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="meet-our-team position-relative rounded-3 overflow-hidden">
              <img src="../assets/images/frontend-pages/jordan.jpg" alt="leader" class="">
              <div class="leadership-card z-1 bg-white rounded py-3 px-8 mx-6 my-6 w-90 text-center">
                <h4 class="fs-5 fw-bold mb-2">Jordan Nguyen</h4>
                <p class="fs-3 mb-0">CTO & Co-Founder</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="meet-our-team position-relative rounded-3 overflow-hidden">
              <img src="../assets/images/frontend-pages/taylor.jpg" alt="leader" class="">
              <div class="leadership-card z-1 bg-white rounded py-3 px-8 mx-6 my-6 w-90 text-center">
                <h4 class="fs-5 fw-bold mb-2">Taylor Roberts</h4>
                <p class="fs-3 mb-0">Product Manager</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="meet-our-team position-relative rounded-3 overflow-hidden">
              <img src="../assets/images/frontend-pages/morgan.jpg" alt="leader" class="">
              <div class="leadership-card z-1 bg-white rounded py-3 px-8 mx-6 my-6 w-90 text-center">
                <h4 class="fs-5 fw-bold mb-2">Morgan Patel</h4>
                <p class="fs-3 mb-0">Lead Developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Team End -->
    <!-- ------------------------------------- -->

    <section class="bg-primary py-3 ">
      <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-center flex-md-nowrap flex-wrap gap-3">
          <ul class="hstack mb-0">
            <li class="ms-n8">
              <a href="javascript:void(0)" class="me-1">
                <img src="../assets/images/profile/user-5.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="Matdash-img">
              </a>
            </li>
            <li class="ms-n8">
              <a href="javascript:void(0)" class="me-1">
                <img src="../assets/images/profile/user-2.jpg" class="rounded-circle border border-2 border-white" width="44" height="44" alt="Matdash-img">
              </a>
            </li>
          </ul>
          <p class="mb-0 text-white fs-4">Save valuable time and effort spent searching for a solution.</p>
          <a href="javascript:void(0)" class="text-white fs-4 fw-semibold text-underline">Contact us now</a>
        </div>
      </div>
    </section>

    <!-- ------------------------------------- -->
    <!-- Testimonial Start -->
    <!-- ------------------------------------- -->
    <section class="pt-7 pt-md-14 pt-lg-11">
      <div class="container-fluid">
        <div class="row justify-content-between pb-12 border-bottom">
          <div class="col-lg-5">
            <h2 class="fw-bolder fs-15 mb-4 lh-1">
              Words from customers.
            </h2>
            <p class="fs-5 mb-0 text-muted">
              Pellentesque varius semper odio non pretium.
            </p>
          </div>
          <div class="col-lg-6 mt-md-0 mt-7">
            <div class="owl-carousel testimonial-carousel owl-theme">
              <div class="item">
                <p class="fs-6 text-dark mb-13">
                  This template is great, UI-rich and up-to-date. Although it is pretty much complete,
                  I suggest to improve a bit of documentation. Thanks & Highly recommended!
                </p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-3">
                    <img src="../assets/images/profile/user-7.jpg" alt="user" width="56px" height="56px" class="rounded-circle w-auto">
                    <div>
                      <p class="mb-1 fs-5 fw-bolder text-dark">Jenny Wilson</p>
                      <p class="mb-0 fs-4">CEO & Head of Comp Inc.</p>
                    </div>
                  </div>
                  <span class="bg-primary round-48 rounded-circle hstack justify-content-center">
                    <img src="../assets/images/frontend-pages/icon-quotes.svg" alt="user" class="w-auto">
                  </span>
                </div>
              </div>
              <div class="item">
                <p class="fs-6 text-dark mb-13">
                  This template is great, UI-rich and up-to-date. Although it is pretty much complete,
                  I suggest to improve a bit of documentation. Thanks & Highly recommended!
                </p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-3">
                    <img src="../assets/images/profile/user-2.jpg" alt="user" width="56px" height="56px" class="rounded-circle w-auto">
                    <div class="">
                      <p class="mb-1 fs-5 fw-bolder text-dark">Jessica Jhones</p>
                      <p class="mb-0 fs-4">TL of Comp Inc.</p>
                    </div>
                  </div>
                  <span class="bg-primary round-48 rounded-circle hstack justify-content-center">
                    <img src="../assets/images/frontend-pages/icon-quotes.svg" alt="user" class="w-auto">
                  </span>
                </div>
              </div>
              <div class="item">
                <p class="fs-6 text-dark mb-13">
                  This template is great, UI-rich and up-to-date. Although it is pretty much complete,
                  I suggest to improve a bit of documentation. Thanks & Highly recommended!
                </p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-3">
                    <img src="../assets/images/profile/user-9.jpg" alt="user" width="56px" height="56px" class="rounded-circle w-auto">
                    <div class="">
                      <p class="mb-1 fs-5 fw-bolder text-dark">John Doe</p>
                      <p class="mb-0 fs-4">CEO & Head of Comp Inc.</p>
                    </div>
                  </div>
                  <span class="bg-primary round-48 rounded-circle hstack justify-content-center">
                    <img src="../assets/images/frontend-pages/icon-quotes.svg" alt="user" class="w-auto">
                  </span>
                </div>
              </div>
              <div class="item">
                <p class="fs-6 text-dark mb-13">
                  This template is great, UI-rich and up-to-date. Although it is pretty much complete,
                  I suggest to improve a bit of documentation. Thanks & Highly recommended!
                </p>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-3">
                    <img src="../assets/images/profile/user-11.jpg" alt="user" width="56px" height="56px" class="rounded-circle w-auto">
                    <div class="">
                      <p class="mb-1 fs-5 fw-bolder text-dark">Jenny Wilson</p>
                      <p class="mb-0 fs-4">CEO & Head of Comp Inc.</p>
                    </div>
                  </div>
                  <span class="bg-primary round-48 rounded-circle hstack justify-content-center">
                    <img src="../assets/images/frontend-pages/icon-quotes.svg" alt="user" class="w-auto">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-5 pt-md-12 d-flex justify-content-center align-items-center flex-wrap gap-5">
          <a href="javascript:void(0)">
            <img src="../assets/images/frontend-pages/icon-intel.svg" alt="intel">
          </a>
          <a href="javascript:void(0)">
            <img src="../assets/images/frontend-pages/icon-oracle.svg" alt="oracle">
          </a>
          <a href="javascript:void(0)">
            <img src="../assets/images/frontend-pages/icon-dell.svg" alt="dell">
          </a>
          <a href="javascript:void(0)">
            <img src="../assets/images/frontend-pages/icon-samsung.svg" alt="samsung">
          </a>
          <a href="javascript:void(0)">
            <img src="../assets/images/frontend-pages/icon-infosys.svg" alt="infosys">
          </a>
          <a href="javascript:void(0)">
            <img src="../assets/images/frontend-pages/icon-capgemini.svg" alt="capgemini">
          </a>
        </div>
        <div class="position-relative overflow-hidden pt-5 pt-md-11">
          <div class="w-100 text-nowrap">
            <div class="slide-animation1 d-flex gap-7 text-nowrap">
              <!-- Feature Item 1 -->
              <div class="feature-item bg-primary-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-wand text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">6 Theme Colors</p>
              </div>
              <!-- Feature Item 2 -->
              <div class="feature-item bg-secondary-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-table text-secondary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-secondary">Dark & Light Sidebar</p>
              </div>
              <!-- Feature Item 3 -->
              <div class="feature-item bg-success-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-stack-2 text-success fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-success">425+ Page Templates</p>
              </div>
              <!-- Feature Item 4 -->
              <div class="feature-item bg-info-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-puzzle text-info fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-info">150+ UI Components</p>
              </div>
              <!-- Feature Item 5 -->
              <div class="feature-item bg-warning-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-switch-2 text-warning fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-warning">6 Theme Colors</p>
              </div>
              <!-- Feature Item 1 -->
              <div class="feature-item bg-danger-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-wand text-danger fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-danger">6 Theme Colors</p>
              </div>
              <!-- Feature Item 2 -->
              <div class="feature-item bg-primary-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-table text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">Dark & Light Sidebar</p>
              </div>
              <!-- Feature Item 3 -->
              <div class="feature-item bg-secondary-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-stack-2 text-secondary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-secondary">425+ Page Templates</p>
              </div>
              <!-- Feature Item 4 -->
              <div class="feature-item bg-success-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-puzzle text-success fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-success">150+ UI Components</p>
              </div>
              <!-- Feature Item 5 -->
              <div class="feature-item bg-info-subtle rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-switch-2 text-info fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-info">6 Theme Colors</p>
              </div>
            </div>
          </div>

          <div class="w-100 text-nowrap">
            <div class="slide-animation2 d-flex gap-7 text-nowrap my-4">
              <!-- Feature Item 6 -->
              <div class="feature-item bg-primary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-tag text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">Bootstrap 5x</p>
              </div>
              <!-- Feature Item 7 -->
              <div class="feature-item bg-secondary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-diamonds text-secondary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-secondary">200+ Font Icons</p>
              </div>
              <!-- Feature Item 8 -->
              <div class="feature-item bg-success-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-device-mobile text-success fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-success">Fully Responsive</p>
              </div>
              <!-- Feature Item 9 -->
              <div class="feature-item bg-info-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-source-code text-info fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-info">SassBase CSS</p>
              </div>
              <!-- Feature Item 6 -->
              <div class="feature-item bg-warning-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-tag text-warning fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-warning">Bootstrap 5x</p>
              </div>
              <!-- Feature Item 7 -->
              <div class="feature-item bg-danger-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-diamonds text-danger fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-danger">200+ Font Icons</p>
              </div>
              <!-- Feature Item 8 -->
              <div class="feature-item bg-primary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-device-mobile text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">Fully Responsive</p>
              </div>
              <!-- Feature Item 9 -->
              <div class="feature-item bg-secondary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-source-code text-secondary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-secondary">SassBase CSS</p>
              </div>
              <!-- Feature Item 6 -->
              <div class="feature-item bg-success-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-tag text-success fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-success">Bootstrap 5x</p>
              </div>
              <!-- Feature Item 7 -->
              <div class="feature-item bg-info-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-diamonds text-info fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-info">200+ Font Icons</p>
              </div>
              <!-- Feature Item 8 -->
              <div class="feature-item bg-warning-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-device-mobile text-warning fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-warning">Fully Responsive</p>
              </div>
              <!-- Feature Item 9 -->
              <div class="feature-item bg-danger-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-source-code text-danger fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-danger">SassBase CSS</p>
              </div>
            </div>
          </div>

          <div class="w-100 text-nowrap">
            <div class="slide-animation1 d-flex gap-7 text-nowrap">
              <!-- Feature Item 10 -->
              <div class="feature-item bg-primary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-toggle-left text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">Easy to Customize</p>
              </div>
              <!-- Feature Item 11 -->
              <div class="feature-item bg-secondary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-chart-pie-3 text-secondary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-secondary">Lots of Chart Options</p>
              </div>
              <!-- Feature Item 12 -->
              <div class="feature-item bg-primary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-table text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">Lots of Table Examples</p>
              </div>
              <!-- Feature Item 13 -->
              <div class="feature-item bg-success-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-repeat text-success fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-success">Regular Updates</p>
              </div>
              <!-- Feature Item 14 -->
              <div class="feature-item bg-info-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-messages text-info fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-info">Dedicated Support</p>
              </div>
              <!-- Feature Item 10 -->
              <div class="feature-item bg-warning-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-toggle-left text-warning fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-warning">Easy to Customize</p>
              </div>
              <!-- Feature Item 11 -->
              <div class="feature-item bg-danger-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-chart-pie-3 text-danger fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-danger">Lots of Chart Options</p>
              </div>
              <!-- Feature Item 12 -->
              <div class="feature-item bg-primary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-table text-primary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-primary">Lots of Table Examples</p>
              </div>
              <!-- Feature Item 13 -->
              <div class="feature-item bg-secondary-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-repeat text-secondary fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-secondary">Regular Updates</p>
              </div>
              <!-- Feature Item 14 -->
              <div class="feature-item bg-success-subtle p-4 rounded-3 gap-8 d-flex align-items-center justify-content-center">
                <i class="ti ti-messages text-success fs-7" aria-hidden="true"></i>
                <p class="fs-3 fw-semibold mb-0 gap-3 text-success">Dedicated Support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Testimonial End -->
    <!-- ------------------------------------- -->

    <!-- ------------------------------------- -->
    <!-- Plan Start -->
    <!-- ------------------------------------- -->
    <section class="py-5 py-md-14 py-lg-11">
      <div class="container-fluid">
        <div class="text-center mb-5">
          <h2 class="fs-15 mb-3 fw-bolder">
            Fair pricing for everyone.
          </h2>
          <p class="fs-5 mb-0">
            Our robust analytics offer rich insights into the information buyers want, informing where teams
          </p>
        </div>
        <div class="row">
          <div class="col-xl-3 col-sm-6">
            <div class="card plan-cards border rounded-3 p-4 d-flex flex-column gap-7">
              <div class="">
                <h3 class="fs-6 fw-semibold mb-3">
                  Single Use
                </h3>
                <p class="fs-3 mb-0">
                  Use for single end product which end users can’t be charged for.
                </p>
              </div>
              <h3 class="fs-3 fw-normal mb-0 text-muted">
                <span class="fs-10 fw-bolder text-primary">$49</span>/
                one time pay
              </h3>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Full source code</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Documentation</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-x.svg" alt="">
                  <p class="fs-3 fw-bold mb-0 text-muted">Use in SaaS app</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">One</span>
                    Project
                  </p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">One Year</span>
                    Technical
                    Support
                  </p>
                </div>
              </div>
              <a href="javascript:void(0)" class="btn btn-dark">Purchase Now</a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card plan-cards border rounded-3 p-4 d-flex flex-column gap-7">
              <div class="">
                <h3 class="fs-6 fw-semibold mb-3">
                  Multiple Use
                </h3>
                <p class="fs-3 mb-0">
                  Use for unlimited end products end users can’t be charged for.
                </p>
              </div>
              <h3 class="fs-3 fw-normal mb-0 text-muted">
                <span class="fs-10 fw-bolder text-primary">$89</span>/
                one time pay
              </h3>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Full source code</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Documentation</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-x.svg" alt="">
                  <p class="fs-3 fw-bold mb-0 text-muted">Use in SaaS app</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">Unlimited</span>
                    Project
                  </p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">One Year</span>
                    Technical Support
                  </p>
                </div>
              </div>
              <a href="javascript:void(0)" class="btn btn-dark">Purchase Now</a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card plan-cards border rounded-3 p-4 d-flex flex-column gap-7">
              <div class="">
                <h3 class="fs-6 fw-semibold mb-3">
                  Extended Use
                  <span class="text-primary bg-primary-subtle fs-2 px-2 py-1 rounded">Popular</span>
                </h3>
                <p class="fs-3 mb-0">
                  Use for single end product which end users can be charged for.
                </p>
              </div>
              <h3 class="fs-3 fw-normal mb-0 text-muted">
                <span class="fs-10 fw-bolder text-primary">$299</span>/
                one time pay
              </h3>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Full source code</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Documentation</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold mb-0 text-muted">Use in SaaS app</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">One</span>
                    Project
                  </p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">One Year</span>
                    Technical Support
                  </p>
                </div>
              </div>
              <a href="javascript:void(0)" class="btn btn-primary">Purchase Now</a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card plan-cards border rounded-3 p-4 d-flex flex-column gap-7">
              <div class="">
                <h3 class="fs-6 fw-semibold mb-3">
                  Unlimited Use
                </h3>
                <p class="fs-3 mb-0">
                  Use in unlimited end products end users can be charged for.
                </p>
              </div>
              <h3 class="fs-3 fw-normal mb-0 text-muted">
                <span class="fs-10 fw-bolder text-primary">$499</span>/
                one time pay
              </h3>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Full source code</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">Documentation</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold mb-0 text-muted">Use in SaaS app</p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">Unlimited</span>
                    Project
                  </p>
                </div>
                <div class="d-flex gap-2">
                  <img src="../assets/images/frontend-pages/icon-circle-check.svg" alt="">
                  <p class="fs-3 fw-bold text-dark mb-0">
                    <span class="fw-bolder">One Year</span>
                    Technical Support
                  </p>
                </div>
              </div>
              <a href="javascript:void(0)" class="btn btn-dark">Purchase Now</a>
            </div>
          </div>
        </div>
        <div class="mt-10">
          <p class="fs-4 text-muted text-center mb-5">Secured payment with PayPal & Razorpay</p>
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="d-flex align-items-center justify-content-between gap-4 flex-wrap">
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Visa">
                  <img src=" ../assets/images/frontend-pages/visa.png" alt="visa">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Mastercard">
                  <img src="../assets/images/frontend-pages/mastercard.png" alt="mastercard">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Americanexpress">
                  <img src="../assets/images/frontend-pages/americanexpress.png" alt="americanexpress">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Paypal">
                  <img src="../assets/images/frontend-pages/paypal.png" alt="paypal">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Maestro">
                  <img src="../assets/images/frontend-pages/maestro.png" alt="maestro">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="JCB">
                  <img src="../assets/images/frontend-pages/jcb.png" alt="jcb">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Dinersclub">
                  <img src="../assets/images/frontend-pages/dinersclub.png" alt="dinersclub">
                </a>
                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Discover">
                  <img src="../assets/images/frontend-pages/discover.png" alt="discover">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- Plan End -->
    <!-- ------------------------------------- -->

    <!-- ------------------------------------- -->
    <!-- FAQ Start -->
    <!-- ------------------------------------- -->
    <section class="pb-lg-11 pb-5">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="fs-15 fw-bolder mb-0 text-center mb-5 mb-md-12">
              Frequently asked questions
            </h2>
            <div class="accordion faq-accordion" id="accordionExample1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is included with my purchase?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed  fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Are there any recurring fees?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can I use the template on multiple projects?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can I customize the admin dashboard template to match my brand?
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Are there any restrictions on using the template?
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    How can I get support after purchase?
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                      eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                      veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                      commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore
                      eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                      sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-12">
              <p class="text-center fs-3 fw-bold dashed-border py-1 px-2 rounded mb-0 text-muted">
                Still have a question? <a target="_blank" href="https://discord.com/invite/XujgB8ww4n" class="text-underline text-muted link-primary">Ask on
                  discord</a> or <a target="_blank" href="https://adminmart.com/support/" class="text-underline text-muted link-primary">submit a
                  ticket</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ------------------------------------- -->
    <!-- FAQ End -->
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