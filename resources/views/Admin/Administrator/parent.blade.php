@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Parents | Administrator </h4>
              <div style="position: relative;" class="mb-5">
                <a href="/admin/administrator/parent-create-page" style="position: absolute;right:20px; text-decoration:none;"><i class='bx bxs-user-plus' ></i> Add New Parent</a>
              </div>
              {{-- <a href="admin/class/create-page" style="position: absolute;right:20px;"><i class='bx bxs-user-plus' ></i> Add New Subject</a> --}}


              <div class="table-responsive pt-6">
                <table id="example" class="table table-lg table-striped table-bordered">
                  <thead style="background-color: aliceblue;">
                    <tr>
                      <th>
                        Parent Code
                      </th>
                      <th>
                        Father Name
                      </th>
                      <th>
                        Mother Name
                      </th>
                      <th>
                       Address
                      </th>
                      <th>
                       Contact
                      </th>
                      <th>
                        No. Students
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($parents as $parent)
                    <tr class="table-danger">
                        <td>
                            {{$parent->ParentCode}}
                          </td>
                        <td>
                          {{$parent->FatherName}}
                        </td>
                        <td>
                            {{$parent->MotherName}}
                          </td>
                        <td>
                         {{$parent->Address}}
                        </td>
                        <td>
                          {{$parent->FatherContact}}
                        </td>
                        @if (count($parent->students)>0)
                            <td>
                                {{count($parent->students)}}
                            </td>
                        @else
                            <td>
                                0
                            </td>
                        @endif

                        <td>
                            <a style="font-size: 2.3vw;" href="/admin/academics/class-update-page/{{$parent->id}}"><i class="bx bxs-edit"></i></a>
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
