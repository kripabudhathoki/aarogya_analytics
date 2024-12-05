<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="./dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./dist/assets/css/styles.css" />

  <title>MatDash Bootstrap Admin</title>
</head>
<?php
include("sidebar.php")?>
<!--  start Step wizard with validation -->
<div class="card" style="width:90% ; margin: 5% 0 0 5%;">
            <div class="card-body wizard-content">
              <h4 class="card-title">User Data Collection Form</h4>
              <p class="card-subtitle mb-3"> You can us the validation like what we did </p>
              <form action="#" class="validation-wizard wizard-circle mt-5">
                <!-- Step 1 -->
                <h6>Step 1</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wfirstName2"> First Name : <span class="danger">*</span>
                        </label>
                        <input type="text" class="form-control required" id="wfirstName2" name="firstName" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wlastName2"> Last Name : <span class="danger">*</span>
                        </label>
                        <input type="text" class="form-control required" id="wlastName2" name="lastName" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wemailAddress2"> Email Address : <span class="danger">*</span>
                        </label>
                        <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wphoneNumber2">Phone Number :</label>
                        <input type="tel" class="form-control" id="wphoneNumber2" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wlocation2"> Select City : <span class="danger">*</span>
                        </label>
                        <select class="form-select required" id="wlocation2" name="location">
                          <option value="">Select City</option>
                          <option value="India">India</option>
                          <option value="USA">USA</option>
                          <option value="Dubai">Dubai</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wdate2">Date of Birth :</label>
                        <input type="date" class="form-control" id="wdate2" />
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Step 2 -->
                <h6>Step 2</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="jobTitle3">Company Name :</label>
                        <input type="text" class="form-control required" id="jobTitle3" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="webUrl3">Company URL :</label>
                        <input type="url" class="form-control required" id="webUrl3" name="webUrl3" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label" for="shortDescription3">Short Description :</label>
                        <textarea name="shortDescription" id="shortDescription3" rows="6" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Step 3 -->
                <h6>Step 3</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wint1">Interview For :</label>
                        <input type="text" class="form-control required" id="wint1" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="wintType1">Interview Type :</label>
                        <select class="form-select required" id="wintType1" data-placeholder="Type to search cities" name="wintType1">
                          <option value="Banquet">Normal</option>
                          <option value="Fund Raiser">Difficult</option>
                          <option value="Dinner Party">Hard</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="wLocation1">Location :</label>
                        <select class="form-select required" id="wLocation1" name="wlocation">
                          <option value="">Select City</option>
                          <option value="India">India</option>
                          <option value="USA">USA</option>
                          <option value="Dubai">Dubai</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wjobTitle2">Interview Date :</label>
                        <input type="date" class="form-control required" id="wjobTitle2" />
                      </div>
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">Requirements :</label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Employee</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Contract</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Step 4 -->
                <h6>Step 4</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="behName2">Behaviour :</label>
                        <input type="text" class="form-control required" id="behName2" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="participants3">Confidance</label>
                        <input type="text" class="form-control required" id="participants3" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="participants4">Result</label>
                        <select class="form-select required" id="participants4" name="location">
                          <option value="">Select Result</option>
                          <option value="Selected">Selected</option>
                          <option value="Rejected">Rejected</option>
                          <option value="Call Second-time"> Call Second-time </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="decisions3">Comments</label>
                        <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="customRadio11" class="form-label">Rate Interviwer :</label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio11" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio11">1 star</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio12" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio12">2 star</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio13" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio13">3 star</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio14" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio14">4 star</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio15" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio15">5 star</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </form>
            </div>
          </div>
          <!--  end Step wizard with validation -->
</div>
          <div class="dark-transparent sidebartoggler"></div>
  <script src="./dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="./dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="./dist/assets/js/theme/app.dark.init.js"></script>
  <script src="./dist/assets/js/theme/theme.js"></script>
  <script src="./dist/assets/js/theme/app.min.js"></script>
  <script src="./dist/assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="./dist/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="./dist/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="./dist/assets/js/forms/form-wizard.js"></script>
</body>

</html>