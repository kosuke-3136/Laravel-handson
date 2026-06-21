<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

/**
 * 課題11: ツールを組み合わせて解く ★★★★★（自習用）
 */
class Exercise11Controller extends Controller
{
    public function index()
    {
        $users = User::all();

        // TODO: dump($users->first()->toArray());

        $result = $users->map(function ($user) {

            // 🐛 Problem1: ループ内でSQLを発行している（N+1）
            // 🐛 Problem2: 'published' 条件が余分についている
            $postCount = Post::where('user_id', $user->id)
                             ->where('status', 'published')
                             ->count();

            // TODO: $q = Post::where('user_id', $user->id)->where('status', 'published');
            // TODO: dump($q->toSql(), $q->getBindings());

            return ['id' => $user->id, 'name' => $user->name, 'post_count' => $postCount];
        });

        // TODO: Log::info('ユーザー一覧取得完了', ['count' => $users->count()]);

        return view('exercises.exercise11', compact('result'));

        // ✅ 正解コード（参考）:
        // Log::info('ユーザー一覧取得開始');
        // $users = User::withCount('posts')->get();
        // Log::info('取得完了', ['count' => $users->count()]);
        // return view('exercises.exercise11', compact('users'));
    }
}
