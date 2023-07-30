@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        @if (Session::has('success'))
          <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span> <br>
        @endif

      @if (Session::has('fail'))
          <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span> <br>
      @endif

        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="mr-md-3 mr-xl-5">
                <h5>Welcome back,</h5>
                <p class="mb-md-0"><span class="badge badge-pill  badge-primary">{{$data->usertype}}</span></p>
              </div>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Admin Dashboard&nbsp;/&nbsp;</p>
                <p class="text-dark mb-0 hover-cursor"><b>{{$data->School}}</b></p>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
              <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                <i class="mdi mdi-download text-muted"></i>
              </button>
              <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                <i class="mdi mdi-clock-outline text-muted"></i>
              </button>

              <button style="margin-right: 10px;" class="btn btn-outline-primary mt-2 mt-xl-0" ><a href="{{url('student-register')}}">Add student</a></button>

              <button style="background-color: #FF5733;color:white;" class="btn mt-2 mt-xl-0" data-toggle="modal" data-target="#exampleModal"><strong>create class</strong></button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <form action="{{route('create-class')}}" method="POST">
                      @csrf
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><strong>create class</strong></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                          <label for="exampleInputEmail1">class name</label>
                          <input type="text" class="form-control" style="border: 1px blue solid;" id="Class" name="Class" aria-describedby="emailHelp" placeholder="Enter class name">
                          <small id="emailHelp" class="form-text text-muted"><strong>name of class should be in smallcase letters only!</strong></small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Total Students</label>
                          <input type="number" style="border: 1px blue solid;" class="form-control" id="classSize" name="Size" placeholder="Total number" value="0" readonly>
                        </div>



                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" style="background-color: #FF5733;color:white;" class="btn"><strong><a style="color:white;text-decoration:none">create class</a></strong></button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body dashboard-tabs p-0">
              <ul class="nav nav-tabs px-4" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Summary 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Summary 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Summary 3</a>
                </li>
              </ul>
              <div class="tab-content py-0 px-0">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                  <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class='bx bxs-school icon-lg mr-3 text-primary' ></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted"><b>Total Classes</b></small>
                        <h5 class="mr-2 mb-0">12</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                       <i class='bx bx-intersect  mr-3 icon-lg text-danger' ></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted"><b>Total Sections</b></small>
                        <h5 class="mr-2 mb-0">12</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                     <i class='bx bxs-user-badge mr-3 icon-lg text-success' ></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted"><b>Total Students</b></small>
                        <h5 class="mr-2 mb-0">98</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-eye mr-3 icon-lg text-primary"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted"><b>Active Students</b></small>
                        <h5 class="mr-2 mb-0">22</h5>
                      </div>
                    </div>
                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-wallet mr-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted"><b>Total Payment</b></small>
                        <h5 class="mr-2 mb-0">GHS 345.00</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                  <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Start date</small>
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                            <a class="dropdown-item" href="#">12 Aug 2018</a>
                            <a class="dropdown-item" href="#">22 Sep 2018</a>
                            <a class="dropdown-item" href="#">21 Oct 2018</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Downloads</small>
                        <h5 class="mr-2 mb-0">2233783</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Total views</small>
                        <h5 class="mr-2 mb-0">9833550</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Revenue</small>
                        <h5 class="mr-2 mb-0">$577545</h5>
                      </div>
                    </div>
                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Active inquries</small>
                        <h5 class="mr-2 mb-0">3497843</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                  <div class="d-flex flex-wrap justify-content-xl-between">
                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Start date</small>
                        <div class="dropdown">
                          <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                            <a class="dropdown-item" href="#">12 Aug 2018</a>
                            <a class="dropdown-item" href="#">22 Sep 2018</a>
                            <a class="dropdown-item" href="#">21 Oct 2018</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Revenue</small>
                        <h5 class="mr-2 mb-0">$577545</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Total views</small>
                        <h5 class="mr-2 mb-0">9833550</h5>
                      </div>
                    </div>
                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Downloads</small>
                        <h5 class="mr-2 mb-0">2233783</h5>
                      </div>
                    </div>
                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                      <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                      <div class="d-flex flex-column justify-content-around">
                        <small class="mb-1 text-muted">Active inquries</small>
                        <h5 class="mr-2 mb-0">3497843</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary"><strong>Receive Payment</strong></a>
        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer" style="background-color:WHITE;">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a style="color:black; font-family: 'Comfortaa', cursive;" target="_blank">Rapid School Management System</a>. All rights reserved.</span>
        <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-lock-alt'></i> <b>All-In-One School Management System</b></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection
