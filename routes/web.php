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
    return view('pages.index');
})->name('/');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

// عمادة الكلية
Route::get('college_dean', function () {
    return view('pages.college_dean');
})->name('college_dean');


// مبنى قسم التقنية اليمكانيكة وقسم الدراسات العامه
Route::get('technical_mechanics', function () {
    return view('pages.technical_mechanics');
})->name('technical_mechanics');

// مبنى قسم الحاسب الالي والتقمية الادارية
Route::get('Computer-administative-technique', function () {
    return view('pages.Computer-administative-technique');
})->name('CATE');

// مبنى قسم الاكترونيا
Route::get('electronics', function () {
    return view('pages.electronics');
})->name('Electronics');

// مبنى الاغراض المتععدة
Route::get('multiple_purposes', function () {
    return view('pages.multiple_purposes');
})->name('multiple_purposes');

// تحصص الدعم الفني 
Route::get('specialization_support', function () {
    return view('specialization.support');
})->name('support');


// تحصص الشبكات 
Route::get('specialization_networks', function () {
    return view('specialization.networks');
})->name('networks');

// تحصص محاسبة 
Route::get('specialization_accounting', function () {
    return view('specialization.accounting');
})->name('accounting');

// تحصص ادارة مكتبية 
Route::get('specialization_office-management', function () {
    return view('specialization.office-management');
})->name('office-management');

// تخصص الميكانيكيا
Route::get('specialization_mechanics', function () {
    return view('specialization.mechanics');
})->name('mechanics');

// تخصص الدراسات العامة
Route::get('specialization_general-studies', function () {
    return view('specialization.general-studies');
})->name('general-studies');

// تخصص اكترونيات صناعية وتحكم
Route::get('specialization-industrial-controlled-electronics', function () {
    return view('specialization.industrial-controlled-electronics');
})->name('industrial-controlled-electronics');


// قسم االحساب الالي والتخصصا
    Route::get('section-computer', function () {
        return view('section.computer');
    })->name('section-computer');


    // مبني وتخصص التقنية الميكانيكيا والدراسات العامة
    Route::get('section-mechanics', function () {
        return view('section.micanic');
    })->name('section-mechanics');

     // مبني وتخصص التقنية الدراسات العامة 
     Route::get('section-general-studes', function () {
        return view('section.micanic');
    })->name('section-general-studes');


    // تواصل معنا
    Route::get('Contact-us', function () {
        return view('layouts.contact');
    })->name('contact-us');

    //  قسم الالكترونيات الصناعية والتحكم
    
    Route::get('section_specialization-industrial-controlled-electronics', function () {
        return view('section.section_industrial');
    })->name('section_specialization-industrial-controlled-electronics');