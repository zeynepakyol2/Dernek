<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::GET('/sign_in', [\App\Http\Controllers\Auth\LoginController::class, 'sign_in'])
        ->name('sign_in');
    Route::POST('/sign_in', [\App\Http\Controllers\Auth\LoginController::class, 'sign_in_post']);
    Route::GET('/sign_up', [\App\Http\Controllers\Auth\LoginController::class, 'sign_up'])
        ->name('register');
    Route::POST('/sign_up', [\App\Http\Controllers\Auth\LoginController::class, 'sign_up_post']);
    Route::POST('/sign_out', [\App\Http\Controllers\Auth\LoginController::class, 'sign_out'])
         ->name('sign_out');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/',function (){
        return view('backend.page.dashboard');
    })->name('dashboard');
    //ROLES
    Route::GET('/roles', [\App\Http\Controllers\Auth\RoleController::class, 'index'])
        ->name('roles.index')
        ->middleware(['permission:roles.index']);
    Route::POST('/roles_list', [\App\Http\Controllers\Auth\RoleController::class, 'roles_list'])
        ->name('roles.list')
        ->middleware(['permission:roles.list']);
    Route::GET('/roles_edit', [\App\Http\Controllers\Auth\RoleController::class, 'rolesEdit'])
        ->name('roles.edit')
        ->middleware(['permission:roles.edit']);
    Route::POST('/roles_edit', [\App\Http\Controllers\Auth\RoleController::class, 'rolesUpdate'])
        ->name('roles.update')
        ->middleware(['permission:roles.edit']);
    Route::DELETE('/roles/{id}', [\App\Http\Controllers\Auth\RoleController::class, 'rolesDestroy'])
        ->name('roles.destroy')
        ->middleware(['permission:roles.destroy']);
    Route::POST('/roles_create', [\App\Http\Controllers\Auth\RoleController::class, 'rolesCreate'])
        ->name('roles.create')
        ->middleware(['permission:roles.create']);
    //PERMİSSİONS
    Route::GET('/permission', [\App\Http\Controllers\Auth\PermissionController::class, 'index'])
        ->name('permission.index')
        ->middleware(['permission:permission.index']);
    Route::POST('/permissions_list', [\App\Http\Controllers\Auth\PermissionController::class, 'permissions_list'])
        ->name('permissions.list')
        ->middleware(['permission:permission.list']);
    Route::GET('/permission_edit', [\App\Http\Controllers\Auth\PermissionController::class, 'permissionEdit'])
        ->name('permission.edit')
        ->middleware(['permission:permission.edit']);
    Route::POST('/permission_edit', [\App\Http\Controllers\Auth\PermissionController::class, 'permissionUpdate'])
        ->name('permission.update')
        ->middleware(['permission:permission.edit']);
    Route::DELETE('/permission_destroy/{id}', [\App\Http\Controllers\Auth\PermissionController::class,'permissionDestroy'])
        ->name('permission.destroy')
        ->middleware(['permission:permission.destroy']);
    Route::POST('/permission_create', [\App\Http\Controllers\Auth\PermissionController::class, 'permissionCreate'])
        ->name('permission.create')
        ->middleware(['permission:permission.create']);
    //USERS
    Route::GET('/users', [\App\Http\Controllers\UserController::class, 'users'])
        ->name('users')
        ->middleware(['permission:users.index']);
    Route::POST('/users_list', [\App\Http\Controllers\UserController::class, 'userList'])
        ->name('admin.users')
        ->middleware(['permission:users.list']);
    Route::POST( '/users/add', [\App\Http\Controllers\UserController::class, 'userCreate'])
        ->name('user.create')
        ->middleware(['permission:users.create']);
    Route::POST('/users/edit', [\App\Http\Controllers\UserController::class, 'userEdit'])
        ->name('user.edit')
        ->middleware(['permission:users.edit']);
    Route::DELETE('/user/{id}', [\App\Http\Controllers\UserController::class, 'userDestroy'])
        ->name('user.destroy')
        ->middleware(['permission:users.destroy']);

    // Route::delete('/user/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    //PRODUCTS
    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::match(['get', 'post'], '/product/add', [\App\Http\Controllers\ProductController::class, 'ProductCreate'])->name('products.create');
//    Route::delete('/product/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    Route::POST('/product/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    Route::match(['get', 'post'], '/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'ProductEdit'])->name('product.edit');


    //CAMPAİGNS
    Route::GET('/campaigns', [\App\Http\Controllers\Backend\CampaignsController::class, 'index'])
        ->name('campaign')
        ->middleware(['permission:campaigns.index']);
    Route::POST('/campaigns', [\App\Http\Controllers\Backend\CampaignsController::class, 'campaigns'])
        ->name('admin.campaigns')
        ->middleware(['permission:campaigns.list']);
    Route::POST( '/campaign/create', [\App\Http\Controllers\Backend\CampaignsController::class, 'create'])
        ->name('campaign.create')
        ->middleware(['permissions:campaigns.create']);
    Route::GET( '/campaign/edit', [\App\Http\Controllers\Backend\CampaignsController::class, 'campaignEdit'])
        ->name('campaign.edit')
        ->middleware(['permission:campaigns.edit']);
    Route::POST( '/campaign/edit', [\App\Http\Controllers\Backend\CampaignsController::class, 'campaignUpdate'])
        ->name('campaign.update')
        ->middleware(['permission:campaigns.edit']);
    Route::POST('/campaign/{id}/destroy', [\App\Http\Controllers\Backend\CampaignsController::class, 'destroy'])
        ->name('campaign.destroy')
        ->middleware(['permission:campaigns.destroy']);
    //EVENTS
    Route::GET('/events', [\App\Http\Controllers\Backend\EventsController::class, 'events'])
        ->name('eventslist')
        ->middleware([ 'permission:events.list']);
    Route::GET( '/events/edit', [\App\Http\Controllers\Backend\EventsController::class, 'eventEdit'])
        ->name('events.edit')
        ->middleware(['permission:events.edit']);
    Route::POST( '/events/edit', [\App\Http\Controllers\Backend\EventsController::class, 'eventUpdate'])
        ->name('events.update')
        ->middleware(['permission:events.edit']);
    Route::POST( '/events/create', [\App\Http\Controllers\Backend\EventsController::class, 'create'])
        ->name('events.create')
        ->middleware('permission:events.create');
    Route::POST('/events/{id}', [\App\Http\Controllers\Backend\EventsController::class, 'destroy'])
        ->name('events.destroy')
        ->middleware(['permission:events.destroy']);
    Route::match(['get', 'post'], '/settings', [\App\Http\Controllers\Backend\SettingsController::class, 'settings'])
        ->name('admin.settings')
        ->middleware(['permission:admin.settings']);
});







Route::get('/', function () {
    return view('frontend.page.homepage');
})->name('homepage');

Route::get('/donations', [\App\Http\Controllers\UserController::class, 'users'])->name('users');



Route::get('/test', function () {


    return setting('social');


    return setting('email', 'default veri');
})->name('test');




Route::get('/contact', function () {
    return view('frontend.page.contact');
})->name('contact');


Route::get('/donations', [\App\Http\Controllers\Frontend\DonationsController::class, 'index'])->name('donations');
Route::get('/donation/{id}', [\App\Http\Controllers\Frontend\DonationsController::class, 'donation'])->name('donation');
//Route::post('/subscribe', [\NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/events', [\App\Http\Controllers\Backend\EventsController::class, 'index'])->name('events');
Route::get('/events/detail/{id}', [\App\Http\Controllers\Backend\EventsController::class, 'detail'])->name('events.detail');

//about us
Route::get('/about_us', [\App\Http\Controllers\Frontend\AboutUsController::class, 'index'])->name('about_us');



