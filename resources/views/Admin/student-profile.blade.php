<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid | Student List | Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css'); }}">
  
  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css'); }} ">
  <!-- endinject -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



  <style>
    body{
      font-family: 'Comfortaa', cursive;
    }
    .form-control{
      border: 1px gray solid;
    }
    th{
      font-size: 10px;
      background-color: whitesmoke;
      color:white
    }
    thead{
      font-size: 12px;
    }
    td{
      font-weight: 900;
    }
    .form-control{
      border-radius:10px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
       
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: black;">
  <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
    <a class="navbar-brand brand-logo" href="index.html"><img src="images/rap.png" style="width:30px" alt="logo"/><span style="font-size: 10px;color:white"> <b>Rapid School Management</b></span></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-sort-variant"></span>
    </button>
  </div>  
</div>
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
  <ul class="navbar-nav mr-lg-4 w-100">
    
  </ul>
  <ul class="navbar-nav navbar-nav-right">
   
    <li class="nav-item nav-profile dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
        <img src="images/faces/face5.jpg" alt="profile"/>
        <span class="nav-profile-name">Director</span>
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
  <button   class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
    <span  class="mdi mdi-menu"></span>
  </button>
</div>
</nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" sy>
        <ul class="nav">
          <li class="nav-item" style="border: none;">
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-school menu-icon' ></i>
              <span class="menu-title"><b>SM School</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="color: white;">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white" ><b>Dashboard</b></a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">inquries</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">settings</a></li>
                <li class="nav-item" style="color:white">  <a class="nav-link" href="" style="color:white">Logs</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Leave Request</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Live Classes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-user-circle menu-icon' ></i>
              <span class="menu-title"><b>SM Adminstrator</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
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
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-bank menu-icon' ></i>
              <span class="menu-title">SM Accounting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
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
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-graduation menu-icon'></i>
              <span class="menu-title">SM Examination</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
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
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-bus-school menu-icon' ></i>
              <span class="menu-title">SM Transport</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
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
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-atom menu-icon'></i>
              <span class="menu-title"><b>SM Academics</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
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
            <a style="font-family: 'Comfortaa', cursive;" class="nav-link" href="pages/icons/mdi.html">
              <i class='bx bx-book-open menu-icon'></i>
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
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body" style="background-color:#dd8553;height:50px;">
                  <h4 class="card-title" style="color:white"><strong>Students Profile </strong><a href="./basic_elements.html" style="position: absolute;right:20px;text-decoration:none;color:aliceblue;margin-top:-15px"><i style="font-size: 25px;" class='bx bxs-user-plus' ></i><b>EDIT STUDENT PROFILE</b></a></h4>
                
                  
                </div>
                <!-- card -->
  <div class="card">
    <!-- Card Body -->
    <div class="card-body" style="background-color: aliceblue;">
       <div class="d-flex align-items-center" >
          <div class="position-relative">
             <img src="./images/user.png" width="75px" alt="" class="rounded-circle avatar-xl">
             <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verifed">
             
             </a>
          </div>
          <div class="ms-4">
             <h5 ><strong>{{$StudentInfo->FirstName}} {{$StudentInfo->LastName}}</strong> <i data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: absolute;right:80px;font-size:25px" class='bx bx-edit' ></i> <i style="position: absolute;right:50px;font-size:25px" class='bx bxs-printer' ></i> <i data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="position: absolute;right:20px;font-size:25px" class='bx bx-trash' ></i></h5>
             <br>
             <p class="mb-1" style="font-size: 15px;"> Admission No:<span  style="font-size: 15px;">{{$StudentInfo->IdentityNumber}}</span>  <span style="margin-left:30px;font-size:15px"> Date of Birth:{{$StudentInfo->DateOFBirth}}</span>   <span style="margin-left:30px;font-size:15px"> Home Address:{{$StudentInfo->StudentAddress}}</span>  <span style="margin-left:30px;font-size:15px"> Email:{{$StudentInfo->StudentEmail}}</span>
              <span style="margin-left:30px;font-size:15px"> Gender:{{$StudentInfo->Gender}}</span> <span style="position:absolute;right:20px">Blood Group:{{$StudentInfo->BloodGroup}}</span>
            </p>


            <hr style="color:gray; border: 1px gray solid">
             <span class=""  style="font-size: 15px;"> Student Tel:<span  style="font-size: 15px;">{{$StudentInfo->StudentNumber}}</span> <span style="margin-left:22px;font-size:15px"> Roll Number:{{$StudentInfo->RollNumber}}</span></span> <span style="position:absolute;right:600px;">Father's Phone:{{$StudentInfo->FatherContact}}</span>  <span style="position:absolute;right:300px;">Father's Name:{{$StudentInfo->FatherName}}</span> <span style="position:absolute;right:170px;">Type:{{$StudentInfo->StudentType}}</span>  <span style="position:absolute;right:20px">Status: <span class="badge rounded-pill text-bg-warning">Active</span></span>  
          </div>
       </div>
       <div class="border-top row mt-3 border-bottom mb-3 g-0">
          <div class="col" style=" border-top: 1px gray solid;" >
             <div class="pe-1 ps-2 py-3">
                <h6><strong><i style="font-size:18px;" class='bx bx-fridge'></i> CLASS</strong></h6>
                <span>{{$StudentInfo->Class}}</span>
             </div>
          </div>
          <div class="col border-start" style=" border-top: 1px gray solid;" >
             <div class="pe-1 ps-3 py-3">
                <h6><i style="font-size:18px;" class='bx bx-group'></i> <strong>SESSION</strong></h6>
                <span>{{$StudentInfo->Session}}</span>
             </div>
          </div>
          <div class="col border-start" style=" border-top: 1px gray solid;" >
             <div class="pe-1 ps-3 py-3">
                <h6><i style="font-size:18px;" class='bx bx-money'></i> <strong> FEE PAID</strong></h6>
                <span>GHS 349.00</span>
             </div>
          </div>
          <div class="col border-start" style=" border-top: 1px gray solid;" >
            <div class="pe-1 ps-3 py-3">
              <h6><i style="font-size:18px;" class='bx bx-wallet'></i> <strong> FEE BALANCE</strong></h6>
               <span>GHS 250.00</span>
            </div>
         </div>
       </div>
       <br>
      
       <a style="position: absolute;right:20px;margin-top:-40px" href="./example3/index.html" class="btn btn-secondary btn-sm"><i class='bx bx-printer'></i> PRINT STUDENT FILE</a>
    </div>
 <br>
    <div class="col-xl-12 col-lg-12 col-md-12 col-12" style="margin-right:20px;">
      <div class="card" id="courseAccordion" style="border: none;margin-right:20px">
      <!-- List group -->
      <ul class="list-group list-group-flush">
      <li class="list-group-item p-0 bg-transparent" style="border: 1px solid gray;">
      <!-- Toggle -->
      <a style="background-color: white;" class="d-flex align-items-center text-inherit text-decoration-none py-3 px-4" data-bs-toggle="collapse" href="#courseTwo" role="button" aria-expanded="false" aria-controls="courseTwo">
      <div class="me-auto">
        <h6 class="mb-0" style="color:#dd8553;"><i style="font-size: 18px;" class='bx bxs-color'></i> <strong>Session Records</strong></h6>
       
      </div>
      <!-- Chevron -->
      <span class="chevron-arrow ms-4">
        <i class='bx bx-chevron-down fs-4' ></i>
    
      </span>
      </a>
      <!-- / .row -->
      <!-- Collapse -->
      <div class="collapse" id="courseTwo" data-bs-parent="#courseAccordion">
      <!-- List group -->
      <ul class="list-group list-group-flush">
        <li class="list-group-item bg-primary" >
           <span style="color: white;"><strong>Session: 2022:2023</strong> <i style="position: absolute;right:20px;font-size:25px" class='bx bx-checkbox'></i></span>
        </li>
        <li class="list-group-item">
          <span>Enrollment Number: GH004</span>
       </li>
       
       <li class="list-group-item">
        <span>Enrollment Number: GH004</span>
     </li>
    
    
       
       
      
        
      </ul>
      </div>
      </li>
      
      
      <li class="list-group-item p-0" style="border: 1px solid gray;">
      <!-- Toggle -->
      <a class="d-flex align-items-center text-inherit text-decoration-none py-3 px-4" data-bs-toggle="collapse" href="#courseFour" role="button" aria-expanded="false" aria-controls="courseFour">
      <div class="me-auto">
        <!-- Title -->
        <h6  style="color:#dd8553;" class="mb-0"><i style="font-size:18px;" class='bx bx-money'></i> <strong> Fee Stucture</strong></h6>
        <p class="mb-0 text-muted"><strong>All Fees Payment records</strong></p>
      </div>
      <!-- Chevron -->
      <span class="chevron-arrow ms-4">
         <i class='bx bx-chevron-down fs-4' ></i>
      </span>
      </a>
      <!-- / .row -->
      <!-- Collapse -->
      <div class="collapse" id="courseFour" data-bs-parent="#courseAccordion">
      <!-- List group -->
      <button style="position: absolute;right:20px;" class="btn btn-sm btn-secondary">Print Fee Stucture</button>
      <br>
      <br>

      <ul class="list-group list-group-flush">
         
         <table class="table table-sm table-striped table-bordered">
            <thead class="bg-primary">
              <tr>
                <th scope="col-3">Fee Type</th>
                <th scope="col-3">Amount</th>
                <th scope="col-3">Period</th>
                <th scope="col-3">Amount Paid</th>
                <th scope="col-3">Balance</th>
                <th scope="col-3">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>School Fee Payment Term 1</td>
                <td>GHS 3,400.00</td>
                <td>3 Months</td>
                <td>GHS 3,400.00</td>
                <td>GHS 3,400.00</td>
                <td><button class="btn btn-sm btn-secondary">Pay Fee</button></td>
              </tr>
              <tr>
               <td>Books Fee Payment Term 1</td>
               <td>GHS 3,400.00</td>
               <td>3 Months</td>
               <td>GHS 3,400.00</td>
               <td>GHS 3,400.00</td>
               <td><button class="btn btn-sm btn-secondary">Pay Fee</button></td>
              </tr>
              <tr>
               <td>PTA Fee Payment Term 1</td>
               <td>GHS 400.00</td>
               <td>3 Months</td>
               <td>GHS 3,400.00</td>
               <td>GHS 3,400.00</td>
               <td><button class="btn btn-sm btn-secondary">Pay Fee</button></td>
              </tr>
            </tbody>
          </table>
       
   
      </ul>
      </div>
      </li>
      
      </ul>
      </div>
      </div>
 </div>

 
              </div>
              
            </div>
          </div>
          
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl">
           <div class="modal-content" >
             <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student Information</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Card -->
 <div class="card mb-4">
   <!-- Card Header -->
   <div class="card-header" style="background-color: #dd8553;"> 
     <h5 style="color: white;">Personal Information</h5>
   </div>
   <!-- Card Body -->
   <div class="card-body">
     <!-- Form -->
     <form class="row">
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="fname">Full Name</label>
         <input type="text" id="fname" class="form-control" placeholder="First Name" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="lname">Date of Birth</label>
         <input type="date" id="lname" class="form-control" placeholder="Last Name" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="phone">Phone Number</label>
         <input type="number" id="phone" class="form-control" placeholder="Phone" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="phone">Admission No.</label>
         <input type="number" id="admission number" class="form-control" placeholder="admission number" readonly required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address1">Address</label>
         <input type="text" id="address1" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address2">Email Address</label>
         <input type="email" id="address2" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address2">father's Name</label>
         <input type="email" id="address2" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-3">
         <label class="form-label" for="address2">father's Phone</label>
         <input type="email" id="address2" class="form-control" placeholder="Address" required>
       </div>
       <div class="mb-3 col-12 col-md-4">
         <label class="form-label">Status</label>
         <select  style="border: 1px gray solid;" class="selectpicker form-control" data-width="100%">
           <option value="">Select Status</option>
           <option value="1">Active</option>
           <option value="2">Inative</option>
          
         </select>
       </div>
       <div class="mb-3 col-12 col-md-4">
         <label class="form-label">Blood Type</label>
         <select style="border: 1px gray solid;" class="selectpicker form-control" data-width="100%">
           <option value="">Select Blood Type</option>
           <option value="">O+</option>
           <option value="UK">AB</option>
           <option value="USA">AB-</option>
         </select>
       </div>
       <div class="mb-3 col-12 col-md-4">
         <label class="form-label">Student  Type</label>
         <select style="border: 1px gray solid;" class="selectpicker form-control" data-width="100%">
           <option value="">Select Type</option>
           <option value="">Regular</option>
           <option value="UK">AB</option>
           <option value="USA">AB-</option>
         </select>
       </div>
      
      
     </form>
   </div>
</div>
<span style="color: #dd8553;"><strong>Note: Student Number and Admission Number for students cannot be edited.</strong></span>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-sm btn-primary">Save changes</button>
             </div>
           </div>
         </div>
       </div>



       <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header" style="background-color:rgb(223, 77, 77)">
               <h5 style="color: white;" class="modal-title" id="staticBackdropLabel">Delete Student</h5>
               <button type="button" style="color: aliceblue;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                <!-- Card -->
 <div class="card mb-4 ">
   <!-- Card Header -->
   <div class="card-header d-flex align-items-center justify-content-between">
      <h4 class="mb-0">Deleting alert</h4>
      
   </div>
   <!-- Card Body -->
   <div class="card-body">
  <img src="../assets/images/brand/paypal.svg" alt="" class="mb-2">
  <p class="mb-4">Enter student name to confirm the action.
  </p>
  <!-- Form -->
  <form>
     <div class="mb-3">
        <label for="paypalEmail" class="form-label"><strong>Student Name</strong>
        </label>
  <input class="form-control" id="paypalEmail" placeholder="student name" type="email" required="">
</div>

 </form>
</div>
</div>
<small><b>Note: This action is not reversable !</b></small>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-sm btn-danger">Delete Student</button>
             </div>
           </div>
         </div>
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
