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
                  <h4 class="mb-4 mb-sm-0 card-title">Widgets-Apps</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.php">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Widgets-Apps
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="row widget-app-columns">
            <!-- -------------------------------------------------------------- -->
            <!-- Recent Comments copy and paste this code-->
            <!-- -------------------------------------------------------------- -->
            <div class="col-lg-4">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Recent Comments</h4>
                </div>
                <div class="comment-widgets scrollable mb-2 common-widget" style="height: 450px" data-simplebar="">
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                    <div>
                      <span>
                        <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" alt="user" width="50" />
                      </span>
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="fw-medium">James Anderson</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type etting industry
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-info-subtle
                              text-info
                              
                            ">Pending</span>
                          <span class="action-icons">
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-edit fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-check fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-heart fs-5"></i>
                            </a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            mt-2
                            text-end
                          ">April 14, 2023</span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row border-bottom active p-3 gap-3">
                    <div>
                      <span>
                        <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" alt="user" width="50" />
                      </span>
                    </div>
                    <div class="comment-text active w-100">
                      <h6 class="fw-medium">Michael Jorden</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-success-subtle
                              text-success
                              
                            ">Approved</span>
                          <span class="action-icons active">
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-edit fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-circle-x fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-heart text-danger fs-5"></i>
                            </a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            text-end
                            mt-2
                            d-block
                          ">April 14, 2023</span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                    <div>
                      <span>
                        <img src="../assets/images/profile/user-8.jpg" class="rounded-circle" alt="user" width="50" />
                      </span>
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="fw-medium">Johnathan Doeting</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-danger-subtle
                              text-danger
                              
                            ">Rejected</span>
                          <span class="action-icons">
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-edit fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-check fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-heart fs-5"></i>
                            </a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            mt-2
                            text-end
                          ">April 14, 2023</span>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row p-3 gap-3">
                    <div>
                      <span>
                        <img src="../assets/images/profile/user-9.jpg" class="rounded-circle" alt="user" width="50" />
                      </span>
                    </div>
                    <div class="comment-text w-100">
                      <h6 class="fw-medium">James Anderson</h6>
                      <p class="mb-1 fs-2 text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div class="comment-footer mt-2">
                        <div class="d-flex align-items-center">
                          <span class="
                              badge
                              bg-info-subtle
                              text-info
                              
                            ">Pending</span>
                          <span class="action-icons">
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-edit fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-check fs-5"></i>
                            </a>
                            <a href="javascript:void(0)" class="ps-3">
                              <i class="ti ti-heart fs-5"></i>
                            </a>
                          </span>
                        </div>
                        <span class="
                            text-muted
                            ms-auto
                            fw-normal
                            fs-2
                            d-block
                            text-end
                            mt-2
                          ">April 14, 2023</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title mb-0">Weather Report</h4>
                    <select class="form-select w-auto ms-auto">
                      <option selected="">Today</option>
                      <option value="1">Weekly</option>
                    </select>
                  </div>
                  <div class="d-flex align-items-center flex-row mt-4">
                    <div class="p-2 display-5 text-primary">
                      <i class="ti ti-cloud-snow"></i>
                      <span>73<sup>°</sup>
                      </span>
                    </div>
                    <div class="p-2">
                      <h3 class="mb-0">Saturday</h3>
                      <small>Ahmedabad, India</small>
                    </div>
                  </div>
                  <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td>Wind</td>
                        <td class="fw-medium">ESE 17 mph</td>
                      </tr>
                      <tr>
                        <td>Humidity</td>
                        <td class="fw-medium">83%</td>
                      </tr>
                      <tr>
                        <td>Pressure</td>
                        <td class="fw-medium">28.56 in</td>
                      </tr>
                      <tr>
                        <td>Cloud Cover</td>
                        <td class="fw-medium">78%</td>
                      </tr>
                      <tr>
                        <td>Ceiling</td>
                        <td class="fw-medium">25760 ft</td>
                      </tr>
                    </tbody>
                  </table>
                  <hr />
                  <ul class="list-unstyled row text-center  mb-0">
                    <li class="col">
                      <i class="d-block text-primary ti ti-sun-high fs-6 mb-1"></i>
                      <span>09:30</span>
                      <h3 class="mb-0 fs-14 lh-base">70<sup>°</sup>
                      </h3>
                    </li>
                    <li class="col">
                      <i class="d-block text-primary ti ti-cloud fs-6 mb-1"></i>
                      <span>11:30</span>
                      <h3 class="mb-0 fs-14 lh-base">72<sup>°</sup>
                      </h3>
                    </li>
                    <li class="col">
                      <i class="d-block text-primary ti ti-cloud-rain fs-6 mb-1"></i>
                      <span>13:30</span>
                      <h3 class="mb-0 fs-14 lh-base">75<sup>°</sup>
                      </h3>
                    </li>
                    <li class="col">
                      <i class="d-block text-primary ti ti-cloud-snow fs-6 mb-1"></i>
                      <span>15:30</span>
                      <h3 class="mb-0 fs-14 lh-base">76<sup>°</sup>
                      </h3>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card">
                <div class="card-body text-center">
                  <div class="profile-pic mb-3 mt-3">
                    <img src="../assets/images/profile/user-1.jpg" width="150" class="rounded-circle" alt="user" />
                    <h4 class="mt-3 mb-0">David McMichael</h4>
                    <a href="mailto:danielkristeen@gmail.com">danielkristeen@gmail.com</a>
                  </div>
                  <div class="
                      badge
                      bg-primary-subtle
                      text-primary
                    ">
                    Dashboard
                  </div>
                  <div class="
                      badge
                      bg-primary-subtle
                      text-primary
                    ">
                    UI
                  </div>
                  <div class="
                      badge
                      bg-primary-subtle
                      text-primary
                    ">
                    UX
                  </div>
                  <div class="badge text-bg-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="3 more">
                    +3
                  </div>
                </div>
                <div class="p-4 border-top mt-3">
                  <div class="row text-center">
                    <div class="col-6 border-end">
                      <a href="javascript:void(0)" class="
                          link
                          text-dark
                          d-flex
                          align-items-center
                          justify-content-center
                          fw-medium
                        ">
                        <i class="ti ti-message me-1 fs-6"></i>Message
                      </a>
                    </div>
                    <div class="col-6">
                      <a href="javascript:void(0)" class="
                          link
                          text-dark
                          d-flex
                          align-items-center
                          justify-content-center
                          fw-medium
                        ">
                        <i class="ti ti-artboard me-1 fs-6"></i>Portfolio
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card social-widget overflow-hidden">
                <div class="card-body text-bg-primary">
                  <div class="d-flex align-items-center text-white">
                    <div>
                      <h4 class="mb-0 text-white">People you may know</h4>
                    </div>
                    <div class="ms-auto">
                      <a href="javascript: void(0)">
                        <i class="ti ti-menu-2 text-white fs-6"></i>
                      </a>
                    </div>
                  </div>
                  <form class="mt-4 mb-3">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control bg-body" placeholder="Search by Email" aria-label="" />
                      <button class="btn btn-light" type="button">
                        <i class="ti ti-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <div class="card-body">
                  <div class="row mt-2">
                    <div class="col-4 text-center">
                      <img src="../assets/images/profile/user-9.jpg" alt="matdash-img" class="img-fluid rounded" />
                      <h6 class="fs-2 mt-1">Micheal Doe</h6>
                      <button class="btn btn-light btn-sm">Connect</button>
                    </div>
                    <div class="col-4 text-center">
                      <img src="../assets/images/profile/user-2.jpg" alt="matdash-img" class="img-fluid rounded" />
                      <h6 class="fs-2 mt-1">Kendra Silly</h6>
                      <button class="btn btn-light btn-sm">Connect</button>
                    </div>
                    <div class="col-4 text-center">
                      <img src="../assets/images/profile/user-3.jpg" alt="matdash-img" class="img-fluid rounded" />
                      <h6 class="fs-2 mt-1">Jack Sully</h6>
                      <button class="btn btn-light btn-sm">Connect</button>
                    </div>
                  </div>
                  <button class="btn d-block w-100 btn-primary mb-2 mt-5">
                    Invite friends from Twitter
                    <i class="ti ti-brand-twitter ms-2 fs-5"></i>
                  </button>
                  <button class="btn d-block w-100 btn-info">
                    Invite friends from Facebook
                    <i class="ti ti-brand-facebook ms-2 fs-5"></i>
                  </button>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Currency Exchange</h4>
                  <p class="card-subtitle">exchange currency from here</p>
                </div>
                <div class="mb-4 p-4 text-center bg-light-subtle">
                  <form>
                    <div class="row gx-0">
                      <div class="col-8">
                        <input class="form-control" type="text" value="1.02458" />
                      </div>
                      <div class="col-4">
                        <select class="form-select">
                          <option value="1">BTC</option>
                          <option value="2">ETH</option>
                          <option value="3">DASH</option>
                          <option value="4">LTC</option>
                          <option value="5">NEO</option>
                          <option value="6">XRP</option>
                          <option value="7">EOS</option>
                          <option value="8">NEM</option>
                          <option value="9">ADA</option>
                        </select>
                      </div>
                    </div>
                    <div class="
                        round-40
                        text-white
                        d-flex
                        align-items-center
                        justify-content-center
                        text-center
                        rounded-circle
                        text-bg-danger
                        my-3
                        mx-auto
                      ">
                      <i class="ti ti-exchange fs-5"></i>
                    </div>
                    <div class="row gx-0">
                      <div class="col-8">
                        <input class="form-control" type="text" value="9526.39" />
                      </div>
                      <div class="col-4">
                        <select class="form-select">
                          <option value="1">USD</option>
                          <option value="2">EUR</option>
                          <option value="3">INR</option>
                          <option value="4">AUD</option>
                          <option value="5">GBP</option>
                          <option value="6">CAD</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-body pt-0 text-center">
                  <button type="button" class="btn btn-primary">
                    Exchange Now
                  </button>
                </div>
              </div>
              <div class="card poll-widget">
                <div class="card-body">
                  <h4 class="card-title">Result of Poll</h4>
                  <p class="card-subtitle mb-7">
                    Here is the result for the latest poll
                  </p>
                  <p class="fw-bold text-muted">
                    What is your mobile app usage daily?
                  </p>
                  <ul class="list-style-none mt-3 mb-2">
                    <li>
                      <div class="d-flex align-items-center">
                        <div>
                          <h6 class="mb-0 fw-bold">
                            A <span class="fw-normal">30 Minutes</span>
                          </h6>
                        </div>
                        <div class="ms-auto">
                          <h6 class="mb-0 fw-bold">55%</h6>
                        </div>
                      </div>
                      <div class="progress mt-2 text-bg-light">
                        <div class="progress-bar text-bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="mt-4">
                      <div class="d-flex align-items-center">
                        <div>
                          <h6 class="mb-0 fw-bold">
                            B <span class="fw-normal">More than 30 minutes</span>
                          </h6>
                        </div>
                        <div class="ms-auto">
                          <h6 class="mb-0 fw-bold">20%</h6>
                        </div>
                      </div>
                      <div class="progress mt-2 text-bg-light">
                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="mt-4">
                      <div class="d-flex align-items-center">
                        <div>
                          <h6 class="mb-0 fw-bold">
                            C <span class="fw-normal">1 Hour</span>
                          </h6>
                        </div>
                        <div class="ms-auto">
                          <h6 class="mb-0 fw-bold">15%</h6>
                        </div>
                      </div>
                      <div class="progress mt-2 text-bg-light">
                        <div class="progress-bar text-bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="mt-4">
                      <div class="d-flex align-items-center">
                        <div>
                          <h6 class="mb-0 fw-bold">
                            D <span class="fw-normal">More than 1 hour</span>
                          </h6>
                        </div>
                        <div class="ms-auto">
                          <h6 class="mb-0 fw-bold">10%</h6>
                        </div>
                      </div>
                      <div class="progress mt-2 text-bg-light">
                        <div class="progress-bar text-bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- To Do list copy and paste this code-->
            <!-- -------------------------------------------------------------- -->
            <div class="col-lg-4">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">To do List</h4>
                  <div class="todo-widget">
                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                      <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        " data-role="task">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input success check-light-success" id="newc1" />
                          <label class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            " for="newc1">
                            <div>
                              <h5 class="todo-desc mb-0 fs-3 fw-medium mt-n1">
                                Give purchase report to john
                              </h5>
                              <div class="todo-desc text-muted fw-normal fs-2">
                                2 January 2023
                              </div>
                            </div>
                            <div class="ms-auto">
                              <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="link" id="new" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots fs-6 text-dark"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="new">
                                  <li>
                                    <h6 class="dropdown-header">
                                      Choose Label
                                    </h6>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          fw-medium
                                        ">Primary</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-primary-subtle
                                          text-primary
                                          fw-medium
                                        ">Social</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-warning-subtle
                                          text-warning
                                          fw-medium
                                        ">Promotions</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          fw-medium
                                        ">Trash</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        " data-role="task">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input primary check-light-primary" id="newc2" />
                          <label class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            " for="newc2">
                            <div>
                              <h5 class="todo-desc mb-0 fs-3 fw-medium mt-n1">
                                Hit the gym
                              </h5>
                              <div class="todo-desc text-muted fw-normal fs-2">
                                5 January 2023
                              </div>
                            </div>
                            <div class="ms-auto">
                              <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="link" id="new" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots fs-6 text-dark"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="new">
                                  <li>
                                    <h6 class="dropdown-header">
                                      Choose Label
                                    </h6>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          fw-medium
                                        ">Primary</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-primary-subtle
                                          text-primary
                                          fw-medium
                                        ">Social</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-warning-subtle
                                          text-warning
                                          fw-medium
                                        ">Promotions</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          fw-medium
                                        ">Trash</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        " data-role="task">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input danger check-light-danger" id="newc3" />
                          <label class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            " for="newc3">
                            <div>
                              <h5 class="todo-desc mb-0 fs-3 fw-medium mt-n1">
                                Pay bills
                              </h5>
                              <div class="todo-desc text-muted fw-normal fs-2">
                                12 January 2023
                              </div>
                            </div>
                            <div class="ms-auto">
                              <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="link" id="new" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots fs-6 text-dark"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="new">
                                  <li>
                                    <h6 class="dropdown-header">
                                      Choose Label
                                    </h6>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          fw-medium
                                        ">Primary</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-primary-subtle
                                          text-primary
                                          fw-medium
                                        ">Social</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-warning-subtle
                                          text-warning
                                          fw-medium
                                        ">Promotions</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          fw-medium
                                        ">Trash</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        " data-role="task">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input warning check-light-warning" id="newc4" />
                          <label class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            " for="newc4">
                            <div>
                              <h5 class="todo-desc mb-0 fs-3 fw-medium mt-n1">
                                Meet George
                              </h5>
                              <div class="todo-desc text-muted fw-normal fs-2">
                                15 January 2023
                              </div>
                            </div>
                            <div class="ms-auto">
                              <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="link" id="new" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots fs-6 text-dark"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="new">
                                  <li>
                                    <h6 class="dropdown-header">
                                      Choose Label
                                    </h6>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          fw-medium
                                        ">Primary</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-primary-subtle
                                          text-primary
                                          fw-medium
                                        ">Social</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-warning-subtle
                                          text-warning
                                          fw-medium
                                        ">Promotions</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          fw-medium
                                        ">Trash</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li class="
                          list-group-item
                          todo-item
                          border-0
                          mb-0
                          py-3
                          pe-3
                          ps-0
                        " data-role="task">
                        <div class="form-check">
                          <input type="checkbox" class="
                              form-check-input
                              secondary
                              check-light-secondary
                            " id="newc5" />
                          <label class="
                              form-check-label
                              todo-label
                              d-md-flex
                              align-items-center
                              ps-2
                            " for="newc5">
                            <div>
                              <h5 class="todo-desc mb-0 fs-3 fw-medium mt-n1">
                                Read a book
                              </h5>
                              <div class="todo-desc text-muted fw-normal fs-2">
                                20 January 2023
                              </div>
                            </div>
                            <div class="ms-auto">
                              <div class="dropdown dropstart">
                                <a href="javascript:void(0)" class="link" id="new" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="ti ti-dots fs-6 text-dark"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="new">
                                  <li>
                                    <h6 class="dropdown-header">
                                      Choose Label
                                    </h6>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-success-subtle
                                          text-success
                                          fw-medium
                                        ">Primary</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-primary-subtle
                                          text-primary
                                          fw-medium
                                        ">Social</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-warning-subtle
                                          text-warning
                                          fw-medium
                                        ">Promotions</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                      <span class="
                                          badge
                                          bg-danger-subtle
                                          text-danger
                                          fw-medium
                                        ">Trash</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Task List</h4>
                  <div class="to-do-widget mt-3 common-widget">
                    <!-- .modal for add task -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header d-flex">
                            <h4 class="modal-title">Add Task</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label>Task name</label>
                                <input type="text" class="form-control" placeholder="Enter Task Name" />
                              </div>
                              <div class="mb-3">
                                <label>Assign to</label>
                                <select class="form-select">
                                  <option selected="">Sachin</option>
                                  <option value="1">Sehwag</option>
                                </select>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                            </button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                              Submit
                            </button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                      <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                        <div class="form-check form-check-inline w-100">
                          <input type="checkbox" class="form-check-input danger check-light-danger" id="inputSchedule" name="inputCheckboxesSchedule" />
                          <label for="inputSchedule" class="form-check-label fw-medium">
                            <span>Schedule meeting with</span>
                            <span class="badge text-bg-danger ms-1">Today</span>
                          </label>
                        </div>
                        <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-5.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Steave" class="rounded-circle" />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-2.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Jessica" class="rounded-circle" />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-3.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka" class="rounded-circle" />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina" class="rounded-circle" />
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                        <div class="form-check form-check-inline w-100">
                          <input type="checkbox" id="inputCall" class="form-check-input info check-light-info" name="inputCheckboxesCall" />
                          <label for="inputCall" class="form-check-label fw-medium">
                            <span>Give Purchase report to</span>
                            <span class="badge text-bg-info ms-1">Yesterday</span>
                          </label>
                        </div>
                        <ul class="assignedto m-0 ps-4 ms-1 mt-1">
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-3.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka" class="rounded-circle" />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Selina" class="rounded-circle" />
                          </li>
                        </ul>
                      </li>
                      <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                        <div class="form-check form-check-inline w-100">
                          <input type="checkbox" id="inputBook" class="form-check-input primary check-light-primary" name="inputCheckboxesBook" />
                          <label for="inputBook" class="form-check-label fw-medium">
                            <span>Book flight for holiday</span>
                            <span class="badge text-bg-primary ms-1">1
                              week</span>
                          </label>
                        </div>
                        <div class="fs-2 ps-3 d-inline-block ms-2">
                          26 jun 2023
                        </div>
                      </li>
                      <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                        <div class="form-check form-check-inline w-100">
                          <input type="checkbox" id="inputForward" class="form-check-input warning check-light-warning" name="inputCheckboxesForward" />
                          <label for="inputForward" class="form-check-label fw-medium">
                            <span>Forward all tasks</span>
                            <span class="badge text-bg-warning ms-1">2 weeks</span>
                          </label>
                        </div>
                        <div class="fs-2 ps-3 d-inline-block ms-2">
                          26 jun 2023
                        </div>
                      </li>
                      <li class="list-group-item border-0 mb-0 py-3 pe-3 ps-0" data-role="task">
                        <div class="form-check form-check-inline w-100">
                          <input type="checkbox" id="inputRecieve" class="form-check-input success check-light-success" name="inputCheckboxesRecieve" />
                          <label for="inputRecieve" class="form-check-label fw-medium">
                            <span>Recieve shipment</span>
                            <span class="badge text-bg-success ms-1">2 weeks</span>
                          </label>
                        </div>
                        <ul class="assignedto list-style-none m-0 ps-4 ms-1 mt-1">
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-4.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Steave" class="rounded-circle" />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-2.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Jessica" class="rounded-circle" />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img src="../assets/images/profile/user-3.jpg" alt="user" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Priyanka" class="rounded-circle" />
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Recent Messages</h4>
                  <div class="mailbox">
                    <div class="
                        message-center
                        contact-widget
                        position-relative
                      " style="height: 450px">
                      <a href="javascript:void(0)" class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-8.jpg" alt="user" class="rounded-circle w-100 round-40" />
                          <span class="profile-status rounded-circle online"></span>
                        </span>
                        <div class="w-75 d-inline-block  ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-4">Michell Flintoff</h5>
                          <span class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">info@wrappixel.com</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-4.jpg" alt="user" class="rounded-circle w-100 round-40" />
                          <span class="profile-status rounded-circle busy"></span>
                        </span>
                        <div class="w-75 d-inline-block  ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-4">Bianca Anderson</h5>
                          <span class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">pamela1987@gmail.com</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle w-100 round-40" />
                          <span class="profile-status rounded-circle away"></span>
                        </span>
                        <div class="w-75 d-inline-block  ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-4">Andrew Johnson</h5>
                          <span class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">cruise1298.fiplip@gmail.com</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded-circle w-100 round-40" />
                          <span class="profile-status rounded-circle offline"></span>
                        </span>
                        <div class="w-75 d-inline-block  ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-4">Mark</h5>
                          <span class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">kat@gmail.com</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                          message-item
                          d-flex
                          align-items-center
                          border-bottom
                          p-3
                        ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded-circle w-100 round-40" />
                          <span class="profile-status rounded-circle busy"></span>
                        </span>
                        <div class="w-75 d-inline-block  ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-4">Stoinus </h5>
                          <span class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">pamela1987@gmail.com</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="message-item d-flex align-items-center p-3">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-7.jpg" alt="user" class="rounded-circle w-100 round-40" />
                          <span class="profile-status rounded-circle online"></span>
                        </span>
                        <div class="w-75 d-inline-block  ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-4">Isabella Anderson</h5>
                          <span class="
                              fs-2
                              text-nowrap
                              d-block
                              time
                              text-truncate text-muted
                            ">info@wrappixel.com</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Subscribe</h4>
                  <form>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputname2" placeholder="Enter Name" />
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Enter email" />
                    </div>
                    <button type="submit" class="
                        btn btn-primary
                        fw-medium
                        d-block
                        w-100
                      ">
                      Submit
                    </button>
                  </form>
                </div>
              </div>
              <!-- Card -->
              <div class="card overflow-hidden">
                <div class="position-relative">
                  <img class="card-img img-fluid" src="../assets/images/backgrounds/profile-bg.jpg" alt="Card image" />
                  <div class="
                    card-img-overlay
                    d-flex
                    align-items-center
                    justify-content-center
                    flex-column
                  ">
                    <img src="../assets/images/profile/user-3.jpg" alt="matdash-img" class="rounded-circle" width="100" />
                    <h4 class="card-title text-white mt-3 mb-0">John doe</h4>
                  </div>
                </div>

                <div class="card-body text-center">
                  <div class="row">
                    <div class="col">
                      <h4 class="mb-0 card-title">12K</h4>
                      <p class="fs-3 mb-0">Followers</p>
                    </div>
                    <div class="col">
                      <h4 class="mb-0 card-title">420</h4>
                      <p class="fs-3 mb-0">Following</p>
                    </div>
                    <div class="col">
                      <h4 class="mb-0 card-title">128</h4>
                      <p class="fs-3 mb-0">Tweets</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reviews</h4>
                  <p class="card-subtitle">Overview of Review</p>
                  <h2 class="fw-medium mt-5 fs-7">25426</h2>
                  <span class="text-muted">This month we got 346 New Reviews</span>
                  <div class="image-box mt-4 mb-4">
                    <a href="javascript:void(0)" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Simmons">
                      <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="45" alt="user" />
                    </a>
                    <a href="javascript:void(0)" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Fitz">
                      <img src="../assets/images/profile/user-2.jpg" class="rounded-circle" width="45" alt="user" />
                    </a>
                    <a href="javascript:void(0)" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Phil">
                      <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="45" alt="user" />
                    </a>
                    <a href="javascript:void(0)" class="me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Melinda">
                      <img src="../assets/images/profile/user-4.jpg" class="rounded-circle" width="45" alt="user" />
                    </a>
                  </div>
                  <a href="javascript:void(0)" class="btn btn-primary mt-2">Checkout All Reviews</a>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Visits around the countries</h4>
                  <ul class="list-style-none country-state mt-3">
                    <li class="mb-4">
                      <h2 class="mb-0 fs-7">6350</h2>
                      <div class="d-flex align-items-center">
                        <small>From India</small>
                        <div class="ms-auto">
                          48% <i class="fas fa-level-up-alt text-success"></i>
                        </div>
                      </div>
                      <div class="progress text-bg-light">
                        <div class="progress-bar text-bg-success" role="progressbar" style="width: 48%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="mb-4">
                      <h2 class="mb-0 fs-7">3250</h2>
                      <div class="d-flex align-items-center">
                        <small>From UAE</small>
                        <div class="ms-auto">
                          98% <i class="fas fa-level-up-alt text-success"></i>
                        </div>
                      </div>
                      <div class="progress text-bg-light">
                        <div class="progress-bar text-bg-info" role="progressbar" style="width: 48%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="mb-4">
                      <h2 class="mb-0 fs-7">1250</h2>
                      <div class="d-flex align-items-center">
                        <small>From Australia</small>
                        <div class="ms-auto">
                          75% <i class="fas fa-level-down-alt text-danger"></i>
                        </div>
                      </div>
                      <div class="progress text-bg-light">
                        <div class="progress-bar text-bg-primary" role="progressbar" style="width: 48%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                    <li class="mb-4">
                      <h2 class="mb-0 fs-7">1350</h2>
                      <div class="d-flex align-items-center">
                        <small>From USA</small>
                        <div class="ms-auto">
                          48% <i class="fas fa-level-up-alt text-success"></i>
                        </div>
                      </div>
                      <div class="progress text-bg-light">
                        <div class="progress-bar text-bg-warning" role="progressbar" style="width: 48%; height: 6px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Card -->
              <div class="card earning-widget">
                <div class="card-body">
                  <div class="card-title">
                    <div class="d-flex">
                      <div>
                        <h4 class="card-title mb-0">Total Earning</h4>
                        <h2 class="mt-0 fs-7 mb-0">$586</h2>
                      </div>
                      <div class="ms-auto">
                        <select class="form-select">
                          <option selected="">Today</option>
                          <option value="1">Weekly</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-3 border-top">
                  <div class="d-flex align-items-center pb-2">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/profile/user-2.jpg" width="50" class="rounded-circle" alt="logo" />
                    </div>
                    <div class="ms-2 fw-medium">Emma Adams</div>
                    <div class="ms-auto">
                      <span class="badge text-bg-info">$2,300</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/profile/user-3.jpg" width="50" class="rounded-circle" alt="logo" />
                    </div>
                    <div class="ms-2 fw-medium">Daniel Kristeen</div>
                    <div class="ms-auto">
                      <span class="badge text-bg-primary">$4,300</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/profile/user-4.jpg" width="50" class="rounded-circle" alt="logo" />
                    </div>
                    <div class="ms-2 fw-medium">Dany John</div>
                    <div class="ms-auto">
                      <span class="badge text-bg-success">$4,300</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/profile/user-5.jpg" width="50" class="rounded-circle" alt="logo" />
                    </div>
                    <div class="ms-2 fw-medium">Olivia Allen</div>
                    <div class="ms-auto">
                      <span class="badge text-bg-warning">$5,300</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/profile/user-6.jpg" width="50" class="rounded-circle" alt="logo" />
                    </div>
                    <div class="ms-2 fw-medium">John Deo</div>
                    <div class="ms-auto">
                      <span class="badge text-bg-danger">$4,567</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/profile/user-7.jpg" width="50" class="rounded-circle" alt="logo" />
                    </div>
                    <div class="ms-2 fw-medium">Krish John</div>
                    <div class="ms-auto">
                      <span class="badge text-bg-primary">$7,889</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- Project of the month copy and paste this code-->
            <!-- -------------------------------------------------------------- -->
            <div class="col-lg-4">
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Projects of the Month</h4>
                    <select class="form-select w-auto ms-auto">
                      <option selected="">January</option>
                      <option value="1">February</option>
                      <option value="2">March</option>
                      <option value="3">April</option>
                    </select>
                  </div>
                  <div class="table-responsive">
                    <table class="table stylish-table  mb-0 text-nowrap">
                      <thead>
                        <tr>
                          <th class="border-0 text-muted fw-normal" colspan="2">
                            Assigned
                          </th>
                          <th class="border-0 text-muted fw-normal">Name</th>
                          <th class="border-0 text-muted fw-normal">
                            Priority
                          </th>
                          <th class="border-0 text-muted fw-normal">Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <span class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-info
                              ">S</span>
                          </td>
                          <td>
                            <h6 class="fw-medium mb-0">Sunil Joshi</h6>
                            <small class="text-muted">Web Designer</small>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <span class="badge text-bg-success">Low</span>
                          </td>
                          <td>$3.9K</td>
                        </tr>
                        <tr class="active">
                          <td>
                            <span class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-info
                              ">
                              <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded-circle" width="40" />
                            </span>
                          </td>
                          <td>
                            <h6 class="fw-medium mb-0">Andrew</h6>
                            <small class="text-muted">Project Manager</small>
                          </td>
                          <td>Real Homes</td>
                          <td>
                            <span class="badge text-bg-info">Medium</span>
                          </td>
                          <td>$23.9K</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-success
                              ">B</span>
                          </td>
                          <td>
                            <h6 class="fw-medium mb-0">
                              Bhavesh patel
                            </h6>
                            <small class="text-muted">Developer</small>
                          </td>
                          <td>MedicalPro Theme</td>
                          <td>
                            <span class="badge text-bg-primary">High</span>
                          </td>
                          <td>$12.9K</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-primary
                              ">N</span>
                          </td>
                          <td>
                            <h6 class="fw-medium mb-0">Nirav Joshi</h6>
                            <small class="text-muted">Frontend Eng</small>
                          </td>
                          <td>Elite Admin</td>
                          <td>
                            <span class="badge text-bg-danger">Low</span>
                          </td>
                          <td>$10.9K</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-warning
                              ">M</span>
                          </td>
                          <td>
                            <h6 class="fw-medium mb-0">Micheal Doe</h6>
                            <small class="text-muted">Content Writer</small>
                          </td>
                          <td>Helping Hands</td>
                          <td>
                            <span class="badge text-bg-warning">High</span>
                          </td>
                          <td>$12.9K</td>
                        </tr>
                        <tr>
                          <td>
                            <span class="
                                round-40
                                text-white
                                d-flex
                                align-items-center
                                justify-content-center
                                text-center
                                rounded-circle
                                text-bg-danger
                              ">N</span>
                          </td>
                          <td>
                            <h6 class="fw-medium mb-0">Johnathan</h6>
                            <small class="text-muted">Graphic</small>
                          </td>
                          <td>Digital Agency</td>
                          <td>
                            <span class="badge text-bg-info">High</span>
                          </td>
                          <td>$2.6K</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row">
                    <div>
                      <img src="../assets/images/profile/user-1.jpg" alt="user" class="rounded-circle" width="100" />
                    </div>
                    <div class="ps-3">
                      <h4 class="card-title">David McMichael</h4>
                      <p class="card-subtitle">UI/UX Designer</p>
                      <button class="btn btn-success">
                        <i class="ti ti-plus"></i> Follow
                      </button>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col border-end text-center">
                      <h2 class="fs-7">14</h2>
                      <h6 class="mb-0">Photos</h6>
                    </div>
                    <div class="col border-end text-center">
                      <h2 class="fs-7">54</h2>
                      <h6 class="mb-0">Videos</h6>
                    </div>
                    <div class="col text-center">
                      <h2 class="fs-7">145</h2>
                      <h6 class="mb-0">Tasks</h6>
                    </div>
                  </div>
                </div>
                <div>
                  <hr />
                </div>
                <div class="card-body">
                  <p class="text-center aboutscroll">
                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do
                    eiusmod tempor incididunt adipisicing elit, sed do eiusmod
                    tempor incididunLorem ipsum dolor sit ametetur adipisicing
                    elit, sed do eiusmod tempor incididuntt
                  </p>
                  <ul class="
                      list-style-none list-icons
                      d-flex
                      flex-item
                      text-center
                      pt-2
                    ">
                    <li class="col">
                      <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Website">
                        <i class="ti ti-world fs-6 text-dark"></i>
                      </a>
                    </li>
                    <li class="col">
                      <a href="javascript:void(0)" data-bs-toggle="tooltip" title="twitter">
                        <i class="ti ti-brand-twitter fs-6 text-dark"></i>
                      </a>
                    </li>
                    <li class="col">
                      <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Facebook">
                        <i class="ti ti-brand-facebook fs-6 text-dark"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Browser Stats</h4>
                  <table class="table mt-3 table-borderless align-middle">
                    <tbody>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/chrome-logo.png" alt="logo" />
                        </td>
                        <td class="ps-0 w-100">Google Chrome</td>
                        <td class="ps-0 text-end">23%</td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/firefox-logo.png" alt="logo" />
                        </td>
                        <td class="ps-0">Mozila Firefox</td>
                        <td class="ps-0 text-end">15%</td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/safari-logo.png" alt="logo" />
                        </td>
                        <td class="ps-0">Apple Safari</td>
                        <td class="ps-0 text-end">07%</td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/internet-logo.png" alt="logo" />
                        </td>
                        <td class="ps-0">Internet Explorer</td>
                        <td class="ps-0 text-end">09%</td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/opera-logo.png" alt="logo" />
                        </td>
                        <td class="ps-0">Opera mini</td>
                        <td class="ps-0 text-end">23%</td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/edge-logo.png" alt="logo" class="rounded-circle" />
                        </td>
                        <td class="ps-0">Microsoft edge</td>
                        <td class="ps-0 text-end">09%</td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img src="../assets/images/browser/netscape-logo.png" alt="logo" />
                        </td>
                        <td class="ps-0" class="text-truncate">
                          Netscape Navigator
                        </td>
                        <td class="ps-0 text-end">04%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <!-- title -->
                  <div class="d-md-flex align-items-center mb-3">
                    <div>
                      <h4 class="card-title">Place your Order</h4>
                      <p class="card-subtitle">
                        Buy and Sell Crypto as you Like
                      </p>
                    </div>
                    <div class="ms-auto d-flex align-items-center">
                      <div class="dl">
                        <select class="form-select">
                          <option value="0" selected>Bitcoin</option>
                          <option value="1">Ethereum</option>
                          <option value="2">Ripple</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- title -->
                  <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#test4" role="tab" aria-selected="true">Buy</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#test5" role="tab" aria-selected="false">Sell</a>
                    </li>
                  </ul>
                  <div class="tab-content mt-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="test4" role="tabpanel" aria-labelledby="pills-home-tab">
                      <form>
                        <div class="mb-3">
                          <div class="input-group">
                            <span class="input-group-text">
                              <i class="ti ti-coin-bitcoin fs-6"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Amount" />
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group">
                            <span class="input-group-text">$</span>

                            <input type="text" class="form-control" placeholder="Price" />
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="button" class="btn btn-primary">
                            Buy Bitcoin
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="test5" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <form>
                        <div class="mb-3">
                          <div class="input-group">
                            <span class="input-group-text">
                              <i class="ti ti-coin-bitcoin fs-6"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Amount" />
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="input-group">
                            <span class="input-group-text">$</span>

                            <input type="text" class="form-control" placeholder="Price" />
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="button" class="btn btn-success">
                            Sell Bitcoin
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card poll-widget">
                <div class="card-body">
                  <h4 class="card-title">Poll of the week</h4>
                  <p class="card-subtitle mb-3">Here is the latest poll</p>
                  <p class="fw-bold text-muted">
                    What is your mobile app usage daily?
                  </p>
                  <ul class="list-style-none mt-3">
                    <li>
                      <div class="form-check">
                        <input type="radio" id="a" name="customRadio" class="form-check-input" />
                        <label class="form-check-label" for="a">
                          <b class="me-1">A</b> 30 Minutes
                        </label>
                      </div>
                    </li>
                    <li class="mt-3">
                      <div class="form-check">
                        <input type="radio" id="b" name="customRadio" class="form-check-input" checked />
                        <label class="form-check-label text-primary" for="b">
                          <b class="me-1">B</b> More than 30
                          minutes
                        </label>
                      </div>
                    </li>
                    <li class="mt-3">
                      <div class="form-check">
                        <input type="radio" id="c" name="customRadio" class="form-check-input" />
                        <label class="form-check-label" for="c">
                          <b class="me-1">C</b> 1 Hour
                        </label>
                      </div>
                    </li>
                    <li class="mt-3">
                      <div class="form-check">
                        <input type="radio" id="d" name="customRadio" class="form-check-input" />
                        <label class="form-check-label" for="d">
                          <b class="me-1">D</b> More than 1 hour
                        </label>
                      </div>
                    </li>
                  </ul>
                  <button class="btn btn-primary mt-3">Submit Answer</button>
                </div>
              </div>
              <!-- Card -->
              <div class="card">
                <div class="card-body pb-2">
                  <h4 class="card-title">Feeds</h4>
                </div>
                <ul class="feeds ps-0">
                  <div class="feed-item mb-2 py-2 pe-3 ps-4">
                    <div class="border-start border-2 border-info d-md-flex align-items-center">
                      <div class="d-flex align-items-center gap-6 ms-2">
                        <a href="javascript:void(0)" class=" round-40 bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                          <i class="ti ti-bell fs-6"></i>
                        </a>
                        <div class="text-truncate">
                          <span class="text-dark fw-medium">You have 4 pending tasks.</span>
                        </div>
                      </div>
                      <div class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                        <span class="fs-2 text-muted">Just Now</span>
                      </div>
                    </div>
                  </div>
                  <div class="feed-item mb-2 py-2 pe-3 ps-4">
                    <div class="border-start border-2 border-success d-md-flex align-items-center">
                      <div class="d-flex align-items-center gap-6 ms-2">
                        <a href="javascript:void(0)" class=" round-40 bg-success-subtle text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                          <i class="ti ti-database fs-6"></i>
                        </a>
                        <div class="text-truncate">
                          <span class="text-dark fw-medium">Server #1 overloaded</span>
                        </div>
                      </div>
                      <div class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                        <span class="fs-2 text-muted">2 Hr Ago</span>
                      </div>
                    </div>
                  </div>
                  <div class="feed-item mb-2 py-2 pe-3 ps-4">
                    <div class="border-start border-2 border-warning d-md-flex align-items-center">
                      <div class="d-flex align-items-center gap-6 ms-2">
                        <a href="javascript:void(0)" class=" round-40 bg-warning-subtle text-warning rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                          <i class="ti ti-shopping-cart fs-6"></i>
                        </a>
                        <div class="text-truncate">
                          <span class="text-dark fw-medium">New order received.</span>
                        </div>
                      </div>
                      <div class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                        <span class="fs-2 text-muted">31 May</span>
                      </div>
                    </div>
                  </div>
                  <div class="feed-item mb-2 py-2 pe-3 ps-4">
                    <div class="border-start border-2 border-danger d-md-flex align-items-center">
                      <div class="d-flex align-items-center gap-6 ms-2">
                        <a href="javascript:void(0)" class=" round-40 bg-danger-subtle text-danger rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                          <i class="ti ti-users fs-6"></i>
                        </a>
                        <div class="text-truncate">
                          <span class="text-dark fw-medium">New user registered.</span>
                        </div>
                      </div>
                      <div class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                        <span class="fs-2 text-muted">30 May</span>
                      </div>
                    </div>
                  </div>
                  <div class="feed-item mb-2 py-2 pe-3 ps-4">
                    <div class="border-start border-2 border-primary d-md-flex align-items-center">
                      <div class="d-flex align-items-center gap-6 ms-2">
                        <a href="javascript:void(0)" class=" round-40 bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                          <i class="ti ti-alert-circle fs-6"></i>
                        </a>
                        <div class="text-truncate">
                          <span class="text-dark fw-medium">New Version just arrived.</span>
                        </div>
                      </div>
                      <div class="
                          justify-content-end
                          text-truncate
                          ms-5 ms-md-auto
                          ps-4 ps-md-0
                        ">
                        <span class="fs-2 text-muted">27 May</span>
                      </div>
                    </div>
                  </div>
                </ul>
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
</body>

</html>