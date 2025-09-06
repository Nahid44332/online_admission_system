@extends('backend.master')

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Payment Overview</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Total Admission Fee</th>
                        <th scope="col">Total Payment</th>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                   @foreach ($payments as $payment)
                        <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$payment->student->name}}</td>
                        <td>{{$payment->student->id}}</td>
                        <td>{{$payment->course ? $payment->course->course_fee : 'N/A' }}</td>
                        <td>{{$payment->amount}}</td>
                        <td>{{$payment->created_at}}</td>
                        <td>
                            <a href="{{url('/payment/print/'.$payment->id)}}" class="btn btn-sm btn-primary">
                                print
                            </a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
