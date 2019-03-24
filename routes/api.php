<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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
/*

*/
// User section
Route::group(["middleware" => "authorized"] , function(){
    Route::post('signUp', "UserController@signUp");
    Route::post('logIn', "UserController@logIn");

    Route::post('changeImage', "UserController@changeImage");
    Route::post('delete', "UserController@delete");
    Route::get('showSetting', "UserController@showSetting");
    Route::delete('logout', "UserController@logOut");

    Route::post('reviwes/create','ReviewController@createReview');
    Route::get('myreviews','ReviewController@listMyReviews');
    Route::put('reviwes/edit', 'ReviewController@editReview');
    Route::post('makeComment','ActivitiesController@makeComment');
    Route::delete('deleteComment','ActivitiesController@deleteComment');
    Route::delete('unlike','ActivitiesController@unlike');
    Route::post('makeLike','ActivitiesController@makeLike');
    Route::get('updates','ActivitiesController@followingUpdates');

    Route::get( 'books/show', 'BookController@show');
    Route::delete('reviwes/delete', 'ReviewController@destroy');
    Route::get('changeBirthday', "UserController@changeBirthday");
    Route::get('whoCanSeeMyBirthday', "UserController@whoCanSeeMyBirthday");
    Route::get('changeCountry', "UserController@changeCountry");
    Route::get('whoCanSeeMyCountry', "UserController@whoCanSeeMyCountry");
    Route::get('changeCity', "UserController@changeCity");
    Route::get('whoCanSeeMyCity', "UserController@whoCanSeeMyCity");
    Route::get('reviwes','ReviewController@recentReviews');
    Route::get( 'reviwes/users/books', 'ReviewController@getReviewsForListOfBooks');
    Route::get( 'reviwes/books', 'ReviewController@getReviewsByTitle');
    Route::get('listReviewOfUser','ReviewController@listReviewOfUser');
    Route::get('showReviewOfBook','ReviewController@showReviewOfBook');
    Route::get('showReviewForBookForUser','ReviewController@showReviewForBookForUser');
    Route::get('showReviewsForABook','ReviewController@showReviewsForBook');
});

    // Book Section
    Route::get('books','BookController@index');
    Route::get( 'books/genre/{genre_name}', 'BookController@showByGenre');
    Route::get('Books/book_title/{book_title}','BookController@getBookByTitle');
    Route::get('Books/book_ISBN/{book_isbn}','BookController@getBookByIsbn');
    Route::get('Books/book_Authorname/{author_name}','BookController@getBookByAuthorName');
    // Review Section
    
    Route::post('shelf/add_book', 'ShelfController@addBook');
    Route::delete('shelf/remove_book', 'ShelfController@removeBook');
    // Shelf Section
    Route::get('shlef/list', 'ShelfController@index');
    Route::get('shelf/{shelf_name}', 'ShelfController@show');
    Route::get('shelf/{user_id}','ShelfController@userShelves');
    Route::get('shelf/','ShelfController@getBooksOnShelf');
    //Following section
    Route::post('follow','FollowingController@followUser');
    Route::delete('unfollow','FollowingController@unfollowUser');

    Route::get('followers','FollowingController@userFollowers');
    Route::get('following','FollowingController@userFollowing');

Route::get('changeBirthday', "UserController@changeBirthday");
Route::get('whoCanSeeMyBirthday', "UserController@whoCanSeeMyBirthday");
Route::get('changeCountry', "UserController@changeCountry");
Route::get('whoCanSeeMyCountry', "UserController@whoCanSeeMyCountry");
Route::get('changeCity', "UserController@changeCity");
Route::get('whoCanSeeMyCity', "UserController@whoCanSeeMyCity");


// Book Section
Route::get('books','BookController@index');

Route::get( 'books/genre', 'BookController@showByGenre');
Route::get('Books/book_title','BookController@getBookByTitle');
Route::get('Books/book_ISBN','BookController@getBookByIsbn');
Route::get('Books/book_Authorname','BookController@getBookByAuthorName');

// Review Section
Route::get('reviwes','ReviewController@recentReviews');
Route::get( 'reviwes/users/books', 'ReviewController@getReviewsForListOfBooks');
Route::get( 'reviwes/books', 'ReviewController@getReviewsByTitle');
//
Route::get('listReviewOfUser','ReviewController@listReviewOfUser');
Route::get('showReviewOfBook','ReviewController@showReviewOfBook');
Route::get('showReviewForBookForUser','ReviewController@showReviewForBookForUser');
Route::get('showReviewsForABook','ReviewController@showReviewsForBook');

Route::group(["middleware" => "unAuthorized"], function(){
Route::post('shelf/add_book', 'ShelfController@addBook');
Route::delete('shelf/remove_book', 'ShelfController@removeBook');
});


// Shelf Section
Route::get('shlef/list', 'ShelfController@index');
Route::get('shelf/{shelf_name}', 'ShelfController@show');
Route::get('shelf/{user_id}','ShelfController@userShelves');
Route::get('shelf','ShelfController@getBooksOnShelf');

//Owned Books
//Route::get( 'owned_books', 'OwnedBookController@index');
//Route::post( 'owned_books/{book_id}', 'OwnedBookController@create');
//Route::get('owned_books/list/{user_id}', 'OwnedBookController@list');
//Route::delete( 'owned_books/{book_id}', 'OwnedBookController@destroy');

//Auther section
//Route::get('authorname','AuthorController@getAuthorByName');
//Route::get('authorid','AuthorController@searchAuthor');






