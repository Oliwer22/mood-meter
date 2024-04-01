<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewEdit extends Model
{
    protected $table = 'reviews'; // Adjust table name if needed

    protected $fillable = ['name', 'email', 'review']; // Add other fillable attributes as needed
}
