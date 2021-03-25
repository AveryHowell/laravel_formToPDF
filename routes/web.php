<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\htmlPDFController;
use App\Http\Controllers\EmployeeController;

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
    return view('htmlPDFs');
});

Route::get('/pdf/{pdf}', function ($pdfID) {

    $path = __DIR__ . "/../resources/pdf/{$pdfID}.html";

    if (! file_exists($path)) {
        return redirect('/');
    }

    $htmlPDF = file_get_contents($path);

    return view('htmlPDF', [
        'htmlPDF' => $htmlPDF,
        'pdfID'   => $pdfID
    ]);
})->where('post', '[A-z\-]');

// Route::get('/download', [htmlPDFController::class, 'createPDF']);
Route::get('/download/{pdfID}', function ($pdfID) {
            $path = __DIR__ . "/../resources/pdf/{$pdfID}.html";
            $pdf = PDF::loadFile($path);
            return $pdf->download($pdfID. '.pdf');
});

Route::get('/index', 'App\Http\Controllers\EmployeeController@showEmployees');