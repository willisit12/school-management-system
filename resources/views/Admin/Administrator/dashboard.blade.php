@extends('layouts.admin')
@section('content')
<div class="main-panel">

    <div class="content-wrapper">

      <h3>Administrator</h3>

      <div class="row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <div  >
              <img id="icon" src="{{ URL::to('/') }}/images/graph.png" width="50px">
            </div>
            <br>
              <h5 class="card-title" style="text-align: center;"> Staffs</h5>

              <button id="btn" class="btn btn-sm btn-outline-primary"><a style="color:black" href="/admin/administrator/staff">View</a></button>

            </div>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="card">
            <div class="card-body">
              <img id="icon" src="{{ URL::to('/') }}/images/fg.png" width="50px">
              <br>
              <h5 class="card-title" style="text-align: center;"> Settings</h5>
              <button id="btn" class="btn btn-sm btn-outline-primary">View</button>

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
@endsection

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
