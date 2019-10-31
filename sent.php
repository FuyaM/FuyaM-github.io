<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>問合せ完了</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">

    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <!-- この下でcategoryを受け取りechoしましょう -->
      <?php echo $_POST['category']; ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>
  <?php
  			mb_language("Japanese");
  			mb_internal_encoding("UTF-8");

  			$to = 'makinofu@icloud.com';
  			$title = 'web page test';
  			$content = $_POST['body'];

  			if(mb_send_mail($to, $title, $content)){
  				echo "メールを送信しました";
  			} else {
  				echo "メールの送信に失敗しました";
  			}
  ?>

</body>
</html>
