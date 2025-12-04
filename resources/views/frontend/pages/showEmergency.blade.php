@extends('frontend.app')

@section('title')
    Emergency
@endsection

@section('body')
<div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center" style="background: #176ABC">
                        <h4 style="color: #fff">Emergency Help</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{route("emergency.store")}}" method="POST">
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

                            <div class="mb-3">
                                <label class="form-label">Time</label>
                                <input type="time" name="time" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="card">
                    <div class="card-header text-center" style="background: red">
                        <h4>Quick Access</h4>
                    </div>

                    <div class="card-body">
                        <h5 class="mb-3 text-center">01646913336</h5>
                        <h5 class="mb-3 text-center">01903098304</h5>
                        <h5 class="mb-3 text-center">01980312210</h5>
                        <h5 class="mb-3 text-center">01602309041</h5>
                    </div>
                </div>
            </div>

        </div>



</div>


@endsection
