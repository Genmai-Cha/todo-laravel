<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/create/" method="post">
    @csrf

    <label>タイトル : <input type="text" name="title"></label>
    <!-- もし 'title'でバリデーションエラーがあったら -->
    @if ($errors->has('title'))
        <ul>
        @foreach ($errors->get('title') as $message)
            <li>{{ $message }}</li>
        @endforeach
        </ul>
    @endif
    <br>
    <label for="post_contents">本文</label>
    <textarea id="post_contents" name="post_contents" id="" cols="30" rows="10"></textarea>
    <!-- もし 'post_contents'でバリデーションエラーがあったら -->
    @if ($errors->has('post_contents'))
        <ul>
        @foreach ($errors->get('post_contents') as $message)
            <li>{{ $message }}<li>
        @endforeach
        </ul>
    @endif
    <input type="submit" value="投稿">
    </form>
</body>
</html>