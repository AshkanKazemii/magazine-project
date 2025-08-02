<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Referee\Dashboard\DashboardPage;
use App\Http\Controllers\Referee\ArticleManagment\ViewTestArticle;
use App\Http\Controllers\Referee\ArticleManagment\CommentingToArticle;
use App\Http\Controllers\Referee\ArticleManagment\CommentingToArticlePage;
use App\Http\Controllers\Referee\Dashboard\EditUserInfo;
use App\Http\Controllers\Referee\Dashboard\EditUserInfoPage;
use App\Http\Controllers\Referee\Dashboard\EditUserPassword;
use App\Http\Controllers\Referee\Dashboard\EditUserPasswordPage;

Route::prefix("/panels/referee")->middleware(["auth" , "IdentityValidationReferee"])->group(function($route) {


    $route->get("/edit-user", EditUserInfoPage::class)->name("referee.edit-user");
    $route->post("/edit-user", EditUserInfo::class);
    $route->get("/edit-password", EditUserPasswordPage::class)->name("referee.edit-password");
    $route->post("/edit-password", EditUserPassword::class);

    $route->get("/", DashboardPage::class)->name("referee.index");


    $route->get("/commenting-to-article/{id}", CommentingToArticlePage::class)->name("referee.commenting-to-article");
    $route->post("/commenting-to-article/{id}", CommentingToArticle::class);


    $route->get("/test/{id}", ViewTestArticle::class)->name("referee.view-test-articles-for-approval");

}) ;