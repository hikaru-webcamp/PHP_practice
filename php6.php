
<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>特別ディナーショー ご予約受付中</title>
  </head>

  <body>
    特別ディナーショー ご予約受付中
    <form method="post" action="test.php">
      <table>
        <tr>
          <td bgcolor="#DCF0F0">名前:</td>
          <td><input type="text" name="namae" size="30" maxlength="30"></td>
        </tr>

        <tr>
          <td bgcolor="#DCF0F0">電話番号:</td>
          <td><input type="text" name="denwa" size="30" maxlength="30"></td>
        </tr>

        <tr>
          <td bgcolor="#DCF0F0">予約日時:</td>

          <td>
            <select name="monthDay">
              <option value="1">12/24
              <option value="2" selected>12/25
            </select>
            <select name="time">
              <option value="1" selected>18:00~
              <option value="2" >20:00~
            </select>
          </td>
        </tr>

        <tr>
          <td bgcolor="#DCF0F0">席のご希望: </td>
          <td>
            <input type = "radio" name"seki" value="0">禁煙席
            <input type = "radio" name"seki" value="1" checked>喫煙席
          </td>
        </tr>

        <tr>
          <td bgcolor="#DCF0F0">当店のお知りになった<br>きっかけ:(複数回答可)</td>

          <td>
            <input type="checkbox" name="toten1" value="1">当店のwebサイト
            <input type="checkbox" name="toten2" value="1">検索サイト
            <input type="checkbox" name="toten3" value="1">雑誌<br>
            <input type="checkbox" name="toten4" value="1">知人からの紹介
            <input type="checkbox" name="toten5" value="1">checked>その他
          </td>

        </tr>

        <tr>
          <td>
            <input type="hidden" name="mode" value="123">
          </td>
          <td>
            <input type ="submit" value="予約する">
            <input type ="reset" value="入力しなおす">
          </td>
        </tr>

      </table>
    </form>
  </body>
</html>
