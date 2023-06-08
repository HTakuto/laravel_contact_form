<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力画面</title>
</head>
<body>
    <form action="{{url('/complate')}}">
        @csrf
        名前<br>
        {{$name}}<br>
        メールアドレス<br>
        {{$email}}<br>
        問い合わせ内容<br>
        {{$content}}<br>
        <input type="submit" value="確定" name="send">
        <input type="button" value="戻る" onclick="history.back()">
    </form>
</body>
</html>
