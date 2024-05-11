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
use App\Http\Controllers\Api\ArticleController;
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
    //بيانات يوزر حسب المعرف
    Route::get('/user/profile', [UserController::class, 'show'])->middleware('jwt.auth');
    //اضافة الى المفضلة
    Route::post('/user/favourite/{summaryId}', [FavouriteController::class, 'AddOrRemoveFavourite']);

    //عرض ملخصات مادة
    Route::get('/summery/{unit_id}', [SummeryController::class, 'getAllSummariesWithFavoriteStatus']);

    Route::post('/logout', [AuthController::class, 'logout']);

    //favourite index
    Route::get('/user/favourit', [FavouriteController::class, 'index']);
    //الاسئلة مع الاجوبة
Route::get('/questions/{unit_id}/{model}', [AnswerController::class, 'getQuestionsWithAnswers']);
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('jwt.auth');
// Route::get('/getuser', [AuthController::class, 'getuser'])->middleware('jwt.auth');
// Route::apiResource('sections', SectionController::class);
// Route::apiResource('books', BookController::class);
// Route::post('/book/create', [BookController::class, 'store']);
// Route::post('/summery/create/{unit_id}', [SummeryController::class, 'store']);
//add material
//Rout::get('/material/add',[MaterialController::class,'store']);
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

/*UNIT */
//عرض كل الوحدات
Route::get('/unit', [UnitController::class, 'index']);
//اضافة واحدة جديدة لمادة محددة
Route::post('/unit/create', [UnitController::class, 'store']);
// اظهار وحدة محددة
Route::get('/unit/show/{id}', [UnitController::class, 'show']);
//التعديل على وحدة محددة
Route::post('/unit/update/{id}', [UnitController::class, 'update']);
//حذف وحدة محددة
Route::get('/unit/destroy/{id}', [UnitController::class, 'destroy']);

/*UNIT */


/*BOOK */
Route::get('/book', [BookController::class, 'index']);
Route::post('/book/create', [BookController::class, 'store']);
Route::get('/book/show/{id}', [BookController::class, 'show']);
Route::post('book/update/{id}', [BookController::class, 'update']);
Route::get('book/destroy/{id}', [BookController::class, 'destroy']);
/*BOOK */

/*SUMMERY */
Route::get('summery', [SummeryController::class, 'index']);
Route::post('summery/create', [SummeryController::class, 'store']);
/*SUMMERY */
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

//عرض المواد
Route::get('/materials', [MaterialController::class, 'index']);


//عرص وحدات مادة
Route::get('/material/unites/{material_id}', [UnitController::class, 'get_material_unites']);
//عرض دورات مادة
Route::get('/material/terms/{material_id}', [TermController::class, 'get_material_terms']);
//عرض مواد الفرع العلمي
route::get('/materials/sientific', [MaterialController::class, 'sientific_material']);
//عرض مواد الفرع الادبي
route::get('/materials/literary', [MaterialController::class, 'literary_material']);

//عرض اسئلة مقفولة لوحدة****************
Route::get('/locked/{unit_id}', [Locked_questionController::class, 'get_unit_locked_question']);
//عرض كتب مادة معينة
Route::get('/material/book/{id}', [BookController::class, 'get_material_book']);

//عرض المفاضلات ل فرع محدد
Route::get('/section/trade_off/{section_id}', [TradeOffController::class, 'get_section_trade']);


//***************** */
Route::post('/rate', [UserController::class, 'updateRate'])->middleware('jwt.auth');;

//تحميل صورة
Route::post('/upload', [ImageController::class, 'upload']);
// عرض الصور
Route::get('/images', [ImageController::class, 'index']);
//مقالات
Route::get('/article/{atricle_id}', [ArticleController::class, 'getHtmlContent']);
