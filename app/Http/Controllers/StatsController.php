<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Emoji;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class StatsController extends Controller
{
    public function AllStats(Request $request)
    {
        $days = $request->query('days', 1);

        $stats = Emoji::selectRaw('DATE_FORMAT(created_at, "%Y-%m-%d %H:00") as datetime, COUNT(*) as count')
                        ->where('created_at', '>=', Carbon::now()->subDays($days))
                        ->groupBy('datetime')
                        ->orderBy('datetime')
                        ->get();

        $labels = $stats->pluck('datetime')->toArray();
        $counts = $stats->pluck('count')->toArray();

        return response()->json(['labels' => $labels, 'counts' => $counts]);
    }
    private function mergeStats($stats1, $stats2)
    {
        $merged = collect([]);
        for ($i = 0; $i < count($stats1); $i++) {
            $hour = $stats1[$i]->hour;
            $count = $stats1[$i]->count + $stats2[$i]->count;
            $merged->push((object)['hour' => $hour, 'count' => $count]);
        }
        return $merged;
    }
}
