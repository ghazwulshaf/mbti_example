<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TestController;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('dashboard', [
//         'title' => 'Dashboard',
//         'questions' => Question::all()
//     ]);
// });

Route::get('/', [QuestionController::class, 'show']);

Route::post('/', [QuestionController::class, 'store']);

// Route::get('/test', function (Request $request) {
//     return view('test', [
//         'title' => 'Test',
//         'questions' => Question::all()
//     ]);
// });

Route::get('/test', [TestController::class, 'show']);

Route::post('/test', [TestController::class, 'store']);


Route::get('/report', function () {
    $count = Test::pluck('point')->count();
    $sum = Test::pluck('point')->sum();
    $max = $count * 6;
    $result = ($sum/$max)*100;

    return view('report', [
        'title' => 'Report',
        'result' => (int)$result
    ]);
});
