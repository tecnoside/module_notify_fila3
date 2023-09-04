<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 42aa20e (.)
=======
declare(strict_types=1);

>>>>>>> 188c25a (.)
=======
declare(strict_types=1);

>>>>>>> fe06862 (.)
=======
>>>>>>> d27db1b (.)
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fe06862 (.)
/*
Route::middleware('auth:api')->get('/notify', function (Request $request) {
    return $request->user();
});
*/
<<<<<<< HEAD
=======

Route::middleware('auth:api')->get('/notify', function (Request $request) {
    return $request->user();
});
>>>>>>> 42aa20e (.)
=======
/*
Route::middleware('auth:api')->get('/notify', function (Request $request) {
    return $request->user();
});
*/
>>>>>>> 188c25a (.)
=======
>>>>>>> fe06862 (.)
=======

Route::middleware('auth:api')->get('/notify', function (Request $request) {
    return $request->user();
});
>>>>>>> d27db1b (.)
