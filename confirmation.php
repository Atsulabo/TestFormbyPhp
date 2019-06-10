<!DOCTYPE html>
  <head>
      <meta charset="utf-8">
      <title>お問い合わせご確認</title>
  </head>
  <body>
      <h1>お問い合わせのご確認</h1>
      <p>以下の内容でよろしければ下記の送信ボタンをおしてください。</p>
      <form action="mailto.php" method="post">
        <p>お名前:<span  style="font-weight:bold;"><?php echo $_POST["name"]; ?></span></p>
        <p>性別:<span  style="font-weight:bold;">
                    <?php if(isset($_POST["gender"])){
                              $cs=$_POST["gender"];
                              echo $cs;
                            } else { echo '記載なし'; }　?></p>
        <p>好きなもの:<span  style="font-weight:bold;">
                    <?php if (isset($_POST['like'])){
                                    $like=implode(", ", $_POST["like"]);
                                    echo $like;
                                } else { echo '記載なし'; }?></p>
        <p>血液型:<span  style="font-weight:bold;"><?php echo $_POST["bloodtype"].'型'; ?></span></p>
        <p>Eメール:<span  style="font-weight:bold;"><?php echo $_POST['email']; ?></span></p>
        <p>問い合わせ内容:<span  style="font-weight:bold;"><?php echo $_POST['inquery']; ?></span></p>
        <p><input type="submit" value="送信"></p>
      </form>
  </body>
</html>
