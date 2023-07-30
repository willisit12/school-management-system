@extends('layouts.admin')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
      <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Class Timetable | Academics </h4>

                <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                    <h4>Create a New Routine</h4>

                    <form class="pt-3" action="{{route('new_routine')}}" method="POST">
                    @csrf
                    @if (Session::has('success'))
                        <span style="background-color: rgb(0, 255, 106); color:black;">{{Session::get('success')}}</span>
                    @endif

                    @if (Session::has('fail'))
                        <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select onchange="query();" class="form-control form-control-lg"  name="classroom_id" id="classroom" required>
                                    <option value="">Class</option>
                                    @foreach ($classrooms as $classroom)
                                        <option value="{{$classroom->id}}">{{$classroom->name}} - Section {{$classroom->section}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('classroom_id') {{$message}} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="subject_id" id="subject">
                                    <option value="">Subject</option>
                                </select>
                                <span style="color: red">@error('subject') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="start_time" class="label">Start Time</label>
                                <input type="time" class="form-control form-control-lg" id="start_time" name="start_time" placeholder="start_time" value="{{old('start_time')}}">
                                <span style="color: red">@error('start_time') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="end_time" class="label">End Time</label>
                                <input type="time" class="form-control form-control-lg" id="end_time" name="end_time" placeholder="end_time" value="{{old('end_time')}}">
                                <span style="color: red">@error('end_time') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="day" class="label">Day</label>
                                <select name="day" id="day" class="form-control form-control-lg">
                                    <option value="">Select Day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                                <span style="color: red">@error('day') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="room_number" name="room_number" placeholder="Room Number" value="{{old('room_number')}}">
                                <span style="color: red">@error('room_number') {{$message}} @enderror</span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control form-control-lg"  name="teacher_id" id="teachers" required>
                                    <option value="">Select Teacher</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{$teacher->id}}" >{{$teacher->Name}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('teacher') {{$message}} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" style="background-color: rgb(232, 80, 25);color:white" class="btn btn-block  btn-lg font-weight-medium auth-form-btn" >CREATE</button>
                    </div>
                    </form>
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

<script>
    function query() {
        var classroom_id = document.getElementById("classroom").value;
        if (classroom_id) {
            var xhttp = new XMLHttpRequest();
            xhttp.responseType = 'json';
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var selectElement = document.getElementById("subject");
                    selectElement.innerText = null;
                    var option_ = document.createElement("option");
                    option_.value = "";
                    option_.text = "Subject";
                    selectElement.appendChild(option_);
                    // console.log(this.response.subjects)
                    this.response.subjects.forEach(element => {
                        var option = document.createElement("option");
                        option.value = element['id'];
                        option.text = element['name'];
                        selectElement.appendChild(option);
                    });
                }
            };
            xhttp.open("GET", "/admin/academics/class_subjects/" + classroom_id, true);
            xhttp.send();
        }
    }
</script>
