<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\RegisterController;
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
          'posts' => Post::latest()->get()
     ]); 
})->name('home');

Route::get('posts/{post:slug}', function (Post $post) { //Post::where('slug', $post)->firstor fail()
       return view('post', [
        'post' => $post
        # Post::findOrFail($id)
    ]);
});

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

Route::get('categories/{category:slug}', function (Category $category)
{
  return view('posts', [
    'posts'=>$category->posts,
    'currentCategory' => $category,
    'categories' => Category::all()
  ]);
})->name('category');

Route::get('authors/{author}', function(User $author)
{
  return view('posts', [
    'posts'=>$author->posts
  ]);
});


//->where('post', '[A-z_\-]+');  //is the regex, however using layouts means this is not necessary.
// this works fine but is not the most elegant solution
// set out what you want to do in a comment, then craft the code to fit that comment:
// Find a post by it's slug and pass it to a view called "post"
//(making and using a class called Post to help with this)
//set it out then create a new class file under Models, and move all the routing there.
        

        