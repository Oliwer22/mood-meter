<?php

namespace App\Http\Controllers;

use App\Models\Emoji;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EmojiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Validate the request data
        $request->validate([
            'emoji' => 'required|string',
            'emoji_id' => 'required|integer',

        ]);

        // Create a new Emoji instance
        $emoji = new Emoji();
        $emoji->emoji = $request->emoji;
        $emoji->emoji_id = $request->emoji_id;
        $emoji->save();

        // Return a JSON response indicating success
        return response()->json(['success' => true]);
    }
}
