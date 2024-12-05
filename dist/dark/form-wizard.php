<?php include("header.php");?>
<?php include("sidebar.php");?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-sm-0 card-title">Main Form</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.php">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Form 1 
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>


          <!-- end Custom Design Example -->
          <!--  start Step wizard with validation -->
          <div class="card">
            <div class="card-body wizard-content">
              <h4 class="card-title">User data collection </h4>
              <!-- <p class="card-subtitle mb-3"> You can us the validation like what we did </p> -->
              <form action="#" class="validation-wizard wizard-circle mt-5">
                <!-- Step 1 -->
                <h6>Basic Demographic Information</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wfirstName2"> Full Name : <span class="danger">*</span>
                        </label>
                        <input type="text" class="form-control required" id="wfirstName2" name="fullName" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wlastName2"> Address: <span class="danger">*</span>
                        </label>
                        <input type="text" class="form-control required" id="wlastName2" name="address" />
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
                        <label class="form-label" for="wphoneNumber2">Phone Number : <span class="danger">*</span>
                      </label>
                        <input type="tel" class="form-control" id="wphoneNumber2" name="phone"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wlocation2"> City : <span class="danger">*</span>
                        </label>
                        <select class="form-select required" id="wlocation2" name="city">
                          <option value="">Select Address</option>
                          <option value="Kathmandu">Kathmandu</option>
                          <option value="Lalitpur">Lalitpur</option>
                          <option value="Bhaktapur">Bhaktapur</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wphoneNumber2">Ward Number : <span class="danger">*</span> </label>
                        <input type="tel" class="form-control" id="wphoneNumber2" name="wardNumber"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wdate2">Date of Birth :<span class="danger">*</span></label>
                        <input type="date" class="form-control" id="wdate2" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="wlocation2"> Occupation : <span class="danger">*</span>
                        </label>
                        <select class="form-select required" id="wlocation2" name="occupation">
                          <option value="" >Select Occupation</option>
                          <option value="Employed">Employed</option>
                          <option value="Self-Employed">Self-Employed</option>
                          <option value="Student">Student</option>
                          <option value="Home-Maker">Home-Maker</option>
                          <option value="Unemployed">Unemployed</option>
                          <option value="Retired">Retired</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                          <label for="customRadio16" class="form-label">Gender :<span class="danger">*</span></label>
                          <div class="c-inputs-stacked">
                            <div class="form-check">
                              <input type="radio" id="customRadio16" name="gender" class="form-check-input" />
                              <label class="form-check-label" for="customRadio16">Male</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="gender" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Female</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="gender" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Non-Binary/Other</label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                          <label for="customRadio16" class="form-label">Marital Status : <span class="danger">*</span></label>
                          <div class="c-inputs-stacked">
                            <div class="form-check">
                              <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                              <label class="form-check-label" for="customRadio16">Single</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Married</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Divorced/Widowed</label>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-6">
                      <div class="mb-3">
                          <label for="customRadio16" class="form-label">Occupation :</label>
                          <div class="c-inputs-stacked">
                            <div class="form-check">
                              <input type="radio" id="customRadio16" name="occupation" class="form-check-input" />
                              <label class="form-check-label" for="customRadio16">Employed</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="occupation" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Self-Employed</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="occupation" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Student</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="occupation" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Home Maker</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="occupation" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Unemployed</label>
                            </div>
                            <div class="form-check">
                              <input type="radio" id="customRadio17" name="occupation" class="form-check-input" />
                              <label class="form-check-label" for="customRadio17">Retired</label>
                            </div>
                          </div>
                        </div>
                    </div> -->
                   

                   
                  </div>
                </section>
                <!-- Step 2 -->
                <h6>Medical History</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="flexCheckDefault" class="form-label">Do you have any of the following?</label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="checkbox" id="diabetesCheck" class="form-check-input" />
                            <label class="form-check-label" for="diabetesCheck">Diabetes</label>
                            <textarea name="diabetesDescription" id="diabetesDescription" rows="1" class="form-control"></textarea>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="hypertensionCheck" class="form-check-input" />
                            <label class="form-check-label" for="hypertensionCheck">Hypertension</label>
                            <textarea name="hypertensionDescription" id="hypertensionDescription" rows="1" class="form-control"></textarea>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="asthmaCheck" class="form-check-input" />
                            <label class="form-check-label" for="asthmaCheck">Asthma</label>
                            <textarea name="asthmaDescription" id="asthmaDescription" rows="1" class="form-control"></textarea>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="arthritisCheck" class="form-check-input" />
                            <label class="form-check-label" for="arthritisCheck">Arthritis</label>
                            <textarea name="arthritisDescription" id="arthritisDescription" rows="1" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="flexCheckDefault" class="form-label">Have you ever been diagnosed with?</label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="checkbox" id="tuberculosisCheck" class="form-check-input" />
                            <label class="form-check-label" for="tuberculosisCheck">Tuberculosis</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="hepatitisbcCheck" class="form-check-input" />
                            <label class="form-check-label" for="hepatitisbcCheck">Hepatitis B/C</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="cancerCheck" class="form-check-input" />
                            <label class="form-check-label" for="cancerCheck">Cancer</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="mentalCheck" class="form-check-input" />
                            <label class="form-check-label" for="mentalCheck">Mental Health Disorder (e.g., depression, anxiety)</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="otherCheck" class="form-check-input" />
                            <label class="form-check-label" for="otherCheck">Other (specify):</label>
                            <textarea name="otherDescription" id="otherDescription" rows="4" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="flexCheckDefault" class="form-label">Have you had any major surgeries or hospitalizations?</label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="checkbox" id="surgeryCheck" class="form-check-input" />
                            <label class="form-check-label" for="surgeryCheck">Yes (specify):</label>
                            <textarea name="surgeryDescription" id="surgeryDescription" rows="3" class="form-control"></textarea>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="noSurgeryCheck" class="form-check-input" />
                            <label class="form-check-label" for="noSurgeryCheck">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="flexCheckDefault" class="form-label">Do you have any known allergies?</label>
                        <div class="c-inputs-stacked">
                        <div class="form-check">
                            <input type="checkbox" id="noSurgeryCheck" class="form-check-input" />
                            <label class="form-check-label" for="noSurgeryCheck">Medications</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="noSurgeryCheck" class="form-check-input" />
                            <label class="form-check-label" for="noSurgeryCheck">Food</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="noSurgeryCheck" class="form-check-input" />
                            <label class="form-check-label" for="noSurgeryCheck">Environment(eg. dust,pollen)</label>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" id="surgeryCheck" class="form-check-input" />
                            <label class="form-check-label" for="surgeryCheck">Other(specify):</label>
                            <textarea name="surgeryDescription" id="surgeryDescription" rows="3" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
                <!-- Step 3 -->
                <h6>Lifestyle and Habits</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">How often do you exercise? </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Never</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">1-2 times per week</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">3-5 times per week</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Daily</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">Do you smoke or use tobacco? </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Never</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Occasionally</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Regularly</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">How often do you consume alcohol? </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Never</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Occasionally</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Regularly</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">How many hours of sleep do you get daily? </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Less then 4 hours</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">4-6 hours</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">6-8 hours</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">More than 8 hours</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label" for="shortDescription3">Additional Remarks for Lifestyle Habits :</label>
                        <textarea name="remarksLifestyle" id="shortDescription3" rows="6" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                </section>
                <!-- Step 4 -->
                <h6>Family History and Preventive Care</h6>
                <section>
                  <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label for="customRadio16" class="form-label">Do any family members have the following conditions? </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Diabetes</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Hypertension</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Heart disease</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Cancer</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Mental Health disorders</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Others:</label>
                          </div>
                        </div>
                      </div>
                    </div>      
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">Do you visit s doctor for regular checkups? </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Annually</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Only when sick</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Rarely</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="customRadio16" class="form-label">Vaccination History: </label>
                        <div class="c-inputs-stacked">
                          <div class="form-check">
                            <input type="radio" id="customRadio16" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio16">Hepatitis B</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">COVID-19</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Tetanus</label>
                          </div>
                          <div class="form-check">
                            <input type="radio" id="customRadio17" name="customRadio" class="form-check-input" />
                            <label class="form-check-label" for="customRadio17">Other:</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Attach a Document</label>
                  <input class="form-control" type="file" id="formFileMultiple" multiple />
                </div>
                <div class="mb-3">
                  <label for="formFileMultiple" class="form-label">Attach a Document</label>
                  <input class="form-control" type="file" id="formFileMultiple" multiple />
                </div>
                    </div>
                  </div>
                </section>
              </form>
            </div>
          </div>
          <!--  end Step wizard with validation -->
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
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
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
    </div> -->


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
  <script src="../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
  <script src="../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../assets/js/forms/form-wizard.js"></script>
</body>

</html>