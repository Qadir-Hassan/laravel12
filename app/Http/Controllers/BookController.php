<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;


class BookController extends Controller
{
    //

    public function show(){
        // $books = Book::all();
        // return $books;

        $author = Author::find(4);
if ($author) {
    $booksByAuthor = $author->books; // Access the related books collection
  return $booksByAuthor;
}

    }
 

    function addBook(){
        $newBook = new Book();
        $newBook->author_id = 5;
$newBook->title = 'Eloquent ORM Explained';
$newBook->description = "test desctpi";

$newBook->save();

    }
}
