<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExcelCSVController;
use App\Http\Controllers\AmenagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);



    Route::resource('demandeEmplois', App\Http\Controllers\DemandeEmploiController::class);
    
    
    Route::resource('habitants', App\Http\Controllers\HabitantController::class);
    
    
    Route::resource('actualites', App\Http\Controllers\ActualiteController::class);
    
    
    Route::resource('centreInterets', App\Http\Controllers\CentreInteretController::class);
    
    
    Route::resource('metiers', App\Http\Controllers\MetierController::class);
    
    
    Route::resource('refMetiers', App\Http\Controllers\RefMetierController::class);
    
    
    Route::resource('activites', App\Http\Controllers\ActiviteController::class);
    
    
    Route::resource('centreSantes', App\Http\Controllers\CentreSanteController::class);
    
    
    Route::resource('pharmacies', App\Http\Controllers\PharmacieController::class);
    
    
    Route::resource('naissances', App\Http\Controllers\NaissanceController::class);
    
    
    Route::resource('mariages', App\Http\Controllers\MariageController::class);
    
    
    Route::resource('divoces', App\Http\Controllers\DivoceController::class);
    
    
    Route::resource('deces', App\Http\Controllers\DeceController::class);
    
    
    Route::resource('femmes', App\Http\Controllers\FemmeController::class);
    
    
    Route::resource('hommes', App\Http\Controllers\HommeController::class);
    
    
Route::get('/change-status-amenagement/{id}',[AmenagementController::class,'changeStatusAmenagement']);
Route::resource('amenagements', App\Http\Controllers\AmenagementController::class);
    
    
    Route::resource('demenagements', App\Http\Controllers\DemenagementController::class);
    
    
    Route::resource('offreEmplois', App\Http\Controllers\OffreEmploiController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('excel-csv-file', [ExcelCSVController::class, 'index']);
Route::post('import-excel-csv-file', [ExcelCSVController::class, 'importExcelCSV']);
Route::get('export-excel-csv-file/{slug}', [ExcelCSVController::class, 'exportExcelCSV']);

Route::resource('permissions', App\Http\Controllers\PermissionController::class);

Route::get('/statut', [App\Http\Controllers\UserController::class, 'show1'])->name('statut');

Route::get('/change-status/{id}',[UserController::class,'changeStatus']);

Route::post('/add-activite', [App\Http\Controllers\ActiviteController::class, 'addActivite'])->name('add.activite');

// test
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/create', 'ProductController@create')->name('create');
Route::post('store/', 'ProductController@store')->name('store');
Route::get('show/{product}', 'ProductController@show')->name('show');
Route::get('edit/{product}', 'ProductController@edit')->name('edit');
Route::put('edit/{product}','ProductController@update')->name('update');
Route::delete('/{product}','ProductController@destroy')->name('destroy');


});