<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mailRecieve;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PDFController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2', function () {
    return view('home2');
});
Route::get('/login', function () {
    return view('login');
});


Route::get('/index', function()
{
    return view('index');
});

Route::get('/product', function () {
    return view('productupload');
});
Route::post('/product',[\App\Http\Controllers\productController::class,'save1'])->name('product2');

Route::get('/mail',[mailRecieve::class,'index']);

Route::get('/signup',[\App\Http\Controllers\SignUpController::class,'index']);
Route::post('/index',[\App\Http\Controllers\SignUpController::class,'store'])->name('store');

Route::post('/',[\App\Http\Controllers\SignUpController::class,'index'])->name('index');


Route::get('/view',[\App\Http\Controllers\SignUpController::class,'view']);
Route::get('/', function () {
    return view('homepage');
});


Route::get('/buy', function () {
    return view('buy');
});

Route::get('/prod',[\App\Http\Controllers\productController::class, 'show_gall']);
Route::get('/cart', function () {
    return view('ct');
});
Route::get('/cart',[CartController::class,'index']);
Route::get('/addTocart/{product}',[CartController::class,'addTocart'])->name('add-cart');
Route::get('/remove/{id}',[CartController::class,'removefromcart'])->name('remove');
Route::get('/des/{id}',[\App\Http\Controllers\productController::class,'productdes']);

Route::get('/dashboard', [\App\Http\Controllers\SignUpcontroller::class, 'dashboard']);

Route::get('/AdminLogin', [\App\Http\Controllers\AdminController::class, 'index']);
Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'login']);

Route::get('/logout', [\App\Http\Controllers\SignUpcontroller::class, 'logout']);
Route::get('/logoutAd', [\App\Http\Controllers\AdminController::class, 'logout']);

Route::post('/login',[\App\Http\Controllers\SignUpController::class,'login']);
// Route::post('/AdminLogin',[\App\Http\Controllers\AdminController::class,'login']);


Route::get('/edit/{id}',[\App\Http\Controllers\SignUpcontroller::class,'edit']);
Route::post('/update/{id}',[\App\Http\Controllers\SignUpcontroller::class,'update']);

Route::get('/edit/{id}',[\App\Http\Controllers\productcontroller::class,'edit']);
Route::post('/update/{id}',[\App\Http\Controllers\productcontroller::class,'update']);

Route::get('/delrec/{id}',[\App\Http\Controllers\SignUpcontroller::class,'del']);
Route::get('/delrec/{id}',[\App\Http\Controllers\productController::class,'del']);

Route::get('/myimage',[\App\Http\Controllers\ProductController::class,'show_gallery']);
Route::get('/adminImage',[\App\Http\Controllers\ProductController::class,'show_Admin_Gallery']);

Route::get('/contactemail', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/contactemail', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/myproduct',[\App\Http\Controllers\tiffinController::class,'show_tiff']);

Route::get('/profile/{id}', [\App\Http\Controllers\SignUpcontroller::class, 'profile']);
Route::get('/proedit/{id}',[\App\Http\Controllers\SignUpcontroller::class,'profileEdit']);
Route::post('/proupdate/{id}',[\App\Http\Controllers\SignUpcontroller::class,'profileUpdate']);

// Route::get('/addtiff',[\App\Http\Controllers\tiffController::class,'index']);
Route::get('/addtiff', function () {
    return view('typetiffin');
});

Route::get('/generate', [PDFController::class, 'generatePDF']);

Route::get('/generate-pdf', function () {
    return view('pdf');
});
Route::get('/removec',[\App\Http\Controllers\CartController::class,'removec']);
Route::get('/thankyou', function () {
    return view('thankyou');
});


Route::get('/Address',[\App\Http\Controllers\addressController::class,'index']);
Route::post('/store',[\App\Http\Controllers\addressController::class,'store']);
Route::get('/viewAddress',[\App\Http\Controllers\addressController::class,'view']);


// Route::get('excel',function(){
//     return view('excel');
// });
Route::get('/exportUser',[\App\Http\Controllers\ExcelController::class,'exportUser']);