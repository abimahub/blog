<?php

use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

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
    return view('posts', [
          'posts' => Post::all()
     ]); 
});

Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');
// this works fine but is not the most elegant solution
// set out what you want to do in a comment, then craft the code to fit that comment:
// Find a post by it's slug and pass it to a view called "post"
//(making and using a class called Post to help with this)
//set it out then create a new class file under Models, and move all the routing there.
        

        