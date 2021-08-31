<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;
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
    return view('insert');
});
Route::post('/insert', [FirebaseController::class, 'insert']);
Route::get('/delete/{id}', [FirebaseController::class, 'delete']);
Route::get('/edit/{id}', [FirebaseController::class, 'edit']);
Route::post('/update', [FirebaseController::class, 'update']);
Route::get('/glist', [FirebaseController::class, 'getList']);
Route::get('/demo', function () {
    $students = app('firebase.firestore')
        ->database()
        ->collection('Student')
        ->documents();
    // $an = $students['id'];
    // $an = $students->snapshot();
    // dd($an);
    if ($students->size() > 0) {
        foreach ($students as $stu) {
            die(json_encode($stu->id()));
            /*if ($stu->exists()) {
                die(json_encode($stu));
            }*/
        }
    }
});
