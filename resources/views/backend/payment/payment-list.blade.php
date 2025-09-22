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
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $payment->student->name }}</td>
                                <td>{{ $payment->student->id }}</td>
                                <td>{{ $payment->course ? $payment->course->course_fee : 'N/A' }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td>{{ $payment->created_at->format('d M Y') }}</td>
                                <td class="d-flex justify-content-center gap-2">
                                    {{-- Print Button --}}
                                    <a href="{{ url('/payment/print/' . $payment->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fa-solid fa-print"></i>
                                    </a>
                                    <a href="{{ url('/payment/delete/' . $payment->id) }}" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this payment?');">
                                        <i class="fa-solid fa-trash"></i>
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
