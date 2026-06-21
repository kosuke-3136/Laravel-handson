<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * 課題10: 複合課題（3つの問題が同時に起きる） ★★★★☆（自習用）
 */
class Exercise10Controller extends Controller
{
    public function index(Request $request)
    {
        $keyword  = $request->input('keyword');
        $category = $request->input('category_id');

        $query = Post::query();

        // 🐛 Bug1: keyword が空でも where が適用されてしまう
        $query->where('title', 'like', '%' . $keyword . '%');

        if ($category) {
            $query->where('category_id', $category);
        }

        // 🐛 Bug2: N+1問題（with() がない）
        $posts = $query->get();

        // 🐛 Bug3: try/catch も Log:: もない

        return view('exercises.exercise10', compact('posts', 'keyword'));

        // ✅ 正解コード（参考）:
        // $query = Post::with(['user', 'category']);
        // if ($keyword) { $query->where('title', 'like', '%' . $keyword . '%'); }
        // try {
        //     Log::info('投稿検索', ['keyword' => $keyword]);
        //     $posts = $query->paginate(20);
        //     return view('exercises.exercise10', compact('posts', 'keyword'));
        // } catch (\Exception $e) {
        //     Log::error('検索失敗', ['error' => $e->getMessage()]);
        //     return response()->json(['error' => '検索に失敗しました'], 500);
        // }
    }
}
