<?php

use App\Models\Material;
use App\Models\OpenQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\TermController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\AnswerController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\SummeryController;
use App\Http\Controllers\Api\MaterialController;
use App\Http\Controllers\Api\TradeOffController;
use App\Http\Controllers\Api\FavouriteController;
use App\Http\Controllers\Api\OpenQuestionController;
use App\Http\Controllers\Api\Locked_questionController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['jwt.auth']], function () {

    //تعديل الملف الشخصي
    Route::put('/users/{user}', [UserController::class, 'update'])->middleware('jwt.auth');
    //عرض نماذج مادة معينة
    Route::get('/material/unit/model/{unit_id}', [OpenQuestionController::class, 'getModelsForUnit']);
    //عرض ملخصات مادة
    Route::get('/summery/{unit_id}', [SummeryController::class, 'get_unit_summery']);
    //بيانات يوزر حسب المعرف
    Route::get('/user/profile', [UserController::class, 'show'])->middleware('jwt.auth');
    //اضافة الى المفضلة
    Route::post('/user/favorit/add', [FavouriteController::class, 'AddToFavourite']);
    //ازالة من المفضلة
    Route::post('/user/favorit/remove', [FavouriteController::class, 'RemoveFromFavourite']);


    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('jwt.auth');
// Route::get('/getuser', [AuthController::class, 'getuser'])->middleware('jwt.auth');
Route::apiResource('sections', SectionController::class);
Route::apiResource('books', BookController::class);
Route::post('/book/create', [BookController::class, 'store']);
Route::post('/summery/create/{unit_id}', [SummeryController::class, 'store']);


//except admin

/* SECTION*/
//عرض كل الافرع
Route::get('/section/index', [SectionController::class, 'index']);
//اضافة فرع جديد
Route::post('/section/create', [SectionController::class, 'store']);
//اظهار فرع محدد
Route::get('/section/show/{id}', [SectionController::class, 'show']);
//تعديل على فرع محدد
Route::post('/section/update/{id}', [SectionController::class, 'update']);
//حذف فرع محدد
Route::get('/section/destroy/{id}', [SectionController::class, 'destroy']);
/* SECTION*/
////////////////////////////////////////////////////////////////////////////
/*MATERIAL*/
//عرض كل المواد
Route::get('/material', [MaterialController::class, 'index']);
//اضافة مادة جديدة
Route::post('material/create', [MaterialController::class, 'store']);
//اظهار مادة محددة
Route::get('/material/show/{id}', [MaterialController::class, 'show']);
//تعديل على مادة محددة
Route::post('/material/update/{id}', [MaterialController::class, 'update']);
//حذف مادة محددة
Route::get('/material/destroy/{id}', [MaterialController::class, 'destroy']);
/*MATERIAL*/


//عرص وحدات مادة
Route::get('/material/unites/{material_id}', [UnitController::class, 'get_material_unites']);
//عرض دورات مادة
Route::get('/material/terms/{material_id}', [TermController::class, 'get_material_terms']);
//عرض مواد الفرع العلمي
route::get('/materials/sientific', [MaterialController::class, 'sientific_material']);
//عرض مواد الفرع الادبي
route::get('/materials/literary', [MaterialController::class, 'literary_material']);


//admin
Route::apiResource('books', BookController::class);
Route::apiResource('open_questions', OpenQuestionController::class);
//
Route::get('/questions/{unit_id}/{model}', [AnswerController::class, 'getQuestionsWithAnswers']);
//عرض المواد
Route::get('/materials', [MaterialController::class, 'index']);
//////////////add material
//Rout::get('/material/add',[MaterialController::class,'store']);

//عرص وحدات مادة
Route::get('/material/unites/{material_id}', [UnitController::class, 'get_material_unites']);
//عرض دورات مادة
Route::get('/material/terms/{material_id}', [TermController::class, 'get_material_terms']);
//عرض مواد الفرع العلمي
route::get('/materials/sientific', [MaterialController::class, 'sientific_material']);
//عرض مواد الفرع الادبي
route::get('/materials/literary', [MaterialController::class, 'literary_material']);

//عرض اسئلة مقفولة لوحدة
Route::get('/locked/{unit_id}', [Locked_questionController::class, 'get_unit_locked_question']);
//عرض كتب مادة معينة
Route::get('/material/book/{id}', [BookController::class, 'get_material_book']);
//بيانات يوزر حسب المعرف
Route::get('/getuser', [AuthController::class, 'getUser'])->middleware('jwt.auth');

//عرض المفاضلات ل فرع محدد
Route::get('/section/trade_off/{section_id}', [TradeOffController::class, 'get_section_trade']);
//تحميل صورة
Route::post('/upload', [ImageController::class, 'upload']);
// عرض الصور
Route::get('/images', [ImageController::class, 'index']);
