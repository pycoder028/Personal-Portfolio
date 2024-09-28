<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BlogController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact/post', [HomeController::class, 'contact_post']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog-post', [HomeController::class, 'blog_post']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login_admin', [AuthController::class, 'login_admin']);
Route::get('/logout', [AuthController::class, 'logout']);


// Admin all Routes

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('/admin/home', [DashboardController::class, 'admin_home']);
    Route::post('/admin/home/post', [DashboardController::class, 'admin_home_post']);

    Route::get('/admin/about', [DashboardController::class, 'admin_about']); 
    Route::post('/admin/about/post', [DashboardController::class, 'admin_about_post']); 

    Route::get('/admin/portfolio', [DashboardController::class, 'admin_portfolio']);

    Route::get('/admin/contact', [DashboardController::class, 'admin_contact']);

    Route::get('/admin/blog', [DashboardController::class, 'admin_blog']);

    Route::get('/admin/blog/add', [BlogController::class, 'admin_blog_add']);
    Route::post('/admin/blog/add', [BlogController::class, 'admin_blog_add_post']);

    
    Route::get('/admin/portfolio/add', [PortfolioController::class, 'portfolio_add']);
    Route::post('/admin/portfolio/add', [PortfolioController::class, 'portfolio_add_post']);

    Route::get('admin/portfolio/edit/{id}',[PortfolioController::class,'admin_portfolio_edit']);
    Route::post('admin/portfolio/edit/{id}',[PortfolioController::class,'admin_portfolio_edit_post']);
    Route::get('admin/portfolio/delete/{id}',[PortfolioController::class,'admin_portfolio_delete']);
    Route::get('admin/contact/delete/{id}',[HomeController::class,'admin_contact_delete']);


});
 