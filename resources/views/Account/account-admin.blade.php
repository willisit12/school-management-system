<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid School Management System | Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css'); }}">
  
  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css'); }} ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png'); }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body{
      font-family: 'Comfortaa', cursive;
    }
    .mdi {
      color:white;
    }
    .nav-link{
      color:white;
    }
    .menu-title{
      font-family: 'Comfortaa', cursive;
    }
    .mb-2{
      font-size: 12px;
      font-weight: 500;
    }
    #icon{
      display: block;
      margin: 0 auto;
    }
    #value{
      text-align: center;
      font-size:20px;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
            <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: black;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100" >  
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/rap.png" style="width:30px" alt="logo"/><span style="font-size: 10px;color:white"> <b>Rapid School Management</b></span></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #FF5733 ;">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100" >
            
              <span><b style="color:white">Rapid School Management System</b></span>
            
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/user.png" alt="profile"/>
              <span class="nav-profile-name" style="color:white"><strong>Teacher</strong></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" sy>
        <ul class="nav">
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-graduation menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM School</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="color: white;">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" style="color:white"><a class="nav-link" href="" style="color:white" > <b>Dashboard</b></a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">inquries</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">settings</a></li>
                <li class="nav-item" style="color:white">  <a class="nav-link" href="" style="color:white">Logs</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Leave Request</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Live Classes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-school menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM Adminstrator</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
       
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-wallet-alt menu-icon'></i>
              <span class="menu-title">SM Accounting</span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-book-reader menu-icon'></i>
              <span class="menu-title">SM Examination</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">SM Transport</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM Academics</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title"><b>SM Library</b></span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Account</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title"><b>School Manager</b></span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><strong>Current Session</strong></a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Accounting</strong></li>
            <li style="position:absolute;right:380px;margin-top:-8px"><div class="dropdown">
              <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-file'></i>  <strong>Fee Invoices</strong>
              </button>
              <ul class="dropdown-menu" >
                <li><a class="dropdown-item" href=""><strong><i class='bx bx-low-vision' ></i> Fee Invoice</strong></a></li>
                <li><a class="dropdown-item" href="add_fee_invoice.html"><strong><i class='bx bx-edit' ></i> Add New Fee Invoice</strong></a></li>
                <li><a class="dropdown-item" href="#"><strong><i class='bx bx-wallet-alt' ></i> Payment History</strong></a></li>
             
              </ul>
            </div></li>
            <li style="position:absolute;right:180px;margin-top:-8px"><div class="dropdown">
              <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Fee Types
              </button>
              <ul class="dropdown-menu" >
                <li><a class="dropdown-item" href="/account-feetype"><strong><i class='bx bx-low-vision' ></i> View Fee Types</strong></a></li>
                <li><a class="dropdown-item" href="/account-feetype-form"><strong><i class='bx bx-edit' ></i> Add New Fee Type</strong></a></li>
             
              </ul>
            </div></li>
            <li style="position:absolute;right:20px;margin-top:-8px"><div class="dropdown">
              <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Expenses
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><strong><i class='bx bx-low-vision' ></i> View Expenses</strong></a></li>
                <li><a class="dropdown-item" href="#"><strong><i class='bx bx-edit' ></i> Add New Expense</strong></a></li>
                <li><a class="dropdown-item" href="#"><strong><i class='bx bx-list-plus' ></i> Expenses Category</strong></a></li>
              </ul>
            </div></li>
          </ol>
        </nav>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-2 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <div  >
                  <img id="icon" src="images/graph.png" width="50px">
                </div>
                <br>
                  <h5 class="card-title" style="text-align: center;"> Total Invoices</h5>
                 
                  <p class="card-text" id="value">0</p>
                 
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="images/fg.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;"> Paid Invoices</h5>
                  <p class="card-text" id="value">0</p>
               
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="images/cost-saving.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;"> Unpaid Invoices</h5>
                  <p class="card-text" id="value">0</p>
                 
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="images/bill.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Partially Paid </h5>
                  <p class="card-text" id="value">0</p>
               
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="images/bill.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Total Payments</h5>
                  <p class="card-text" id="value">0</p>
                  
                </div>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="/images/expense.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Payment Received</h5>
                  <p class="card-text" id="value">0</p>
                  
                </div>
              </div>
            </div>
           
            <div class="col-sm-2" style="margin-top: 5px;">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="images/fg.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Amount Pending</h5>
                  <p class="card-text" id="value">₵0.00</p>
                 
                </div>
              </div>
            </div>


            <div class="col-sm-2" style="margin-top: 5px;">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="/images/expense.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Expense</h5>
                  <p class="card-text" id="value">₵0.00</p>
                  
                </div>
              </div>
            </div>
            
            <div class="col-sm-2" style="margin-top: 5px;">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="./images/investment.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Income</h5>
                  <p class="card-text" id="value">₵0.00</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-2" style="margin-top: 5px;">
              <div class="card">
                <div class="card-body">
                  <img id="icon" src="images/fg.png" width="50px">
                  <br>
                  <h5 class="card-title" style="text-align: center;">Daily Payment</h5>
                  <p class="card-text" id="value">₵0.00</p>
                  
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daily Payment History - Session: 2022-2023 <a href="./basic_elements.html" style="position: absolute;right:20px;text-decoration:none;"><i class='bx bxs-user-plus' ></i> Add New Admission</a></h4>
                  
                    <div class="table-responsive pt-6">
                      <table id="example" class="table table-sm table-striped table-bordered">
                        <thead style="background-color: aliceblue;">
                          <tr>
                            
                            <th>
                            Receipt Number
                            </th>
                            <th>
                              Amount
                            </th>
                            <th>
                              Payment Method
                            </th>
                            <th>
                              Transaction ID
                            </th>
                            <th>
                              Date
                            </th>
                            <th>
                              Invoice
                            </th>
                            <th>
                              Student Name
                            </th>
                            <th>
                              Admission Number
                            </th>
                            <th>
                             Class
                            </th>
                            <th>
                             Section
                            </th>
                            <th>
                              Father's Name
                            </th>
                            <th>
                              Father's Phone
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="table-danger">
                           
                            <td>
                              Odoi Benjamin
                            </td>
                            <td>
                              IYE37393900
                            </td>
                            <td>
                              Regular
                            </td>
                            <td>
                              05637377388
                            </td>
                            <td>
                              ofruio@gmail.com
                            </td>
                            <td>
                              2023-MAY
                            </td>
                            <td>
                              Basic Six A
                            </td>
                            <td>
                              Active
                            </td>
                            <td>
                              238499
                            </td>
                            <td>
                            <strong>James Obeng</strong>
                            </td>
                            <td>
                             056564838838
                            </td>
                            <td>
                              056564838838
                             </td>
                          </tr>
                         
                          
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer" style="background-color:WHITE;">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block" style="font-family: 'Comfortaa', cursive;"><a style="color:black; font-family: 'Comfortaa', cursive;" target="_blank">Rapid School Management System</a>. All rights reserved.</span>
            <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-support' ></i> <b>Contact Support</b></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  <script src="{{ URL::asset('vendors/base/vendor.bundle.base.js'); }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ URL::asset('vendors/chart.js/Chart.min.js'); }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net/jquery.dataTables.js'); }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js'); }}"></script>
  
  <!-- inject:js -->
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/template.js'); }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('js/dashboard.js'); }}"></script>
  <script src="{{ URL::asset('js/data-table.js'); }}"></script>
  <script src="{{ URL::asset('js/jquery.dataTables.js'); }}"></script>
  <script src="{{ URL::asset('js/dataTables.bootstrap4.js'); }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

