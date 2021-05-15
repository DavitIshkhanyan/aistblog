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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    $pages = ['posts','about','contact'];
    return view('index',['pages'=>$pages]);
});
// Route::get('/contact', function () {
//     // return view('contact');
//     return "Hello";
// });

Route::redirect('/shop','/contact');

// Route::get('/posts', function () {
//     return view('posts.index');
// })->name('posts');

Route::get('/posts','PostController@index')->name('posts');  //

Route::get('/contact','PageController@index')->name('contact');
// Route::get('/posts/create', 'PostController@create')->name('posts.create');
//Route::post('/posts','PostController@store',['post'=>$_POST]);


//Route::get('/posts/{id}',function($id){
//    // $id_post=$id;
//    return view('posts.single')->with('post_id',$id);
//})->where('id','[0-9]+');

// $ composer global require laravel/installer
// $ composer create-project --prefer-dist laravel/laravel:^7.0 aistblog
// composer create-project laravel/laravel Project
// $ php artisan make:controller PageController


// Das 2(15)


Route::get('/category/{id?}',function ($id=null){
    return $id;
});

// asset - public papka

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::post('/comments',function () {
    print_r($_POST);
});

// Das 3(16)
//Route::get('/posts/{id}','PostController@show')->name('posts.show');

// php artisan storage:link
// php artisan --help
// php artisan list
// php artisan make:migration create_photos_table
// php artisan make:migration create_posts_table
// php artisan migrate
// php artisan migrate:fresh


// pagecontroller - public function contact veradarcni

// view-er dasavorel, cantrollerner stexcel, home-i mi tarberak toxnel(3-rd@ toxnel), mnacac@ jnjel, anun@ dnel home,   homeController(public function index, contact us metod), pagesController(about us, contact(avelacnel contact page)), Blog - getallposts metod, search,recent posts,  layouts - saydbar, dashboard verabervum e adminin
// bladener u controllerner


// Das 4(17)
//  php artisan make:model Post
 // php artisan make:seeder PostSeeder
// php artisan make:factory PostFactory --model=Post
 //php artisan db:seed

//git pull

// Das 5(18)
// Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
// Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
// Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy');


// composer require laravel/ui "^2.0"
 // php artisan ui bootstrap --auth
// npm install
// npm run dev

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'HomeController@adminindex')->name('admin.home');
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', 'Admin\AdminController@index');
//    Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
    Route::get('/admin_posts', 'Admin\AdminController@posts')->name('admin_posts');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts','PostController@store',['post'=>$_POST]);
    Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
    Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy');
});
 Route::get('/posts/{id}','PostController@show')->name('posts.show');


// anun@ poxel .env-ic ???

// php artisan make:request StorePostRequest

 // project- @st tarineri, @st categorianeri, latest galery, search, arancin table tags(many to many), category(one to many),

 // nkar(storage); image(input(file)); input(text(value)) - voch lriv
