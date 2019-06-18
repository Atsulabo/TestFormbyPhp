
<!DOCTYPE html>
  <head>
      <meta charset="utf-8">
      <title>お問い合わせご確認</title>
  </head>
  <body>
    <?php
      //
      //////////////////////////////////////////////////////////////
      //データ取得
      //////////////////////////////////////////////////////////////
      //名前
      $name = $_POST["name"];
      //性
      if(isset($_POST["gender"])){
                $gender = $_POST["gender"];
                echo $cs;
              } else {
                $gender = '記載なし';
              }
      //好きなもの
      if(isset($_POST['like'])){
               $like = implode("、", $_POST["like"]);
           } else {
             $like = '記載なし';
           }
      //血液型
      $bloodtype =  $_POST["bloodtype"];
      //Eメール
      $email = $_POST['email'];
      //問い合わせ内容
      $inquery = $_POST['inquery'];

    ?>
    <!-- ここよりHTML開始 -->
      <h1>お問い合わせのご確認</h1>
      <p>以下の内容でよろしければ下記の送信ボタンをおしてください。</p>
      <p><?php echo 'お名前:'.$name; ?></p>
      <p><?php echo '性別:'.$gender; ?></p>
      <p><?php echo '好きなもの:'.$like; ?></p>
      <p><?php echo '血液型:'.$bloodtype; ?></p>
      <p><?php echo 'E-mail:'.$email; ?></p>
      <p><?php echo 'お問い合わせ:'.$inquery; ?></p>

    <!-- ここよりフォーム開始（項目はhidden,submitのみ) -->
      <form action="mailto.php" method="post">
      	<input type="hidden" name="name" value=<?php echo $name; ?>>
        <input type="hidden" name="gender" value=<?php echo $gender; ?>>
        <input type="hidden" name="like" value=<?php echo $like; ?>>
        <input type="hidden" name="bloodtype" value=<?php echo $bloodtype; ?>>
        <input type="hidden" name="email" value=<?php echo $email; ?>>
        <input type="hidden" name="inquery" value=<?php echo $inquery; ?>>
        <input type="submit" value="送信">
      </form>

  </body>
</html>
