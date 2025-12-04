@extends('backend.app')

@section('title')
    All Departments
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.addDepartment')}}" class="btn btn-success">Add</a>
            <h6 class="m-0 font-weight-bold text-primary text-center">Departments</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $key=>$department)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->symptoms}}</td>
                            <td>{{ $department->created_at->format('M d, Y') }}</td>
                            <td>
                                <form action="{{ route('department.delete', $department->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

