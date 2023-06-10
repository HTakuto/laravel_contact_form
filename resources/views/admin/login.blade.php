<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログイン画面</title>
</head>
<body>
    <form action="{{ url('/admin/list') }}" method="post">
        @csrf
        <label for="email">メールアドレス</label><br>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <input type="email" name="email" value="{{old('email')}}" id="email"><br>
        <label for="password">パスワード</label><br>
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <input type="password" name="password" value="{{old('password')}}" id="password"><br>
        <br>
        <input type="submit" value="送信" name="send">
    </form>
</body>
</html>
