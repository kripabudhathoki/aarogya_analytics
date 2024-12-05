<?php
include("header.php");
include("sidebar.php");?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-sm-0 card-title">Invoice</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.html">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Invoice
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="card overflow-hidden invoice-application">
            <div class="d-flex align-items-center justify-content-between gap-6 m-3 d-lg-none">
              <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                <i class="ti ti-menu-2 fs-5"></i>
              </button>
              <form class="position-relative w-100">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
            </div>
            <div class="d-flex">
              <div class="w-25 d-none d-lg-block border-end user-chat-box">
                <div class="p-3 border-bottom">
                  <form class="position-relative">
                    <input type="search" class="form-control search-invoice ps-5" id="text-srh" placeholder="Search Invoice" />
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                  </form>
                </div>
                <div class="app-invoice">
                  <ul class="overflow-auto invoice-users" data-simplebar>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light-subtle" id="invoice-123" data-invoice-id="123">
                        <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">James Anderson</h6>

                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #123</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-124" data-invoice-id="124">
                        <div class="btn btn-danger round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Bianca Doe</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#124</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-125" data-invoice-id="125">
                        <div class="btn btn-info round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Angelina Rhodes</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#125</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-126" data-invoice-id="126">
                        <div class="btn btn-warning round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Samuel Smith</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#126</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-127" data-invoice-id="127">
                        <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Gabriel Jobs</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#127</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="w-75 w-xs-100 chat-container">
                <div class="invoice-inner-part h-100">
                  <div class="invoiceing-box">
                    <div class="invoice-header d-flex align-items-center border-bottom p-3">
                      <h4 class=" text-uppercase mb-0">Invoice</h4>
                      <div class="ms-auto">
                        <h4 class="invoice-number"></h4>
                      </div>
                    </div>
                    <div class="p-3" id="custom-invoice">
                      <div class="invoice-123" id="printableArea">
                        <div class="row pt-3">
                          <div class="col-md-12">
                            <div>
                              <address>
                                <h6>&nbsp;From,</h6>
                                <h6 class="fw-bold">&nbsp;Steve Jobs</h6>
                                <p class="ms-1">
                                  1108, Clair Street,
                                  <br />Massachusetts,
                                  <br />Woods Hole - 02543
                                </p>
                              </address>
                            </div>
                            <div class="text-end">
                              <address>
                                <h6>To,</h6>
                                <h6 class="fw-bold invoice-customer">
                                  James Anderson,
                                </h6>
                                <p class="ms-4">
                                  455, Shobe Lane,
                                  <br />Colorado,
                                  <br />Fort
                                  Collins - 80524
                                </p>
                                <p class="mt-4 mb-1">
                                  <span>Invoice Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  23rd Jan 2021
                                </p>
                                <p>
                                  <span>Due Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  25th Jan 2021
                                </p>
                              </address>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="table-responsive mt-5">
                              <table class="table table-hover">
                                <thead>
                                  <!-- start row -->
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-end">Total</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">$24</td>
                                    <td class="text-end">$48</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td>Air Conditioner</td>
                                    <td class="text-end">5</td>
                                    <td class="text-end">$500</td>
                                    <td class="text-end">$2500</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">3</td>
                                    <td>RC Cars</td>
                                    <td class="text-end">30</td>
                                    <td class="text-end">$600</td>
                                    <td class="text-end">$18000</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">4</td>
                                    <td>Down Coat</td>
                                    <td class="text-end">62</td>
                                    <td class="text-end">$5</td>
                                    <td class="text-end">$310</td>
                                  </tr>
                                  <!-- end row -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                              <p>Sub - Total amount: $20,858</p>
                              <p>vat (10%) : $2,085</p>
                              <hr />
                              <h3>
                                <b>Total :</b> $22,943
                              </h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="text-end">
                              <button class="btn bg-danger-subtle text-danger" type="submit">
                                Proceed to payment
                              </button>
                              <button class="btn btn-primary btn-default print-page ms-6" type="button">
                                <span>
                                  <i class="ti ti-printer fs-5"></i>
                                  Print
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- 2 -->
                      <div class="invoice-124" id="printableArea">
                        <div class="row pt-3">
                          <div class="col-md-12">
                            <div>
                              <address>
                                <h6>&nbsp;From,</h6>
                                <h6 class="fw-bold">&nbsp;Steve Jobs</h6>
                                <p class="ms-1">
                                  1108, Clair Street,
                                  <br />Massachusetts,
                                  <br />Woods Hole - 02543
                                </p>
                              </address>
                            </div>
                            <div class="text-end">
                              <address>
                                <h6>To,</h6>
                                <h6 class="fw-bold invoice-customer">
                                  Bianca Doe,
                                </h6>
                                <p class="ms-4">
                                  455, Shobe Lane,
                                  <br />Colorado,
                                  <br />Fort
                                  Collins - 80524
                                </p>
                                <p class="mt-4 mb-1">
                                  <span>Invoice Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  23rd Jan 2021
                                </p>
                                <p>
                                  <span>Due Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  25th Jan 2021
                                </p>
                              </address>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="table-responsive mt-5">
                              <table class="table table-hover">
                                <thead>
                                  <!-- start row -->
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-end">Total</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">$24</td>
                                    <td class="text-end">$48</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td>Air Conditioner</td>
                                    <td class="text-end">5</td>
                                    <td class="text-end">$500</td>
                                    <td class="text-end">$2500</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">3</td>
                                    <td>RC Cars</td>
                                    <td class="text-end">30</td>
                                    <td class="text-end">$600</td>
                                    <td class="text-end">$18000</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">4</td>
                                    <td>Down Coat</td>
                                    <td class="text-end">62</td>
                                    <td class="text-end">$5</td>
                                    <td class="text-end">$310</td>
                                  </tr>
                                  <!-- end row -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                              <p>Sub - Total amount: $20,858</p>
                              <p>vat (10%) : $2,085</p>
                              <hr />
                              <h3>
                                <b>Total :</b> $22,943
                              </h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="text-end">
                              <button class="btn bg-danger-subtle text-danger" type="submit">
                                Proceed to payment
                              </button>
                              <button class="btn btn-primary btn-default print-page ms-6" type="button">
                                <span>
                                  <i class="ti ti-printer fs-5"></i>
                                  Print
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- 3 -->
                      <div class="invoice-125" id="printableArea">
                        <div class="row pt-3">
                          <div class="col-md-12">
                            <div>
                              <address>
                                <h6>&nbsp;From,</h6>
                                <h6 class="fw-bold">&nbsp;Steve Jobs</h6>
                                <p class="ms-1">
                                  1108, Clair Street,
                                  <br />Massachusetts,
                                  <br />Woods Hole - 02543
                                </p>
                              </address>
                            </div>
                            <div class="text-end">
                              <address>
                                <h6>To,</h6>
                                <h6 class="fw-bold invoice-customer">
                                  Angelina Rhodes,
                                </h6>
                                <p class="ms-4">
                                  455, Shobe Lane,
                                  <br />Colorado,
                                  <br />Fort
                                  Collins - 80524
                                </p>
                                <p class="mt-4 mb-1">
                                  <span>Invoice Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  23rd Jan 2021
                                </p>
                                <p>
                                  <span>Due Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  25th Jan 2021
                                </p>
                              </address>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="table-responsive mt-5">
                              <table class="table table-hover">
                                <thead>
                                  <!-- start row -->
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-end">Total</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">$24</td>
                                    <td class="text-end">$48</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td>Air Conditioner</td>
                                    <td class="text-end">5</td>
                                    <td class="text-end">$500</td>
                                    <td class="text-end">$2500</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">3</td>
                                    <td>RC Cars</td>
                                    <td class="text-end">30</td>
                                    <td class="text-end">$600</td>
                                    <td class="text-end">$18000</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">4</td>
                                    <td>Down Coat</td>
                                    <td class="text-end">62</td>
                                    <td class="text-end">$5</td>
                                    <td class="text-end">$310</td>
                                  </tr>
                                  <!-- end row -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                              <p>Sub - Total amount: $20,858</p>
                              <p>vat (10%) : $2,085</p>
                              <hr />
                              <h3>
                                <b>Total :</b> $22,943
                              </h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="text-end">
                              <button class="btn bg-danger-subtle text-danger" type="submit">
                                Proceed to payment
                              </button>
                              <button class="btn btn-primary btn-default print-page ms-6" type="button">
                                <span>
                                  <i class="ti ti-printer fs-5"></i>
                                  Print
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- 4 -->
                      <div class="invoice-126" id="printableArea">
                        <div class="row pt-3">
                          <div class="col-md-12">
                            <div>
                              <address>
                                <h6>&nbsp;From,</h6>
                                <h6 class="fw-bold">&nbsp;Steve Jobs</h6>
                                <p class="ms-1">
                                  1108, Clair Street,
                                  <br />Massachusetts,
                                  <br />Woods Hole - 02543
                                </p>
                              </address>
                            </div>
                            <div class="text-end">
                              <address>
                                <h6>To,</h6>
                                <h6 class="fw-bold invoice-customer">
                                  Samuel Smith,
                                </h6>
                                <p class="ms-4">
                                  455, Shobe Lane,
                                  <br />Colorado,
                                  <br />Fort
                                  Collins - 80524
                                </p>
                                <p class="mt-4 mb-1">
                                  <span>Invoice Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  23rd Jan 2021
                                </p>
                                <p>
                                  <span>Due Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  25th Jan 2021
                                </p>
                              </address>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="table-responsive mt-5">
                              <table class="table table-hover">
                                <thead>
                                  <!-- start row -->
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-end">Total</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">$24</td>
                                    <td class="text-end">$48</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td>Air Conditioner</td>
                                    <td class="text-end">5</td>
                                    <td class="text-end">$500</td>
                                    <td class="text-end">$2500</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">3</td>
                                    <td>RC Cars</td>
                                    <td class="text-end">30</td>
                                    <td class="text-end">$600</td>
                                    <td class="text-end">$18000</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">4</td>
                                    <td>Down Coat</td>
                                    <td class="text-end">62</td>
                                    <td class="text-end">$5</td>
                                    <td class="text-end">$310</td>
                                  </tr>
                                  <!-- end row -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                              <p>Sub - Total amount: $20,858</p>
                              <p>vat (10%) : $2,085</p>
                              <hr />
                              <h3>
                                <b>Total :</b> $22,943
                              </h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="text-end">
                              <button class="btn bg-danger-subtle text-danger" type="submit">
                                Proceed to payment
                              </button>
                              <button class="btn btn-primary btn-default print-page ms-6" type="button">
                                <span>
                                  <i class="ti ti-printer fs-5"></i>
                                  Print
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- 5 -->
                      <div class="invoice-127" id="printableArea">
                        <div class="row pt-3">
                          <div class="col-md-12">
                            <div>
                              <address>
                                <h6>&nbsp;From,</h6>
                                <h6 class="fw-bold">&nbsp;Steve Jobs</h6>
                                <p class="ms-1">
                                  1108, Clair Street,
                                  <br />Massachusetts,
                                  <br />Woods Hole - 02543
                                </p>
                              </address>
                            </div>
                            <div class="text-end">
                              <address>
                                <h6>To,</h6>
                                <h6 class="fw-bold invoice-customer">
                                  Gabriel Jobs,
                                </h6>
                                <p class="ms-4">
                                  455, Shobe Lane,
                                  <br />Colorado,
                                  <br />Fort
                                  Collins - 80524
                                </p>
                                <p class="mt-4 mb-1">
                                  <span>Invoice Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  23rd Jan 2021
                                </p>
                                <p>
                                  <span>Due Date :</span>
                                  <i class="ti ti-calendar"></i>
                                  25th Jan 2021
                                </p>
                              </address>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="table-responsive mt-5">
                              <table class="table table-hover">
                                <thead>
                                  <!-- start row -->
                                  <tr>
                                    <th class="text-center">#</th>
                                    <th>Description</th>
                                    <th class="text-end">Quantity</th>
                                    <th class="text-end">Unit Cost</th>
                                    <th class="text-end">Total</th>
                                  </tr>
                                  <!-- end row -->
                                </thead>
                                <tbody>
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td>Milk Powder</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">$24</td>
                                    <td class="text-end">$48</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td>Air Conditioner</td>
                                    <td class="text-end">5</td>
                                    <td class="text-end">$500</td>
                                    <td class="text-end">$2500</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">3</td>
                                    <td>RC Cars</td>
                                    <td class="text-end">30</td>
                                    <td class="text-end">$600</td>
                                    <td class="text-end">$18000</td>
                                  </tr>
                                  <!-- end row -->
                                  <!-- start row -->
                                  <tr>
                                    <td class="text-center">4</td>
                                    <td>Down Coat</td>
                                    <td class="text-end">62</td>
                                    <td class="text-end">$5</td>
                                    <td class="text-end">$310</td>
                                  </tr>
                                  <!-- end row -->
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="pull-right mt-4 text-end">
                              <p>Sub - Total amount: $20,858</p>
                              <p>vat (10%) : $2,085</p>
                              <hr />
                              <h3>
                                <b>Total :</b> $22,943
                              </h3>
                            </div>
                            <div class="clearfix"></div>
                            <hr />
                            <div class="text-end">
                              <button class="btn bg-danger-subtle text-danger" type="submit">
                                Proceed to payment
                              </button>
                              <button class="btn btn-primary btn-default print-page ms-6" type="button">
                                <span>
                                  <i class="ti ti-printer fs-5"></i>
                                  Print
                                </span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    Invoice
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="p-3 border-bottom">
                  <form class="position-relative">
                    <input type="search" class="form-control search-invoice ps-5" id="text-srh" placeholder="Search Invoice">
                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                  </form>
                </div>
                <div class="app-invoice overflow-auto">
                  <ul class="invoice-users">
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light" id="invoice-123" data-invoice-id="123">
                        <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">James Anderson</h6>

                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #123</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-124" data-invoice-id="124">
                        <div class="btn btn-danger round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Bianca Doe</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#124</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-125" data-invoice-id="125">
                        <div class="btn btn-info round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Angelina Rhodes</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#125</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-126" data-invoice-id="126">
                        <div class="btn btn-warning round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Samuel Smith</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#126</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user" id="invoice-127" data-invoice-id="127">
                        <div class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
                          <i class="ti ti-user fs-6"></i>
                        </div>
                        <div class="ms-3 d-inline-block w-75">
                          <h6 class="mb-0 invoice-customer">Gabriel Jobs</h6>
                          <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">#127</span>
                          <span class="fs-3 invoice-date text-nowrap text-body-color d-block">9 Fab 2020</span>
                        </div>
                      </a>
                    </li>
                  </ul>
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
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.dark.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
  <script src="../assets/js/apps/invoice.js"></script>
  <script src="../assets/js/apps/jquery.PrintArea.js"></script>
</body>

</html>