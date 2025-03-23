<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    // If your table is not named 'authors', uncomment and set the table name
     protected $table = 'authors';

    // If your primary key is not 'id', uncomment and set it
    // protected $primaryKey = 'writer_id';

    // If you don't want timestamps, set this to false
    // public $timestamps = false;

    // To allow mass assignment, define $fillable or $guarded
    protected $fillable = ['name'];
    // Or, to guard against mass assignment:
    // protected $guarded = ['id'];

    // Define the relationship with the Book model
    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
