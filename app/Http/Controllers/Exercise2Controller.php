<?php
namespace App\Http\Controllers;
use App\Models\Post;

/**
 * 課題2: リレーションがnullになる ★★☆☆☆
 *
 * 症状: "Attempt to read property 'name' on null" エラーが出る
 * ミッション: 段階的に dump() して、どこで null になっているか特定しよう！
 */
class Exercise2Controller extends Controller
{
    public function show($id)
    {
        $post = Post::find($id);

        // TODO: 段階的に dump() して確認しよう
        // dump($post);
        // dump($post->user);
        // dump($post->user_id);

        return view('exercises.exercise2', [
            'post'   => $post,
            'author' => $post->user->name, // ← ここでエラー！
        ]);
    }
}
