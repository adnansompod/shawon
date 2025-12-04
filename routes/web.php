<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthorController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\OpenRouterController;

//Frontend
Route::get('/', [FrontendController::class, 'show'])->name('show.home');
Route::get('/doctors', [FrontendController::class, 'doctor'])->name('show.doctor');
Route::get('/doctorDetails/{id}', [FrontendController::class, 'doctorDetails'])->name('show.doctorDetails');
Route::get('/departmentDetails/{id}', [FrontendController::class, 'departmentDetails'])->name('show.departmentDetails');
Route::get('/contact', [FrontendController::class, 'contact'])->name('show.contact');
Route::get('/search', [FrontendController::class, 'search'])->name('department.search');
Route::post('/contactFormData', [ContactController::class, 'contactFormData'])->name('contactFormData');
Route::get('/docDetails/{id}', [FrontendController::class, 'doctorDetails'])->name('show.doctorDetails');
// Patient books an appointment
Route::post('/appointments', [AppointmentController::class, 'appstore'])->name('appointments.store');
Route::get('/agentAppointment', [FrontendController::class, 'agentAppointment'])->name('show.agentAppointment');
Route::get('/emergency', [FrontendController::class, 'showEmergency'])->name('show.emergency');
Route::post('/storeEmergency', [ContactController::class, 'emergencyStore'])->name('emergency.store');
Route::get('/pharma', [FrontendController::class, 'pharma'])->name('pharma');
Route::get('/hospital', [FrontendController::class, 'showHospital'])->name('show.hospital');
Route::get('/about', [FrontendController::class, 'about'])->name('show.about');

Route::get('/ai', [OpenRouterController::class, 'index'])->name('openrouter.show');
Route::post('/send', [OpenRouterController::class, 'send'])->name('openrouter.send');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/authors', [AuthorController::class, 'showAuthor'])->name('admin.showAuthor');
    Route::delete('/author/{id}/delete', [AuthorController::class, 'destroy'])->name('author.delete');

    Route::get('/addDoctor', [DoctorController::class, 'addDoctor'])->name('admin.addDoctor');
    Route::get('/allDoctors', [DoctorController::class, 'allDoctors'])->name('admin.allDoctors');
    Route::post('/doctorForm', [DoctorController::class, 'storeDoctor'])->name('admin.doctorForm');
    Route::delete('/doctor/{id}/delete', [DoctorController::class, 'destroy'])->name('doctor.delete');


    Route::get('/addDepartment', [DoctorController::class, 'addDepartment'])->name('admin.addDepartment');
    Route::get('/allDepartments', [DepartmentController::class, 'allDepartments'])->name('admin.allDepartments');
    Route::post('/departmentForm', [DepartmentController::class, 'store'])->name('departmentForm');
    Route::delete('/department/{id}/delete', [DepartmentController::class, 'destroy'])->name('department.delete');

    Route::get('/contactForm', [ContactController::class, 'showContact'])->name('admin.contact');
    Route::delete('/contact/{id}/delete', [ContactController::class, 'contactDestroy'])->name('contact.delete');

// Admin: view all appointments
    Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('admin.appointment');
    Route::delete('/appointment/{id}/delete', [AppointmentController::class, 'appointmentDestroy'])->name('appointment.delete');

    Route::get('/admin/emergency', [ContactController::class, 'emergency'])->name('admin.emergency');
    Route::delete('/emergency/{id}/delete', [ContactController::class, 'emergencyDestroy'])->name('emergency.delete');

    Route::get('/admin/pharmecy', [ContactController::class, 'pharmecy'])->name('admin.pharmecy');
    Route::post('/pharma', [ContactController::class, 'addPharma'])->name('addPharma');
    Route::delete('/pharma/{id}/delete', [ContactController::class, 'destroy'])->name('pharma.delete');

    Route::get('/admin/hospital', [ContactController::class, 'hospital'])->name('admin.hospital');
    Route::post('/addHospital', [ContactController::class, 'addHospital'])->name('addHospital');
    Route::delete('/hospital/{id}/delete', [ContactController::class, 'hospitalDestroy'])->name('hospital.delete');








    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
