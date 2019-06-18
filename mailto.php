<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>送信</title>
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
               $like = implode(", ", $_POST["like"]);
           } else {
             $like = '記載なし';
           }
      //血液型
      $bloodtype =  $_POST["bloodtype"];
      //Eメール
      $email = $_POST['email'];
      //問い合わせ内容
      $inquery = $_POST['inquery'];

      /* メール送信の実行 */
        //メール本文作成
        //最初の行は空ける

        $mail_content = '';
        $mail_content .= "あなたにメールが届きました\n\n";
        $mail_content .= "【名前】".$name."\n\n";
        $mail_content .= "【性】".$gender."\n\n";
        $mail_content .= "【好きなもの】".$like."\n\n";
        $mail_content .= "【血液型】".$bloodtype."\n\n";
        $mail_content .= "【Eメール】".$email."\n\n";
        $mail_content .= "【問い合わせ内容】".$inquery."\n\n";




        //エンコード処理
      	mb_language("Japanese");
    	  mb_internal_encoding("UTF-8");

        /* メール作成 */
        $mail_to = "webachism@gmail.com";
        $mail_subject = "【お問い合わせ】".$name."様";
        $mail_body = $mail_content;
        $mail_header = "From:".$email;


        // メール送信処理
        	$mailsousin	= mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);
        // 結果を変数に格納
          if($mailsousin == true){
        		$result = 'お問い合わせメールを送信しました。';
        	} else {
            $result = 'メール送信でエラーが発生しました。';
        	}
    ?>

        	<!-- メール送信結果 -->
          <p><?php echo $result; ?></p>

  </body>
</html>
