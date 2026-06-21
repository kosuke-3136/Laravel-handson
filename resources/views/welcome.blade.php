<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel デバッグ勉強会</title>
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Segoe UI',sans-serif;background:linear-gradient(135deg,#1a1a2e,#16213e,#0f3460);min-height:100vh;padding:40px 20px}
.wrap{max-width:980px;margin:0 auto}
header{text-align:center;margin-bottom:40px}
header h1{font-size:2.2em;color:#fff;margin-bottom:8px}
header p{font-size:1.05em;color:#94a3b8}
.section-label{color:#64748b;font-size:.75em;font-weight:700;letter-spacing:.1em;text-transform:uppercase;margin:28px 0 10px 4px}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(440px,1fr));gap:14px;margin-bottom:6px}
.card{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:10px;padding:20px;text-decoration:none;display:block}
.card-head{display:flex;align-items:center;gap:12px;margin-bottom:8px}
.num{width:38px;height:38px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.1em;font-weight:700;flex-shrink:0;background:rgba(2,128,144,.25);color:#02C39A}
.title{font-size:1.05em;font-weight:700;color:#f1f5f9}
.stars{font-size:.82em;color:#64748b;margin-bottom:8px}
.desc{font-size:.88em;color:#94a3b8;line-height:1.6}
footer{text-align:center;margin-top:50px;color:#475569;font-size:.85em}
</style>
</head>
<body>
<div class="wrap">
<header>
<h1>🐛 Laravel デバッグ勉強会</h1>
<p>dump() / Debugbar / Log:: を使って実践的なデバッグスキルを身につけよう</p>
</header>

<div class="section-label">✅ 必須 課題1〜3</div>
<div class="grid">
<a href="/exercise1" class="card"><div class="card-head"><div class="num">1</div><div class="title">フォームが動かない</div></div><div class="stars">★☆☆☆☆</div><div class="desc">dump()でリクエストデータを確認しよう</div></a>
<a href="/exercise2/1" class="card"><div class="card-head"><div class="num">2</div><div class="title">リレーションがnullになる</div></div><div class="stars">★★☆☆☆</div><div class="desc">段階的にdump()して原因を絞り込もう</div></a>
<a href="/exercise3" class="card"><div class="card-head"><div class="num">3</div><div class="title">配列のキーが見つからない</div></div><div class="stars">★★☆☆☆</div><div class="desc">配列の中身をdump()で確認しよう</div></a>
</div>

<div class="section-label">⏱ 時間があれば 課題4〜5</div>
<div class="grid">
<a href="/exercise4" class="card"><div class="card-head"><div class="num">4</div><div class="title">ページが遅い</div></div><div class="stars">★★★☆☆</div><div class="desc">DebugbarでN+1問題を発見しよう</div></a>
<a href="/exercise5" class="card"><div class="card-head"><div class="num">5</div><div class="title">複雑なリレーション</div></div><div class="stars">★★★★☆</div><div class="desc">複数リレーションのN+1を解決しよう</div></a>
</div>

<div class="section-label">📚 自習用 課題6〜11</div>
<div class="grid">
<a href="/exercise6" class="card"><div class="card-head"><div class="num">6</div><div class="title">ログを使ったデバッグ</div></div><div class="stars">★★☆☆☆</div><div class="desc">Log::info/errorを使ってみよう</div></a>
<a href="/exercise7" class="card"><div class="card-head"><div class="num">7</div><div class="title">SQLデバッグ</div></div><div class="stars">★★★☆☆</div><div class="desc">toSql()でSQLを確認しよう</div></a>
<a href="/exercise8" class="card"><div class="card-head"><div class="num">8</div><div class="title">本番環境でのデバッグ</div></div><div class="stars">★★★★☆</div><div class="desc">本番想定のログ設計をしよう</div></a>
<a href="/exercise9" class="card"><div class="card-head"><div class="num">9</div><div class="title">動作確認のデバッグ</div></div><div class="stars">★★★☆☆</div><div class="desc">正しく動いているか確認しよう</div></a>
<a href="/exercise10" class="card"><div class="card-head"><div class="num">10</div><div class="title">複合課題</div></div><div class="stars">★★★★☆</div><div class="desc">3つのバグを順番に解決しよう</div></a>
<a href="/exercise11" class="card"><div class="card-head"><div class="num">11</div><div class="title">ツール組み合わせ</div></div><div class="stars">★★★★★</div><div class="desc">全ツールを使って最終課題に挑もう</div></a>
</div>

<footer>Laravel Debug Workshop 2026 | Happy Debugging! 🐛</footer>
</div>
</body>
</html>
