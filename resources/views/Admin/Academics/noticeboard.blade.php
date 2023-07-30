@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Noticeboard | Academics </h4>
              <div style="position: relative;" class="mb-5">
                <a href="/admin/academics/noticeboard-create-page" style="position: absolute;right:20px; text-decoration:none;"><i class='bx bxs-user-plus' ></i> Add New Notice</a>
              </div>
              {{-- <a href="admin/class/create-page" style="position: absolute;right:20px;"><i class='bx bxs-user-plus' ></i> Add New studymaterial</a> --}}

                @if (Session::has('delete'))
                    <span style="background-color: rgb(255, 59, 59); color:black;">{{Session::get('delete')}}</span>
                @endif
              <div class="table-responsive pt-6">
                <table id="example" class="table table-sm table-striped table-bordered">
                  <thead style="background-color: aliceblue;">
                    <tr>
                      <th>
                        Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Date
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($noticeboards as $noticeboard)
                    <tr class="table-danger">
                        <td>
                          {{$noticeboard->title}}
                        </td>
                        <td>
                         {{$noticeboard->description}}
                        </td>
                        <td>
                            {{$noticeboard->status}}
                        </td>
                        <td>
                            {{$noticeboard->created_at}}
                        </td>
                        <td>
                            <a style="font-size: 2.3vw;" href="/admin/academics/noticeboard-update-page/{{$noticeboard->id}}"><i class="bx bxs-edit"></i></a>
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
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

@endsection
