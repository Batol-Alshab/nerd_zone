<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;

use App\Http\Controllers\Api\TermController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\ModulController;
use App\Http\Controllers\Api\AnswerController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\SectionController;
use App\Http\Controllers\Api\SummeryController;
use App\Http\Controllers\Api\MaterialController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\TradeOffController;
use App\Http\Controllers\Api\FavouriteController;
use App\Http\Controllers\Api\ModulUserController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
    Route::group(['middleware' => ['jwt.auth','role:admin']], function () {
        //جلب عدد الطلاب + اعلى عدد نقاط
        Route::get('/analysis',[AdminController::class, 'analysis']);
        //جلب كل الطلاب 
        Route::get('/students',[AdminController::class, 'students']);
        //جلب معلومات طالب
        Route::post('/getStudentInfo',[AdminController::class, 'getStudentInfo']);
        //حذف طالب من قبل الادمن
        Route::post('/destroyUser',[UserController::class,'destroy']);
        //اضافة فرع جديد
        Route::post('/section/create', [SectionController::class, 'store']);
        //تعديل على فرع محدد
        Route::post('/section/update/{id}', [SectionController::class, 'update']);
        //حذف فرع محدد
        Route::get('/section/destroy/{id}', [SectionController::class, 'destroy']);
        //اضافة مادة جديدة
        Route::post('material/create', [MaterialController::class, 'store']);

    });
Route::group(['middleware' => ['jwt.auth','role:student']], function () {
   
    //تعديل الملف الشخصي
    Route::post('/user/update', [UserController::class, 'update']);
    //تعديل  كلمة المرور
    Route::post('/user/update/password', [UserController::class, 'updatePassword']);
    //تعديل الصورة الشخصية
    Route::post('/user/update/image', [UserController::class, 'updateImage']);
    //بيانات يوزر حسب المعرف
    Route::get('/user/profile', [UserController::class, 'profile']);
    // عرض المفضلة
    Route::get('/user/favourite', [UserController::class, 'favourite']);
    //اضافة الى المفضلة
    Route::post('/user/favourite/{summaryId}', [FavouriteController::class, 'AddOrRemoveFavourite']);
    //عرض ملخصات مادة
    Route::get('/summery/{unit_id}', [SummeryController::class, 'getAllSummariesWithFavoriteStatus']);
    //تسجيل الخروج
    Route::post('/logout', [AuthController::class, 'logout']);
    //النماذج لوحدة
    Route::get('/model/{is_open}/{unit_id}', [ModulController::class, 'getModelForUnit']);
    //الاسئلة مع الاجوبة
    Route::get('/question/{modul_id}', [QuestionController::class, 'getQuestionFormodul']);

});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
//عرص وحدات مادة
Route::get('/material/unites/{material_id}', [UnitController::class, 'get_material_unites']);
//عرض دورات مادة
Route::get('/material/terms/{material_id}', [TermController::class, 'get_material_terms']);
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
//عرض كتب مادة معينة
Route::get('/material/book/{id}', [BookController::class, 'get_material_book']);
//عرض المفاضلات ل فرع محدد
Route::get('/section/trade_off/{section_id}', [TradeOffController::class, 'get_section_trade']);
//*******************/
Route::post('/rate', [ModulUserController::class, 'updateRate'])->middleware('jwt.auth');
//create questions and answers for model
Route::post('/storeModelData/{model_id}', [AnswerController::class, 'storeQuestionsAndAnswers']);
//create model
Route::post('/model/create', [ModulController::class, 'store']);
//create question
Route::post('/question/create', [QuestionController::class, 'store']);
//create answer
Route::post('/answer/create/{question_id}', [AnswerController::class, 'store']);
//تحميل صورة
// Route::post('/upload', [ImageController::class, 'upload']);
// عرض الصور
// Route::get('/images', [ImageController::class, 'index']);
//مقالات
Route::get('/article/{atricle_id}', [ArticleController::class, 'show']);
//  اخر الاخبار
Route::get('/news',[ArticleController::class, 'getNews']);
// الانظمة الدراسية
Route::get('/systems',[ArticleController::class, 'getStudingSystems']);

//نماذج وحدة محددة
// Route::get('/modul/{unit_id}', [ModulController::class, 'getModulsForUnit']);
//اسئلة
// Route::get('/questions', [QuestionController::class, 'index']);
//admin
// Route::apiResource('books', BookController::class);
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
Route::get('/section', [SectionController::class, 'index']);
//اضافة فرع جديد
// Route::post('/section/create', [SectionController::class, 'store']);
//اظهار فرع محدد
Route::get('/section/show/{id}', [SectionController::class, 'show']);
// //تعديل على فرع محدد
// Route::post('/section/update/{id}', [SectionController::class, 'update']);
// //حذف فرع محدد
// Route::get('/section/destroy/{id}', [SectionController::class, 'destroy']);
/* SECTION*/

/*MATERIAL*/
//عرض كل المواد
Route::get('/material', [MaterialController::class, 'index']);
 //اضافة مادة جديدة
// Route::post('material/create', [MaterialController::class, 'store']);
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
Route::get('summery/show/{id}',[SummeryController::class, 'show']);// have is_favorite
Route::post('summery/update/{id}', [SummeryController::class, 'update']);
Route::get('summery/destroy/{id}', [SummeryController::class, 'destroy']);
/*SUMMERY */

/*TERM */
Route::get('/term', [TermController::class, 'index']);
Route::post('/term/create', [TermController::class, 'store']);
Route::get('/term/show/{id}', [TermController::class, 'show']);
Route::post('/term/update/{id}', [TermController::class, 'update']);
Route::get('/term/destroy/{id}', [TermController::class, 'destroy']);
/*TERM */

/*TRADEOFF */
Route::get('/tradeoff', [TradeOffController::class, 'index']);
Route::post('/tradeoff/create', [TradeOffController::class, 'store']);
Route::get('/tradeoff/show/{id}', [TradeOffController::class, 'show']);
Route::post('/tradeoff/update/{id}', [TradeOffController::class, 'update']);
Route::get('/tradeoff/destroy/{id}', [TradeOffController::class, 'destroy']);
/*TRADEOFF */
Route::get('/bookDownload/{id}',[BookController::class, 'download']);
Route::get('/summeryDownload/{id}',[SummeryController::class, 'download']);
Route::get('/termDownload/{id}',[TermController::class, 'download']);
Route::get('/tradeoffDownload/{id}',[TradeOffController::class, 'download']);

