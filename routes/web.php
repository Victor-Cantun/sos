<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
    route::get('/login');
   
});*/
Route::get('/', function () {return redirect()-> route('login');});
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('/Departments', 'DepartmentController')->names('Departments')->middleware('auth');
Route::resource('/Categories','CategoryController')->names('Categories')->middleware('auth');
Route::resource('/Employees','EmployeeController')->names('Employees')->middleware('auth');
Route::resource('/Customers','CustomerController')->names('Customers')->middleware('auth');
Route::resource('/Vendors','VendorController')->names('Vendors')->middleware('auth');
Route::resource('/Vehicles','VehicleController')->names('Vehicles')->middleware('auth');
Route::get('/CheckList', function () {return view('CheckList');})->middleware('auth');
Route::get('/ActivitiesReport', function () {return view('ActivitiesReport');})->middleware('auth');
Route::get('/StaffRequest', function () {return view('StaffRequest');})->middleware('auth');
Route::get('/JobProfile', function () {return view('JobProfile');})->middleware('auth');
Route::get('/Meetings', function () {return view('Meetings');})->middleware('auth');
Route::get('/Quotations', function () {return view('Quotations');})->middleware('auth');
Route::get('/Inventory', function () {return view('Inventory');})->middleware('auth');
Route::get('/Requisitions', function () {return view('Requisitions');})->middleware('auth');
Route::get('/QuotationsShopping', function () {return view('QuotationsShopping');})->middleware('auth');
Route::get('/PurchaseOrders', function () {return view('PurchaseOrders');})->middleware('auth');
Route::get('/Bills', function () {return view('Bills');})->middleware('auth');
Route::get('/ExitOrders', function () {return view('ExitOrders');})->middleware('auth');
Route::get('/Routes', function () {return view('Routes');})->middleware('auth');
Route::get('/Performance', function () {return view('Performance');})->middleware('auth');
Route::get('/UnitReview', function () {return view('UnitReview');})->middleware('auth');
Route::get('/DailyReport', function () {return view('DailyReport');})->middleware('auth');
Route::get('/MaintenanceOrder', function () {return view('MaintenanceOrder');})->middleware('auth');
Auth::routes();


