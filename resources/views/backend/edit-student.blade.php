@extends("backend.master")
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Form {{$students->name}}</h4>
                    <p class="card-description"> Edit Information</p>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Father Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mother Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date Of Birth</label>
                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-select" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Blood</label>
                        <select class="form-select" id="exampleSelectGender">
                          <option>A+</option>
                          <option>A-</option>
                          <option>B+</option>
                          <option>B-</option>
                          <option>O+</option>
                          <option>O-</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Nationality</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nationality">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Religion</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Nationality">
                      </div>
                      <H2>Educational Info</H2>
                      <div class="form-group">
                        <label for="exampleInputEmail3">SSC Passing Year</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="SSC Passing Year">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">SSC Board</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="SSC Board">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">SSC Rusult</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="SSC Rusult">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">HSC Passing Year</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="HSC Passing Year">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">HSC Board</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="HSC Board">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">HSC Rusult</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="HSC Rusult">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Course</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="course">
                      </div>
                       <div class="form-group">
                        <label for="exampleTextarea1">Present Address</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Permmanent Address</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection