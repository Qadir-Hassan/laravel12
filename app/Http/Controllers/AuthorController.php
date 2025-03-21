<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller

{
    //

    public function showAllAuthors(){
                  /// select * from authors
        $authors = DB::table('authors')->get();
        ;

        return view('showauthors', ['data' => $authors]);

        
    }

    public function addAuthor() {

     
        DB::table('authors')->insert([
            'name' => 'cc',
            'email' => 'joneDOessdfsd@example.com',
          
        ]);
    
        return "User added successfully!";
    }

    public function updateAuthor() {
        DB::table('authors')->where('id', 2)->update(['email' => 'updated@example.com']);
    
        return "User updated successfully!";
    }

    public function deleteUser() {
        DB::table('authors')->where('id', 3)->delete();
    
        return "User deleted successfully!";
    }
  

}
