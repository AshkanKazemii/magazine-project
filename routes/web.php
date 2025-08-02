<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleControllerEn;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Index;
use App\Http\Controllers\IndexEn;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\QuarterliesController;
use App\Http\Controllers\QuarterliesControllerEn;
use App\Http\Controllers\QuarterlyArticlesController;
use App\Http\Controllers\QuarterlyArticlesControllerEn;
use App\Http\Controllers\ShowArticle;
use App\Http\Controllers\ShowArticleEn;
use App\Http\Controllers\ViewJurnalInformation;
use App\Http\Controllers\ViewObjectivesAndAxes;
use App\Http\Controllers\ViewReferees;
use App\Http\Controllers\ViewRefereesEn;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

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


Route::get('/', Index::class)->name("index");
Route::get('/en', IndexEn::class)->name("index-en");


Route::get("/show-article/{id}" , ShowArticle::class)->name("show-article") ; 
Route::get("/en/show-article/{id}" , ShowArticleEn::class)->name("show-article-en") ; 



Route::get("/logout" , LogoutController::class)->name("logout") ;

Route::get("/panels" , function(){})->middleware(["auth" , "RedirectOnAuthority"])->name("panel") ;


Route::get("/quarterlies" , QuarterliesController::class)->name("quarterlies") ;
Route::get("/en/quarterlies" , QuarterliesControllerEn::class)->name("quarterlies-en") ;

Route::get("/quarterlies/articles/{quarterly_id}" , QuarterlyArticlesController::class)->name("quarterly.articles") ;
Route::get("/en/quarterlies/articles/{quarterly_id}" , QuarterlyArticlesControllerEn::class)->name("quarterly.articles-en") ;


Route::get("/quarterlies/articles/{quarterly_id}/{article_id}" , ArticleController::class)->name("quarterly.article") ;
Route::get("/en/quarterlies/articles/{quarterly_id}/{article_id}" , ArticleControllerEn::class)->name("quarterly.article-en") ;



// Route::get("اهداف-و-محورهای-مجله" , ViewObjectivesAndAxes::class)->name("objectives-and-axes") ;

// Route::get("اطلاعات-مجله" , ViewJurnalInformation::class)->name("jurnal-information") ;
Route::get("/referees" , ViewReferees::class)->name("referees") ;
Route::get("/en/referees" , ViewRefereesEn::class)->name("referees-en") ;


// Route::get()->name('');

// Route::get('/forgot-password', Index::class)->name("index");
// Route::get('/', Index::class)->name("index");