<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


use App\Livewire\Guest\AboutComponent;
use App\Livewire\Guest\ContactComponent;
use App\Livewire\Guest\Service\ServicesComponent;
use App\Livewire\Guest\Service\ServiceDetailsComponent;


use App\Livewire\Guest\Events\EventsComponent;
use App\Livewire\Guest\Events\EventDetailsComponent;
use App\Livewire\Superadmin\SuperAdminDashboardComponent;

use App\Http\Middleware\SuperAdminMiddleware;

use App\Models\Service;
use App\Models\Event;

Route::get('/', function () {
    $services = Service::limit(3)->get();
    $nextEvent = Event::orderBy('event_date','Asc')->first();
    $events = Event::all();
    return view('welcome',compact('services','nextEvent','events'));
})->name('welcome');

Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/about',AboutComponent::class)->name('about');

Route::get('/what-we-do',ServicesComponent::class)->name('services');
Route::get('/services/{title?}/{id}',ServiceDetailsComponent::class)->name('services.show');

Route::get('/events',EventsComponent::class)->name('events');
Route::get('/events/{title?}/{id}',EventDetailsComponent::class)->name('events.show');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[ DashboardController::class,'dashboard'])->name('dashboard');

    Route::middleware([SuperAdminMiddleware::class])->prefix('super-admin')->group(function(){
        Route::get('/dashboard',SuperAdminDashboardComponent::class)->name('superadmin.dashboard');
    });
});
