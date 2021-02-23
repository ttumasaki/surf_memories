<!-- <!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body> -->

  入力ページ
      入力画面
      <?php if(!empty($errors) && !empty($_GET["btn_confirm"])): ?>
      <?php echo"<ul>"; ?>
        <?php
          foreach($errors as $error){
            echo "<li>" . $error . "</li>";
          }
        ?>
      <?php echo"</ul>"; ?>
      <?php endif; ?>

      <form action="add_form.php" method="GET" enctype="multipart/form-data">
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
            <option value="1">フラット〜スネ</option>
            <option value="2">スネ〜ヒザ</option>
            <option value="3">ヒザ〜モモ</option>
            <option value="4">モモ〜コシ</option>
            <option value="5">コシ〜ハラ</option>
            <option value="6">ハラ〜ムネ</option>
            <option value="7">ムネ〜カタ</option>
            <option value="8">カタ〜アタマ</option>
            <option value="9">アタマ〜アタマ半</option>
            <option value="10">アタマ半〜ダブル</option>
          </select>
        </label><br>

        <label for="w_condition">
          面の状況(必須)<br>
          <select name="w_condition" value="<?php if(!empty($_GET["w_condition"])){echo h($_GET["w_condition"]);} ?>">
            <option value="">---</option>
            <option value="1">面ツル</option>
            <option value="2">ザワついている</option>
            <option value="3">チョッピー</option>
            <option value="4">バンピー</option>
            <option value="5">ジャンク</option>
            <option value="6">風クローズ</option>
          </select><br>
        </label>

        <label for="number">
          波数(必須)<br>
          <select name="number" value="<?php if(!empty($_GET["number"])){echo h($_GET["number"]);} ?>">
            <option value="">---</option>
            <option value="1">少ない</option>
            <option value="2">少なめ</option>
            <option value="3">普通</option>
            <option value="4">多め</option>
            <option value="5">多い</option>
          </select><br>
        </label>

        <label for="state">
          波の状態(必須)<br>
          <select name="state" value="<?php if(!empty($_GET["state"])){echo h($_GET["state"]);} ?>">
            <option value="">---</option>
            <option value="1">切れた波</option>
            <option value="2">速い波</option>
            <option value="3">つながった波</option>
            <option value="4">ワイドな波</option>
            <option value="5">ダンパー</option>
            <option value="6">トロい波</option>
            <option value="7">トロ速い波</option>
            <option value="8">トロダンパー</option>
            <option value="9">ホレた波</option>
            <option value="10">厚い波</option>
            <option value="11">トロ厚い波</option>
            <option value="12">厚速い波</option>
            <option value="13">三角波</option>
            <option value="14">チューブ</option>
            <option value="15">ショアブレイク</option>
            <option value="16">風波</option>
          </select><br>
        </label>

        <label for="direction">
          風向き(必須)<br>
          <select name="direction" value="<?php if(!empty($_GET["direction"])){echo h($_GET["direction"]);} ?>">
            <option value="">---</option>
            <option value="1">北</option>
            <option value="2">北東</option>
            <option value="3">東</option>
            <option value="4">南東</option>
            <option value="5">南</option>
            <option value="6">南西</option>
            <option value="7">西</option>
            <option value="8">北西</option>
          </select><br>
        </label>

        <label for="people">
          人数(必須)<br>
          <select name="people" value="<?php if(!empty($_GET["people"])){echo h($_GET["people"]);} ?>">
              <option value="">---</option>
              <option value="1">0人</option>
              <option value="2">1~5人</option>
              <option value="3">5~15人</option>
              <option value="4">16〜30人</option>
              <option value="5">31〜50人</option>
              <option value="6">51人〜</option>
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

        <input type="hidden" name="csrf" value="<?php echo $token;?>">
        <input type="submit" name="btn_confirm" value="確認する">
      </form>
    <?php endif; ?>
  <!-- -->

  <!-- 確認ページ -->
    <?php if($pageFlag === 1): ?>
    <?php if($_GET["csrf"] === $_SESSION["csrfToken"]):?>
      確認画面
      <form action="add_form.php" method="GET" enctype="multipart/form-data">
        <label for="point">
          確認ポイント<br>
          <?php echo h($_GET["point"]); ?><br>
        </label>

        <label for="date">
          確認日時<br>
          <?php echo h($_GET["date"]); ?>
        </label>

        <label for="size">
          波のサイズ<br>
          <?php echo h($_GET["size"]); ?>
        </label><br>

        <label for="w_condition">
          面の状況<br>
          <?php echo h($_GET["w_condition"]); ?><br>
        </label>

        <label for="number">
          波数<br>
          <?php echo h($_GET["number"]); ?><br>
        </label>

        <label for="state">
          波の状態<br>
          <?php echo h($_GET["state"]); ?><br>
        </label>

        <label for="direction">
          風向き<br>
          <?php echo h($_GET["direction"]); ?><br>
        </label>
      
        <label for="people">
          人数<br>
          <?php echo h($_GET["people"]); ?><br>
        </label>

        <label for="temperature">
          水温<br>
          <?php echo h($_GET["temperature"]); ?>
        </label>

        <label for="image">
          波の画像・動画<br>
          <?php echo h($_GET["image"]); ?>
        </label><br>

        <input type="submit" name="back" value="戻る">
        <input type="submit" name="btn_submit" value="送信する">

        <input type="hidden" name="point" value="<?php echo h($_GET["point"]); ?>">
        <input type="hidden" name="date" value="<?php echo h($_GET["date"]); ?>">
        <input type="hidden" name="size" value="<?php echo h($_GET["size"]); ?>">
        <input type="hidden" name="w_condition" value="<?php echo h($_GET["w_condition"]); ?>">
        <input type="hidden" name="number" value="<?php echo h($_GET["number"]); ?>">
        <input type="hidden" name="state" value="<?php echo h($_GET["state"]); ?>">
        <input type="hidden" name="direction" value="<?php echo h($_GET["direction"]); ?>">
        <input type="hidden" name="people" value="<?php echo h($_GET["people"]); ?>">
        <input type="hidden" name="temperature" value="<?php echo h($_GET["temperature"]); ?>">
        <input type="hidden" name="image" value="<?php echo h($_GET["image"]); ?>">
        <input type="hidden" name="csrf" value="<?php echo h($_GET["csrf"]); ?>">
      </form>
    <?php endif; ?>
    <?php endif; ?>
  <!-- -->

  <!-- 完了ページ -->
  <?php if($pageFlag === 2): ?>
  <?php if($_GET["csrf"] === $_SESSION["csrfToken"]):?>

    <!-- DB接続 -->
    <?php require 'mainte/insert.php';

    insertMemory($_GET);
    ?>
    <!-- DB保存 -->

    送信が完了しました。
  <?php unset($_SESSION["csrfToken"]);?>
  <?php endif; ?>
  <?php endif; ?>
  <!-- -->


<!-- </body>
</html> -->
