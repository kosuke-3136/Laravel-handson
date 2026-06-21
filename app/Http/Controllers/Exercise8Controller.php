<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * 課題8: 本番環境を想定したデバッグ ★★★★☆（自習用）
 */
class Exercise8Controller extends Controller
{
    public function create() { return view('exercises.exercise8'); }

    public function store(Request $request)
    {
        // TODO: Log::info('投稿作成リクエスト受信', ['title' => $request->title]);

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        try {
            // TODO: Log::info('DB保存開始');

            $post = Post::create([
                'user_id'     => 1,
                'category_id' => 1,
                'title'       => $validated['title'],
                'content'     => $validated['content'],
            ]);

            // TODO: Log::info('投稿作成成功', ['post_id' => $post->id]);

            return redirect()->route('exercise8.success');

        } catch (\Exception $e) {
            // TODO: Log::error('投稿作成失敗', [
            //     'error' => $e->getMessage(),
            //     'file'  => $e->getFile(),
            //     'line'  => $e->getLine(),
            // ]);

            return back()->withErrors(['error' => '保存に失敗しました']);
        }
    }

    public function success()
    {
        return view('exercises.success', [
            'exercise' => 8,
            'message'  => '本番環境でも安全なデバッグができました！',
        ]);
    }
}
