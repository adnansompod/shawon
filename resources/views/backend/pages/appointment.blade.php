@extends('backend.app')

@section('title')
    Appointments
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
{{--        <div class="card-header py-3">--}}
{{--            <a href="{{route('admin.addDepartment')}}" class="btn btn-success">Add</a>--}}
{{--            <h6 class="m-0 font-weight-bold text-primary text-center">Departments</h6>--}}
{{--        </div>--}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Doctor Name</th>
                        <th>Department</th>
                        <th>Hospital</th>
                        <th>D_email</th>
                        <th>P_name</th>
                        <th>P_email</th>
                        <th>P_phone</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $key=>$appointment)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{ $appointment->doctor->name }}</td>
                            <td>{{ $appointment->doctor->department->name ?? 'N/A' }}</td>
                            <td>{{ $appointment->doctor->hospital_name }}</td>
                            <td>{{ $appointment->doctor->email }}</td>
                            <td>{{$appointment->patient_name}}</td>
                            <td>{{$appointment->patient_email}}</td>
                            <td>{{$appointment->patient_phone}}</td>
                            <td>{{$appointment->appointment_date}}</td>
                            <td>{{$appointment->message}}</td>

                            <td>
                                <form action="{{ route('appointment.delete', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this department?');">
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

