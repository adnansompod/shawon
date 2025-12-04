<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Pharmecy;
use App\Models\Hospital;

class FrontendController extends Controller
{
    public function show()
    {
        return view('frontend.pages.home');
    }
    public function doctor()
    {
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('frontend.pages.doctor', compact('doctors', 'departments'));
    }
    public function doctorDetails($id)
    {
        $doctor = Doctor::with('department')->findOrFail($id);
        return view('frontend.pages.doctorDetails', compact('doctor'));
    }
    public function appointment()
    {
        $departments = Department::all();
        $doctors = Doctor::all();
        return view('frontend.pages.appointment', compact('departments', 'doctors'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function departmentDetails($id)
    {
        // Get the department by ID with its doctors eagerly loaded
        $departments = Department::all();

        // Or if you want only doctors for that department without loading the department explicitly:
        $doctors = Doctor::where('department_id', $id)->get();

        return view('frontend.pages.departmentDetails', compact('departments', 'doctors'));
    }

    public function search(Request $request)
    {
        $departments = Department::all();
        $query = $request->input('q');

        $results = Department::where('symptoms', 'like', "%{$query}%")
            ->paginate(8); // Or use ->get() if no pagination

        return view('frontend.pages.searchResult', compact('results', 'query', 'departments'));
    }
    public function agentAppointment(){
        return view('frontend.pages.agentappointment');
    }
    public function showEmergency(){
        return view('frontend.pages.showEmergency');
    }
    public function pharma(){
        $pharmacies = Pharmecy::latest()->get();
        return view('frontend.pages.pharmecy', compact('pharmacies'));
    }
    public function showHospital()
    {
        $hospitals = Hospital::latest()->get();
        return view('frontend.pages.hospital',compact('hospitals'));
    }
    public function about()
    {
        return view('frontend.pages.about');
    }


}
