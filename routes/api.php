<?php use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/* |--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
// });
});
Route::get('/get-all', [PostController::class, "index"]);
Route::post("/post-data", [PostController::class, "Make"]);
Route::get("/get-one/{id}", [PostController::class, "getone"]);
Route::delete("/delete/{id}", [PostController::class, "Delete"]);
Route::put('update/{id}',[PostController::class, "update"]);

