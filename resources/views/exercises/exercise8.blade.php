<!DOCTYPE html><html lang="ja"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0"><title>課題8</title><style>*{margin:0;padding:0;box-sizing:border-box}body{font-family:'Segoe UI',sans-serif;background:#f1f5f9;padding:40px 20px}.wrap{max-width:640px;margin:0 auto}.badge{background:#1e293b;color:#fb923c;border-radius:10px;padding:20px 25px;margin-bottom:22px}.badge h2{font-size:1.05em;margin-bottom:10px}.badge ul{padding-left:18px;color:#94a3b8;font-size:.9em;line-height:2.2}.card{background:#fff;border-radius:12px;padding:35px;box-shadow:0 4px 20px rgba(0,0,0,.08)}h1{font-size:1.5em;color:#1e293b;margin-bottom:22px}.fg{margin-bottom:18px}label{display:block;font-weight:600;color:#374151;margin-bottom:5px;font-size:.93em}input,textarea{width:100%;padding:10px 14px;border:2px solid #e2e8f0;border-radius:8px;font-size:1em}button{width:100%;padding:12px;background:#ea580c;color:#fff;border:none;border-radius:8px;font-size:1em;font-weight:700;cursor:pointer;margin-top:6px}.back{display:inline-block;margin-top:18px;color:#64748b;text-decoration:none;font-size:.9em}</style></head>
<body><div class="wrap">
<div class="badge"><h2>🚨 課題8: 本番環境でのデバッグ ★★★★☆（自習用）</h2><ul><li>本番でdd()は絶対使えない</li><li>Log::だけで原因特定できる実装にしよう</li></ul></div>
<div class="card">
<h1>投稿作成（本番想定）</h1>
@if($errors->any())<div style="background:#fef2f2;border:1px solid #fecaca;border-radius:8px;padding:12px 16px;margin-bottom:18px;color:#dc2626;font-size:.9em">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
<form method="POST" action="{{ route('exercise8.store') }}">
@csrf
<div class="fg"><label>タイトル</label><input type="text" name="title" value="{{ old('title') }}"></div>
<div class="fg"><label>本文</label><textarea name="content" rows="5">{{ old('content') }}</textarea></div>
<button type="submit">投稿する</button>
</form>
</div>
<a href="/" class="back">← 課題一覧に戻る</a>
</div></body></html>
