<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('indexHome');

Route::get('loginn', function(){
    $auth = Auth::user();
    // dd($auth);
    return view('test', ['auth'=>$auth]);
});

// Route::get('/create', [PostController::class,'create'])->name('post.create');
// Route::post('/create', [PostController::class,'store'])->name('post.store');

Route::get('/viewpost', function(){
    $posts = Post::paginate(3);
    return view('post.viweguest', ['posts'=>$posts]);
})->name('view.post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('post',PostController::class)->except(['index' , 'show'])->middleware(['verified']); // except(['index'])
    Route::get('/dashboard', [PostController::class, 'index'])->middleware(['verified'])->name('dashboard');
});

require __DIR__.'/auth.php';
