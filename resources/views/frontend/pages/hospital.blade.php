@extends('frontend.app')

@section('title')
    Hospitals
@endsection
@section('body')
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-md-8 offset-md-2">
                <table class="table table-striped table-hover border">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Hospital Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Hotline Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hospitals as $key => $hospital)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $hospital->name }}</td>
                            <td>{{ $hospital->location }}</td>
                            <td>{{ $hospital->number }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
