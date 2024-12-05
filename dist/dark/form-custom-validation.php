<?php
include("header.php");
include("sidebar.php");?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-sm-0 card-title">Custom-Validation</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.php">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Custom-Validation
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="border-bottom title-part-padding">
              <h4 class="card-title mb-0">Validation Form</h4>
            </div>
            <div class="card-body">
              <form novalidate>
                <div class="mb-3 form-group">
                  <label class="form-label">Basic Text Input
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" />
                  </div>
                  <div class="form-control-feedback">
                    <small>Add <code>required</code> attribute to field for
                      required validation.</small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Email Field <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Password Input Field
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Repeat Password Input Field
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="password" name="password2" data-validation-match-match="password" class="form-control" required />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">File Input Field
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="file" name="file" class="form-control" required />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Input with Icon <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required" />
                      <div class="input-group-text">
                        <span>
                          <i class="ti ti-currency-dollar"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Maximum Character Length
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required" maxlength="10" />
                  </div>
                  <div class="form-control-feedback">
                    <small>Add <code>maxlength='10'</code> attribute for maximum
                      number of characters to accept.
                    </small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Minimum Character Length
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6" />
                  </div>
                  <div class="form-control-feedback">
                    <small>Add <code>minlength="6"</code> attribute for minimum
                      number of characters to accept.</small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Only Numbers <span class="text-danger">*</span>
                  </label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="ti ti-currency-dollar fs-5"></i>
                    </span>
                    <input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required" />
                    <span class="input-group-text">0.00</span>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Maximum Number <span class="text-danger">*</span>
                  </label>
                  <input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required" max="25" />
                  <div class="form-control-feedback">
                    <small>
                      <i>Must be lower than 25</i>
                    </small> -
                    <small>Add <code>max</code> attribute for maximum number to
                      accept. Also use
                      <code>data-validation-max-message</code> attribute for
                      max failure message
                    </small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Minimum Number <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" name="minNum" class="form-control" required data-validation-required-message="This field is required" min="10" />
                  </div>
                  <div class="form-control-feedback">
                    <small>
                      <i>Must be higher than 10</i>
                    </small> -
                    <small>Add <code>min</code> attribute for minimum number to
                      accept. Also use
                      <code>data-validation-min-message</code> attribute for
                      min failure message
                    </small>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Text Input Range
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Input with Button
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" required />

                      <button class="btn btn-primary" type="button">
                        Go!
                      </button>

                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">No Characters, Only Numbers
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Pattern <span class="text-danger">*</span>
                    <small>
                      <i>Must start with 'a' and end with 'z'</i>
                    </small>
                  </label>
                  <div class="controls">
                    <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control" required />
                    <div class="form-control-feedback">
                      <small>Add <code>pattern</code> attribute to set input
                        pattern. Also use
                        <code>data-validation-pattern-message</code> attribute
                        for pattern failure message
                      </small>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Enter URL <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's" />
                    <div class="form-control-feedback">
                      <small>Add
                        <code>data-validation-regex-regex</code> attribute for
                        regular expression. Also use
                        <code>data-validation-regex-message</code> attribute
                        for regex failure message
                      </small>
                    </div>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Enter Email Address
                    <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Enter Date <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <input type="text" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email" />
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Basic Select <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <select name="select" id="select" required class="form-select form-control">
                      <option value="">Select Your City</option>
                      <option value="1">India</option>
                      <option value="2">USA</option>
                      <option value="3">UK</option>
                      <option value="4">Canada</option>
                      <option value="5">Dubai</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 form-group">
                  <label class="form-label">Textarea <span class="text-danger">*</span>
                  </label>
                  <div class="controls">
                    <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Checkbox <span class="text-danger">*</span>
                      </label>
                      <div class="controls">
                        <div class="form-check">
                          <input type="checkbox" required value="single" class="form-check-input" id="customCheck1" />
                          <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Checkbox Group
                        <span class="text-danger">*</span>
                      </label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="x" name="styled_checkbox" required class="form-check-input" id="customCheck2" />
                            <label class="form-check-label" for="customCheck2">I am unchecked</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="y" name="styled_checkbox" class="form-check-input" id="customCheck3" />
                            <label class="form-check-label" for="customCheck3">I am unchecked too</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Select Max 2 Checkbox<span class="text-danger">*</span>
                      </label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" name="styled_max_checkbox" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required class="form-check-input" id="customCheck4" />
                            <label class="form-check-label" for="customCheck4">I am unchecked checkbox</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" name="styled_max_checkbox" class="form-check-input" id="customCheck5" />
                            <label class="form-check-label" for="customCheck5">I am unchecked too</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" name="styled_max_checkbox" class="form-check-input" id="customCheck6" />
                            <label class="form-check-label" for="customCheck6">You can check me</label>
                          </div>
                        </fieldset>
                      </div>
                      <small>Select any 2 options</small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Minimum 2 Checkbox selection<span class="text-danger">*</span>
                      </label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required class="form-check-input" id="customCheck7" />
                            <label class="form-check-label" for="customCheck7">I am unchecked checkbox</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="2" name="styled_min_checkbox" class="form-check-input" id="customCheck8" />
                            <label class="form-check-label" for="customCheck8">I am unchecked checkbox too</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="checkbox" value="3" name="styled_min_checkbox" class="form-check-input" id="customCheck9" />
                            <label class="form-check-label" for="customCheck9">You can check me</label>
                          </div>
                        </fieldset>
                      </div>
                      <small>Select any 2 options</small>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Radio Buttons
                        <span class="text-danger">*</span>
                      </label>
                      <fieldset class="controls">
                        <div class="form-check py-2">
                          <input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="form-check-input" />
                          <label class="form-check-label" for="styled_radio1">Check me</label>
                        </div>
                      </fieldset>
                      <fieldset>
                        <div class="form-check py-2">
                          <input type="radio" value="2" name="styled_radio" id="styled_radio2" class="form-check-input" />
                          <label class="form-check-label" for="styled_radio2">or me</label>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 form-group">
                      <label class="form-label">Inline Radio Buttons
                        <span class="text-danger">*</span>
                      </label>
                      <div class="controls">
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="radio" value="Yes" name="styled_inline_radio" required id="styled_radio_inline1" class="form-check-input" />
                            <label class="form-check-label" for="styled_radio_inline1">Check me</label>
                          </div>
                        </fieldset>
                        <fieldset>
                          <div class="form-check py-2">
                            <input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2" class="form-check-input" />
                            <label class="form-check-label" for="styled_radio_inline2">or me</label>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-wrap gap-6">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                  <button type="reset" class="btn bg-danger-subtle text-danger">
                    Cancel
                  </button>
                </div>
              </form>
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
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.dark.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/js/extra-libs/jqbootstrapvalidation/validation.js"></script>
  <script src="../assets/js/forms/custom-validation-init.js"></script>
</body>

</html>