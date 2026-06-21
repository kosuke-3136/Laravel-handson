<!DOCTYPE html><html lang="ja"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>課題11</title><style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Segoe UI',sans-serif;background:#f1f5f9;padding:40px 20px}.wrap{max-width:820px;margin:0 auto}.badge{background:#1e293b;color:#facc15;border-radius:10px;padding:20px 25px;margin-bottom:22px}.badge h2{font-size:1.05em;margin-bottom:10px}.badge ul{padding-left:18px;color:#94a3b8;font-size:.9em;line-height:2}h1{font-size:1.4em;color:#1e293b;margin-bottom:18px}.user-card{background:#fff;border-radius:10px;padding:18px 22px;margin-bottom:12px;box-shadow:0 2px 8px rgba(0,0,0,.05);display:flex;justify-content:space-between;align-items:center}.count{font-size:1.8em;font-weight:700;color:#1e293b}.count.zero{color:#ef4444}.back{display:inline-block;margin-top:18px;color:#64748b;text-decoration:none;font-size:.9em}</style></head>
<body><div class="wrap">
<div class="badge"><h2>🏆 課題11: ツールを組み合わせて解く ★★★★★（自習用）</h2><ul><li>特定のユーザーだけ投稿数が0になっている（エラーなし）</li><li>dump→Debugbar→toSql→Log::を順番に使おう</li></ul></div>
<h1>ユーザー一覧（投稿数付き）</h1>
@foreach($result as $user)
<div class="user-card"><div><h3>{{ $user['name'] }}</h3><p style="font-size:.85em;color:#94a3b8">ID: {{ $user['id'] }}</p></div>
<div style="text-align:center"><div class="count {{ $user['post_count'] === 0 ? 'zero' : '' }}">{{ $user['post_count'] }}</div><div style="font-size:.72em;color:#94a3b8">投稿数</div></div></div>
@endforeach
<a href="/" class="back">← 課題一覧に戻る</a>
</div></body></html>
