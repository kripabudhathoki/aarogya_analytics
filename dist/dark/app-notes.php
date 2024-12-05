<?php
include("header.php");
include("sidebar.php");
?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-sm-0 card-title">Notes</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.php">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Notes
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <ul class="nav nav-pills p-3 mb-3 rounded align-items-center card flex-row">
            <li class="nav-item">
              <a href="javascript:void(0)" class="
                      nav-link
                     gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      active
                      px-3 px-md-3
                      me-0 me-md-2 fs-11
                    " id="all-category">
                <i class="ti ti-list fill-white"></i>
                <span class="d-none d-md-block fw-medium">All Notes</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                      me-0 me-md-2 fs-11
                    " id="note-business">
                <i class="ti ti-briefcase fill-white"></i>
                <span class="d-none d-md-block fw-medium">Business</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                      me-0 me-md-2 fs-11
                    " id="note-social">
                <i class="ti ti-share fill-white"></i>
                <span class="d-none d-md-block fw-medium">Social</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="
                      nav-link
                    gap-6
                      note-link
                      d-flex
                      align-items-center
                      justify-content-center
                      px-3 px-md-3
                      me-0 me-md-2 fs-11
                    " id="note-important">
                <i class="ti ti-star fill-white"></i>
                <span class="d-none d-md-block fw-medium">Important</span>
              </a>
            </li>
            <li class="nav-item ms-auto">
              <a href="javascript:void(0)" class="btn btn-primary d-flex align-items-center px-3 gap-6" id="add-notes">
                <i class="ti ti-file fs-4"></i>
                <span class="d-none d-md-block fw-medium fs-3">Add Notes</span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="note-full-container" class="note-has-grid row">
              <div class="col-md-4 single-note-item all-category">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie"> Book a
                    Ticket for Movie </h6>
                  <p class="note-date fs-2">11 March 2009</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-important">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Go for lunch"> Go for lunch </h6>
                  <p class="note-date fs-2">01 April 2002</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-social">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Meeting with Mr.Jojo"> Meeting with
                    Mr.Jojo </h6>
                  <p class="note-date fs-2">19 October 2021</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-business">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Give Review for design"> Give Review
                    for design </h6>
                  <p class="note-date fs-2">02 January 2000</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-social">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Nightout with friends"> Nightout with
                    friends </h6>
                  <p class="note-date fs-2">01 August 1999</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-important">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Launch new template"> Launch new
                    template </h6>
                  <p class="note-date fs-2">21 January 2015</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-social">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Change a Design"> Change a Design
                  </h6>
                  <p class="note-date fs-2">25 December 2016</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-business">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Give review for foods"> Give review
                    for foods </h6>
                  <p class="note-date fs-2">18 December 2021</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 single-note-item all-category note-important">
                <div class="card card-body">
                  <span class="side-stick"></span>
                  <h6 class="note-title text-truncate w-75 mb-0" data-noteHeading="Give salary to employee"> Give salary
                    to employee </h6>
                  <p class="note-date fs-2">15 Fabruary 2021</p>
                  <div class="note-content">
                    <p class="note-inner-content" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis."> Blandit
                      tempus porttitor aasfs. Integer posuere erat a ante venenatis. </p>
                  </div>
                  <div class="d-flex align-items-center">
                    <a href="javascript:void(0)" class="link me-1">
                      <i class="ti ti-star fs-4 favourite-note"></i>
                    </a>
                    <a href="javascript:void(0)" class="link text-danger ms-2">
                      <i class="ti ti-trash fs-4 remove-note"></i>
                    </a>
                    <div class="ms-auto">
                      <div class="category-selector btn-group">
                        <a class="nav-link category-dropdown label-group p-0" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="true">
                          <div class="category">
                            <div class="category-business"></div>
                            <div class="category-social"></div>
                            <div class="category-important"></div>
                            <span class="more-options text-dark">
                              <i class="ti ti-dots-vertical fs-5"></i>
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right category-menu">
                          <a class="
                                  note-business
                                  badge-group-item badge-business
                                  dropdown-item
                                  position-relative
                                  category-business
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);">Business</a>
                          <a class="
                                  note-social
                                  badge-group-item badge-social
                                  dropdown-item
                                  position-relative
                                  category-social
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Social</a>
                          <a class="
                                  note-important
                                  badge-group-item badge-important
                                  dropdown-item
                                  position-relative
                                  category-important
                                  d-flex
                                  align-items-center
                                " href="javascript:void(0);"> Important</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal Add notes -->
          <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content border-0">
                <div class="modal-header bg-primary rounded-top">
                  <h6 class="modal-title text-white">Add Notes</h6>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="notes-box">
                    <div class="notes-content">
                      <form action="javascript:void(0);" id="addnotesmodalTitle">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="note-title">
                              <label class="form-label">Note Title</label>
                              <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="note-description">
                              <label class="form-label">Note Description</label>
                              <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="d-flex gap-6">
                    <button class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Discard</button>
                    <button id="btn-n-add" class="btn btn-primary" disabled>Add</button>
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
  <script src="../assets/js/vendor.min.js"></script>
  <?php
  include("footer.php")?>