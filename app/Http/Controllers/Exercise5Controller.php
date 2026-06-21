<?php
namespace App\Http\Controllers;
use App\Models\Post;

/**
 * 課題5: 複雑なリレーション（上級） ★★★★☆
 */
class Exercise5Controller extends Controller
{
    public function index()
    {
        $posts = Post::all(); // 🐛 3箇所でN+1
        // 修正例: $posts = Post::with(['user', 'category', 'comments'])->get();

        return view('exercises.exercise5', compact('posts'));
    }
}
