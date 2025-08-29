@extends('frontend.master')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">Application for Admission</h3>
                    <small>Masters in <strong>Information Technology</strong></small>
                </div>

                <div class="card-body p-4">
                    <form action="#" method="POST">
                        @csrf

                        {{-- Personal Information --}}
                        <h5 class="text-primary mb-3 pb-2 border-bottom">Personal Information</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Applicant's Name</label>
                                <input type="text" class="form-control" placeholder="Enter full name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Father's Name</label>
                                <input type="text" class="form-control" placeholder="Enter father's name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" placeholder="Enter mother's name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Date of Birth</label>
                                <div class="d-flex gap-2">
                                    <select class="form-select"><option>Day</option></select>
                                    <select class="form-select"><option>Month</option></select>
                                    <select class="form-select"><option>Year</option></select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" placeholder="01XXXXXXXXX">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Religion</label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>Islam</option>
                                    <option>Hindu</option>
                                    <option>Christian</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Blood Group</label>
                                <select class="form-select">
                                    <option>Select</option>
                                    <option>A+</option>
                                    <option>O+</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Nationality</label>
                                <input type="text" value="Bangladeshi" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">National ID</label>
                                <input type="text" class="form-control" placeholder="Enter NID (optional)">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="example@mail.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Present Address</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Permanent Address</label>
                                <textarea class="form-control" rows="2"></textarea>
                            </div>
                        </div>

                        {{-- Academic Info --}}
                        <h5 class="text-primary mt-4 mb-3 pb-2 border-bottom">Academic Qualifications</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="card shadow-sm p-3">
                                    <h6 class="fw-bold text-center mb-3">SSC or Equivalent</h6>
                                    <input type="text" placeholder="Examination" class="form-control mb-2">
                                    <input type="text" placeholder="Board" class="form-control mb-2">
                                    <input type="text" placeholder="Roll No" class="form-control mb-2">
                                    <input type="text" placeholder="Result" class="form-control mb-2">
                                    <input type="text" placeholder="Group" class="form-control mb-2">
                                    <input type="text" placeholder="Passing Year" class="form-control mb-2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow-sm p-3">
                                    <h6 class="fw-bold text-center mb-3">HSC or Equivalent</h6>
                                    <input type="text" placeholder="Examination" class="form-control mb-2">
                                    <input type="text" placeholder="Board" class="form-control mb-2">
                                    <input type="text" placeholder="Roll No" class="form-control mb-2">
                                    <input type="text" placeholder="Result" class="form-control mb-2">
                                    <input type="text" placeholder="Group" class="form-control mb-2">
                                    <input type="text" placeholder="Passing Year" class="form-control mb-2">
                                </div>
                            </div>
                        </div>

                        {{-- Declaration --}}
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label">I hereby declare that all the above information is correct and I will abide by all the rules.</label>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success btn-lg px-5 shadow">
                                Submit Application
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
