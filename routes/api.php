<?php

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\MaterialController;
use App\Http\Controllers\Api\SummeryController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['jwt.auth']], function () {
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('jwt.auth');

// Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('jwt.auth');
// Route::get('/getuser', [AuthController::class, 'getuser'])->middleware('jwt.auth');
Route::apiResource('sections', SectionController::class);
Route::apiResource('books', BookController::class);
Route::post('/book/create', [BookController::class, 'store']);
Route::post('/summery/create/{unit_id}', [SummeryController::class, 'store']);


//except admin
// Route::get('/section/index', [SectionController::class, 'index']);
// Route::post('/section/create', [SectionController::class, 'store']);
// Route::delete('/section/destroy/{id}', [SectionController::class, 'destroy']);
// Route::post('/section/update/{id}',[SectionController::class,'update']);
//تعديل الملف الشخصي
Route::put('/users/{user}',[UserController::class,'update'])->middleware('jwt.auth');

Route::apiResource('books', BookController::class);
//عرص وحدات مادة
Route::get('/material/unites/{material_id}', [UnitController::class, 'get_material_unites']);
//عرض المواد
Route::get('/materials', [MaterialController::class, 'index']);
//عرض مواد الفرع العلمي
route::get('/materials/sientific', [MaterialController::class, 'sientific_material']);
//عرض مواد الفرع الادبي
route::get('/materials/literary', [MaterialController::class, 'literary_material']);
//عرض ملخصات مادة
Route::get('/summery/{material_id}/{unit_id}', [SummeryController::class, 'get_unit_summery']);
//عرض كتب مادة معينة
Route::get('/material/book/{id}', [BookController::class, 'get_material_book']);
//بيانات يوزر حسب المعرف
Route::get('/getuser',[AuthController::class, 'getUser'])->middleware('jwt.auth');
Route::get('/user/info', [UserController::class, 'show'])->middleware('jwt.auth');
