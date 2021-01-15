{{--共通フロントヘッダー--}}
<a href="/index">ロゴ</a><br>
@if (Auth::user()->role==1)
<a href="#">管理者TOP画面<</a><br>    
@endif
<a href="/user_point">ポイント申請</a><br>
<a href="/cart">カート内一覧</a><br>
<a href="/user_info">ユーザ情報画面</a><br>
<a href="/logout">ログアウト</a>

