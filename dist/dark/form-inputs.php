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
  <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-okaidia.min.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="side-mini-panel with-vertical">
      <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="iconbar">
          <div>
            <div class="mini-nav">
              <div class="brand-logo d-flex align-items-center justify-content-center">
                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                </a>
              </div>
              <ul class="mini-nav-ul" data-simplebar>

                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Dashboards -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-1">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Dashboards">
                    <iconify-icon icon="solar:layers-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>

                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Pages -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-3">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Pages">
                    <iconify-icon icon="solar:notes-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Forms  -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-4">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Forms">
                    <iconify-icon icon="solar:palette-round-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>

                <li>
                  <span class="sidebar-divider lg"></span>
                </li>
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Tables -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-5">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Tables">
                    <iconify-icon icon="solar:tuning-square-2-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Charts -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-6">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Charts">
                    <iconify-icon icon="solar:chart-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Ui -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-7">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Ui Components">
                    <iconify-icon icon="solar:widget-6-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Components -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-8">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Components">
                    <iconify-icon icon="solar:archive-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>

                <li>
                  <span class="sidebar-divider lg"></span>
                </li>
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Auth -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-9">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Authentication Pages">
                    <iconify-icon icon="solar:lock-keyhole-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>

                <!-- --------------------------------------------------------------------------------------------------------- -->
                <!-- Multi level -->
                <!-- --------------------------------------------------------------------------------------------------------- -->
                <li class="mini-nav-item" id="mini-10">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Docs &amp; Other">
                    <iconify-icon icon="solar:mirror-left-line-duotone" class="fs-7"></iconify-icon>
                  </a>
                </li>
              </ul>

            </div>
            <div class="sidebarmenu">
              <div class="brand-logo d-flex align-items-center nav-logo">
                <a href="../dark/index.php" class="text-nowrap logo-img">
                  <img src="../assets/images/logos/logo.svg" alt="Logo" />
                </a>

              </div>
              <!-- ---------------------------------- -->
              <!-- Dashboard -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav" id="menu-right-mini-1" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Dashboards</span>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
                      <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                      <span class="hide-menu">Dashboard 1</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/index2.php" aria-expanded="false">
                      <iconify-icon icon="solar:chart-line-duotone"></iconify-icon>
                      <span class="hide-menu">Dashboard 2</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/index3.php" aria-expanded="false">
                      <iconify-icon icon="solar:screencast-2-line-duotone"></iconify-icon>
                      <span class="hide-menu">Dashboard 3</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <iconify-icon icon="solar:home-angle-line-duotone"></iconify-icon>
                      <span class="hide-menu">Front Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-landingpage.php">
                          <span class="icon-small"></span>
                          Homepage
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-aboutpage.php">
                          <span class="icon-small"></span>
                          About Us
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-blogpage.php">
                          <span class="icon-small"></span>
                          Blog
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-blogdetailpage.php">
                          <span class="icon-small"></span>
                          Blog Details
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-contactpage.php">
                          <span class="icon-small"></span>
                          Contact Us
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-portfoliopage.php">
                          <span class="icon-small"></span>
                          Portfolio
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/frontend-pricingpage.php">
                          <span class="icon-small"></span>
                          Pricing
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <span class="sidebar-divider"></span>
                  </li>

                  <li class="nav-small-cap">
                    <span class="hide-menu">Apps</span>
                  </li>

                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <iconify-icon icon="solar:cart-3-line-duotone"></iconify-icon>
                      <span class="hide-menu">Ecommerce</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/eco-shop.php">
                          <span class="icon-small"></span> Shop
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/eco-shop-detail.php">
                          <span class="icon-small"></span>Details
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/eco-product-list.php">
                          <span class="icon-small"></span>List
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/eco-checkout.php">
                          <span class="icon-small"></span>Checkout
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/eco-add-product.php">
                          <span class="icon-small"></span>Add Product
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/eco-edit-product.php">
                          <span class="icon-small"></span>Edit Product
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                      <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                      <span class="hide-menu">Blog</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/blog-posts.php">
                          <span class="icon-small"></span>Blog
                          Posts
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link" href="../dark/blog-detail.php">
                          <span class="icon-small"></span>Blog
                          Details
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/page-user-profile.php" aria-expanded="false">
                      <iconify-icon icon="solar:shield-user-line-duotone"></iconify-icon>
                      User Profile
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-email.php"><iconify-icon icon="solar:letter-line-duotone"></iconify-icon>Email</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-calendar.php"><iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>Calendar</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-kanban.php"><iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"></iconify-icon>Kanban</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-chat.php"><iconify-icon icon="solar:chat-round-line-line-duotone"></iconify-icon>Chat</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-notes.php"><iconify-icon icon="solar:document-text-line-duotone"></iconify-icon>Notes</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-contact.php"><iconify-icon icon="solar:iphone-line-duotone"></iconify-icon>Contact Table</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-contact2.php"><iconify-icon icon="solar:phone-line-duotone"></iconify-icon>Contact List</a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-invoice.php"><iconify-icon icon="solar:bill-list-line-duotone"></iconify-icon>Invoice</a>
                  </li>
                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Pages -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-3" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Pages</span>
                  </li>
                  <li class="sidebar-item">
                    <a href="../landingpage/index.php" class="sidebar-link">
                      <iconify-icon icon="solar:notes-line-duotone"></iconify-icon>
                      <span class="hide-menu">Landingpage</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/pages-animation.php" class="sidebar-link">
                      <iconify-icon icon="solar:accessibility-line-duotone"></iconify-icon>
                      <span class="hide-menu">Animation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/pages-search-result.php" class="sidebar-link">
                      <iconify-icon icon="solar:card-search-line-duotone"></iconify-icon>
                      <span class="hide-menu">Search Result</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/pages-gallery.php" class="sidebar-link">
                      <iconify-icon icon="solar:gallery-bold-duotone"></iconify-icon>
                      <span class="hide-menu">Gallery</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/pages-treeview.php" class="sidebar-link">
                      <iconify-icon icon="solar:mask-happly-line-duotone"></iconify-icon>
                      <span class="hide-menu">Treeview</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/pages-block-ui.php" class="sidebar-link">
                      <iconify-icon icon="solar:quit-full-screen-square-line-duotone"></iconify-icon>
                      <span class="hide-menu">Block-Ui</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/pages-session-timeout.php" class="sidebar-link">
                      <iconify-icon icon="solar:sort-by-time-line-duotone"></iconify-icon>
                      <span class="hide-menu">Session Timeout</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="../dark/page-pricing.php" class="sidebar-link">
                      <iconify-icon icon="solar:dollar-line-duotone"></iconify-icon>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/page-faq.php" class="sidebar-link">
                      <iconify-icon icon="solar:question-circle-line-duotone"></iconify-icon>
                      <span class="hide-menu">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/page-account-settings.php" class="sidebar-link">
                      <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/starter.php" class="sidebar-link">
                      <iconify-icon icon="solar:file-text-line-duotone"></iconify-icon>
                      <span class="hide-menu">Starter</span>
                    </a>
                  </li>
                  <li>
                    <span class="sidebar-divider lg"></span>
                  </li>
                  <li class="nav-small-cap">
                    <span class="hide-menu">Icons</span>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/icon-tabler.php" aria-expanded="false">
                      <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
                      <span class="hide-menu">Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/icon-solar.php" aria-expanded="false">
                      <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
                      <span class="hide-menu">Solar Icon</span>
                    </a>
                  </li>
                  <li>
                    <span class="sidebar-divider lg"></span>
                  </li>
                  <li class="nav-small-cap">
                    <span class="hide-menu">Widgets</span>
                  </li>

                  <!-- ---------------------------------- -->
                  <!-- Widgets -->
                  <!-- ---------------------------------- -->
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/widgets-cards.php">
                      <iconify-icon icon="solar:cardholder-line-duotone"></iconify-icon>
                      <span class="hide-menu">Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/widgets-banners.php">
                      <iconify-icon icon="solar:align-vertical-spacing-line-duotone"></iconify-icon>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/widgets-charts.php">
                      <iconify-icon icon="solar:chart-square-line-duotone"></iconify-icon>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/widgets-feeds.php">
                      <iconify-icon icon="solar:feed-line-duotone"></iconify-icon>
                      <span class="hide-menu">Feeds</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/widgets-apps.php">
                      <iconify-icon icon="solar:clapperboard-text-line-duotone"></iconify-icon>
                      <span class="hide-menu">Apps</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/widgets-data.php">
                      <iconify-icon icon="solar:database-line-duotone"></iconify-icon>
                      <span class="hide-menu">Data</span>
                    </a>
                  </li>

                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Forms -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-4" data-simplebar>
                <div>
                  <ul class="sidebar-menu" id="sidebarnav">
                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li class="nav-small-cap">
                      <span class="hide-menu">Forms</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Form elements -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <iconify-icon icon="solar:text-selection-line-duotone"></iconify-icon>
                        <span class="hide-menu">Forms Elements</span>
                      </a>
                      <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                          <a href="../dark/form-inputs.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Forms Input</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-input-groups.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Input Groups</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-input-grid.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Input Grid</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-checkbox-radio.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Checks & Radios</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-bootstrap-switch.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">BT Switch</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-select2.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Select2</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Form Input -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <iconify-icon icon="solar:password-minimalistic-input-line-duotone"></iconify-icon>
                        <span class="hide-menu">Forms Inputs</span>
                      </a>
                      <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                          <a href="../dark/form-basic.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Basic Form</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-vertical.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Form Vertical</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-horizontal.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Form Horizontal</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-actions.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Form Actions</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-row-separator.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Row Separator</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-bordered.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Form Bordered</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-detail.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Form Detail</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-striped-row.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Striped Rows</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="../dark/form-floating-input.php" class="sidebar-link">
                            <span class="icon-small"></span>
                            <span class="hide-menu">Floating Input</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-wizard.php" class="sidebar-link">
                        <iconify-icon icon="solar:archive-line-duotone"></iconify-icon>
                        <span class="hide-menu">Form Wizard</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-repeater.php" class="sidebar-link">
                        <iconify-icon icon="solar:repeat-one-minimalistic-bold-duotone"></iconify-icon>
                        <span class="hide-menu">Form Repeater</span>
                      </a>
                    </li>
                    <li>
                      <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                      <span class="hide-menu">Addons</span>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-dropzone.php" class="sidebar-link">
                        <iconify-icon icon="solar:flip-horizontal-line-duotone"></iconify-icon>
                        <span class="hide-menu">Dropzone</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-mask.php" class="sidebar-link">
                        <iconify-icon icon="solar:mask-happly-line-duotone"></iconify-icon>
                        <span class="hide-menu">Form Mask</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-typeahead.php" class="sidebar-link">
                        <iconify-icon icon="solar:high-quality-line-duotone"></iconify-icon>
                        <span class="hide-menu">Form Typehead</span>
                      </a>
                    </li>
                    <li>
                      <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                      <span class="hide-menu">Validation</span>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-bootstrap-validation.php" class="sidebar-link">
                        <iconify-icon icon="solar:shield-warning-line-duotone"></iconify-icon>
                        <span class="hide-menu">BT Validation</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-custom-validation.php" class="sidebar-link">
                        <iconify-icon icon="solar:shield-warning-line-duotone"></iconify-icon>
                        <span class="hide-menu">Custom Validation</span>
                      </a>
                    </li>
                    <li>
                      <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                      <span class="hide-menu">Pickers</span>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-picker-colorpicker.php" class="sidebar-link">
                        <iconify-icon icon="solar:waterdrop-line-duotone"></iconify-icon>
                        <span class="hide-menu">Colorpicker</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-picker-bootstrap-rangepicker.php" class="sidebar-link">
                        <iconify-icon icon="solar:square-transfer-horizontal-line-duotone"></iconify-icon>
                        <span class="hide-menu">Rangepicker</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-picker-bootstrap-datepicker.php" class="sidebar-link">
                        <iconify-icon icon="solar:calendar-date-line-duotone"></iconify-icon>
                        <span class="hide-menu">BT Datepicker</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-picker-material-datepicker.php" class="sidebar-link">
                        <iconify-icon icon="solar:smartphone-update-line-duotone"></iconify-icon>
                        <span class="hide-menu">MT Datepicker</span>
                      </a>
                    </li>
                    <li>
                      <span class="sidebar-divider lg"></span>
                    </li>
                    <li class="nav-small-cap">
                      <span class="hide-menu">Editors</span>
                    </li>

                    <li class="sidebar-item">
                      <a href="../dark/form-editor-quill.php" class="sidebar-link">
                        <iconify-icon icon="solar:clapperboard-edit-line-duotone"></iconify-icon>
                        <span class="hide-menu">Quill Editor</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../dark/form-editor-tinymce.php" class="sidebar-link">
                        <iconify-icon icon="solar:clapperboard-edit-line-duotone"></iconify-icon>
                        <span class="hide-menu">Tinymce Edtor</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Tables -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-5" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Bootstrap Tables</span>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->

                  <li class="sidebar-item">
                    <a href="../dark/table-basic.php" class="sidebar-link">
                      <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-dark-basic.php" class="sidebar-link">
                      <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                      <span class="hide-menu">Dark Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-sizing.php" class="sidebar-link">
                      <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-layout-coloured.php" class="sidebar-link">
                      <iconify-icon icon="solar:tablet-line-duotone"></iconify-icon>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                  <li>
                    <span class="sidebar-divider lg"></span>
                  </li>
                  <li class="nav-small-cap">
                    <span class="hide-menu">Datatables</span>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-datatable-basic.php" class="sidebar-link">
                      <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                      <span class="hide-menu">Basic</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-datatable-api.php" class="sidebar-link">
                      <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-datatable-advanced.php" class="sidebar-link">
                      <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                      <span class="hide-menu">Advanced</span>
                    </a>
                  </li>
                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Charts -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-6" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Charts</span>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->

                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-line.php" class="sidebar-link">
                      <iconify-icon icon="solar:chart-square-line-duotone"></iconify-icon>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-area.php" class="sidebar-link">
                      <iconify-icon icon="solar:pie-chart-3-line-duotone"></iconify-icon>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-bar.php" class="sidebar-link">
                      <iconify-icon icon="solar:chart-2-line-duotone"></iconify-icon>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-pie.php" class="sidebar-link">
                      <iconify-icon icon="solar:pie-chart-line-duotone"></iconify-icon>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-radial.php" class="sidebar-link">
                      <iconify-icon icon="solar:chart-square-line-duotone"></iconify-icon>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>

                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-radar.php" class="sidebar-link">
                      <iconify-icon icon="solar:round-graph-line-duotone"></iconify-icon>
                      <span class="hide-menu">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Ui Components -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-7" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Ui</span>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->

                  <li class="sidebar-item">
                    <a href="../dark/ui-accordian.php" class="sidebar-link">
                      <iconify-icon icon="solar:waterdrops-line-duotone"></iconify-icon>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-badge.php" class="sidebar-link">
                      <iconify-icon icon="solar:tag-horizontal-line-duotone"></iconify-icon>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-buttons.php" class="sidebar-link">
                      <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-dropdowns.php" class="sidebar-link">
                      <iconify-icon icon="solar:airbuds-case-line-duotone"></iconify-icon>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-modals.php" class="sidebar-link">
                      <iconify-icon icon="solar:bolt-line-duotone"></iconify-icon>
                      <span class="hide-menu">Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-tab.php" class="sidebar-link">
                      <iconify-icon icon="solar:box-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-tooltip-popover.php" class="sidebar-link">
                      <iconify-icon icon="solar:feed-line-duotone"></iconify-icon>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-notification.php" class="sidebar-link">
                      <iconify-icon icon="solar:flag-line-duotone"></iconify-icon>
                      <span class="hide-menu">Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-progressbar.php" class="sidebar-link">
                      <iconify-icon icon="solar:programming-line-duotone"></iconify-icon>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-pagination.php" class="sidebar-link">
                      <iconify-icon icon="solar:waterdrops-line-duotone"></iconify-icon>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-typography.php" class="sidebar-link">
                      <iconify-icon icon="solar:text-bold-duotone"></iconify-icon>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-bootstrap-ui.php" class="sidebar-link">
                      <iconify-icon icon="solar:balloon-line-duotone"></iconify-icon>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-breadcrumb.php" class="sidebar-link">
                      <iconify-icon icon="solar:slider-minimalistic-horizontal-line-duotone"></iconify-icon>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-offcanvas.php" class="sidebar-link">
                      <iconify-icon icon="solar:laptop-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-lists.php" class="sidebar-link">
                      <iconify-icon icon="solar:checklist-bold-duotone"></iconify-icon>
                      <span class="hide-menu">Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-grid.php" class="sidebar-link">
                      <iconify-icon icon="solar:layers-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-carousel.php" class="sidebar-link">
                      <iconify-icon icon="solar:align-horizonta-spacing-line-duotone"></iconify-icon>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-scrollspy.php" class="sidebar-link">
                      <iconify-icon icon="solar:multiple-forward-right-line-duotone"></iconify-icon>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-spinner.php" class="sidebar-link">
                      <iconify-icon icon="solar:soundwave-bold-duotone"></iconify-icon>
                      <span class="hide-menu">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-link.php" class="sidebar-link">
                      <iconify-icon icon="solar:link-round-angle-bold-duotone"></iconify-icon>
                      <span class="hide-menu">Link</span>
                    </a>
                  </li>
                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Comoponents -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-8" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Components</span>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->
                  <li class="sidebar-item">
                    <a href="../dark/component-sweetalert.php" class="sidebar-link">
                      <iconify-icon icon="solar:star-fall-minimalistic-2-line-duotone"></iconify-icon>
                      <span class="hide-menu">Sweet Alert</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/component-nestable.php" class="sidebar-link">
                      <iconify-icon icon="solar:speaker-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Nestable</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/component-noui-slider.php" class="sidebar-link">
                      <iconify-icon icon="solar:watch-square-minimalistic-charge-line-duotone"></iconify-icon>
                      <span class="hide-menu">Noui slider</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/component-rating.php" class="sidebar-link">
                      <iconify-icon icon="solar:stars-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Rating</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/component-toastr.php" class="sidebar-link">
                      <iconify-icon icon="solar:station-minimalistic-bold-duotone"></iconify-icon>
                      <span class="hide-menu">Toastr</span>
                    </a>
                  </li>
                  <li>
                    <span class="sidebar-divider lg"></span>
                  </li>
                  <li class="nav-small-cap">
                    <span class="hide-menu">Cards</span>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-cards.php" class="sidebar-link">
                      <iconify-icon icon="solar:bookmark-square-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Basic Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-card-customs.php" class="sidebar-link">
                      <iconify-icon icon="solar:bookmark-square-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Custom Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-card-weather.php" class="sidebar-link">
                      <iconify-icon icon="solar:cloud-snowfall-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Weather Cards</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-card-draggable.php" class="sidebar-link">
                      <iconify-icon icon="solar:password-minimalistic-input-line-duotone"></iconify-icon>
                      <span class="hide-menu">Draggable Cards</span>
                    </a>
                  </li>
                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Auth Pages -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-9" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <!-- ---------------------------------- -->
                  <!-- Home -->
                  <!-- ---------------------------------- -->
                  <li class="nav-small-cap">
                    <span class="hide-menu">Auth</span>
                  </li>
                  <!-- ---------------------------------- -->
                  <!-- Dashboard -->
                  <!-- ---------------------------------- -->

                  <li class="sidebar-item">
                    <a href="../dark/authentication-error.php" class="sidebar-link">
                      <iconify-icon icon="solar:bug-minimalistic-line-duotone"></iconify-icon>
                      <span class="hide-menu">Error</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-login.php" class="sidebar-link">
                      <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                      <span class="hide-menu">Side Login</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-login2.php" class="sidebar-link">
                      <iconify-icon icon="solar:login-3-line-duotone"></iconify-icon>
                      <span class="hide-menu">Boxed Login</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-register.php" class="sidebar-link">
                      <iconify-icon icon="solar:user-plus-rounded-line-duotone"></iconify-icon>
                      <span class="hide-menu">Side Register</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-register2.php" class="sidebar-link">
                      <iconify-icon icon="solar:user-plus-rounded-line-duotone"></iconify-icon>
                      <span class="hide-menu">Boxed Register</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-forgot-password.php" class="sidebar-link">
                      <iconify-icon icon="solar:password-outline"></iconify-icon>
                      <span class="hide-menu">Side Forgot Pwd</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-forgot-password2.php" class="sidebar-link">
                      <iconify-icon icon="solar:password-outline"></iconify-icon>
                      <span class="hide-menu">Boxed Forgot Pwd</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-two-steps.php" class="sidebar-link">
                      <iconify-icon icon="solar:siderbar-line-duotone"></iconify-icon>
                      <span class="hide-menu">Side Two Steps</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-two-steps2.php" class="sidebar-link">
                      <iconify-icon icon="solar:siderbar-line-duotone"></iconify-icon>
                      <span class="hide-menu">Boxed Two Steps</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/authentication-maintenance.php" class="sidebar-link">
                      <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                      <span class="hide-menu">Maintenance</span>
                    </a>
                  </li>

                </ul>
              </nav>

              <!-- ---------------------------------- -->
              <!-- Docs & Other -->
              <!-- ---------------------------------- -->
              <nav class="sidebar-nav scroll-sidebar" id="menu-right-mini-10" data-simplebar>
                <ul class="sidebar-menu" id="sidebarnav">
                  <li class="nav-small-cap">
                    <span class="hide-menu">Documentation</span>
                  </li>
                  <li class="sidebar-item">
                    <a href="../docs/index.php" class="sidebar-link">
                      <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                      <span class="hide-menu">Getting Started</span>
                    </a>
                  </li>
                  <li>
                    <span class="sidebar-divider"></span>
                  </li>
                  <li class="nav-small-cap">
                    <span class="hide-menu">Multi level</span>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow primary-hover-bg" href="javascript:void(0)" aria-expanded="false">
                      <iconify-icon icon="solar:align-left-line-duotone"></iconify-icon>
                      <span class="hide-menu">Menu Level</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <span class="icon-small"></span>
                          <span class="hide-menu">Level 1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                          <span class="icon-small"></span>
                          <span class="hide-menu">Level 1.1</span>
                        </a>
                        <ul aria-expanded="false" class="collapse two-level">
                          <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                              <span class="icon-small"></span>
                              <span class="hide-menu">Level 2</span>
                            </a>
                          </li>
                          <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                              <span class="icon-small"></span>
                              <span class="hide-menu">Level 2.1</span>
                            </a>
                            <ul aria-expanded="false" class="collapse three-level">
                              <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                  <span class="icon-small"></span>
                                  <span class="hide-menu">Level 3</span>
                                </a>
                              </li>
                              <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link">
                                  <span class="icon-small"></span>
                                  <span class="hide-menu">Level 3.1</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <span class="sidebar-divider"></span>
                  </li>
                  <li class="nav-small-cap">
                    <span class="hide-menu">More Options</span>
                  </li>
                  <li class="sidebar-item">
                    <div class="sidebar-link">
                      <span class="round-10 rounded-circle d-block bg-primary"></span>
                      <span class="hide-menu">Applications</span>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <div class="sidebar-link">
                      <span class="round-10 rounded-circle d-block bg-secondary"></span>
                      <span class="hide-menu">Form Options</span>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <div class="sidebar-link">
                      <span class="round-10 rounded-circle d-block bg-danger"></span>
                      <span class="hide-menu">Table Variations</span>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <div class="sidebar-link">
                      <span class="round-10 rounded-circle d-block bg-warning"></span>
                      <span class="hide-menu">Charts Selection</span>
                    </div>
                  </li>
                  <li class="sidebar-item">
                    <div class="sidebar-link">
                      <span class="round-10 rounded-circle d-block bg-success"></span>
                      <span class="hide-menu">Widgets</span>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <header class="topbar">
        <div class="with-vertical"><!-- ---------------------------------- -->
          <!-- Start Vertical Layout Header -->
          <!-- ---------------------------------- -->
          <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
              <li class="nav-item d-flex d-xl-none">
                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-lg-flex dropdown nav-icon-hover-bg rounded-circle">
                <div class="hover-dd">
                  <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                    <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                  </a>
                  <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
                    <div class="position-relative">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="p-4 pb-3">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../dark/app-chat.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Chat Application</h6>
                                      <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-invoice.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Invoice App</h6>
                                      <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-contact2.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact Application</h6>
                                      <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-email.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Email App</h6>
                                      <span class="fs-11 d-block text-body-color">Get new emails</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../dark/page-user-profile.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">User Profile</h6>
                                      <span class="fs-11 d-block text-body-color">learn more information</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-calendar.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Calendar App</h6>
                                      <span class="fs-11 d-block text-body-color">Get dates</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-contact.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact List Table</h6>
                                      <span class="fs-11 d-block text-body-color">Add new contact</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-notes.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Notes Application</h6>
                                      <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 d-none d-lg-flex">
                          <img src="../assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd" class="img-fluid mega-dd-bg" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <div class="d-block d-lg-none py-9 py-xl-0">
              <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
            </div>
            <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)" style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- start notification Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-primary w-100">See All Notifications</button>
                      </div>

                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-cn.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-fr.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-sa.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                      <div class="d-flex align-items-center gap-2 lh-base">
                        <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="matdash-img" />
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56" alt="matdash-img" />
                          <div>
                            <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                            </h5>
                            <p class="mb-0 text-dark">
                              david@wrappixel.com
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="../dark/page-user-profile.php" class="p-2 dropdown-item h6 rounded-1">
                            My Profile
                          </a>
                          <a href="../dark/page-pricing.php" class="p-2 dropdown-item h6 rounded-1">
                            My Subscription
                          </a>
                          <a href="../dark/app-invoice.php" class="p-2 dropdown-item h6 rounded-1">
                            My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                          </a>
                          <a href="../dark/page-account-settings.php" class="p-2 dropdown-item h6 rounded-1">
                            Account Settings
                          </a>
                          <a href="../dark/authentication-login2.php" class="p-2 dropdown-item h6 rounded-1">
                            Sign Out
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>
          <!-- ---------------------------------- -->
          <!-- End Vertical Layout Header -->
          <!-- ---------------------------------- -->

          <!-- ------------------------------- -->
          <!-- apps Dropdown in Small screen -->
          <!-- ------------------------------- -->
          <!--  Mobilenavbar -->
          <div class="offcanvas offcanvas-start pt-0" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
              <div class="offcanvas-header justify-content-between">
                <a href="../dark/index.php" class="text-nowrap logo-img">
                  <img src="../assets/images/logos/logo-icon.svg" alt="Logo" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body pt-0" data-simplebar style="height: calc(100vh - 80px)">
                <ul id="sidebarnav">
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow ms-0" href="javascript:void(0)" aria-expanded="false">
                      <span>
                        <iconify-icon icon="solar:slider-vertical-line-duotone" class="fs-7"></iconify-icon>
                      </span>
                      <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3 ps-3">
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-chat.php" class="d-flex align-items-center">
                          <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                            <span class="fs-11 d-block text-body-color">New messages arrived</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-invoice.php" class="d-flex align-items-center">
                          <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                            <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-contact2.php" class="d-flex align-items-center">
                          <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                            <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-email.php" class="d-flex align-items-center">
                          <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Email App</h6>
                            <span class="fs-11 d-block text-body-color">Get new emails</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/page-user-profile.php" class="d-flex align-items-center">
                          <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                            <span class="fs-11 d-block text-body-color">learn more information</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-calendar.php" class="d-flex align-items-center">
                          <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                            <span class="fs-11 d-block text-body-color">Get dates</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-contact.php" class="d-flex align-items-center">
                          <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                            <span class="fs-11 d-block text-body-color">Add new contact</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="../dark/app-notes.php" class="d-flex align-items-center">
                          <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                          </div>
                          <div>
                            <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                            <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                          </div>
                        </a>
                      </li>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <div class="app-header with-horizontal">
          <nav class="navbar navbar-expand-xl container-fluid p-0">
            <ul class="navbar-nav align-items-center">
              <li class="nav-item d-flex d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle" id="sidebarCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex align-items-center">
                <a href="../dark/index.php" class="text-nowrap nav-link">
                  <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
                </a>
              </li>
              <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-lg-flex align-items-center dropdown nav-icon-hover-bg rounded-circle">
                <div class="hover-dd">
                  <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                    <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                  </a>
                  <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
                    <div class="position-relative">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="p-4 pb-3">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../dark/app-chat.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:chat-line-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Chat Application</h6>
                                      <span class="fs-11 d-block text-body-color">New messages arrived</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-invoice.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Invoice App</h6>
                                      <span class="fs-11 d-block text-body-color">Get latest invoice</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-contact2.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:phone-calling-rounded-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact Application</h6>
                                      <span class="fs-11 d-block text-body-color">2 Unsaved Contacts</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-email.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-danger-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:letter-bold-duotone" class="fs-7 text-danger"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Email App</h6>
                                      <span class="fs-11 d-block text-body-color">Get new emails</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="position-relative">
                                  <a href="../dark/page-user-profile.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">User Profile</h6>
                                      <span class="fs-11 d-block text-body-color">learn more information</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-calendar.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Calendar App</h6>
                                      <span class="fs-11 d-block text-body-color">Get dates</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-contact.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Contact List Table</h6>
                                      <span class="fs-11 d-block text-body-color">Add new contact</span>
                                    </div>
                                  </a>
                                  <a href="../dark/app-notes.php" class="d-flex align-items-center pb-9 position-relative">
                                    <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                      <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                    </div>
                                    <div>
                                      <h6 class="mb-0">Notes Application</h6>
                                      <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-4 d-none d-lg-flex">
                          <img src="../assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd" class="img-fluid mega-dd-bg" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div class="d-block d-xl-none">
              <a href="../dark/index.php" class="text-nowrap nav-link">
                <img src="../assets/images/logos/logo.svg" alt="matdash-img" />
              </a>
            </div>
            <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)" style="display: none">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item d-block d-xl-none">
                    <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- start notification Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone" class="fs-6"></iconify-icon>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="d-flex align-items-center justify-content-between py-3 px-7">
                        <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                        <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-danger-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-warning-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:widget-4-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Launch Admin</h6>
                              <span class="d-block fs-2">9:30 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Event today</h6>
                              <span class="d-block fs-2">9:15 AM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="py-6 px-7 d-flex align-items-center dropdown-item gap-3">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:settings-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-75">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1 fw-semibold">Settings</h6>
                              <span class="d-block fs-2">4:36 PM</span>
                            </div>
                            <span class="d-block text-truncate text-truncate fs-11">You can customize this template as you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="py-6 px-7 mb-1">
                        <button class="btn btn-primary w-100">See All Notifications</button>
                      </div>

                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-en.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">English (UK)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-cn.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">中国人 (Chinese)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-fr.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">français (French)</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-3 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="../assets/images/flag/icon-flag-sa.svg" alt="matdash-img" width="20px" height="20px" class="rounded-circle object-fit-cover round-20" />
                          </div>
                          <p class="mb-0 fs-3">عربي (Arabic)</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                      <div class="d-flex align-items-center gap-2 lh-base">
                        <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="matdash-img" />
                        <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                      </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="position-relative px-4 pt-3 pb-2">
                        <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                          <img src="../assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56" alt="matdash-img" />
                          <div>
                            <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                            </h5>
                            <p class="mb-0 text-dark">
                              david@wrappixel.com
                            </p>
                          </div>
                        </div>
                        <div class="message-body">
                          <a href="../dark/page-user-profile.php" class="p-2 dropdown-item h6 rounded-1">
                            My Profile
                          </a>
                          <a href="../dark/page-pricing.php" class="p-2 dropdown-item h6 rounded-1">
                            My Subscription
                          </a>
                          <a href="../dark/app-invoice.php" class="p-2 dropdown-item h6 rounded-1">
                            My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                          </a>
                          <a href="../dark/page-account-settings.php" class="p-2 dropdown-item h6 rounded-1">
                            Account Settings
                          </a>
                          <a href="../dark/authentication-login2.php" class="p-2 dropdown-item h6 rounded-1">
                            Sign Out
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>

        </div>
      </header>
      <!--  Header End -->

      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../dark/index.php" class="sidebar-link">
                      <i class="ti ti-aperture"></i>
                      <span class="hide-menu">Dashboard 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/index2.php" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">Dashboard 2</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/index3.php" class="sidebar-link">
                      <i class="ti ti-atom"></i>
                      <span class="hide-menu">Dashboard 3</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Front Pages -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Front Pages</span>
              </li>

              <!-- =================== -->
              <!-- Icon -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:home-angle-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Front Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/frontend-landingpage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Homepage</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/frontend-aboutpage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">About Us</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/frontend-blogpage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Blog</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/frontend-blogdetailpage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Blog Details</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/frontend-contactpage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Contact Us</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/frontend-portfoliopage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Portfolio</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../dark/frontend-pricingpage.php" aria-expanded="false">
                      <span class="rounded-3">
                        <i class="ti ti-circle"></i>
                      </span>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:widget-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../dark/app-calendar.php" class="sidebar-link">
                      <i class="ti ti-calendar"></i>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/apps-kanban.php" class="sidebar-link">
                      <i class="ti ti-layout-kanban"></i>
                      <span class="hide-menu">Kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/app-chat.php" class="sidebar-link">
                      <i class="ti ti-message-dots"></i>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/app-email.php" aria-expanded="false">
                      <span>
                        <i class="ti ti-mail"></i>
                      </span>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/app-contact.php" class="sidebar-link">
                      <i class="ti ti-phone"></i>
                      <span class="hide-menu">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/app-contact2.php" class="sidebar-link">
                      <i class="ti ti-list-details"></i>
                      <span class="hide-menu">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/app-notes.php" class="sidebar-link">
                      <i class="ti ti-notes"></i>
                      <span class="hide-menu">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/app-invoice.php" class="sidebar-link">
                      <i class="ti ti-file-text"></i>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/page-user-profile.php" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/blog-posts.php" class="sidebar-link">
                      <i class="ti ti-article"></i>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/blog-detail.php" class="sidebar-link">
                      <i class="ti ti-details"></i>
                      <span class="hide-menu">Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/eco-shop.php" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/eco-shop-detail.php" class="sidebar-link">
                      <i class="ti ti-basket"></i>
                      <span class="hide-menu">Shop Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/eco-product-list.php" class="sidebar-link">
                      <i class="ti ti-list-check"></i>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/eco-checkout.php" class="sidebar-link">
                      <i class="ti ti-brand-shopee"></i>
                      <span class="hide-menu">Checkout</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/eco-add-product.php">
                      <i class="ti ti-file-plus"></i>
                      <span class="hide-menu">Add Product</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="../dark/eco-edit-product.php">
                      <i class="ti ti-file-pencil"></i>
                      <span class="hide-menu">Edit Product</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <iconify-icon icon="solar:notes-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../dark/page-faq.php" class="sidebar-link">
                      <i class="ti ti-help"></i>
                      <span class="hide-menu">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/page-account-settings.php" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/page-pricing.php" class="sidebar-link">
                      <i class="ti ti-currency-dollar"></i>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/widgets-cards.php" class="sidebar-link">
                      <i class="ti ti-cards"></i>
                      <span class="hide-menu">Card</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/widgets-banners.php" class="sidebar-link">
                      <i class="ti ti-ad"></i>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/widgets-charts.php" class="sidebar-link">
                      <i class="ti ti-chart-bar"></i>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/starter.php" class="sidebar-link">
                      <i class="ti ti-file"></i>
                      <span class="hide-menu">Starter</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../landingpage/index.php" class="sidebar-link">
                      <i class="ti ti-app-window"></i>
                      <span class="hide-menu">Landing Page</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/icon-tabler.php" class="sidebar-link">
                      <i class="ti ti-mood-smile"></i>
                      <span class="hide-menu">Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/icon-solar.php" class="sidebar-link">
                      <i class="ti ti-mood-smile"></i>
                      <span class="hide-menu">Solar Icon</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item mega-dropdown">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:archive-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">UI</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../dark/ui-accordian.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-badge.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-buttons.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-dropdowns.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-modals.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-tab.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-tooltip-popover.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-notification.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Notification</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-progressbar.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-pagination.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-typography.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-bootstrap-ui.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-breadcrumb.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-offcanvas.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-lists.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-grid.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-carousel.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-scrollspy.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-spinner.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/ui-link.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Link</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Forms -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:folder-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="../dark/form-inputs.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-input-groups.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-input-grid.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-checkbox-radio.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Checkbox & Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-bootstrap-switch.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-select2.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Select2</span>
                    </a>
                  </li>
                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="../dark/form-basic.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Form</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-vertical.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Vertical</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-horizontal.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Horizontal</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-actions.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Actions</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-row-separator.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Row Separator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-bordered.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Bordered</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/form-detail.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Detail</span>
                    </a>
                  </li>
                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="../dark/form-wizard.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Wizard</span>
                    </a>
                  </li>
                  <!-- Quill Editor -->
                  <li class="sidebar-item">
                    <a href="../dark/form-editor-quill.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                  <!-- Tinymce Editor -->
                  <li class="sidebar-item">
                    <a href="../dark/form-editor-tinymce.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tinymce Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:tuning-square-2-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../dark/table-basic.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-dark-basic.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dark Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-sizing.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-layout-coloured.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-datatable-basic.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-datatable-api.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/table-datatable-advanced.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Advanced</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:chart-square-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-line.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-area.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-bar.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-pie.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-radial.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="../dark/chart-apex-radar.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- multi level -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Multi DD</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="../docs/index.php" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Documentation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 2</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-sm-0 card-title">Form Inputs</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.php">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Form Inputs
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Default Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title mb-0">Default Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code1-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Default Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                          <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;           
                                          </code>
                                      </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>form-control</code>
                    </mark> class to
                    the input
                  </p>
                  <form>
                    <div class="form-group">
                      <input type="text́" class="form-control" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Default Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input With Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code2-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code2-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                          <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;small id=&quot;name&quot; class=&quot;form-text text-muted&quot;&gt;Helper Text&lt;/small&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                          </code>
                                      </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext" aria-describedby="name" placeholder="Name" />
                      <small id="name" class="form-text text-muted">Helper Text</small>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Helper Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Password -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0 fs-5">Password</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code3-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code3-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Password - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                        <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;passtext&quot; placeholder=&quot;Password&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                        </code>
                                    </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form>
                    <div class="form-group">
                      <input type="password" class="form-control" id="passtext" placeholder="Password" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Password -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Disabled Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Disabled Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code4-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code4-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Disabled Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext1&quot; placeholder=&quot;Name&quot; disabled&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add attribute <code>disabled</code> to disable input
                    field.
                  </p>
                  <h6 class="card-subtitle mb-3"></h6>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext1" placeholder="Name" disabled />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Disabled Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Predefined Input Value -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Predefined Input Value</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code5-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code5-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Predefined Input Value - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-2&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;prenametext&quot; value=&quot;Name&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add attribute <mark>
                      <code>value="VALUE"</code>
                    </mark> to
                    set predefined value.
                  </p>
                  <form class="mt-2">
                    <div class="form-group">
                      <input type="text" class="form-control" id="prenametext" value="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Predefined Input Value -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Readonly Input Field -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Readonly Input Field</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code6-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code6-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Readonly Input Field - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;readonly&quot; placeholder=&quot;Readonly Text&quot; readonly&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add attribute <mark>
                      <code>readonly</code>
                    </mark> to set
                    field readonly.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="readonly" placeholder="Readonly Text" readonly />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Readonly Input Field -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input With Placeholder -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Placeholder</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code7-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code7-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Placeholder - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;placeholder&quot; placeholder=&quot;Placeholder Text&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add attribute
                    <mark>
                      <code>placeholder="..."</code>
                    </mark> to input area.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" id="placeholder" placeholder="Placeholder Text" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Placeholder -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Maximum Value -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Maximum Value</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code8-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code8-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Maximum Value - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; maxlength=&quot;6&quot; id=&quot;maxval&quot; aria-describedby=&quot;maxval&quot; placeholder=&quot;Name&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add attribute <mark>
                      <code>maxlength="6"</code>
                    </mark> to
                    input area.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" maxlength="6" id="maxval" aria-describedby="maxval" placeholder="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Maximum Value -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Minimum Value -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Minimum Value</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code9-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code9-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Minimum Value - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
        &lt;div class=&quot;form-group&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control&quot; minlength=&quot;5&quot; id=&quot;minval&quot; aria-describedby=&quot;minval&quot; placeholder=&quot;Name&quot;&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Add attribute <mark>
                      <code>minlength="5"</code>
                    </mark> to
                    input area.
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" minlength="5" id="minval" aria-describedby="minval" placeholder="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Minimum Value -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input Type Options</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code10-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code10-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; value=&quot;Name&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="text"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="text" class="form-control" value="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Password -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Password</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code11-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code11-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Password - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;password&quot; class=&quot;form-control&quot; value=&quot;Name&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="password"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="password" class="form-control" value="Name" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Password -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Phone Number -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Phone Number</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code12-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code12-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Phone Number - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;tel&quot; class=&quot;form-control&quot; value=&quot;1-(444)-444-4445&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="tel"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="tel" class="form-control" value="1-(444)-444-4445" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Phone Number -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Email -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Email</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code13-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code13-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Email - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;email&quot; class=&quot;form-control&quot; value=&quot;abc@example.com&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="email"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="email" class="form-control" value="abc@example.com" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Email -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type URL -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type URL</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code14-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code14-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type URL - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;url&quot; class=&quot;form-control&quot; value=&quot;http://google.com&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="url"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="url" class="form-control" value="http://google.com" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type URL -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Search -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Search</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code15-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code15-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Search - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;search&quot; class=&quot;form-control&quot; value=&quot;how to...&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="search"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="search" class="form-control" value="how to..." />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Search -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Numbers -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Numbers</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code16-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code16-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Numbers - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;number&quot; class=&quot;form-control&quot; value=&quot;6029&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="number"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="number" class="form-control" value="6029" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Numbers -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Date Time -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Date Time</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code17-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code17-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Date Time - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;datetime-local&quot; class=&quot;form-control&quot; value=&quot;2008-05-13T22:33:00&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using
                    <mark>
                      <code>input type="datetime-local"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="datetime-local" class="form-control" value="2008-05-13T22:33:00" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Date Time -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Date -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Date</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code18-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code18-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Date - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;date&quot; class=&quot;form-control&quot; value=&quot;2018-05-13&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="date"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="date" class="form-control" value="2018-05-13" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Date -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Time -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Time</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code19-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code19-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Time - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;time&quot; class=&quot;form-control&quot; value=&quot;22:33:00&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="time"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="time" class="form-control" value="22:33:00" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Time -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Week -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Week</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code20-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code20-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Week - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;week&quot; class=&quot;form-control&quot; value=&quot;2011-W33&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="week"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="week" class="form-control" value="2011-W33" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Week -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Type Month -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Month</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code21-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code21-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Month - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;month&quot; class=&quot;form-control&quot; value=&quot;1999-08&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="month"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="month" class="form-control" value="1999-08" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Month -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input Type Color -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Color</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code22-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code22-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Color - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;color&quot; class=&quot;form-control&quot; value=&quot;#563d7c&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="color"</code>
                    </mark>
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="color" class="form-control" value="#563d7c" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Color -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Bootstrap Colorpicker -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Bootstrap Colorpicker</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code23-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code23-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Bootstrap Colorpicker - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color&quot; id=&quot;exampleColorInput&quot; value=&quot;#563d7c&quot; title=&quot;Choose your color&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Use <mark>
                      <code>form-control-color</code>
                    </mark> classs
                    for bootstrap colorpicker
                  </p>
                  <form class="mt-4">
                    <div class="form-group">
                      <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Bootstrap Colorpicker -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input Type Range -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Type Range</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code24-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code24-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Type Range - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;range&quot; class=&quot;form-range&quot; id=&quot;customRange1&quot;&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    Using <mark>
                      <code>input type="range"</code>
                    </mark>
                  </p>
                  <form class="mt-3">
                    <div class="form-group">
                      <input type="range" class="form-range" id="customRange1" />
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input Type Range -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">General Textarea</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Textarea -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Textarea</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code25-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code25-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Textarea - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="form-group">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Textarea -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Textarea With Placeholder -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Textarea With Placeholder</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code26-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code26-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Textarea With Placeholder - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot; placeholder=&quot;Text Here...&quot;&gt;&lt;/textarea&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Text Here..."></textarea>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Textarea With Placeholder -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Textarea With Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Textarea With Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code27-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code27-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Textarea With Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;textarea class=&quot;form-control&quot; rows=&quot;3&quot; placeholder=&quot;Text Here...&quot;&gt;&lt;/textarea&gt;
              &lt;small id=&quot;textHelp&quot; class=&quot;form-text text-muted&quot;&gt;Helper Text&lt;/small&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form>
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Text Here..."></textarea>
                      <small id="textHelp" class="form-text text-muted">Helper Text</small>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Textarea With Helper Text -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Inline Checkboxes &amp; Radios</h4>
            <div class="col-md-6">
              <!-- start Inline Default Checkbox -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Default Checkbox</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code28-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code28-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Default Checkbox - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox1&quot; value=&quot;option1&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox1&quot;&gt;1&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox2&quot; value=&quot;option2&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox2&quot;&gt;2&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox3&quot; value=&quot;option3&quot; disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox3&quot;&gt;3 (disabled)&lt;/label&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled />
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                  </div>
                </div>
              </div>
              <!-- end Inline Default Checkbox -->
            </div>
            <div class="col-md-6">
              <!-- start  Inline Default Radio Button -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Default Radio Button</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code29-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code29-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Default Radio Button - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio1&quot; value=&quot;option1&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;1&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio2&quot; value=&quot;option2&quot;&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;2&lt;/label&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check form-check-inline&quot;&gt;
          &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio3&quot; value=&quot;option3&quot; disabled&gt;
          &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;3 (disabled)&lt;/label&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                    <label class="form-check-label" for="inlineRadio1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                    <label class="form-check-label" for="inlineRadio2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled />
                    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                  </div>
                </div>
              </div>
              <!-- end  Inline Default Radio Button -->
            </div>
            <div class="col-md-6">
              <!-- start  Inline Custom Checkbox -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Custom Checkbox</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code30-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code30-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Custom Checkbox - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck1&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customCheck1&quot;&gt;1&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck2&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customCheck2&quot;&gt;2&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck3&quot; disabled=&quot;&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customCheck3&quot;&gt;3&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck1" />
                      <label class="custom-" for="customCheck1">1</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck2" />
                      <label class="custom-" for="customCheck2">2</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="customCheck3" disabled />
                      <label class="custom-" for="customCheck3">3</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end  Inline Custom Checkbox -->
            </div>
            <div class="col-md-6">
              <!-- start  Inline Custom Radios -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Custom Radios</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code31-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code31-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Custom Radios - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;customControlValidation2&quot; name=&quot;radio-stacked&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customControlValidation2&quot;&gt;1&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;customControlValidation3&quot; name=&quot;radio-stacked&quot;&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customControlValidation3&quot;&gt;2&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-check-inline&quot;&gt;
          &lt;div class=&quot;form-check&quot;&gt;
              &lt;input type=&quot;radio&quot; class=&quot;form-check-input&quot; id=&quot;customControlValidation4&quot; name=&quot;radio-stacked&quot; disabled&gt;
              &lt;label class=&quot;custom-&quot; for=&quot;customControlValidation4&quot;&gt;3&lt;/label&gt;
          &lt;/div&gt;
      &lt;/div&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="customControlValidation2" name="radio-stacked" />
                      <label class="custom-" for="customControlValidation2">1</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="customControlValidation3" name="radio-stacked" />
                      <label class="custom-" for="customControlValidation3">2</label>
                    </div>
                  </div>
                  <div class="form-check-inline">
                    <div class="form-check">
                      <input type="radio" class="form-check-input" id="customControlValidation4" name="radio-stacked" disabled />
                      <label class="custom-" for="customControlValidation4">3</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end  Inline Custom Radios -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">General Select</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start  Select -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Select</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code32-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code32-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Select - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-4&quot;&gt;
          &lt;div class=&quot;form-group mb-4&quot;&gt;
              &lt;label for=&quot;exampleFormControlSelect1&quot;&gt;Select No&lt;/label&gt;
              &lt;select class=&quot;form-control&quot; id=&quot;exampleFormControlSelect1&quot;&gt;
                  &lt;option&gt;1&lt;/option&gt;
                  &lt;option&gt;2&lt;/option&gt;
                  &lt;option&gt;3&lt;/option&gt;
                  &lt;option&gt;4&lt;/option&gt;
                  &lt;option&gt;5&lt;/option&gt;
              &lt;/select&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-4">
                    <div class="form-group mb-4">
                      <label for="exampleFormControlSelect1">Select No</label>
                      <select class="form-select" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end  Select -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start  Form Select -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Form Select</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code33-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code33-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Form Select - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;form-group mb-4&quot;&gt;
              &lt;label class=&quot;mr-sm-2&quot; for=&quot;inlineFormCustomSelect&quot;&gt;Select&lt;/label&gt;
              &lt;select class=&quot;form-select mr-sm-2&quot; id=&quot;inlineFormCustomSelect&quot;&gt;
                  &lt;option selected&gt;Choose...&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
              &lt;/select&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>.form-select</code>
                    </mark> class
                  </p>
                  <form>
                    <div class="form-group mb-4">
                      <label class="mr-sm-2" for="inlineFormCustomSelect">Select</label>
                      <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end  Form Select -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start  Multiple Select -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Multiple Select</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code34-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code34-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Multiple Select - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;select multiple class=&quot;form-control&quot; id=&quot;exampleFormControlSelect2&quot;&gt;
              &lt;option&gt;1&lt;/option&gt;
              &lt;option&gt;2&lt;/option&gt;
              &lt;option&gt;3&lt;/option&gt;
              &lt;option&gt;4&lt;/option&gt;
              &lt;option&gt;5&lt;/option&gt;
          &lt;/select&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>multiple</code>
                    </mark> to the field
                  </p>
                  <form>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </form>
                </div>
              </div>
              <!-- end  Multiple Select -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start  Select With Addons -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Select With Addons</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code35-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code35-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Select With Addons - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group mb-3&quot;&gt;
              &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
              &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
                  &lt;option selected&gt;Choose...&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
              &lt;/select&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>.input-group-prepend</code>
                    </mark> class to
                    the div
                  </p>
                  <form>
                    <div class="input-group mb-3">
                      <label class="input-group-text" for="inputGroupSelect01">Options</label>
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end  Select With Addons -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Select With Buttons -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Select With Buttons</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code36-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code36-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Select With Buttons - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form&gt;
          &lt;div class=&quot;input-group&quot;&gt;
              &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect04&quot;&gt;
                  &lt;option selected&gt;Choose...&lt;/option&gt;
                  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
              &lt;/select&gt;
                  &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>.input-group-append</code>
                    </mark> class to the
                    div
                  </p>
                  <form>
                    <div class="input-group">
                      <select class="form-select" id="inputGroupSelect04">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <button class="btn btn-primary" type="button">
                        Button
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Select With Buttons -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">File Upload</h4>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Default File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Default File Upload</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code37-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code37-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Default File Upload - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFile&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>.form-control-file</code>
                    </mark> class to the
                    input
                  </p>
                  <form class="mt-3">
                    <input class="form-control" type="file" id="formFile" />
                  </form>
                </div>
              </div>
              <!-- end Default File Upload -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Disabled File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Disabled File Upload</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code38-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code38-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Disabled File Upload - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
&lt;form&gt;
  &lt;div class=&quot;mb-3&quot;&gt;
    &lt;input class=&quot;form-control&quot; type=&quot;file&quot; id=&quot;formFileDisabled&quot; disabled&gt;
  &lt;/div&gt;
&lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>disabled</code>
                    </mark> attr to the
                    input
                  </p>
                  <form>
                    <div class="mb-3">
                      <input class="form-control" type="file" id="formFileDisabled" disabled>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Custom File Upload -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Small File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Small File Upload
                    </h4>
                    <div class=" ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code39-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code39-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Small File Upload - View
                                Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
&lt;form class=&quot;mt-4&quot;&gt;
  &lt;input class=&quot;form-control form-control-sm&quot; id=&quot;formFileSm&quot; type=&quot;file&quot;&gt;
&lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>.form-control-sm</code>
                    </mark> class to
                    the div
                  </p>
                  <form class="mt-4">
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                  </form>
                </div>
              </div>
              <!-- end Custom File Upload with Button Left -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Large File Upload -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">
                      Large File Upload
                    </h4>
                    <div class=" ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code40-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code40-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Large File Upload - View
                                Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
&lt;form class=&quot;mt-4&quot;&gt;
  &lt;input class=&quot;form-control form-control-lg&quot; id=&quot;formFileLg&quot; type=&quot;file&quot;&gt;
&lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>.form-control-lg</code>
                    </mark> class to the
                    div
                  </p>
                  <form class="mt-4">
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </form>
                </div>
              </div>
              <!-- end Custom File Upload with Button Right -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Different Style in Helper Text</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Left Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Left Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code41-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code41-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Left Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext2&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;div class=&quot;d-flex justify-content-start&quot;&gt;
                  &lt;small id=&quot;name1&quot; class=&quot;badge badge-default text-info  bg-info-subtle form-text&quot;&gt;Helper Text&lt;/small&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>justify-content-start</code>
                    </mark> class to
                    the text
                  </p>
                  <form class="mt-3">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext2" aria-describedby="name" placeholder="Name" />
                      <div class="d-flex justify-content-start">
                        <small id="name1" class="badge badge-default text-info  bg-info-subtle form-text">Helper
                          Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Left Helper Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Center Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Center Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code42-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code42-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Center Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group mb-0&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext4&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;p class=&quot;text-center mb-0&quot;&gt;
                  &lt;small id=&quot;name45&quot; class=&quot;badge badge-default text-warning  bg-warning-subtle form-text&quot;&gt;Helper Text&lt;/small&gt;
              &lt;/p&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>text-center</code>
                    </mark> class to
                    the text
                  </p>
                  <form class="mt-3">
                    <div class="form-group mb-0">
                      <input type="text" class="form-control" id="nametext4" aria-describedby="name" placeholder="Name" />
                      <p class="text-center mb-0">
                        <small id="name45" class="badge badge-default text-warning  bg-warning-subtle form-text">Helper
                          Text</small>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Center Helper Text -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Right Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Right Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code43-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code43-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Right Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;form-group&quot;&gt;
              &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;nametext12&quot; aria-describedby=&quot;name&quot; placeholder=&quot;Name&quot;&gt;
              &lt;div class=&quot;d-flex justify-content-end&quot;&gt;
                  &lt;small id=&quot;name13&quot; class=&quot;badge badge-default text-danger  bg-danger-subtle form-text&quot;&gt;Helper Text&lt;/small&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add
                    <mark>
                      <code>justify-content-end</code>
                    </mark> class to the
                    text
                  </p>
                  <form class="mt-3">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nametext12" aria-describedby="name" placeholder="Name" />
                      <div class="d-flex justify-content-end">
                        <small id="name13" class="badge badge-default text-danger  bg-danger-subtle form-text">Helper
                          Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Right Helper Text -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Helper Text -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Helper Text</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code44-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code44-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Helper Text - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;div class=&quot;row&quot;&gt;
              &lt;div class=&quot;col-md-8&quot;&gt;
                  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;helpInput10&quot; placeholder=&quot;Helper Text&quot;&gt;
              &lt;/div&gt;
              &lt;div class=&quot;col-md-4&quot;&gt;
                  &lt;small class=&quot;text-muted&quot;&gt;Helper Text&lt;/small&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="row">
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="helpInput10" placeholder="Helper Text" />
                      </div>
                      <div class="col-md-4">
                        <small class="text-muted">Helper Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Helper Text -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Helper Text With Color -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Helper Text With Color</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code45-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code45-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Helper Text With Color - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-md-8&quot;&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;helpInput11&quot; placeholder=&quot;Help Text&quot;&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-md-4 block-tag&quot;&gt;
                &lt;small class=&quot;badge bg-success-subtle text-success &quot;&gt;Helper Text&lt;/small&gt;
            &lt;/div&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <div class="row">
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="helpInput11" placeholder="Help Text" />
                      </div>
                      <div class="col-md-4 block-tag">
                        <small class="badge bg-success-subtle text-success ">Helper Text</small>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Helper Text With Color -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input With Validaton</h4>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input With Success -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Success</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code46-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code46-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Success - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;label class=&quot;form-&quot; for=&quot;inputSuccess1&quot;&gt;Input with success&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control is-valid&quot; id=&quot;inputSuccess1&quot;&gt;
        &lt;div class=&quot;valid-feedback&quot;&gt;
            Success! You've done it.
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>is-valid</code>
                    </mark> class to the
                    input
                  </p>
                  <form class="mt-3">
                    <label class="form-" for="inputSuccess1">Input with success</label>
                    <input type="text" class="form-control is-valid" id="inputSuccess1" />
                    <div class="valid-feedback">Success! You've done it.</div>
                  </form>
                </div>
              </div>
              <!-- end Input With Success -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Input With Danger -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input With Danger</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code47-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code47-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input With Danger - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;label class=&quot;form-&quot; for=&quot;inputDanger1&quot;&gt;Input with danger&lt;/label&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control is-invalid&quot; id=&quot;inputDanger1&quot;&gt;
          &lt;div class=&quot;invalid-feedback&quot;&gt;
              Sorry, that username's taken. Try another?
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>is-invalid</code>
                    </mark> class to
                    the input
                  </p>
                  <form class="mt-3">
                    <label class="form-" for="inputDanger1">Input with danger</label>
                    <input type="text" class="form-control is-invalid" id="inputDanger1" />
                    <div class="invalid-feedback">
                      Sorry, that username's taken. Try another?
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Input With Danger -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Input With Success -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Input With Success</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code48-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code48-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Input With Success - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
          &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
          &lt;div class=&quot;form-group row&quot;&gt;
              &lt;label for=&quot;inputHorizontalSuccess&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
              &lt;div class=&quot;col-sm-10&quot;&gt;
                  &lt;input type=&quot;email&quot; class=&quot;form-control is-valid&quot; id=&quot;inputHorizontalSuccess&quot; placeholder=&quot;name@example.com&quot;&gt;
                  &lt;div class=&quot;valid-feedback&quot;&gt;Success! You've done it.&lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>form-horizontal</code>
                    </mark> class
                    to the input
                  </p>
                  <form class="mt-3 form-horizontal">
                    <div class="form-group row">
                      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control is-valid" id="inputHorizontalSuccess" placeholder="name@example.com" />
                        <div class="valid-feedback">
                          Success! You've done it.
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Input With Success -->
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
              <!-- start Inline Input With Danger -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Inline Input With Danger</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code49-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code49-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Inline Input With Danger - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3 form-horizontal&quot;&gt;
        &lt;div class=&quot;form-group row&quot;&gt;
            &lt;label for=&quot;inputHorizontalDnger&quot; class=&quot;col-sm-2 col-form-label&quot;&gt;Email&lt;/label&gt;
            &lt;div class=&quot;col-sm-10&quot;&gt;
                &lt;input type=&quot;email&quot; class=&quot;form-control is-invalid&quot; id=&quot;inputHorizontalDnger&quot; placeholder=&quot;name@example.com&quot;&gt;
                &lt;div class=&quot;invalid-feedback&quot;&gt;Sorry, that username's taken. Try another?&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <p class="mb-3 card-subtitle">
                    To use add <mark>
                      <code>form-horizontal</code>
                    </mark> class
                    to the input
                  </p>
                  <form class="mt-3 form-horizontal">
                    <div class="form-group row">
                      <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control is-invalid" id="inputHorizontalDnger" placeholder="name@example.com" />
                        <div class="invalid-feedback">
                          Sorry, that username's taken. Try another?
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Inline Input With Danger -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input With Tooltip</h4>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Bottom -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Bottom</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code50-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code50-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Bottom - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot; class=&quot;form-control&quot; placeholder=&quot;Bottom&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom" class="form-control" placeholder="Bottom" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Bottom -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Right -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Right</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code51-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code51-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Right - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot; class=&quot;form-control&quot; placeholder=&quot;Right&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right" class="form-control" placeholder="Right" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Right -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Top -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Top</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code52-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code52-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Top - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot; class=&quot;form-control&quot; placeholder=&quot;Top&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top" class="form-control" placeholder="Top" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Top -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Tooltip Left -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Tooltip Left</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code53-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code53-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Tooltip Left - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot; class=&quot;form-control&quot; placeholder=&quot;Left&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left" class="form-control" placeholder="Left" />
                  </form>
                </div>
              </div>
              <!-- end Tooltip Left -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input Text Styles</h4>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Bold -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Bold</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code54-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code54-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Bold - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control fw-bold&quot; placeholder=&quot;Bold Text&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control fw-bold" placeholder="Bold Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Bold -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Normal -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Normal</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code55-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code55-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Normal - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control fw-normal&quot; placeholder=&quot;Normal Text&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control fw-normal" placeholder="Normal Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Normal -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Light -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Light</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code56-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code56-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Light - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control fw-light&quot; placeholder=&quot;Light Text&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control fw-light" placeholder="Light Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Light -->
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
              <!-- start Input Text Italic -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Italic</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code57-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code57-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Italic - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control font-italic&quot; placeholder=&quot;Italic Text&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control font-italic" placeholder="Italic Text" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Italic -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Text Lowercase -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Lowercase</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code58-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code58-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Lowercase - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control text-lowercase&quot; placeholder=&quot;Lowercase&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control text-lowercase" placeholder="Lowercase" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Lowercase -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Text Uppercase -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Uppercase</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code59-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code59-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Uppercase - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control text-uppercase&quot; placeholder=&quot;Uppercase&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control text-uppercase" placeholder="Uppercase" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Uppercase -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Input Text Capitalize -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Input Text Capitalize</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code60-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code60-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Input Text Capitalize - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; class=&quot;form-control text-capitalize&quot; placeholder=&quot;capitalize&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" class="form-control text-capitalize" placeholder="capitalize" />
                  </form>
                </div>
              </div>
              <!-- end Input Text Capitalize -->
            </div>
            <h4 class="card-title mt-5 mb-4 text-dark">Input Sizing</h4>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Small Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Small Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code61-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code61-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Small Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
          &lt;input type=&quot;text&quot; id=&quot;example-input-small&quot; name=&quot;example-input-small&quot; class=&quot;form-control form-control-sm&quot; placeholder=&quot;Small&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="Small" />
                  </form>
                </div>
              </div>
              <!-- end Small Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Normal Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Normal Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code62-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code62-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Normal Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;input type=&quot;text&quot; id=&quot;example-input-normal&quot; name=&quot;example-input-normal&quot; class=&quot;form-control&quot; placeholder=&quot;Normal&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal" />
                  </form>
                </div>
              </div>
              <!-- end Normal Input -->
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <!-- start Large Input -->
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex mb-3 align-items-center">
                    <h4 class="card-title mb-0">Large Input</h4>
                    <div class="ms-auto flex-shrink-0">
                      <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal" data-bs-target="#view-code63-modal">
                        <i class="ti ti-code fs-5 d-flex"></i>
                      </button>
                      <!-- Code Modal -->
                      <div id="view-code63-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                          <div class="modal-content">
                            <div class="modal-header border-bottom">
                              <h5 class="modal-title" id="exampleModalLabel">
                                Large Input - View Code
                              </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                              <pre class="language-html scrollable">
                                                                                  <code>
      &lt;form class=&quot;mt-3&quot;&gt;
        &lt;input type=&quot;text&quot; id=&quot;example-input-large&quot; name=&quot;example-input-large&quot; class=&quot;form-control form-control-lg&quot; placeholder=&quot;Large&quot;&gt;
      &lt;/form&gt;
                                                                                  </code>
                                                                              </pre>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </div>
                  </div>
                  <form class="mt-3">
                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="Large" />
                  </form>
                </div>
              </div>
              <!-- end Large Input -->
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
  <script src="../assets/libs/prismjs/prism.js"></script>
</body>

</html>