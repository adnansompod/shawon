@extends('frontend.app')

@section('title')
    Pharmecy
@endsection

@section('body')
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-md-8 offset-md-2">
                <table class="table table-striped table-hover border">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Pharmecy Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pharmacies as $key => $pharmecy)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $pharmecy->name }}</td>
                            <td>{{ $pharmecy->location }}</td>
                            <td>{{ $pharmecy->number }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
