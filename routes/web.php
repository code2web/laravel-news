<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ArticleController;
// XX
// Route::get('/mobilenav', function () {
//     return view('mobilenav');
// });

// Frontend Routes
Route::get("/",[FrontendController::class,'home'])->name('home');
Route::get('category',[FrontendController::class,'category'])->name('category');
Route::get('article/{id}',[FrontendController::class,'article'])->name('article');
// https://www.banglanews24.com/economics-business/news/bd/1339483.details
Route::get('video',[FrontendController::class,'video'])->name('video');
Route::get('photo',[FrontendController::class,'photo'])->name('photo');

// Backend Routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
        // return view('admin.dashboard.index');
    })->name('dashboard');
    // Route::get('dashboard',[CategoryController::class,'dashboard'])->name('dashboard');

	Route::resource('category',CategoryController::class);
    Route::get('/pagination/category',[CategoryController::class,'pagination'])->name('pagination_category');
    Route::get('search/category',[CategoryController::class,'search'])->name('search_category');

    Route::resource('tag',TagController::class);
    Route::get('/pagination/tag',[TagController::class,'pagination'])->name('pagination_tag');
    Route::get('search/tag',[TagController::class,'search'])->name('search_tag');

    Route::resource('division',DivisionController::class);
    Route::get('/pagination/division',[DivisionController::class,'pagination'])->name('pagination_division');
    Route::get('search/division',[DivisionController::class,'search'])->name('search_division');

    Route::resource('district',DistrictController::class);
    Route::get('/pagination/district',[DistrictController::class,'pagination'])->name('pagination_district');
    Route::get('search/district',[DistrictController::class,'search'])->name('search_district');

    Route::resource('article',ArticleController::class);
    Route::get('/pagination/article',[ArticleController::class,'pagination'])->name('pagination_article');
    Route::get('search/article',[ArticleController::class,'search'])->name('search_article');
    
    Route::post('/update/{id}',[ArticleController::class,'updateNew']);

});

// XX // Route::get("/",[ArticleController::class,'index']);

// Route::view('/', 'home');
Route::view('/backup', 'backup');
Route::view('test', 'admin.dashboard.index');
Route::get('backup2',[ArticleController::class,'backup2'])->name('backup2');


// 'up_name'=>"required|unique:categories,name,$category->name"

// $category->name = $request->up_name;
// $category->save();



// 'up_name'=>'required|unique:categories,name,'.$request->up_id

// Category::where('id',$request->up_id)->update([
//     'name' => $request->up_name
// ]);


      // url: "{{route('category.update', $category->id)}}",
      // url: "{{route('category.update',[$category->id])}}",


// brian2694 laravel-toastr


// how to update data by route resource in laravel and ajax
// https://stackoverflow.com/questions/22874004/what-url-to-use-for-update-function-in-a-resource-in-laravel-4-in-ajax-call


// how to each page pagination in laravel with ajax
// laravel pagination without reload
// https://stackoverflow.com/questions/59049405/laravel-pagination-without-refreshing-page
// https://webjourney.dev/laravel-9-pagination-without-page-reload-using-ajax-webjourney

// Tag e include hoy nai and Bigintiger() thakar korone jay na.

// So why does the same code with the same structure send only one data based on ID but all IDs are sent with Ajax?

// delete ajax
// https://youtu.be/8bVA3c0iY3w
// https://youtu.be/uToRUKJGr5Q
// file upload ajax
// https://youtu.be/KIQhDpmbFDo

// error: (error) => {
//     console.log(JSON.stringify(error));
// }

// how to insert data in laravel with ajax in many page or many table


// https://stackoverflow.com/questions/42001499/laravel-ajax-insert-data-into-table-without-refreshing
// https://laracasts.com/discuss/channels/laravel/how-to-insert-data-in-laravel-with-ajax-in-foreach-loop
// https://laracasts.com/discuss/channels/laravel/using-ajax-to-insert-a-record
// https://stackoverflow.com/questions/15541470/chrome-console-post-jquery-404-not-found-jquery-min-js2
// https://github.com/nahid/talk-example/issues/5
// https://github.com/rails/webpacker/issues/1651
// https://stackoverflow.com/questions/1349118/jquery-ajax-post-results-in-500-internal-server-error
// https://laracasts.com/discuss/channels/laravel/post-http1270018000messages-500-internal-server-error
// https://github.com/kubernetes/website/issues/25414

// insert foreign return
// https://youtu.be/ofKBb_-UHYU
// https://youtu.be/PjvLxG6MqA0

// https://youtu.be/BeRSWLJQlOQ
// https://youtu.be/FZu7NI_aTNM
// https://youtu.be/wt7q5cmqtMw
// https://youtu.be/GPhtPOZ9Csk
// https://youtu.be/bP--1iHk9ss
// https://youtu.be/L3nIM1xdiCk
// https://youtu.be/zhHKxqLZdgo
// https://youtu.be/S--z9whdne8
// https://youtu.be/hHbLhkCjTVo
// https://youtu.be/4v1lF7aD65s

// https://laravel.io/forum/11-03-2015-inserting-data-into-table-with-foreign-key
// https://stackoverflow.com/questions/68090498/laravel-how-to-insert-data-with-foreign-key

// undefined variable $category = jokhon layout e emon kisu include kori ja layout k extends kore. Othoba foreign thaka obosthay Database e Data emty thakle. Othoba emon kisu sudhu include kora ja onno file er sathe Releat kore Ta Sara.

// IN "Category, "
// Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails
// https://stackoverflow.com/questions/47544109/laravel-cannot-delete-or-update-a-parent-row-a-foreign-key-constraint-fails
// https://laracasts.com/discuss/channels/laravel/sqlstate23000-integrity-constraint-violation-1451-cannot-delete-or-update-a-parent-row-a-foreign-key-constraint-fails-mytodolaravel7steps-constraint-steps-todo-id-foreign-foreign-key-todo-id-references-todos-id-sql-delete-from-todos-where-id-5

// public function getDeletePost($post_id)
// {
//     $post =Post::where('id',$post_id)->first();

//     if ($post != null) {
//         $post->delete();
//         return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);
//     }

//     return redirect()->route('dashboard')->with(['message'=> 'Wrong ID!!']);
// }


// Attempt to read property "name" on null
// https://stackoverflow.com/questions/66185760/attempt-to-read-property-name-on-null
// https://laraveldaily.com/post/laravel-relation-attempt-to-read-property-on-null-error
// https://darkghosthunter.medium.com/i-broke-your-laravel-app-dfaaa584c7a7

// unmatched ')' laravel
// @foreach e '' eta deyar karone

// how to change resource route name

// Sob Page Khali kore delete etc kore check korte hobe
 
// 11 no video e 8 min custom file js

// php artisan migrate:fresh --seed
// division

// laravel jquery ajax select dropdown 
// https://stackoverflow.com/questions/10659097/jquery-get-selected-option-from-dropdown
// https://learn.jquery.com/using-jquery-core/faq/how-do-i-get-the-text-value-of-a-selected-option/
// https://www.tutorialrepublic.com/faq/how-to-get-the-value-of-selected-option-in-a-select-box-using-jquery.php
// how to insert foreign id to database by laravel controller with request

// foreign id add korte ta define kore dite hobe Protect Fillable e and Models use korte hobe and jar sathe relation ta ke belongs to R jake relation korbo take hasMany sathe foreign_id id dite hobe; tobe use e model name and jake relation korbo tate has many na dileo cholbe. TOBE protect fillable e obossoi define korte hobe.
// https://youtu.be/DcUEndPaIx4

// [2024-06-04 21:41:01] local.ERROR: SQLSTATE[HY000]: General error: 1005 Can't create table `probashnews`.`articles`

// SQLSTATE[HY000]: General error: 1005 Can't create table `probashnews`.`articles` (errno: 150 "Foreign key constraint is incorrectly formed") (Connection: mysql, SQL: alter table `articles` add constraint `articles_tag_id_foreign` foreign key (`tag_id`) references `tags` (`id`))

 // SQLSTATE[23000]: Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (Connection: mysql, SQL: drop table if exists `categories`)

// SQLSTATE[42S02]: Base table or view not found: 1146 Table 'probashnews.tags' doesn't exist SELECT * FROM tags

// SQLSTATE[42S02]: Base table or view not found: 1146 Table 'probashnews.tags' doesn't exist SELECT count(*) AS aggregate FROM `tags`

// Undefined variable $district

// Integrity constraint violation: 1451 Cannot delete or update a parent row: a foreign key constraint fails (`probashnews`.`articles`, CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`))

// SQLSTATE[42S02]: Base table or view not found: 1146 Table 'probashnews.tags' doesn't exist (Connection: mysql, SQL: select * from `tags`)

// https://laracasts.com/discuss/channels/laravel/image-upload-using-laravel-and-ajax
// https://youtu.be/8-XH-lCCO_Q
// https://stackoverflow.com/questions/15341179/uncaught-syntaxerror-unexpected-identifier

// how to show update value in ajax jquery with image by LARAVEL

// data-id And show id eki namer hole data not show in ajax. like 
// let id = $(this).data('id');
// let title = $(this).data('title');
// in index file
// $('#up_id').val(id);
// $('#up_title').val(title);
// in update model

// https://www.youtube.com/watch?v=Mk2iO56X-Kg
// https://youtu.be/-iBc8jroWGE

// https://youtu.be/8itxDu-xA7Q
// https://youtu.be/taXv2jV75HM
// https://laracasts.com/discuss/channels/general-discussion/how-to-update-image-with-ajax-in-laravel
// https://stackoverflow.com/questions/58532139/how-to-update-image-with-ajax-in-laravel


// https://youtu.be/taXv2jV75HM
// https://youtu.be/lANWNpNn3Qc
// https://youtu.be/YPwEoVIWlNs
// https://youtu.be/OnX4otXFIEk
// https://youtu.be/FrgmPyyGiMY?list=PLtrPbD4Jm81yWAACzqUZMvWRVnz8YXFmU
// https://youtu.be/hlJ_P3Z4-LE
// https://youtu.be/q7yDWntvh74
// https://youtu.be/MvDq0Xigr3Y
// https://youtu.be/ulDpRQcUpx8


// undefined variable $article when database is empty
// https://stackoverflow.com/questions/46787087/laravel-undefined-variable-articles
// https://stackoverflow.com/questions/16196815/undefined-variable-on-empty-database-row
// https://laracasts.com/discuss/channels/laravel/undefined-variable-data-l53
// https://laravel.io/forum/07-15-2014-undefined-variable-in-view-when-trying-to-grab-database-result
// https://github.com/cacti/cacti/issues/2622

// jquery te soto error khetre log/alert e na ese Devuger open hoy. like let formData = new FormData($('#create_article_form')[0]); [0] k jodi sese dei Like new FormData($('#create_article_form'))[0]; Othoba bootstrap e Modal open hosse sekhane alert korate chaile.

// type="button" na dile submit hisebe kaj kore

// https://www.google.com/search?q=chick+protein+solution+thik+and+glossy&oq=chick+protein+solution+thik+and+glossy&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCTE5MDg4ajBqMagCALACAA&sourceid=chrome&ie=UTF-8
// https://www.google.com/search?q=how+to+img+center+in+bootstrap&oq=how+to+img+center+in+bootstrap&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCDk5NDlqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8
// https://www.google.com/search?q=Property+%5Btitle%5D+does+not+exist+on+this+collection+instance.%22%2C&oq=Property+%5Btitle%5D+does+not+exist+on+this+collection+instance.%22%2C&gs_lcrp=EgZjaHJvbWUyBggAEEUYOdIBCDEyNjBqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8
// public function edit(Article $article)


// ekbar bootboxjs bebohar kore take bad dite chaile hoy na tar chace theke jay and eta sara kaj hoy na