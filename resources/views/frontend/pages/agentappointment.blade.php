@extends('frontend.app')

@section('title')
    Agent Appointment
@endsection
@section('body')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5 mb-5">
                <div class="appointment-form">
                    <form action="{{ route('appointments.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <select class="form-control" name="doctor_id" id="doctor_id" required>
                                <option value="">-- Choose a Doctor --</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Your Name..." required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="patient_email" name="patient_email" placeholder="your email..." required>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" id="patient_phone" name="patient_phone" placeholder="phone..." required>
                        </div>

                        <div class="form-group">
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
    </div>
@endsection
