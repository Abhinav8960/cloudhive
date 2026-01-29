<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

// Template Routes
Route::group(['prefix' => 'basic-ui'], function(){
    Route::get('accordions', function () { return view('pages.basic-ui.accordions'); });
    Route::get('buttons', function () { return view('pages.basic-ui.buttons'); });
    Route::get('badges', function () { return view('pages.basic-ui.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.basic-ui.breadcrumbs'); });
    Route::get('dropdowns', function () { return view('pages.basic-ui.dropdowns'); });
    Route::get('modals', function () { return view('pages.basic-ui.modals'); });
    Route::get('progress-bar', function () { return view('pages.basic-ui.progress-bar'); });
    Route::get('pagination', function () { return view('pages.basic-ui.pagination'); });
    Route::get('tabs', function () { return view('pages.basic-ui.tabs'); });
    Route::get('typography', function () { return view('pages.basic-ui.typography'); });
    Route::get('tooltips', function () { return view('pages.basic-ui.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('dragula', function () { return view('pages.advanced-ui.dragula'); });
    Route::get('clipboard', function () { return view('pages.advanced-ui.clipboard'); });
    Route::get('context-menu', function () { return view('pages.advanced-ui.context-menu'); });
    Route::get('popups', function () { return view('pages.advanced-ui.popups'); });
    Route::get('sliders', function () { return view('pages.advanced-ui.sliders'); });
    Route::get('carousel', function () { return view('pages.advanced-ui.carousel'); });
    Route::get('loaders', function () { return view('pages.advanced-ui.loaders'); });
    Route::get('tree-view', function () { return view('pages.advanced-ui.tree-view'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('dropify', function () { return view('pages.forms.dropify'); });
    Route::get('form-validation', function () { return view('pages.forms.form-validation'); });
    Route::get('step-wizard', function () { return view('pages.forms.step-wizard'); });
});

Route::group(['prefix' => 'editors'], function(){
    Route::get('text-editor', function () { return view('pages.editors.text-editor'); });
    Route::get('code-editor', function () { return view('pages.editors.code-editor'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('morris', function () { return view('pages.charts.morris'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('google-charts', function () { return view('pages.charts.google-charts'); });
    Route::get('sparklinejs', function () { return view('pages.charts.sparklinejs'); });
    Route::get('c3-charts', function () { return view('pages.charts.c3-charts'); });
    Route::get('charts-justgage', function () { return view('pages.charts.charts-justgage'); });
    Route::get('chartist', function () { return view('pages.charts.chartist'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-table', function () { return view('pages.tables.basic-table'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
    Route::get('js-grid', function () { return view('pages.tables.js-grid'); });
    Route::get('sortable-table', function () { return view('pages.tables.sortable-table'); });
});

Route::group(['prefix' => 'maps'], function(){
    Route::get('vector-map', function () { return view('pages.maps.vector-map'); });
    Route::get('mapael', function () { return view('pages.maps.mapael'); });
    Route::get('google-maps', function () { return view('pages.maps.google-maps'); });
});

Route::group(['prefix' => 'user-pages'], function(){
    Route::get('login', function () { return view('pages.user-pages.login'); });
    Route::get('register', function () { return view('pages.user-pages.register'); });
    Route::get('forgot-password', function () { return view('pages.user-pages.forgot-password'); });
    Route::get('reset-password', function () { return view('pages.user-pages.reset-password'); });
    Route::get('lockscreen', function () { return view('pages.user-pages.lockscreen'); });
    Route::get('profile', function () { return view('pages.user-pages.profile'); });
    Route::get('gallery', function () { return view('pages.user-pages.gallery'); });
    Route::get('search', function () { return view('pages.user-pages.search'); });
    Route::get('notifications', function () { return view('pages.user-pages.notifications'); });
});

Route::group(['prefix' => 'error-pages'], function(){
    Route::get('error-404', function () { return view('pages.error-pages.error-404'); });
    Route::get('error-500', function () { return view('pages.error-pages.error-500'); });
});

Route::group(['prefix' => 'general-pages'], function(){
    Route::get('blank-page', function () { return view('pages.general-pages.blank-page'); });
    Route::get('landing-page', function () { return view('pages.general-pages.landing-page'); });
    Route::get('pricing', function () { return view('pages.general-pages.pricing'); });
    Route::get('faq', function () { return view('pages.general-pages.faq'); });
});

Route::group(['prefix' => 'email-templates'], function(){
    Route::get('welcome-email', function () { return view('pages.email-templates.welcome-email'); });
    Route::get('reset-password', function () { return view('pages.email-templates.reset-password'); });
    Route::get('newsletter', function () { return view('pages.email-templates.newsletter'); });
    Route::get('order-confirmation', function () { return view('pages.email-templates.order-confirmation'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('pages.apps.chat'); });
    Route::get('calendar', function () { return view('pages.apps.calendar'); });
    Route::get('email', function () { return view('pages.apps.email'); });
    Route::get('todo-list', function () { return view('pages.apps.todo-list'); });
});

Route::group(['prefix' => 'ecommerce'], function(){
    Route::get('invoice', function () { return view('pages.ecommerce.invoice'); });
    Route::get('pricing', function () { return view('pages.ecommerce.pricing'); });
    Route::get('product-catalogue', function () { return view('pages.ecommerce.product-catalogue'); });
    Route::get('product-detail', function () { return view('pages.ecommerce.product-detail'); });
    Route::get('product-edit', function () { return view('pages.ecommerce.product-edit'); });
    Route::get('product-list', function () { return view('pages.ecommerce.product-list'); });
    Route::get('product-orders', function () { return view('pages.ecommerce.product-orders'); });
});

Route::group(['prefix' => 'gallery'], function(){
    Route::get('grid', function () { return view('pages.gallery.grid'); });
    Route::get('grid-with-description', function () { return view('pages.gallery.grid-with-description'); });
    Route::get('masonry', function () { return view('pages.gallery.masonry'); });
    Route::get('masonry-with-desc', function () { return view('pages.gallery.masonry-with-desc'); });
    Route::get('hideshow', function () { return view('pages.gallery.hideshow'); });
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('flag-icons', function () { return view('pages.icons.flag-icons'); });
    Route::get('font-awesome', function () { return view('pages.icons.font-awesome'); });
    Route::get('simple-line-icons', function () { return view('pages.icons.simple-line-icons'); });
    Route::get('themify', function () { return view('pages.icons.themify'); });
    Route::get('typicons', function () { return view('pages.icons.typicons'); });
    Route::get('weather-icons', function () { return view('pages.icons.weather-icons'); });
});

Route::get('/login', fn() => view('auth.login'))->name('login');

Route::middleware('auth:sanctum')->get('/dashboard', function () {
    return view('dashboard');
});
