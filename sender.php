<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?date=yyyymmddhhss">
    <title>データ送信ページ</title>
</head>
<body>
    <div class='text-form'>
        <h2>テキストを入力してください</h2>
        <form autocomplete='off' class='form' method='post' action='receiver.php'>
            <div class='form-wrapper'>
                <div class='text-wrapper'><input class='text' type='text' name='content'></div>
                <div class='submit-button-wrapper'><input class='submit-button' type='submit' value='送信'></div>
            </div>
        </form>
    </div>
</body>
</html>