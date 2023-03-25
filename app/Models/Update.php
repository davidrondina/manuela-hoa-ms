<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'body', 'image', 'tags', 'is_private'];

    // Establish relationship with User (1 to 1)
    public function user() {
        return $this->belongsTo(User::class, 'user_id'); // 'user_id' is the field in the database
        // Read as: A Listing belongs to a User

        /*
            Now that the relationship between Listing and Table (and vice versa) is established, we can now use tinker tool by running the command 'php artisan tinker' to open a shell, where we can run Eloquent methods using the models (e.g. App\Models\Listing::first() returns the first row of the 'listings' table)
        */
    }
}
