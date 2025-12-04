<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact; // Optional: if you want to save in DB
use App\Models\People;
use App\Models\Pharmecy;
use App\Models\Hospital;

class ContactController extends Controller
{
    public function contactFormData(Request $request)
    {
        // ✅ Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'email|max:255',
            'phone' => 'string|max:20',
            'subject' => 'string|max:255',
            'message' => 'required|string',
        ]);

        // ✅ Optional: Save to database
        Contact::create($validated);



        // ✅ Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function showContact(){
        $contacts = Contact::latest()->get(); // defaults to created_at desc
        return view('backend.pages.contact',compact('contacts'));
    }
    public function emergency(){
        $emergencies = People::latest()->get();
        return view('backend.pages.emergency', compact('emergencies'));
    }
    public function emergencyStore(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'location' => 'required|string',
            'number'   => 'required|string',
            'time'     => 'required'
        ]);

        People::create([
            'name'     => $request->name,
            'location' => $request->location,
            'number'   => $request->number,
            'time'     => $request->time,
        ]);

        return back()->with('success', 'Form submitted successfully!');
    }

    public function pharmecy(){
        $pharmacies = Pharmecy::latest()->get();
        return view('backend.pages.pharmecy', compact('pharmacies'));
    }
    public function addPharma(Request $request){
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'number' => 'required',
        ]);

        Pharmecy::create($request->all());

        return back()->with('success', 'Data saved successfully!');
    }
    public function destroy($id)
    {
        $delete = Pharmecy::findOrFail($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }

    public function hospital(){
        $hospitals = Hospital::latest()->get();
        return view('backend.pages.hospital',compact('hospitals'));
    }
    public function addHospital(Request $request){
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'number' => 'required',
        ]);

        Hospital::create($request->all());
        return back()->with('success', 'Data saved successfully!');
    }
    public function hospitalDestroy($id)
    {
        $delete = Hospital::findOrFail($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }
    public function emergencyDestroy($id)
    {
        $delete = People::findOrFail($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }
    public function contactDestroy($id)
    {
        $delete = Contact::findOrFail($id);
        $delete->delete();

        return redirect()->back()->with('success', 'Deleted successfully!');
    }

}
