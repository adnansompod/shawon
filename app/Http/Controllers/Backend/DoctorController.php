<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function addDoctor(){
        $departments = Department::all();
        return view('backend.pages.addDoctor',compact('departments'));
    }

    public function addDepartment(){
        return view('backend.pages.addDepartment');
    }
    public function allDoctors(){
        $doctors = Doctor::with('department')->latest()->get();
        return view('backend.pages.allDoctors',compact('doctors'));
    }
    public function storeDoctor(Request $request)
    {
        // Validate input
        $request->validate([
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024',
            'name'          => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'degree'        => 'string|max:255',
            'speciality'    => 'string|max:255',
            'hospital_name' => 'string|max:255',
            'location'      => 'string|max:255',
            'contact_num'   => 'string|max:20',
            'email'         => 'email|max:255|unique:doctors,email',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '_post_img.' . $request->image->extension();
            $request->image->storeAs('images/posts', $fileName, 'public');
            $imagePath = 'images/posts/' . $fileName;  // This is the path relative to storage/app/public
        }



        // Save doctor to database
        Doctor::create([
            'image'         => $imagePath,
            'name'          => $request->name,
            'department_id' => $request->department_id,
            'degree'        => $request->degree,
            'speciality'    => $request->speciality,
            'hospital_name' => $request->hospital_name,
            'location'      => $request->location,
            'contact_num'   => $request->contact_num,
            'email'         => $request->email,
        ]);

        // Redirect back with success
        return redirect()->route('admin.allDoctors')->with('success', 'Doctor added successfully!');
    }
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);

        // Delete image file if exists
        if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
            Storage::disk('public')->delete($doctor->image);
        }

        // Delete doctor record
        $doctor->delete();

        return redirect()->route('admin.allDoctors')->with('success', 'Doctor deleted successfully!');
    }

}
