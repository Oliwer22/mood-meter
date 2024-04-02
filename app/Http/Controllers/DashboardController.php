<?php 

namespace App\Http\Controllers;

use App\Models\Emoji;
use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class DashboardController extends Controller 
{
    public function dashboard() {
        $emojiChartTotal = Emoji::count();
        $emojiPieChartTotal = Review::count(); 
    
        return view('Admin/dashboard', ['emojiChartTotal' => $emojiChartTotal, 'emojiPieChartTotal' => $emojiPieChartTotal]);
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
