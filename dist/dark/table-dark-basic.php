<?php
include("header.php");
include("sidebar.php");?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card card-body py-3">
            <div class="row align-items-center">
              <div class="col-12">
                <div class="d-sm-flex align-items-center justify-space-between">
                  <h4 class="mb-4 mb-sm-0 card-title">Table Dark</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.html">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Table Dark
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <!-- start Inverse Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-1 align-items-center">
                <h4 class="card-title mb-0">Inverse Table</h4>
                <div class="ms-auto flex-shrink-0">
                  <button class="btn bg-primary-subtle text-primary  btn-sm" title="View Code" data-bs-toggle="modal"
                    data-bs-target="#view-code1-modal">
                    <i class="ti ti-code fs-5 d-flex"></i>
                  </button>
                  <!-- Code Modal -->
                  <div id="view-code1-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header border-bottom">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Inverse Table - View Code
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <pre class="language-html scrollable">
<code>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-dark mb-0&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
            &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
            &lt;td&gt;Mark&lt;/td&gt;
            &lt;td&gt;Otto&lt;/td&gt;
            &lt;td&gt;@mdo&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
            &lt;td&gt;Jacob&lt;/td&gt;
            &lt;td&gt;Thornton&lt;/td&gt;
            &lt;td&gt;@fat&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
            &lt;td&gt;Larry&lt;/td&gt;
            &lt;td&gt;the Bird&lt;/td&gt;
            &lt;td&gt;@twitter&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
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
              <p class="card-subtitle mb-3">
                You can also invert the colors—with light text on dark
                backgrounds—with
                <code> .table-inverse</code>.
              </p>
              <div class="table-responsive border rounded-1" data-bs-theme="dark">
                <table class="table text-nowrap table-dark  mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold text-white mb-0">User</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold text-white mb-0">Project Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold text-white mb-0">Team</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold text-white mb-0">Status</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold text-white mb-0">Budget</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-10.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Xtreme admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Adminpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Monster admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-12.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Materialpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Elegant admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-6.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">George Vasquez</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Modernize admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Inverse Table -->
          <!-- start Striped with Inverse Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-1 align-items-center">
                <div>
                  <h5 class="mb-0">Striped with Inverse Table</h5>
                </div>
                <div class="ms-auto flex-shrink-0">
                  <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                    data-bs-target="#view-code2-modal">
                    <i class="ti ti-code fs-5 d-flex"></i>
                  </button>
                  <!-- Code Modal -->
                  <div id="view-code2-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header border-bottom">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Striped with Inverse Table - View Code
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <pre class="language-html scrollable">
<code>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-striped table-dark mb-0&quot;&gt;
  &lt;thead&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
          &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
          &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
          &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
          &lt;td&gt;Mark&lt;/td&gt;
          &lt;td&gt;Otto&lt;/td&gt;
          &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
          &lt;td&gt;Jacob&lt;/td&gt;
          &lt;td&gt;Thornton&lt;/td&gt;
          &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
          &lt;td&gt;Larry&lt;/td&gt;
          &lt;td&gt;the Bird&lt;/td&gt;
          &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
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
              <p class="card-subtitle mb-3">
                Use .table-striped to add zebra-striping to any table row
                within the
                <code>&lt;tbody&gt;</code>.
              </p>
              <div class="table-responsive border rounded-1" data-bs-theme="dark">
                <table class="table table-striped table-dark border text-nowrap  mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">User</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Project Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Team</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Budget</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-10.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Xtreme admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Adminpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Monster admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-12.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Materialpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Elegant admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-6.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">George Vasquez</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Modernize admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Striped with Inverse Table -->
          <!-- start Bordered with Inverse Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-1 align-items-center">
                <div>
                  <h5 class="mb-0">Bordered with Inverse Table</h5>
                </div>
                <div class="ms-auto flex-shrink-0">
                  <button class="btn bg-primary-subtle text-primary btn-sm" title="View Code" data-bs-toggle="modal"
                    data-bs-target="#view-code3-modal">
                    <i class="ti ti-code fs-5 d-flex"></i>
                  </button>
                  <!-- Code Modal -->
                  <div id="view-code3-modal" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                      <div class="modal-content">
                        <div class="modal-header border-bottom">
                          <h5 class="modal-title" id="exampleModalLabel">
                            Bordered with Inverse Table - View Code
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <pre class="language-html scrollable">
<code>
&lt;div class=&quot;table-responsive&quot;&gt;
&lt;table class=&quot;table table-bordered table-dark mb-0&quot;&gt;
  &lt;thead&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
          &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
          &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
          &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
      &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
          &lt;td&gt;Mark&lt;/td&gt;
          &lt;td&gt;Otto&lt;/td&gt;
          &lt;td&gt;@mdo&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
          &lt;td&gt;Jacob&lt;/td&gt;
          &lt;td&gt;Thornton&lt;/td&gt;
          &lt;td&gt;@fat&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
          &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
          &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
          &lt;td&gt;@twitter&lt;/td&gt;
      &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
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
              <p class="card-subtitle mb-3">
                Add <code>.table-bordered</code> for borders on all sides
                of the table and cells.
              </p>
              <div class="table-responsive border rounded-1" data-bs-theme="dark">
                <table class="table text-nowrap  table-bordered table-dark mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">User</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Project Name</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Team</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Budget</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-10.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Olivia Rhye</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Xtreme admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Barbara Steele</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Adminpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Leonard Gordon</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Monster admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">active</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-12.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Materialpro admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Tommy Garza</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Elegant admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-5.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-6.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">cancel</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40"
                            height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">George Vasquez</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal">Modernize admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg"
                              class="rounded-circle me-n2 card-hover border border-2 border-white" width="39"
                              height="39">
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">pending</span>
                      </td>
                      <td>
                        <div class="dropdown dropstart">
                          <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-plus"></i>Add
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-edit"></i>Edit
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                <i class="fs-4 ti ti-trash"></i>Delete
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- send Bordered with Inverse Table -->
        </div>
      </div>
      <button class="btn btn-danger p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

      <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" data-simplebar style="height: calc(100vh - 80px)">
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
              autocomplete="off" />
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
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top"
              data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
              autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2 d-flex align-items-center justify-content-center"
              onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
              data-bs-placement="top" data-bs-title="ORANGE_THEME">
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
                  <span
                    class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
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
                  <span
                    class="fs-2 d-block text-body-secondary">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
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