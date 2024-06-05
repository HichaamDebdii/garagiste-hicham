<?php

use App\Models\Stock;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin',[AdminController::class,'index']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class,'index'])->name('admin');
    Route::get('/stocks', [StockController::class, 'index2'])->name('layouts.stock');
    Route::post('/stocks/search', [StockController::class, 'search'])->name('stocks.search');
    Route::post('/stocks/show', [StockController::class, 'show'])->name('stocks.show');
    Route::post('/stocks/delete', [StockController::class, 'delete'])->name('stocks.delete');
   

    
    Route::get('/admin', [DashController::class, 'index'])->name('admin');

  
Route::get("/clients",[ClientController::class,"index"])->name("clients.index");
Route::post("/delete",[ClientController::class,"deleteModal"])->name("modal.delete");
Route::post("/ConfirmDelete",[ClientController::class,"delete"])->name("modal.ConfirmDelete");
Route::get("/addClient",[ClientController::class,"addModal"])->name("client.add");
Route::post("/newClient",[ClientController::class,"addClient"])->name("client.newClient");
Route::get("/modifyClient",[ClientController::class,"updateModal"])->name("client.ModifyModal");
Route::post("/updateClient",[ClientController::class,"updateClient"])->name("client.updateClient");


Route::get("/vehicules",[VehiculeController::class,"index"])->name("vehicules.index");
Route::get("/addVehicle",[VehiculeController::class,"addModal"])->name("vehicule.addVehicle");
Route::post("/newVehicle",[VehiculeController::class,"addVehicle"])->name("vehicule.newVehicle");
Route::post("/deleteVehicle",[VehiculeController::class,"deleteModel"])->name("vehicule.deleteVehicle");
Route::post("/ConfirmDeleteVehicle",[VehiculeController::class,"confirmDelete"])->name("vehicule.ConfirmDelete");
Route::post("/updateVehicule",[VehiculeController::class,"updateModel"])->name("vehicule.updateVehicule");
Route::post("/ConfirmUpdate",[VehiculeController::class,"updateVehicle"])->name("vehicule.ConfirmUpdate");
});
