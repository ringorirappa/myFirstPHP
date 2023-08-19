<?php
    //array関数を使って画像を配列で作成
    $cards = array("mp1.jpg","mp2.jpg","yp1.jpg","yp2.png");

    //0〜3までの範囲でランダム数値を1つ取得
    $num = mt_rand(0,3);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <div align="center"><font size="6">みちょぱかゆきぽよ</font></div> <!-- ゲームタイトル --><br><br>
        <form action="test2.php" method="post"> <!-- formタグ -->
        <div align="center"><font size="3">
            <?php
            echo '<img src="images/',$cards[$num],'" width="300">','<br>','<br>';
            echo '<input type="radio" name="select" value="Mp">','みちょぱ？','&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<input type="radio" name="select" value="Yp">','ゆきぽよ？','<br>'; 
            echo '<input type="hidden" name="img" value="',$num,'">','<br>'; //隠しフィールドで送信
            echo '<input type="submit" value="決定">'; //決定ボタン
            ?>
        </font></div>
        </form>
    </body>
</html>