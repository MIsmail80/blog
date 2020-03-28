<?php

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

use App\Models\Comment;

Route::get('test', function () {
    $postComments = Comment::where('post_id', 1)->where('comment_id', 0)->get();
    echo showCommentsTree($postComments);
});

function showCommentsTree($comments)
{
    $output = "<ul>";

    foreach ($comments as $comment) {
        $output .= "<li>{$comment->comment}</li>";
        if ($comment->replies()->exists()) {
            $output .= showCommentsTree($comment->replies);
        }
    }

    $output .= "</ul>";

    return $output;
}

Route::get('/', 'HomeController@homePage');

Route::get('/category/{id}/posts', 'HomeController@getCategoryPosts');

Route::get('/profile', 'UserController@getProfile');
Route::post('/save-profile', 'UserController@saveProfile');

Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');

Route::get('/logout', 'UserController@logout');

Route::get('/register', 'UserController@getRegister');
Route::post('/register', 'UserController@postRegister');

Route::resource('posts', 'PostController');
