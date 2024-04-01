<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['emoji_id', 'name', 'lastName', 'leeftijd', 'address', 'phone', 'email', 'opleiding', 'vooropleiding', 'review', 'datum'];

    public function updateReview($review)
    {
        $this->review = $review;
        return $this->save();
    }
    /**
     * Delete the member.
     *
     * @return bool|null
     * @throws \Exception
     */
    public function deleteMember()
    {
        return $this->delete();
    }

}