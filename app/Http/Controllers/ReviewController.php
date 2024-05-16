<?php 
namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Emoji;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ReviewController extends Controller
{
public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'review' => 'required',
        'emoji_id' => 'required',
    ]);
    $data['lastName'] = $request->lastName ?? null;
    $data['leeftijd'] = $request->leeftijd ?? null;
    $data['address'] = $request->address ?? null;
    $data['phone'] = $request->phone ?? null;
    $data['opleiding'] = $request->opleiding ?? null;
    $data['vooropleiding'] = $request->vooropleiding === 'Anders' ? $request->vooropleidingAnders : $request->vooropleiding;
    $data['datum'] = $request->datum ?? now()->format('Y-m-d');
    if ($request->filled('leeftijd')) {
        $birthDate = Carbon::parse($request->leeftijd);
        $data['leeftijd'] = Carbon::now()->diffInYears($birthDate);
    }
    $review = Review::create($data);
    if ($request->filled('emoji_id')) {
        $emojiName = $this->getEmojiNameById($request->emoji_id);
        $emoji = Emoji::create([
            'emoji' => $emojiName,
            'emoji_id' => $request->emoji_id,
        ]);
    }
    return back();
}
private function getEmojiNameById($id)
{
    $emojiNames = [
        1 => 'Dead',
        2 => 'Frown',
        3 => 'Neutral',
        4 => 'Smile',
        5 => 'Happy',
    ];

    return $emojiNames[$id] ?? null;
}

public function getDataForPieChart()
{
    $data = Review::select('emoji_id')->get();
    return response()->json($data);
}

public function dellall()
{
    DB::table('reviews')->truncate();
    return redirect()->back()->with('success', 'All reviews deleted successfully!');
}

}