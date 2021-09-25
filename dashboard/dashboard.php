<?php
require_once "../protected/config/config.php";

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    R::close();
    exit;
}
$requests = R::findAll( 'request' );
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard - Prudential Calculator</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  </head>
  <body class="layout-top-nav">
    <div class="wrapper">
      <!-- Navbar -->
      <nav
        class="main-header navbar navbar-expand-md navbar-light navbar-white"
      >
        <div class="container">
          <a href="/dashboard" class="navbar-brand">
            <img
              src="assets/logo.png"
              alt="AdminLTE Logo"
              class="brand-image"
            />
          </a>

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /.navbar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Requests</h1>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <table
                        id="request_data_table"
                        class="table table-bordered table-striped"
                      >
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Residence</th>
                            <th>Marital Status</th>
                            <th>Children</th>
                            <th>Dependents</th>
                            <th>Have Life Insurance</th>
                            <th>Salary</th>
                            <th>Other Income</th>
                            <th>Savings</th>
                            <th>Insurance Covers</th>
                            <th>Expenses</th>
                            <th>Loans</th>
                            <th>Premium Cost</th>
                            <th>Spouse Monthly Payment</th>
                            <th>Spouse Payment Years</th>
                            <th>Child Monthly Payment</th>
                            <th>Child Payment Years</th>
                            <th>Dependents Monthly Payment</th>
                            <th>Dependents Payment Years</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Hot Lead</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($requests as $key => $value) : ?>
                        <?php 
                          $is_hot_lead = $value->hot_lead ? 'hot-lead ' : '';  
                        ?>
                          <tr class="<?php echo $is_hot_lead ?>">
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->gender; ?></td>
                            <td><?php echo $value->age; ?></td>
                            <td><?php echo $value->phone; ?></td>
                            <td><?php echo $value->residence; ?></td>
                            <td><?php echo $value->marital_status; ?></td>
                            <td><?php echo $value->children; ?></td>
                            <td><?php echo $value->dependents; ?></td>
                            <td><?php echo $value->is_life_insuranced; ?></td>
                            <td><?php echo $value->salary; ?></td>
                            <td><?php echo $value->other_income; ?></td>
                            <td><?php echo $value->savings; ?></td>
                            <td><?php echo $value->insurance_covers; ?></td>
                            <td><?php echo $value->expenses; ?></td>
                            <td><?php echo $value->loans; ?></td>
                            <td><?php echo $value->insurance_cost; // changed to premium cost ?></td>
                            <td><?php echo $value->spouse_monthly_payment; ?></td>
                            <td><?php echo $value->spouse_payment_years; ?></td>
                            <td><?php echo $value->child_monthly_payment; ?></td>
                            <td><?php echo $value->child_payment_years; ?></td>
                            <td><?php echo $value->dependents_monthly_payment; ?></td>
                            <td><?php echo $value->dependents_payment_years; ?></td>
                            <td><?php echo $value->total; ?></td>
                            <td><?php echo $value->created_at; ?></td>
                            <td><?php echo $value->hot_lead ? 'Yes ' : 'No';   ?></td>
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Residence</th>
                            <th>Marital Status</th>
                            <th>Children</th>
                            <th>Dependents</th>
                            <th>Have Life Insurance</th>
                            <th>Salary</th>
                            <th>Other Income</th>
                            <th>Savings</th>
                            <th>Premium Covers</th>
                            <th>Expenses</th>
                            <th>Loans</th>
                            <th>Insurance Cost</th>
                            <th>Spouse Monthly Payment</th>
                            <th>Spouse Payment Years</th>
                            <th>Child Monthly Payment</th>
                            <th>Child Payment Years</th>
                            <th>Dependents Monthly Payment</th>
                            <th>Dependents Payment Years</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Hot Lead</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-wrap align-items-center">
                        <span class="hot-lead-legend"></span>
                        <span class="mx-2">—</span>
                        <span>
                          <b>"Hot Lead"</b> - Call back requested.
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <strong> Copyright &copy; 2021 </strong>
          All rights reserved.
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
        $("#request_data_table")
          .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            // buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            buttons: ["excel", "colvis"],
            order: [[ 23, "desc" ]]
          })
          .buttons()
          .container()
          .appendTo("#request_data_table_wrapper .col-md-6:eq(0)");
      });
    </script>
    <style>
      .hot-lead {
        background-color: rgba(218, 41, 28, 0.30) !important;
      }
      .hot-lead-legend {
        width: 15px;
        height: 15px;
        background-color: rgba(218, 41, 28, 0.30);
      }
      table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
        top: 35%;
      }
      @media (max-width: 576px) {
        table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
          top: 50%;
        }
      }
    </style>
  </body>
</html>
