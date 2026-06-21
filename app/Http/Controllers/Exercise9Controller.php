<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Http\Request;

/**
 * 課題9: 「動いているか」を確認するデバッグ ★★★☆☆（自習用）
 */
class Exercise9Controller extends Controller
{
    public function index()
    {
        $posts = Post::with('likes')->take(10)->get();
        return view('exercises.exercise9', compact('posts'));
    }

    public function like(Request $request, $postId)
    {
        $userId = $request->input('user_id', 1);
        $post   = Post::find($postId);

        // TODO: dump('受け取った値', ['post_id' => $postId, 'user_id' => $userId]);

        $alreadyLiked = Like::where('post_id', $postId)
                            ->where('user_id', $userId)
                            ->exists();

        // TODO: dump('既にいいね済み?', $alreadyLiked);

        if (!$alreadyLiked) {
            Like::create(['post_id' => $postId, 'user_id' => $userId]);
        }

        $likeCount = Like::where('post_id', $postId)->count();

        return response()->json(['liked' => !$alreadyLiked, 'count' => $likeCount]);
    }
}
