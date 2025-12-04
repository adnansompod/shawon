@extends('backend.app')

@section('title')
    Emergency Request
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Emergency Request</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Number</th>
                        <th>Time</th>
                        <th>Created_at</th>
                        <th>Action </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($emergencies as $key=>$emergency)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$emergency->name}}</td>
                            <td>{{$emergency->location}}</td>
                            <td>{{$emergency->number}}</td>
                            <td>{{$emergency->time}}</td>
                            <td>{{ $emergency->created_at->format('M d, Y') }}</td>
                            <td>
                                <form action="{{ route('emergency.delete', $emergency->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this department?');">
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

