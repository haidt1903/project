<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Comment;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
            'image' => 'nullable|string',
        ]);
    
        $product->comments()->create([
            'content' => $request->content,
            'rating' => $request->rating,
            'image' => $request->image,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Bình luận đã được thêm');
    }
}
