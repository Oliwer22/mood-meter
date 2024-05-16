<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\ReviewEdit;
use App\Exports\ReviewsExport;
use Symfony\Component\HttpFoundation\StreamedResponse;
class MembersController extends Controller
{
    public function getData()
    {
        try {
            $reviews = Review::all();
            $emojiNames = [
                1 => 'Dead',
                2 => 'Frown',
                3 => 'Neutral',
                4 => 'Smile',
                5 => 'Happy',
            ];
            $members = $reviews->map(function ($review) use ($emojiNames) { 
                return (object)[
                    'id' => $review->id,
                    'emoji_id' => $review->emoji_id, // Add this line
                    'name' => $review->name,
                    'lastName' => $review->lastName,
                    'leeftijd' => $review->leeftijd,
                    'address' => $review->address,
                    'phone' => $review->phone,
                    'email' => $review->email,
                    'opleiding' => $review->opleiding,
                    'vooropleiding' => $review->vooropleiding,
                    'review' => $review->review,
                    'datum' => $review->datum,
                    'emoji_name' => $emojiNames[$review->emoji_id]
                ];
            });
            return $members;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function index(Request $request)
    {
        $query = Review::query();

        $emojiNames = [
            1 => 'Dead',
            2 => 'Frown',
            3 => 'Neutral',
            4 => 'Smile',
            5 => 'Happy',
        ];

        // Reverse the array to map names to ids
        $emojiIds = array_flip($emojiNames);

        if ($request->has('filter_category') && $request->has('filter_value')) {
            $filterCategory = $request->get('filter_category');
            $filterValue = $request->get('filter_value');

            // If the filter category is 'mood', use 'emoji_id' instead
            if ($filterCategory === 'mood') {
                $filterCategory = 'emoji_id';
                // Map the mood name to its corresponding id
                if (isset($emojiIds[$filterValue])) {
                    $filterValue = $emojiIds[$filterValue];
                }
            }

            if (!empty($filterCategory) && !empty($filterValue)) {
                if ($filterCategory === 'vooropleiding' && $filterValue === 'REST') {
                    $excludeOptions = ['VWO', 'HAVO', 'MAVO' ,'VMBO','HBO','MBO','UNI'];
                    $query->whereNotIn($filterCategory, $excludeOptions);
                } else {
                    $query->where($filterCategory, $filterValue);
                }
            }
        }

        $members = $query->get();
        $memberstotal = $query->count();

        foreach ($members as $member) {
            if (isset($member->emoji_id)) {
                $member->emoji_name = $emojiNames[$member->emoji_id];
            }
        }

        return view('Admin/Page/users', ['members' => $members, 'memberstotal'=>$memberstotal, 'emojiNames' => $emojiNames]);
    }

    public function editReview(Request $request)
    {
        try {
            $member = ReviewEdit::findOrFail($request->id);
            $member->review = $request->review;
            $member->save();
            
            return response()->json(['message' => 'Review updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function deleteMember(Request $request)
    {
        $member = Review::find($request->id);
        $member->delete();

        return redirect('/members')->with('success', 'Member deleted successfully');
    }
    public function exportReviews()
    {
        $export = new ReviewsExport();
        $file = $export->export();

        return response()->download($file, 'reviews.xlsx')->deleteFileAfterSend(true);
    }
    
}