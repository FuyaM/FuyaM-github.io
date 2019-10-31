<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>自己紹介</title>
  <link rel="stylesheet" href="style.css">
  </head>
<body>
  <article>

  <h1 class="headline">
  このページは？
  </h1>
  <p>製作者(牧野)が自分で作ったサイトにすぐ飛べるようにテキトーにまとめサイト風？にしようと思ったページです<p>

  <p>雑ですが少しずつ改善、改良できるよう技術を高めていくので暖かく見守ってください。</p>

  <h2>過去の作品</h2>
  	<ul class="past">
  		<li><a href="/HTML/4113/index.html">animal</a></li>
  		<li><a href="../HTML/4115/index.html">花見</a></li>
  		<li><a href="../HTML/4-11/index.html">practice</a></li>
  		<li><a href="../HTML/4-11-2/index.html">practice2</a></li>
  	</ul>


  <section class="profile">
  	<h4>作者プロフィール</h4>
  	<p class="lead">岐阜県岐阜市出身。福井大学工学部情報メディア工学科卒。</p>
  	<p>現在、福井大学大学院工学研究科情報メディア工学専攻に所属。好きな食べ物はラーメンと寿司。趣味は音ゲー。</p>
    <p><?php echo 3*2 ?></p>
  </section>
  </article>

  <form method="post" action="sent.php">
    <div class="form-item">名前</div>
    <input type="text" name="name">

    <div class="form-item">年齢</div>
    <select name="age">
          <option value="未選択">選択してください</option>
          <!-- for文を用いて6歳から100歳までをoptionで選べるようにしましょう -->
          <?php
            for($i=6;$i<=100;$i++){
              echo "<option value='$i'>$i</option>";
            }
          ?>
        </select>
        <div class="form-item">お問い合わせの種類</div>
       <?php
         $types = array('その他','質問');
        ?>
        <select name="category">
         <option value="未選択">選択してください</option>
         <?php
           foreach($types as $type){
             echo "<option value='$type'>$type</option>";
           }
         ?>
    </select>
    <div class="form-item">内容</div>
    <textarea name="body"></textarea>

    <input type="submit" value="送信">
  </form>
</body>
</html>
