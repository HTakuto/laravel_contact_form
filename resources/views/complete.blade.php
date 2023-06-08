<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力画面</title>
</head>
<body>
    <form action="{{url('/')}}" method="post">
        @csrf
        <p>以下内容でお問い合わせが完了しました。</p>
        名前<br>
        {{$name}}<br>
        メールアドレス<br>
        {{$email}}<br>
        問い合わせ内容<br>
        {{$content}}<br>
        <input type="submit" value="入力画面へ" name="back">
    </form>
</body>
</html>
