<?php

namespace App\Http\Controllers\Backend;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; // ✅ Correct Request import
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    public function allDepartments(){
        $departments = Department::latest()->get(); // defaults to created_at desc
        return view('backend.pages.allDepartments',compact('departments'));
    }
    public function store(Request $request)
    {
        // ✅ Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:departments,name',
            'symptoms' => 'nullable|string|max:500',
        ]);

        // ✅ Store department
        Department::create($validated);

        // ✅ Redirect back with success message
        return redirect()->route('admin.allDepartments')->with('success', 'Department added successfully!');
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        // Delete doctor record
        $department->delete();

        return redirect()->route('admin.allDepartments')->with('success', 'Department deleted successfully!');
    }
}
