<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\FactController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\SummaryController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\PortfolioController;

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
Route::get('/a', function () {
    return view('frontend.test');
});

 Route::get('/admin_home', [HomeController::class, 'home']);
// Route::get('login' ,[CustomAuthController::class,'login']);
// Route::post('login-user' ,[CustomAuthController::class,'login_user'])->name('login');
// Route::get('register' ,[CustomAuthController::class,'register']);
// Route::post('register-user' ,[CustomAuthController::class,'register_user'])->name('register');
// Route::get('logout' ,[CustomAuthController::class,'logout']);
// Route::get('dashboard' ,[CustomAuthController::class,'dashboard'])->middleware('IsLoggedIn');
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------about---------------------------
Route::get('/admin_about' ,[AboutController::class,'admin_about']);
Route::post('/upload' ,[AboutController::class,'upload']);
Route::get("/edit/{id}", [AboutController::class, "edit"]);
Route::post("/edit/{id}", [AboutController::class, "about_edit"]);
Route::get("/delete/{id}", [AboutController::class, "delete"]);

// -----------------skills---------------------------
Route::get('/skill' ,[SkillController::class,'skill']);
Route::post('/upload' ,[SkillController::class,'upload']);
Route::get("/edit/{id}", [SkillController::class, "edit"]);
Route::post("/edit/{id}", [SkillController::class, "edit_skill"]);
Route::get("/delete_skill/{id}", [SkillController::class, "delete_skill"]);

// -----------------facts---------------------------
Route::get('/fact' ,[FactController::class,'fact']);
Route::post('/upload' ,[FactController::class,'upload']);
Route::get("/edit/{id}", [FactController::class, "edit"]);
Route::post("/edit/{id}", [FactController::class, "edit_fact"]);
Route::get("/delete/{id}", [FactController::class, "delete"]);

// -----------------testimonial---------------------------
Route::get('/admin_testimonial' ,[TestimonialController::class,'admin_testimonial']);
Route::post('/upload' ,[TestimonialController::class,'upload']);
Route::get("/edit/{id}", [TestimonialController::class, "edit"]);
Route::post("/edit/{id}", [TestimonialController::class, "edit_testimonial"]);
Route::get("/delete/{id}", [TestimonialController::class, "delete"]);

// -----------------summary---------------------------
Route::get('/summary' ,[SummaryController::class,'index']);
Route::post('/upload' ,[SummaryController::class,'upload']);
Route::get("/edit_summary/{id}", [SummaryController::class, "edit_summary"]);
Route::post("/edit/{id}", [SummaryController::class, "update"]);
Route::get("/delete/{id}", [SummaryController::class, "delete"]);

// -----------------Education---------------------------
Route::get('/education' ,[EducationController::class,'index']);
Route::post('/upload' ,[EducationController::class,'upload']);
Route::get("/edit_education/{id}", [EducationController::class, "edit_education"]);
Route::post("/edit/{id}", [EducationController::class, "update"]);
Route::get("/delete/{id}", [EducationController::class, "delete"]);

// -----------------Experience---------------------------
Route::get('/experience' ,[ExperienceController::class,'index']);
Route::post('/upload' ,[ExperienceController::class,'upload']);
Route::get("/edit_experience/{id}", [ExperienceController::class, "edit_experience"]);
Route::post("/edit/{id}", [ExperienceController::class, "update"]);
Route::get("/delete/{id}", [ExperienceController::class, "delete"]);

// -----------------Service---------------------------
Route::get('/service' ,[ServiceController::class,'index']);
Route::post('/upload' ,[ServiceController::class,'upload']);
Route::get("/edit_service/{id}", [ServiceController::class, "edit_service"]);
Route::post("/edit/{id}", [ServiceController::class, "update"]);
Route::get("/delete/{id}", [ServiceController::class, "delete"]);

// -----------------contact---------------------------
Route::get('/contact' ,[HomeController::class,'contact']);
Route::get("/delete_contact/{id}", [HomeController::class, "delete_contact"]);

// -----------------Portfolio---------------------------
//Route::get('/portfolio' ,[PortfolioController::class,'index']);
Route::resource('/uploads' ,PortfolioController::class);
Route::get("/edit_portfolio/{id}", [PortfolioController::class, "edit_portfolio"]);
Route::post("/edit/{id}", [PortfolioController::class, "update"]);
Route::get("/delete/{id}", [PortfolioController::class, "delete"]);


Route::get('/a', [App\Http\Controllers\HomeController::class, 'a'])->name('a');


