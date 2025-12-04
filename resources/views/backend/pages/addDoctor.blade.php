@extends('backend.app')

@section('title')
    Add Doctor
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Add Doctor</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.doctorForm')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Image -->
                            <div class="col-md-6 mb-3">
                                <label for="image">Doctor Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <!-- Name -->
                            <div class="col-md-6 mb-3">
                                <label for="name">Doctor Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter doctor name">
                            </div>

                            <!-- Department -->
                            <div class="col-md-6 mb-3">
                                <label for="department_id">Select Department</label>
                                <select name="department_id" id="department_id" class="form-control" required>
                                    <option value="">-- Select Department --</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Degree -->
                            <div class="col-md-6 mb-3">
                                <label for="degree">Degree</label>
                                <input type="text" name="degree" class="form-control" placeholder="MBBS, FCPS, etc.">
                            </div>

                            <!-- Speciality -->
                            <div class="col-md-6 mb-3">
                                <label for="speciality">Speciality</label>
                                <input type="text" name="speciality" class="form-control" placeholder="Cardiologist, Neurologist...">
                            </div>

                            <!-- Hospital Name -->
                            <div class="col-md-6 mb-3">
                                <label for="hospital_name">Hospital Name</label>
                                <input type="text" name="hospital_name" class="form-control" placeholder="Enter hospital name">
                            </div>

                            <!-- Location -->
                            <div class="col-md-6 mb-3">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" placeholder="Enter location">
                            </div>

                            <!-- Contact Number -->
                            <div class="col-md-6 mb-3">
                                <label for="contact_num">Contact Number</label>
                                <input type="text" name="contact_num" class="form-control" placeholder="Enter phone number">
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email">Doctor Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>

                            <!-- Submit -->
                            <div class="col-md-6 mt-4">
                                <button type="submit" class="btn btn-primary">Save Doctor</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
