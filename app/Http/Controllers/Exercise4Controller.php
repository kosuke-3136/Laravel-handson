<?php
namespace App\Http\Controllers;
use App\Models\Post;

/**
 * 課題4: ページがめちゃくちゃ遅い ★★★☆☆
 */
class Exercise4Controller extends Controller
{
    public function index()
    {
        $posts = Post::all(); // 🐛 N+1問題
        // 修正例: $posts = Post::with('user')->get();

        return view('exercises.exercise4', compact('posts'));
    }
}
