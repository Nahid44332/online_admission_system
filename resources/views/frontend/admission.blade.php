@extends('frontend.master')
@section('content')
<div class="container mt-4">
    <h3 class="text-center mb-4">🎓 Student Admission Form</h3>

    <div class="card shadow-lg p-4 rounded-3">
        <form action="{{url('/admission/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <!-- Full Name -->
                <div class="form-group col-md-6 mb-3">
                    <label>Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                </div>

                <!-- Father Name -->
                <div class="form-group col-md-6 mb-3">
                    <label>Father's Name <span class="text-danger">*</span></label>
                    <input type="text" name="father_name" class="form-control" placeholder="Enter father's name" required>
                </div>

                <!-- Mother Name -->
                <div class="form-group col-md-6 mb-3">
                    <label>Mother's Name <span class="text-danger">*</span></label>
                    <input type="text" name="mother_name" class="form-control" placeholder="Enter mother's name" required>
                </div>

                <!-- Date of Birth -->
                <div class="form-group col-md-6 mb-3">
                    <label>Date of Birth <span class="text-danger">*</span></label>
                    <input type="date" name="dob" class="form-control" required>
                </div>

                <!-- Gender -->
                <div class="form-group col-md-6 mb-3">
                    <label>Gender <span class="text-danger">*</span></label>
                    <select name="gender" class="form-control" required>
                        <option selected disabled>Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Email -->
                <div class="form-group col-md-6 mb-3">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>

                <!-- Phone -->
                <div class="form-group col-md-6 mb-3">
                    <label>Phone Number <span class="text-danger">*</span></label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
                </div>
                {{-- Blood --}}
                 <div class="form-group col-md-6 mb-3">
                    <label>Blood Group</label>
                    <select name="blood" class="form-control">
                        <option selected disabled>Choose...</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>
                <!-- Address -->
                <div class="form-group col-md-12 mb-3">
                    <label>Present Address <span class="text-danger">*</span></label>
                    <textarea name="address" rows="2" class="form-control" placeholder="Enter present address" required></textarea>
                </div>

                <!-- Permanent Address -->
                <div class="form-group col-md-12 mb-3">
                    <label>Permanent Address</label>
                    <textarea name="permanent_address" rows="2" class="form-control" placeholder="Enter permanent address"></textarea>
                </div>

                <!-- Nationality -->
                <div class="form-group col-md-6 mb-3">
                    <label>Nationality <span class="text-danger">*</span></label>
                    <input type="text" name="nationality" class="form-control" value="Bangladeshi" required>
                </div>

                <!-- Religion -->
                <div class="form-group col-md-6 mb-3">
                    <label>Religion <span class="text-danger">*</span></label>
                    <select name="religion" class="form-control" required>
                        <option selected disabled>Choose...</option>
                        <option>Islam</option>
                        <option>Hindu</option>
                        <option>Christian</option>
                        <option>Buddhist</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- SSC Result Section -->
                <div class="col-md-12">
                    <h5 class="mt-4 mb-2 text-primary">📘 SSC Result Information</h5>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>SSC Passing Year</label>
                    <input type="text" name="ssc_passing_year" class="form-control" placeholder="e.g. 2020">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>SSC Board</label>
                    <select name="ssc_board" class="form-control">
                        <option selected disabled>Choose...</option>
                        <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Rajshahi</option>
                        <option>Khulna</option>
                        <option>Barisal</option>
                        <option>Sylhet</option>
                        <option>Comilla</option>
                        <option>Dinajpur</option>
                        <option>Mymensingh</option>
                        <option>Madrasah</option>
                        <option>Technical</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>SSC GPA</label>
                    <input type="text" name="ssc_result" class="form-control" placeholder="e.g. 4.80">
                </div>

                <!-- HSC Result Section -->
                <div class="col-md-12">
                    <h5 class="mt-4 mb-2 text-primary">📗 HSC Result Information</h5>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>HSC Passing Year</label>
                    <input type="text" name="hsc_passing_year" class="form-control" placeholder="e.g. 2022">
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>HSC Board</label>
                    <select name="hsc_board" class="form-control">
                        <option selected disabled>Choose...</option>
                        <option>Dhaka</option>
                        <option>Chittagong</option>
                        <option>Rajshahi</option>
                        <option>Khulna</option>
                        <option>Barisal</option>
                        <option>Sylhet</option>
                        <option>Comilla</option>
                        <option>Dinajpur</option>
                        <option>Mymensingh</option>
                        <option>Madrasah</option>
                        <option>Technical</option>
                    </select>
                </div>
                <div class="form-group col-md-4 mb-3">
                    <label>HSC GPA</label>
                    <input type="text" name="hsc_result" class="form-control" placeholder="e.g. 5.00">
                </div>

                <!-- Class Applied For -->
                <div class="form-group col-md-6 mb-3">
                    <label>Applying For Course</label>
                    <select name="course_id" class="form-control">
                        <option selected disabled>Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{$course->id}}">{{$course->title}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Photo -->
                <div class="form-group col-md-6 mb-3">
                    <label>Upload Photo <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                 <input type="checkbox" id="all_correct" name="all_correct" value="1">I hereby declare that all the above information are correct and assure that I will abide by all the rules.
                <!-- Submit -->
                <div class="form-group col-md-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 mt-3">Submit Application</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
