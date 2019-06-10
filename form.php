<!DOCTYPE html>
  <head>
      <meta charset="utf-8">
      <title>お問い合わせフォーム</title>
  </head>
  <body>
      <h1>お問い合わせ</h1>
      <p>問い合わせたい方は下記に詳細を記入し、ご送信ください。<br/>
        後ほど折り返しご連絡させていただきます。</p>
      <form action="confirmation.php" method="post">
        　<p>お名前<br/><input type="text" name="name"></p>
        <p>性別<br/><input type="radio" name="gender" value="男">男 <input type="radio" name="gender" value="女"/>女 <input type="radio" name="gender" value="どちらでもない"/>どちらでもない</p>
         <p>好きなもの<br/>
           <input type="checkbox" name="like[]" value="音楽" />音楽
           <input type="checkbox" name="like[]" value="映画" />映画
           <input type="checkbox" name="like[]" value="スポーツ" />スポーツ
           <input type="checkbox" name="like[]" value="お笑い" />お笑い
           <input type="checkbox" name="like[]" value="読書" />読書
           <input type="checkbox" name="like[]" value="何もない" />何もない           
         </p>
          <p>血液型<br>
            <select name="bloodtype">
              <option value="">選択</option>
              <option value="A">A型</option>
              <option value="B">B型</option>
              <option value="O">O型</option>
              <option value="AB">AB型</option>
              <option value="None">どれでもない</option></select></p>
          <p>Eメール<br/><input type="text" name="email"></p>
          <p>問い合わせ内容<br/><textarea name="inquery" cols="50" rows="10"></textarea><p>
          <p><input type="submit" value="送信">
          <input type="reset" value="リセット"></p>
      </form>
  </body>
</html>
