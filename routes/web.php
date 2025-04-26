<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\EditorUploadController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KonwledgeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Artisan;
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

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/locomotive', [ServicesController::class, 'locomotive'])->name('locomotive');

Route::get('/car', [ServicesController::class, 'car'])->name('car');

Route::get('/gold', [ServicesController::class, 'gold'])->name('gold');

Route::get('/3c-loan', [ServicesController::class, 'loan3c'])->name('3c-loan');

Route::get('/microfinance', [ServicesController::class, 'microfinance'])->name('microfinance');

Route::get('/bontique', [ServicesController::class, 'bontique'])->name('bontique');

Route::get('/konwledge', [KonwledgeController::class, 'index'])->name('konwledge');

Route::get('/konwledge/{id}', [KonwledgeController::class, 'show'])->name('konwledge-details');

Route::get('/konwledge-details', [KonwledgeController::class, 'showMock'])->name('konwledge-details-mock');

Route::get('/cases', [CasesController::class, 'index'])->name('cases');

Route::get('/process', function () {
    return view('process');
})->name('process');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');


Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        Route::resource('classifications', App\Http\Controllers\Admin\ClassificationController::class, ["as" => 'admin']);
        Route::resource('konwledges', App\Http\Controllers\Admin\KonwledgeController::class, ["as" => 'admin']);
        Route::resource('caseInfos', App\Http\Controllers\Admin\CaseInfoController::class, ["as" => 'admin']);

        // AJAX 預覽清洗結果的路由
        Route::post('/seo/preview', [App\Http\Controllers\Admin\SeoSettingController::class, 'preview'])->name('admin.seo.preview');

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Route::resource('visitorLogs', App\Http\Controllers\Admin\VisitorLogController::class, ["as" => 'admin']);
});

Route::post('editor-upload', [EditorUploadController::class, 'upload'])->name('editor-upload');
Route::post('/editor/upload-temp', [EditorUploadController::class, 'uploadTemp'])->name('editor.upload.temp');
Route::delete('/editor/delete-temp', [EditorUploadController::class, 'deleteTemp'])->name('editor.delete.temp');

// Route::resource('admin/konwledges', App\Http\Controllers\Admin\KonwledgeController::class)
//     ->names([
//         'index' => 'admin.konwledges.index',
//         'store' => 'admin.konwledges.store',
//         'show' => 'admin.konwledges.show',
//         'update' => 'admin.konwledges.update',
//         'destroy' => 'admin.konwledges.destroy',
//         'create' => 'admin.konwledges.create',
//         'edit' => 'admin.konwledges.edit'
//     ]);
