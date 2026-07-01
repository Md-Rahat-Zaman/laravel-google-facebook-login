<?php 
// laravel 11 ar niche hole app/Providers/RouteServiceProvider.php akhan a jeye route define korte hoy
// r jodi 11 or 11+ hoy tahole bootstrap/app.php a define korte hoy
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello API is working'
    ]);
});
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}',[PostController::class,'show']);
Route::post('/posts', [PostController::class, 'store']);
?>