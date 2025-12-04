@extends('backend.app')

@section('title')
    Add Department
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Add Department</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('departmentForm')}}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="form-group mb-3">
                            <label for="name">Department Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter department name">
                        </div>

                        <!-- Degree -->
                        <div class="form-group mb-3">
                            <label for="degree">Symptoms</label>
                            <input type="text" name="symptoms" class="form-control" placeholder="Headache, Chest pain, etc.">
                        </div>
                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

