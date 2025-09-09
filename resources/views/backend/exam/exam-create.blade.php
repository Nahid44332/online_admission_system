@extends('backend.master')
@section('content')

<div class="container mt-4">
    <h3>Upload Exam File</h3>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Exam Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Select Exam File</label>
            <input type="file" name="exam_file" class="form-control" required>
            <small class="text-muted">Allowed: .doc, .docx, .pdf (Max: 5MB)</small>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
        <a href="{{ url('/admin/exam') }}" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection
