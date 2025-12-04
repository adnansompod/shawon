<?php

namespace App\Providers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Pharmecy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Doctor;
use App\Models\Hospital;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share all doctors to all views
        View::share('doctors', Doctor::all());

        // Share counts with all views
        View::composer('*', function ($view) {
            $view->with([
                'hospitalCount'    => Hospital::count(),
                'doctorCount'      => Doctor::count(),
                'appointmentCount' => Appointment::count(),
                'pharmecyCount'    => Pharmecy::count(),
                'departmentCount'  => Department::count(),
            ]);
        });


    }
}
