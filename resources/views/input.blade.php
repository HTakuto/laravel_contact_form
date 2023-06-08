<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力画面</title>
</head>
<body>
    <form action="{{ url('/confirm') }}" method="post">
        @csrf
        <label for="name">名前</label><br>
        @error('name')
            <div>{{ $message }}</div><br>
        @enderror
        <input type="text" name="name" value="{{old('name')}}" id="name"><br>
        <label for="email">メールアドレス</label><br>
        @error('email')
            <div>{{ $message }}</div><br>
        @enderror
        <input type="email" name="email" value="{{old('email')}}" id="email"><br>
        <label for="content">問い合わせ内容</label><br>
        @error('content')
        <div>{{ $message }}</div><br>
        @enderror
        <textarea name="content" id="" cols="30" rows="10" id="content">{{old('content')}}</textarea><br>
        <input type="submit" value="送信" name="send">
    </form>
</body>
</html>
