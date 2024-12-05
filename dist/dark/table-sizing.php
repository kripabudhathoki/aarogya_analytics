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
                  <h4 class="mb-4 mb-sm-0 card-title">Table Sizing</h4>
                  <nav aria-label="breadcrumb" class="ms-auto">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item d-flex align-items-center">
                        <a class="text-muted text-decoration-none d-flex" href="../dark/index.php">
                          <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                        </a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                          Table Sizing
                        </span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <!-- start Default Size Light Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2 align-items-center">
                <div>
                  <h5>Default Size Light Table</h5>
                </div>
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
                            Default Size Light Table - View Code
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <pre class="language-html scrollable">
<code>
&lt;div class=&quot;table-responsive&quot;&gt;  
&lt;table class=&quot;table mb-0&quot;&gt;
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
              <div class="table-responsive border rounded-1">
                <table class="table text-nowrap customize-table mb-0 align-middle">
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
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            D
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            A
                          </a>
                          <a href="javascript:void(0)" class="text-bg-warning text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            N
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">Completed</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            Y
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-7.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                            <span class="fw-normal">Content Writer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Cancel</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Default Size Light Table -->
          <!-- start Default Size Dark Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2 align-items-center">
                <div>
                  <h5>Default Size Dark Table</h5>
                </div>
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
                            Default Size Dark Table - View Code
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
              <div class="table-responsive border rounded-1" data-bs-theme="dark">
                <table class="table table-dark text-nowrap customize-table mb-0 align-middle">
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
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            D
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            A
                          </a>
                          <a href="javascript:void(0)" class="text-bg-warning text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            N
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">Completed</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            Y
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-7.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                            <span class="fw-normal">Content Writer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Cancel</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Default Size Dark Table -->
          <!-- start Small Size Light Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2 align-items-center">
                <div>
                  <h5>Small Size Light Table</h5>
                </div>
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
                            Small Size Light Table - View Code
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <pre class="language-html scrollable">
<code>
&lt;div class=&quot;table-responsive&quot;&gt;  
&lt;table class=&quot;table table-sm mb-0&quot;&gt;
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
              <div class="table-responsive border rounded-1">
                <table class="table table-sm text-nowrap customize-table mb-0 align-middle">
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
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            D
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            A
                          </a>
                          <a href="javascript:void(0)" class="text-bg-warning text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            N
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">Completed</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            Y
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-7.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                            <span class="fw-normal">Content Writer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Cancel</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Small Size Light Table -->
          <!-- start Small Size Dark Table -->
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-2 align-items-center">
                <div>
                  <h5>Small Size Dark Table</h5>
                </div>
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
                            Small Size Dark Table - View Code
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                          <pre class="language-html scrollable">
<code>
&lt;div class=&quot;table-responsive&quot;&gt;  
&lt;table class=&quot;table table-sm table-dark mb-0&quot;&gt;
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
              <div class="table-responsive border rounded-1" data-bs-theme="dark">
                <table class="table table-sm table-dark text-nowrap customize-table mb-0 align-middle">
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
                          <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            D
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-11.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            A
                          </a>
                          <a href="javascript:void(0)" class="text-bg-warning text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            N
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-warning-subtle text-warning">Pending</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                            <span class="fw-normal">Project Manager</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-primary-subtle text-primary">Completed</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Nirav Joshi</h6>
                            <span class="fw-normal">Frontend Engineer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            Y
                          </a>
                          <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            X
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-success-subtle text-success">Active</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/profile/user-7.jpg" class="rounded-circle" width="40" height="40" />
                          <div class="ms-3">
                            <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                            <span class="fw-normal">Content Writer</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                            S
                          </a>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger">Cancel</span>
                      </td>
                      <td>
                        <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- end Small Size Dark Table -->
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