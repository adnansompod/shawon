@extends('frontend.app')

@section('title')
    Doctor Details
@endsection

@section('body')
    <!-- Doctor Details -->
    <div class="doctor-details-area section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="doctor-details-item doctor-details-left">
                        <img src="{{ asset('storage/' . $doctor->image) }}" alt="Doctor Image">
                        <div class="doctor-details-contact">
                            <h3>Contact info</h3>
                            <ul class="basic-info">
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    Call : {{$doctor->contact_num ?? ""}}
                                </li>
                                <li>
                                    <i class="icofont-ui-message"></i>
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="026a676e6e6d426f67667167742c616d6f">{{$doctor->email ?? ""}}</a>
                                </li>
                                <li>
                                    <i class="icofont-hospital"></i>
                                    {{$doctor->hospital_name ?? ""}}
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    {{$doctor->location ?? ""}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="doctor-details-item">
                        <div class="doctor-details-right">
                            <div class="doctor-name">
                                <h3 class="name">{{$doctor->name ?? ""}}</h3>
                                <p class="deg">{{$doctor->department->name ?? ""}}</p>
                                <p class="degree">{{$doctor->degree ?? ""}}</p>
                            </div>
                            <div class="doctor-details-biography">
                                <h3>Speciality</h3>
                                <ul>
                                    <li>{{$doctor->speciality ?? ""}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Get Appointment Form -->
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="appointment-form">
                        <h3>Get Appointment</h3>
                        <form action="{{ route('appointments.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">

                            <div class="form-group">
                                <label>Doctor Name</label>
                                <input type="text" class="form-control" value="{{ $doctor->name ?? '' }}" disabled>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" value="{{ $doctor->department->name ?? '' }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="patient_name">Your Name</label>
                                <input type="text" class="form-control" id="patient_name" name="patient_name" required>
                            </div>

                            <div class="form-group">
                                <label for="patient_email">Your Email</label>
                                <input type="email" class="form-control" id="patient_email" name="patient_email" required>
                            </div>

                            <div class="form-group">
                                <label for="patient_phone">Phone Number</label>
                                <input type="tel" class="form-control" id="patient_phone" name="patient_phone" required>
                            </div>

                            <div class="form-group">
                                <label for="appointment_date">Preferred Date</label>
                                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Additional Message (optional)</label>
                                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Book Appointment</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- End Get Appointment Form -->


        </div>
    </div>
    <!-- End Doctor Details -->
@endsection
