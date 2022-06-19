<?php

namespace App\Providers;

use App\Http\Controllers\BusController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorcycleController;

use App\Interfaces\ImageManagement;
use App\Interfaces\Vehicle;

use App\Implementations\GoogleDriveImageManagement;
use App\Implementations\Bus;
use App\Implementations\Car;
use App\Implementations\Motorcycle;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImageManagement::class, GoogleDriveImageManagement::class);

        $this->app->when(BusController::class)
                  ->needs(Vehicle::class)
                  ->give(function () {
                      return new Bus();
                  });

        $this->app->when(CarController::class)
                  ->needs(Vehicle::class)
                  ->give(function () {
                      return new Car();
                  });

        $this->app->when(MotorcycleController::class)
                  ->needs(Vehicle::class)
                  ->give(function () {
                      return new Motorcycle();
                  });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
