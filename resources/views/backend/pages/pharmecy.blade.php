@extends('backend.app')

@section('title')
    All Pharmecy
@endsection

@section('body')
    <!-- DataTales Example -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Pharmecy Name</th>
                                    <th>Location</th>
                                    <th>Number</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pharmacies as $key => $pharmecy)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $pharmecy->name }}</td>
                                        <td>{{ $pharmecy->location }}</td>
                                        <td>{{ $pharmecy->number }}</td>
                                        <td>
                                            <form action="{{ route('pharma.delete', $pharmecy->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')">
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
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Add Pharma</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('addPharma') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Number</label>
                                <input type="text" name="number" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

