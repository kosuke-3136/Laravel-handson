<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 課題7: SQLデバッグ ★★★☆☆（自習用）
 */
class Exercise7Controller extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword', '');

        $query = Post::query();

        if ($keyword) {
            // 🐛 バグ: 'title' ではなく 'content' を検索している
            $query->where('content', 'like', $keyword);

            // TODO: dump($query->toSql());
            // TODO: dump($query->getBindings());
        }

        $posts = $query->get();

        return view('exercises.exercise7', compact('posts', 'keyword'));
    }
}
