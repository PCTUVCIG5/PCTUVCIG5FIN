<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExcelCSVController;
use App\Http\Controllers\NaissanceController;
use App\Http\Controllers\RESOURCE_HUMAINE\AmenagementController;

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
    return view('acceuil');
});
Route::get('declarationNaissance', [PageController::class, 'declarationNaissance'])->name('declarationNaissance');
Route::get('declarationNaissance_creer', [PageController::class, 'declarationNaissance_creer'])->name('declarationNaissance_creer');
Route::post('declarationNaissance_save', [PageController::class, 'declarationNaissance_save'])->name('declarationNaissance_save');
Route::post('registerPere', [PageController::class, 'registerPere'])->name('registerPere');
Route::post('registerMere', [PageController::class, 'registerMere'])->name('registerMere');


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('liste_nouvelle_naissance', [PageController::class, 'liste_nouvelle_naissance'])->name('liste_nouvelle_naissance');



Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);



    Route::resource('demandeEmplois', App\Http\Controllers\DemandeEmploiController::class);
    
    
    Route::resource('habitants', App\Http\Controllers\RESOURCE_HUMAINE\HabitantController::class);
    
    
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
    
    
    Route::resource('femmes', App\Http\Controllers\RESOURCE_HUMAINE\FemmeController::class);
    
    
    Route::resource('hommes', App\Http\Controllers\RESOURCE_HUMAINE\HommeController::class);
    
    
Route::get('/change-status-amenagement/{id}',[AmenagementController::class,'changeStatusAmenagement']);
Route::get('/change-status-naissance/{id}',[NaissanceController::class,'changeStatusNaissance']);
Route::resource('amenagements', App\Http\Controllers\RESOURCE_HUMAINE\AmenagementController::class);
    
    
    Route::resource('demenagements', App\Http\Controllers\RESOURCE_HUMAINE\DemenagementController::class);
    
    
    Route::resource('offreEmplois', App\Http\Controllers\OffreEmploiController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('excel-csv-file', [ExcelCSVController::class, 'index']);
Route::post('import-excel-csv-file', [ExcelCSVController::class, 'importExcelCSV']);
Route::get('export-excel-csv-file/{slug}', [ExcelCSVController::class, 'exportExcelCSV']);

Route::resource('permissions', App\Http\Controllers\PermissionController::class);

Route::get('/statut', [App\Http\Controllers\UserController::class, 'show1'])->name('statut');

Route::get('/change-status/{id}',[UserController::class,'changeStatus']);
Route::get('amenagement', [AmenagementController::class, 'amenagement'])->name('amenagement');
Route::post('amenagement_store', [AmenagementController::class, 'amenagement_store'])->name('amenagement_store');

Route::post('/add-activite', [App\Http\Controllers\ActiviteController::class, 'addActivite'])->name('add.activite');


});