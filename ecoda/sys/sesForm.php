<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>phpでフォーム送信</title>
</head>
<body>
<form action="sesConfirm.php" method="post">
    <div id="contents">
        <div id="name">
          お名前　<input type="text" name="name" value="<?php echo $name; ?>">
          <?php if($errorName) echo "入力に誤りがあります"; ?>
        </div>
        <div id="mail">
          メールアドレス　<input type="text" name="mail" value="<?php echo $mail; ?>">
          <?php if($errorMail) echo "入力に誤りがあります"; ?>
        </div>
        <div id="toiawase">
          お問い合わせ内容　<textarea name="toiawase"><?php echo $toiawase; ?></textarea>
          <?php if($errorToiawase) echo "入力に誤りがあります"; ?>
        </div>
        </br>
        </br>
        <input type="submit" value="確認">
    </div>
</form>
</body>
</html>