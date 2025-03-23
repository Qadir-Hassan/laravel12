<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Author;

class AuthorTwoController extends Controller
{
    //

    // show all authors on frontend

    public function showAuthors(){

        // select * from authors --- SQL
        // $allAuthors = DB::table('authors')->get();

    $authors = DB::table('authors')->get();

         return view('showauthors',['authors'=>$authors]);
    }

    public function showSingleUser(string $id)
    {
        $author = DB::table('authors')->where('id','=',$id)->get();


        
        return view('singleAuthors',['author'=>$author]);
    }


    public function showAddAuthorForm(){
        return view('forms.add-author');
    }


    public function processForm(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
          
        ];

        // Custom error messages (optional)
        $messages = [
           
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('forms.add-author')
                ->withErrors($validator)
                ->withInput();
        }

     
        // Store validated data in variables
        $name = $request->input('name');
        $email = $request->input('email');

        $newAuthor = new Author();
        $newAuthor->name = $name;
        $newAuthor->email = $email;

        $newAuthor->save();

        return view('welcome');

    
       
    }

}
