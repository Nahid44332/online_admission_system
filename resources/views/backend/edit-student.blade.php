@extends('backend.master')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Form {{ $students->name }}</h4>
                <p class="card-description"> Edit Information</p>
                <form class="forms-sample" action="{{ url('/admin/student/update/' . $students->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $students->name }}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="father_name">Father Name</label>
                        <input type="text" class="form-control" name="father_name" value="{{ $students->father_name }}"
                            id="father_name" placeholder="Father Name">
                    </div>
                    <div class="form-group">
                        <label for="mother_name">Mother Name</label>
                        <input type="text" class="form-control" name="mother_name" value="{{ $students->mother_name }}"
                            id="mother_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" value="{{ $students->dob }}"
                            id="dob" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{ $students->email }}"
                            id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">phone Number</label>
                        <input type="phone" class="form-control" name="phone" value="{{ $students->phone }}"
                            id="phone" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-select" name="gender" id="gender">
                            <option value="Male" @if ($students->gender == 'Male') selected @endif>Male</option>
                            <option value="Female" @if ($students->gender == 'Female') selected @endif>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="blood">Blood</label>
                        <select class="form-select" name="blood" id="blood">
                            <option value="A+" @if ($students->blood == 'A+') selected @endif>A+</option>
                            <option value="A-" @if ($students->blood == 'A-') selected @endif>A-</option>
                            <option value="B+" @if ($students->blood == 'B+') selected @endif>B+</option>
                            <option value="B-" @if ($students->blood == 'B-') selected @endif>B-</option>
                            <option value="O+" @if ($students->blood == 'O+') selected @endif>O+</option>
                            <option value="O-" @if ($students->blood == 'O-') selected @endif>O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" name="nationality" value="{{ $students->nationality }}"
                            id="exampleInputEmail3" placeholder="Nationality">
                    </div>
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <input type="text" class="form-control" name="religion" value="{{ $students->religion }}"
                            id="exampleInputEmail3" placeholder="Religion">
                    </div>
                    <H2>Educational Info</H2>
                    @foreach ($students->education as $educate)
                        <div class="form-group">
                            <label for="ssc_passing_year">SSC Passing Year</label>
                            <input type="text" class="form-control" name="ssc_passing_year[]"
                                value="{{ $educate->ssc_passing_year }}" id="ssc_passing_year"
                                placeholder="SSC Passing Year">
                        </div>
                        <div class="form-group">
                            <label for="ssc_board">SSC Board</label>
                            <input type="text" class="form-control" name="ssc_board[]"
                                value="{{ $educate->ssc_board }}" id="ssc_board" placeholder="SSC Board">
                        </div>
                        <div class="form-group">
                            <label for="ssc_result">SSC Rusult</label>
                            <input type="text" class="form-control" name="ssc_result[]"
                                value="{{ $educate->ssc_result }}" id="ssc_result" placeholder="SSC Rusult">
                        </div>
                        <div class="form-group">
                            <label for="hsc_passing_year">HSC Passing Year</label>
                            <input type="text" class="form-control" name="hsc_passing_year[]"
                                value="{{ $educate->hsc_passing_year }}" id="hsc_passing_year"
                                placeholder="HSC Passing Year">
                        </div>
                        <div class="form-group">
                            <label for="hsc_board">HSC Board</label>
                            <input type="text" class="form-control" name="hsc_board[]"
                                value="{{ $educate->hsc_board }}" id="hsc_board" placeholder="HSC Board">
                        </div>
                        <div class="form-group">
                            <label for="hsc_result">HSC Rusult</label>
                            <input type="text" class="form-control" name="hsc_result[]"
                                value="{{ $educate->hsc_result }}" id="hsc_result" placeholder="HSC Rusult">
                        </div>
                    @endforeach
                    <div class="form-group">
                        <label for="course">Course</label>
                        <select class="form-select" name="course" id="course">
                            <option value="Basic Computer" @if ($students->course == 'Basic Computer') selected @endif>Basic Computer
                            </option>
                            <option value="Web Development" @if ($students->course == 'Web Development') selected @endif>Web
                                Development</option>
                            <option value="Digital Marketing" @if ($students->course == 'Digital Marketing') selected @endif>Digital
                                Marketing</option>
                            <option value="Graphics Design" @if ($students->course == 'Graphics Design') selected @endif>Graphics
                                Design</option>
                            <option value="Script Writting" @if ($students->course == 'Script Writting') selected @endif>Script
                                Writting</option>
                            <option value="Dropshipping" @if ($students->course == 'Dropshipping') selected @endif>Dropshipping
                            </option>
                            <option value="E-Commerce Maintainis" @if ($students->course == 'E-Commerce Maintainis') selected @endif>
                                E-Commerce Maintainis</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="present_address">Present Address</label>
                        <textarea class="form-control" name="present_address" id="present_address" rows="4">{{ $students->present_address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="permanent_address">Permanent Address</label>
                        <textarea class="form-control" name="permanent_address" id="permanent_address" rows="4">{{ $students->permanent_address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="form-control">
                        <div class="mt-2">
                            <img src="{{ asset('backend/images/students/'.$students->image)}}" alt="Student Image"
                                height="100" width="100">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
