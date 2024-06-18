<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewEdit extends Model
{
    protected $table = 'reviews'; 

    protected $fillable = ['name', 'email', 'review']; 
}
