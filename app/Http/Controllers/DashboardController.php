<?php 

namespace App\Http\Controllers;

use App\Models\Emoji;
use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\Regex;

class DashboardController extends Controller 
{
    private function getEmojiNameById($id)
{
    //Emojinames with id
    $emojiNames = [
        1 => 'Dead',
        2 => 'Frown',
        3 => 'Neutral',
        4 => 'Smile',
        5 => 'Happy',
    ];

    return $emojiNames[$id] ?? null;
}
    public function dashboard() {
        //gets the data to show on dashboard
        $emojiChartTotal = Emoji::count();
        $emojiPieChartTotal = Review::count(); 
        //shows last member 
        $lastmember = Review::orderBy('created_at', 'desc')->first();
        $lastmemberEmojiName = $lastmember && $lastmember->emoji_id ? $this->getEmojiNameById($lastmember->emoji_id) : 'N/A';
        return view('Admin/dashboard', ['emojiChartTotal' => $emojiChartTotal, 'emojiPieChartTotal' => $emojiPieChartTotal, 'lastmember' => $lastmember, 'lastmemberEmojiName' => $lastmemberEmojiName]);
    }
    public function getEmojis() {
        $emojis = Emoji::all();
        $emojiData = [];
        foreach ($emojis as $emoji) {
            if (!isset($emojiData[$emoji->emoji])) {
                $emojiData[$emoji->emoji] = 0;
            }
            $emojiData[$emoji->emoji]++;
        }
        return response()->json($emojiData);
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
