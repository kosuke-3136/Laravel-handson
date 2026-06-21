# 🐛 Laravel デバッグ勉強会

**Laravel入門 〜デバッグについて知ろう！〜** の課題用プロジェクトです。

> 📘 学習の進め方は以下の3つのガイドを参照してください（別配布）
> - Day1_Part1_GitHub編.md … このコードのアップロード手順
> - Day1_Part2_全課題解法編.md … 全11課題の解き方と考え方
> - Day1_Part3_発展知識編.md … 今回扱っていない発展的デバッグ知識

---

## 📋 課題一覧

### ✅ 必須

| # | タイトル | 難易度 | ツール | URL |
|---|---------|--------|--------|-----|
| 1 | フォームが動かない | ★☆☆☆☆ | dump() | /exercise1 |
| 2 | リレーションがnullになる | ★★☆☆☆ | dump() 段階的 | /exercise2/1 |
| 3 | 配列のキーが見つからない | ★★☆☆☆ | dump() | /exercise3 |

### ⏱ 時間があれば

| # | タイトル | 難易度 | ツール | URL |
|---|---------|--------|--------|-----|
| 4 | ページがめちゃくちゃ遅い | ★★★☆☆ | Debugbar | /exercise4 |
| 5 | 複雑なリレーション | ★★★★☆ | Debugbar | /exercise5 |

### 📚 自習用

| # | タイトル | 難易度 | ツール | URL |
|---|---------|--------|--------|-----|
| 6 | ログを使ったデバッグ | ★★☆☆☆ | Log:: | /exercise6 |
| 7 | SQLデバッグ | ★★★☆☆ | toSql() / getQueryLog() | /exercise7 |
| 8 | 本番環境でのデバッグ | ★★★★☆ | Log:: 設計 | /exercise8 |
| 9 | 「動いているか」を確認する | ★★★☆☆ | dump() + Debugbar | /exercise9 |
| 10 | 3つの問題が同時に起きる | ★★★★☆ | 全ツール | /exercise10 |
| 11 | ツールを組み合わせて解く | ★★★★★ | 全ツール統合 | /exercise11 |

---

## 🚀 セットアップ

```bash
git clone https://github.com/あなたのアカウント名/laravel-debug-workshop.git
cd laravel-debug-workshop
composer install
cp .env.example .env
php artisan key:generate
```

**SQLiteファイルを作成**

```bash
# Mac / Linux
touch database/database.sqlite
# Windows
type nul > database\database.sqlite
```

```bash
php artisan migrate --seed
composer require barryvdh/laravel-debugbar --dev
php artisan serve
```

http://localhost:8000 で課題一覧が表示されれば完了です。

---

## 🔧 トラブルシューティング

| 問題 | 対処法 |
|------|--------|
| `No application encryption key` | `php artisan key:generate` |
| `table "users" already exists` | `php artisan migrate:fresh --seed` |
| Debugbar が表示されない | `php artisan config:clear && php artisan cache:clear` |
| マイグレーションをやり直したい | `php artisan migrate:fresh --seed` |
| ポート8000が使えない | `php artisan serve --port=8001` |
| `Class not found` | `composer dump-autoload` |
| 日本語パスでエラーが出る | プロジェクトを `C:\laravel\` など英数字パスに移動する |

---

## 🐛 仕込んだバグ一覧（ネタバレ注意）

<details>
<summary>解答を見る</summary>

- 課題1: `<input>` に `name属性` がない → `dump($request->all())` で `[]`
- 課題2: `database/seeders/DatabaseSeeder.php` で `user_id => 0`（存在しないID、全件）
- 課題3: `$item['qty']` → 正しくは `$item['quantity']`（typo）
- 課題4: `Post::all()` でN+1 → `Post::with('user')->get()` で解決
- 課題5: 3つのリレーションでN+1 → `Post::with(['user','category','comments'])->get()`
- 課題6: `Log::` のTODOコメントを外す
- 課題7: `where('content', ...)` → 正しくは `where('title', 'like', '%'.$keyword.'%')`
- 課題8: `try/catch` + `Log::info/error` を実装する
- 課題9: `exists()` + `count()` の2回SQL → `withCount()` で1回に
- 課題10: keyword空でも条件適用 / N+1 / ログなし、の3つを修正
- 課題11: ループ内SQL / 余分な `status` 条件 / ログなし → `withCount()` でまとめて解決

> 💡 現状のSeederでは投稿100件すべてが `user_id=0` です。
> 課題2はどのIDでも再現します。課題4・5では著者名が「不明」のまま
> 表示されますが、これは正常です（確認すべきはQueriesの数字）。

</details>

---

**Happy Debugging! 🐛**
