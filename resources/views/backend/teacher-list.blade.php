@extends('backend.master')
@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Teacher List</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>Teacher ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($teachers as $teacher)
                <tr>
                <td>{{$loop->index+1}}</td>
                <td>
                    <img src="{{asset('backend/images/teachers/'.$teacher->profile_image)}}" alt="" height="200" width="200" class="rounded">
                </td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->designation}}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    
                    <form action="#" method="POST" class="d-inline">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this teacher?')">Delete</button>
                    </form>                 
                    <a href="#" class="btn btn-sm btn-success">Assign</a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
    <div class="">
        <center>Teacher Team  of  Company</center>
    </div>
</div>
@endsection