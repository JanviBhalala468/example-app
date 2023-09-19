<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\UserDB;
use App\Http\Controllers\modelDamoController;
use App\Http\Controllers\httpClientController;
use App\Http\Controllers\httpRequestController;
use App\Http\Controllers\flashSessionController;
use App\Http\Controllers\uploadFileController;
use App\Http\Controllers\paginationController;
use App\Http\Controllers\saveInDBController;
use App\Http\Controllers\deleteRawController;
use App\Http\Controllers\queryBuilderController;
use App\Http\Controllers\joinController;
use App\Http\Controllers\accessorController;
use App\Http\Controllers\relationController;
use App\Http\Controllers\datatableController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\productController;







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

Route::get('/welcomPage', function () {

    return view('welcome');
});
Route::get('/', function () {
    return view('welcomPage');
});
// Route::get('/urlPage', function () {
//     return view('urlPage');
// });
Route::view('urlPage', '/urlPage');

Route::get('/component', function () {
    return view('component');
});

Route::get('users', [Users::class, 'viewLoad']);
Route::post('userForm', [UserFormController::class, 'getData']);
Route::view('userForm', 'usersForm');
Route::view('noAccess', 'noAccess');
Route::view('acees', 'acees');


Route::group(['middleware' => ['myGroup']], function () {
    Route::view('group_middlewere', 'group_middlewere');
    Route::view('route_middlewere', 'route_middlewere')->middleware('numberProtected');
    Route::view('middleware', 'middleware');
});
Route::get('userDB', [UserDB::class, 'index']);
Route::get('modelDamoController', [modelDamoController::class, 'getData']);
Route::get('httpClientController', [httpClientController::class, 'getApi']);
Route::put('httpRequestController', [httpRequestController::class, 'getData']);
Route::view('httpRequest', 'httpRequest');
Route::view('session', 'session');
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user', null);
    }
    return redirect('welcomPage');
});
Route::post('flashSessionController', [flashSessionController::class, 'getData']);
Route::view('flashSession', 'flashSession');
Route::post('uploadFileController', [uploadFileController::class, 'getData']);
Route::view('uploadFile', 'uploadFile');
//Route::get('paginationController', [paginationController::class, 'getData']);
Route::get('paginationController', [modelDamoController::class, 'paginate']);
Route::view('saveInDB', 'saveInDB');
Route::post('saveInDBController', [saveInDBController::class, 'getData']);
Route::get('deleteRawController', [deleteRawController::class, 'list']);
Route::get('deleteControllerBtn/{id}', [deleteRawController::class, 'Delete']);
Route::get('editControllerBtn/{id}', [deleteRawController::class, 'Edit']);
Route::post('editController', [deleteRawController::class, 'EditData']);
Route::get('queryBuilderController', [queryBuilderController::class, 'index']);
Route::view('queryBuilder', 'queryBuilder');
Route::get('joinController', [joinController::class, 'index']);
Route::view('migration', 'migration');
Route::view('seeder', 'seeder');
Route::view('stub', 'stub');
Route::get('accessorController', [accessorController::class, 'index']);
Route::post('mutatorController', [accessorController::class, 'mutator']);
Route::view('mutator', 'mutatorrr');
Route::get('oneToOne', [relationController::class, 'oneToOne']);
Route::get('oneToMany', [relationController::class, 'oneToMany']);
Route::get('manyToMany', [relationController::class, 'manyToMany']);
Route::view('command', 'customCommands');
Route::get('datatableController', [datatableController::class, 'index'])->name('table.index');

Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from Janvi',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('janvibhalala15@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});
// .......................
Route::resource('articles', ArticleController::class);
Route::get('deleteControllerAjaxBtn/{id}', [deleteRawController::class, 'DeleteAjax']);
Route::get('delete', [deleteRawController::class, 'deletedMethod']);
Route::get('fullNameBtn/{id}', [deleteRawController::class, 'fullNameBtn']);

Route::post('addproductController', [productController::class, 'addProduct']);
Route::view('addPro', 'addProduct');
Route::view('product1', 'product');
Route::get('productlist', [productController::class, 'index'])->name('productlist.index');
Route::view('editPro', 'editProduct');

Route::get('editProControllerBtn/{id}', [productController::class, 'Edit']);
Route::post('editProController', [productController::class, 'EditData']);
Route::view('sass', 'sass')->name('sass');