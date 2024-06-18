<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emoji;
use App\Models\Review;
use Carbon\Carbon;

class StatsController extends Controller
{
    public function AllStats(Request $request)
    {
        //required for data filter
    $date = $request->query('date', Carbon::now()->format('Y-m-d'));

    $startOfDay = Carbon::createFromFormat('Y-m-d', $date)->startOfDay();
    $endOfDay = Carbon::createFromFormat('Y-m-d', $date)->endOfDay();

    $emojiStats = Emoji::selectRaw('DATE_FORMAT(created_at, "%Y-%m-%d %H:00") as datetime, COUNT(*) as count')
            ->whereBetween('created_at', [$startOfDay, $endOfDay])
            ->groupBy('datetime')
            ->orderBy('datetime')
            ->get();

    $reviewStats = Review::selectRaw('DATE_FORMAT(created_at, "%Y-%m-%d %H:00") as datetime, COUNT(*) as count')
            ->whereBetween('created_at', [$startOfDay, $endOfDay])
            ->groupBy('datetime')
            ->orderBy('datetime')
            ->get();

    $emojiLabels = $emojiStats->pluck('datetime')->toArray();
    $emojiCounts = $emojiStats->pluck('count')->toArray();

    $reviewLabels = $reviewStats->pluck('datetime')->toArray();
    $reviewCounts = $reviewStats->pluck('count')->toArray();

    return response()->json([
        'emojiLabels' => $emojiLabels, 
        'emojiCounts' => $emojiCounts,
        'reviewLabels' => $reviewLabels, 
        'reviewCounts' => $reviewCounts
    ]);
    }
}