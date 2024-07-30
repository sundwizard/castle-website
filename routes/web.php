<?php

use App\Models\Event;
use App\Models\Service;
use App\Models\Program;


use Illuminate\Support\Facades\Route;
use App\Livewire\Guest\AboutComponent;
use App\Livewire\Guest\ContactComponent;
use App\Http\Controllers\DashboardController;


use App\Http\Middleware\SuperAdminMiddleware;
use App\Http\Middleware\WebsiteAdminMiddleware;
use App\Livewire\Guest\Events\EventsComponent;
use App\Livewire\Guest\Service\ServicesComponent;
use App\Livewire\Guest\Programs\ProgramsComponent;
use App\Livewire\Guest\Programs\ProgramDetailsComponent;

use App\Livewire\Guest\Events\EventDetailsComponent;

use App\Livewire\Guest\Service\ServiceDetailsComponent;
use App\Livewire\Superadmin\SuperAdminContactComponent;
use App\Livewire\Superadmin\SuperAdminDashboardComponent;


//website admin components
use App\Livewire\WebsiteAdmin\WebsiteAdminDashbaord;
use App\Livewire\WebsiteAdmin\Services\NewServiceComponent;
use App\Livewire\WebsiteAdmin\Services\WebsiteAdminServiceComponent;
use App\Livewire\WebsiteAdmin\Services\EditServiceComponent;

use App\Livewire\WebsiteAdmin\Blogs\NewBlogComponent;
use App\Livewire\WebsiteAdmin\Blogs\BlogsComponent;
use App\Livewire\WebsiteAdmin\Blogs\EditBlogComponent;

use App\Livewire\WebsiteAdmin\Events\NewEventComponent;
use App\Livewire\WebsiteAdmin\Events\WebsiteAdminEventsComponent;
use App\Livewire\WebsiteAdmin\Events\EditEventComponent;

use App\Livewire\WebsiteAdmin\Sponsors\NewSponsorComponent;
use App\Livewire\WebsiteAdmin\Sponsors\SponsorsComponent;
// use App\Livewire\WebsiteAdmin\Sponsors\EditSponsorComponent;
use App\Livewire\WebsiteAdmin\Profile\ProfileComponent;
use App\Livewire\WebsiteAdmin\Profile\ChangePasswordComponent;

use App\Livewire\WebsiteAdmin\Faqs\NewFaqComponent;
use App\Livewire\WebsiteAdmin\Faqs\FaqsComponent;

use App\Livewire\Guest\Programme\ProgrammesComponent;
use App\Livewire\Guest\Programme\ProgrammeDetailsComponent;

use App\Livewire\WebsiteAdmin\Grow\UploadGrowComponent;
use App\Livewire\WebsiteAdmin\Grow\GrowthsComponent;
use App\Livewire\WebsiteAdmin\Grow\EditGrowComponent;

use App\Livewire\WebsiteAdmin\Newsletters\SendNewsletterComponent;
use App\Livewire\WebsiteAdmin\Newsletters\SentNewsletterComponent;

use App\Livewire\WebsiteAdmin\Sermons\NewSermonComponent;
use App\Livewire\WebsiteAdmin\Sermons\EditSermonComponent;
use App\Livewire\WebsiteAdmin\Sermons\SermonsComponent;

use App\Livewire\WebsiteAdmin\Teams\NewTeamComponent;
use App\Livewire\WebsiteAdmin\Teams\ManageTeamsComponent;

use App\Livewire\WebsiteAdmin\Ebooks\UploadEbookComponent;
use App\Livewire\WebsiteAdmin\Ebooks\ManageEbooksComponent;
use App\Livewire\WebsiteAdmin\Ebooks\EbookRequestsComponent;

Route::get('/', function () {
    $services = Service::limit(3)->get();
    $programs = Program::limit(3)->get();
    $nextEvent = Event::where('event_date','>=',date('Y-m-d'))->orderby('event_date','Asc')->first();
    $events = Event::all();
    return view('welcome',compact('services','nextEvent','events','programs'));
})->name('welcome');

Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/about',AboutComponent::class)->name('about');

Route::get('/what-we-do',ServicesComponent::class)->name('services');
Route::get('/services/{title?}/{id}',ServiceDetailsComponent::class)->name('services.show');

Route::get('/our-programs',ProgramsComponent::class)->name('programs');
Route::get('/programs/{title?}/{id}',ProgramDetailsComponent::class)->name('programs.show');

Route::get('/events',EventsComponent::class)->name('events');
Route::get('/events/{id}',EventDetailsComponent::class)->name('events.show');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[ DashboardController::class,'dashboard'])->name('dashboard');

    //website admin route
    Route::middleware([WebsiteAdminMiddleware::class])->prefix('website-admin')->group(function(){
        Route::get('/dashboard',WebsiteAdminDashbaord::class)->name('websiteadmin.dashboard');
        Route::get('/services/create',NewServiceComponent::class)->name('services.create');
        Route::get('/services',WebsiteAdminServiceComponent::class)->name('services.index');
        Route::get('/services/{id}/edit',EditServiceComponent::class)->name('services.edit');

        Route::get('/blogs/create',NewBlogComponent::class)->name('blogs.create');
        Route::get('/blogs',blogsComponent::class)->name('blogs.index');
        Route::get('/blogs/{id}/edit',EditBlogComponent::class)->name('blogs.edit');

        Route::get('/events/create',NewEventComponent::class)->name('events.create');
        Route::get('/events',WebsiteAdminEventsComponent::class)->name('events.index');
        Route::get('/events/{id}/edit',EditEventComponent::class)->name('events.edit');

        Route::get('/sponsors/create',NewSponsorComponent::class)->name('sponsors.create');
        Route::get('/sponsors',SponsorsComponent::class)->name('sponsors.index');

        Route::get('/ebook/create',UploadEbookComponent::class)->name('ebooks.create');
        Route::get('/ebooks',ManageEbooksComponent::class)->name('ebooks.index');
        Route::get('/ebooks-request',EbookRequestsComponent::class)->name('ebooks.requests');

        Route::get('/grow-with-mike/create',UploadGrowComponent::class)->name('grow.create');
        Route::get('/grow-with-mike',GrowthsComponent::class)->name('grow.index');
        Route::get('/grow-with-mike/{id}',EditGrowComponent::class)->name('grow.edit');

        Route::get('/sermons/create',NewSermonComponent::class)->name('sermons.create');
        Route::get('/sermons/create/{id}',EditSermonComponent::class)->name('sermons.edit');
        Route::get('/sermons',SermonsComponent::class)->name('sermons.index');

        Route::get('/team/create',NewTeamComponent::class)->name('teams.create');
        Route::get('/team',ManageTeamsComponent::class)->name('teams.index');

        Route::get('/newsletter/snd',SendNewsletterComponent::class)->name('newsletter.send');
        Route::get('/sent-newsletter',SentNewsletterComponent::class)->name('newsletter.sent');

        Route::get('/frequently-asked-question/create',NewFaqComponent::class)->name('faqs.create');
        Route::get('/frequently-asked-question',FaqsComponent::class)->name('faqs.index');

        Route::get('/profile',ProfileComponent::class)->name('profile');
        Route::get('/change-password',ChangePasswordComponent::class)->name('change-password');
    });

    Route::middleware([SuperAdminMiddleware::class])->prefix('super-admin')->group(function(){
        Route::get('/dashboard',SuperAdminDashboardComponent::class)->name('superadmin.dashboard');

        //route for contacts ,messages
        Route::get('/vcontact',SuperAdminContactComponent::class)->name('vcontact');

    });
});
