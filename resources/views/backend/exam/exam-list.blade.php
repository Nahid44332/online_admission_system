@extends('backend.master')
@section('content')
<div class="container">
    <a href="{{url('/admin/exam/create')}}" class="btn btn-primary">Upload Exam File</a>
</div>
<div class="container mt-4">
     <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Exam Paper List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Exam List</li>
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
                <th>Exam Title</th>
                <th>File Name</th>
                <th>Upload Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>1</td>
                    <td>Final Exam 2025</td>
                    <td>Computer MCQ Batch-01</td>
                    <td>09 Sep 2025</td>
                    <td>
                        <a href="#" class="btn btn-primary">view</a>
                        <a href="#" class="btn btn-success">Print</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="">
        <center>Exam for Students</center>
    </div>
</div>
@endsection