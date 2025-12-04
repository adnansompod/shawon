@extends('backend.app')

@section('title')
    All Doctors
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('admin.addDoctor')}}" class="btn btn-success">Add</a>
            <h6 class="m-0 font-weight-bold text-primary text-center">Doctors</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Department Name</th>
                        <th>Degree</th>
                        <th>Speciality</th>
                        <th>Hospital Name</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $key=>$doctor)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>
                                @if($doctor->image)
                                    <img src="{{ asset('storage/' . $doctor->image) }}" alt="Doctor Image" width="80" height="80" style="object-fit: cover; border-radius: 5px;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{$doctor->name}}</td>
                            <td>{{ $doctor->department->name ?? 'N/A' }}</td>
                            <td>{{ \Illuminate\Support\Str::words($doctor->degree, 5, '...') }}</td>
                            <td>{{$doctor->speciality}}</td>
                            <td>{{$doctor->hospital_name}}</td>
                            <td>{{$doctor->location}}</td>
                            <td>{{$doctor->contact_num}}</td>
                            <td>{{$doctor->email}}</td>
                            <td>
                                <form action="{{ route('doctor.delete', $doctor->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this doctor?');">
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

