<!DOCTYPE html>
  <head>
      <meta charset="utf-8">
      <title>お問い合わせフォーム</title>

      <style type="text/css">
      　　　/* 最初の見出し・説明文の位置 */
          .title,.description{
              text-align:center;
          }
          /*　最初の見出し　*/
          h1{
            font-family:serif;
            font-size:30px;
          }
          /*　最初の説明文　*/
          p{
            font-family:serif;
            font-size:120%;
          }
          /*　フォーム全体　*/
          form{
            width:50%;
            margin:0px auto;
            padding:0px 20px 0px;
            border:1px solid blue;
          }
          /*　フォームのラベル名　*/
          p.form-item{
            padding:10px 0 10px 0;
          }
          /*　記入欄　*/
          input.name,input.email,textarea.inquery{
            border:1px solid blue;
            background-color:skyblue;
          }
          /*　ラジオ、チェック　*/
          input.gender,input.like{
            margin-left:10px;
            margin-right:5px;
            margin-top:10px;
            margin-bottom:10px;
            vertical-align:middle;
            font-size:30px;
          }
          /*　セレクト　*/
          .bloodtype{
            font-size:20px;
          }

          /*　送信ボタン　*/
          input[type="submit"] {
            margin-top: 30px;
            width: 30%;
            border: 1px solid blue;
            border-radius: 4px;
            padding: 12px;
            font-size: 14px;
            line-height: 1.428571429;
            color: black;
            background-color: skyblue;
          }
          /*　リセットボタン　*/
          input[type="reset"] {
            margin-top: 30px;
            width: 30%;
            border: 1px solid red;
            border-radius: 4px;
            padding: 12px;
            font-size: 14px;
            line-height: 1.428571429;
            color: black;
            background-color: pink;
          }

      </style>
  </head>
  <body>
      <h1 class="title">お問い合わせ</h1>
      <p class="description">問い合わせたい方は下記に詳細を記入し、ご送信ください。<br/>
        後ほど折り返しご連絡させていただきます。</p>
      <form action="confirmation.php" method="post">
        　<p class="form-item">お名前<br/><input class="name" type="text" name="name"></p>
        <p class="form-item">性別<br/>
        <input class="gender" type="radio" name="gender" value="男">男
        <input class="gender"  type="radio" name="gender" value="女"/>女
        <input class="gender"  type="radio" name="gender" value="どちらでもない"/>どちらでもない</p>
         <p class="form-item">好きなもの<br/>
           <input class="like" type="checkbox" name="like[]" value="音楽" />音楽
           <input class="like"  type="checkbox" name="like[]" value="映画" />映画
           <input class="like"  type="checkbox" name="like[]" value="スポーツ" />スポーツ
           <input class="like"  type="checkbox" name="like[]" value="お笑い" />お笑い
           <input class="like"  type="checkbox" name="like[]" value="読書" />読書
           <input class="like"  type="checkbox" name="like[]" value="何もない" />何もない
         </p>
          <p class="form-item">血液型<br>
            <select class="bloodtype" name="bloodtype">
              <option value="">選択</option>
              <option value="A">A型</option>
              <option value="B">B型</option>
              <option value="O">O型</option>
              <option value="AB">AB型</option>
              <option value="わからない">わからない</option></select></p>
          <p class="form-item">Eメール<br/><input class="email" type="text" name="email"></p>
          <p class="form-item">問い合わせ内容<br/><textarea class="inquery" name="inquery" cols="50" rows="10"></textarea><p>
          <p><input class="submit" type="submit" value="送信">
          <input class="reset" type="reset" value="リセット"></p>
      </form>
  </body>
</html>
