@extends('backend.master')
@section('content')
<div class="container">
    <a href="#" class="btn btn-primary">Upload Student Result</a>
</div>
<div class="container mt-4">
     <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Result Sheet</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Result Sheet</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>SL</th>
                <th>Image</th>
                <th>Name</th>
                <th>Student Id</th>
                <th>Total Marks</th>
                <th>Marks</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div>
        <center>Result for Students</center>
    </div>
</div>
@endsection