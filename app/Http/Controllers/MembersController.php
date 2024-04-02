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
            $members = $reviews->map(function ($review) {
                return [
                    'id' => $review->id,
                    'emoji_id' => $review->emoji_id,
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
                ];
            });
    
            return $members;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function index()
    {
        $members = Review::all();
        $memberstotal = Review::count();
        return view('Admin/Page/users', ['members' => $members, 'memberstotal'=>$memberstotal]);
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