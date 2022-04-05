<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>確認画面</title>
</head>
    <body>
        お名前：<?php echo $name; ?>
        </br>
        メールアドレス：<?php echo $mail; ?>
        </br>
        お問い合わせ内容
        </br>
        <?php echo $toiawase; ?>
        </br>
        </br>
        <form action='./sesConplete.php' method='post'>
            <input type='button' onclick='history.back()' value='戻る'>
            <input type='submit' value='確認'>
        </form>
    </body>
</html>