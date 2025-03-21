<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AuthorController;

use App\Http\Controllers\AuthorTwoController;


Route::get('/', function () {
    return view('home');
});


Route::get('about-us/', function(){
    return view('about');

});


Route::get('admin/',function(){
 return view('contact');
});


// Route::get('/users',function(){
//     $name = "John Doe";
//     return view('userpage',['user'=>$name, 'city' => 'karachi']);
   
//  });


//  Route::get('contact-us/',[UserController::class,'show']);

//  Route::get('show-authors/',[AuthorController::class,'showAllAuthors']);

 
 Route::get('add-authors/',[AuthorController::class,'addAuthor']);

 Route::get('update-authors/',[AuthorController::class,'updateAuthor']);



Route::get('show-authors/',[AuthorTwoController::class,'showAuthors']);


Route::get('authors/{id}',[AuthorTwoController::class,'showSingleUser']);

Route::get('add-author',[AuthorTwoController::class,'showAddAuthorForm'])->name('forms.add-author');


Route::post('process-form-two',[AuthorTwoController::class,'processForm'])->name('form.process');