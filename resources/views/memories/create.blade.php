<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

  入力ページ
      入力画面
      <form action="add_form.php" method="GET" enctype="multipart/form-data">
        @csrf
        <label for="point">
          確認ポイント(必須)<br>
          <input type="text" name="point" value="<?php if(!empty($_GET["point"])){echo h($_GET["point"]);} ?>"><br>
        </label>

        <label for="date">
          確認日時(必須)<br>
          <input type="datetime-local" name="date" value="<?php if(!empty($_GET["date"])){echo h($_GET["date"]);} ?>"><br>
        </label>

        <label for="size">
          波のサイズ(必須)<br>
          <select name="size" value="<?php if(!empty($_GET["size"])){echo h($_GET["size"]);} ?>">
            <option value="">---</option>
            <option value="フラット〜スネ">フラット〜スネ</option>
            <option value="スネ〜ヒザ">スネ〜ヒザ</option>
            <option value="ヒザ〜モモ">ヒザ〜モモ</option>
            <option value="モモ〜コシ">モモ〜コシ</option>
            <option value="コシ〜ハラ">コシ〜ハラ</option>
            <option value="ハラ〜ムネ">ハラ〜ムネ</option>
            <option value="ムネ〜カタ">ムネ〜カタ</option>
            <option value="カタ〜アタマ">カタ〜アタマ</option>
            <option value="アタマ〜アタマ半">アタマ〜アタマ半</option>
            <option value="アタマ半〜ダブル">アタマ半〜ダブル</option>
          </select>
        </label><br>

        <label for="w_condition">
          面の状況(必須)<br>
          <select name="w_condition" value="<?php if(!empty($_GET["w_condition"])){echo h($_GET["w_condition"]);} ?>">
            <option value="">---</option>
            <option value="面ツル">面ツル</option>
            <option value="ザワついている">ザワついている</option>
            <option value="ジャンク">ジャンク</option>
            <option value="クローズアウト">クローズアウト</option>
          </select><br>
        </label>

        <label for="number">
          波数(必須)<br>
          <select name="number" value="<?php if(!empty($_GET["number"])){echo h($_GET["number"]);} ?>">
            <option value="">---</option>
            <option value="少ない">少ない</option>
            <option value="少な目">少な目</option>
            <option value="普通">普通</option>
            <option value="多目">多目</option>
            <option value="多い">多い</option>
          </select><br>
        </label>

        <label for="state">
          波の状態(必須)<br>
          <select name="state" value="<?php if(!empty($_GET["state"])){echo h($_GET["state"]);} ?>">
            <option value="">---</option>
            <option value="切れた波">切れた波</option>
            <option value="速い波">速い波</option>
            <option value="つながった波">つながった波</option>
            <option value="ワイドな波">ワイドな波</option>
            <option value="ダンパー">ダンパー</option>
            <option value="トロい波">トロい波</option>
            <option value="トロ速い波">トロ速い波</option>
            <option value="トロダンパー">トロダンパー</option>
            <option value="ホレた波">ホレた波</option>
            <option value="厚い波">厚い波</option>
            <option value="トロ厚い波">トロ厚い波</option>
            <option value="厚速い波">厚速い波</option>
            <option value="三角波">三角波</option>
            <option value="チューブ">チューブ</option>
            <option value="ショアブレイク">ショアブレイク</option>
            <option value="風波">風波</option>
            <option value="フラット">フラット</option>
          </select><br>
        </label>

        <label for="direction">
          風向き(必須)<br>
          <select name="direction" value="<?php if(!empty($_GET["direction"])){echo h($_GET["direction"]);} ?>">
            <option value="">---</option>
            <option value="北">北</option>
            <option value="北東">北東</option>
            <option value="東">東</option>
            <option value="南東">南東</option>
            <option value="南">南</option>
            <option value="南西">南西</option>
            <option value="西">西</option>
            <option value="北西">北西</option>
          </select><br>
        </label>

        <label for="people">
          人数(必須)<br>
          <select name="people" value="<?php if(!empty($_GET["people"])){echo h($_GET["people"]);} ?>">
              <option value="">---</option>
              <option value="0人">0人</option>
              <option value="1~5人">1~5人</option>
              <option value="5~15人">5~15人</option>
              <option value="16〜30人">16〜30人</option>
              <option value="31〜50人">31〜50人</option>
              <option value="51人〜">51人〜</option>
            </select><br>
        </label>

        <label for="temperature">
          水温(任意)<br>
          <input type="number" step="0.1" name="temperature" value="<?php if(!empty($_GET["temperature"])){echo h($_GET["temperature"]);} ?>"><br>
        </label>

        <label for="image">
          波の画像・動画(任意)<br>
          <input type="file" name="image" multiple accept=".png,.jpg,.gif,.image/jpg,image/gif,.heic,.mov,.mp4" value="<?php if(!empty($_GET["image"])){echo h($_GET["image"]);} ?>"><br>
        </label>

        <input type="submit" name="btn_confirm" value="確認する">
      </form>

  <!-- -->


</body>
</html>
