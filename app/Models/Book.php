<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    // If your table is not named 'books', uncomment and set the table name
    protected $table = 'books';

    // If your primary key is not 'id', uncomment and set it
    // protected $primaryKey = 'book_id';

    // If you don't want timestamps (created_at, updated_at), set this to false
    // public $timestamps = false;

    // To allow mass assignment of attributes (for create and update), define $fillable or $guarded
    protected $fillable = ['author_id', 'title', 'publication_date'];
    // Or, to guard against mass assignment of all attributes except those specified:
    // protected $guarded = ['id'];

    // Define the relationship with the Author model
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
