<?php
    //array関数を使って画像名を配列で作成
    $cards = array("mp1.jpg","mp2.jpg","yp1.jpg","yp2.png");
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>
    <body>
        <div align="center"><font size="6">みちょぱかゆきぽよ</font></div><br><br> <!-- ゲームタイトル -->
        <div align="center"><font size="3">
            <?php
                //画面からの入力データを取得
                $img = $_POST['img']; //画像の番号受信
                $select = $_POST['select']; //選択したボタンの値を受信
            
                echo '<img src="images/',$cards[$img],'"　 width="300">','<br>','<br>'; //画像表示

                if($img < 2){ //2未満だったらresultにみちょぱ
                    $result = "Mp";
                } else if ($img >= 2) { //2以上だったらresultにゆきぽよ
                    $result = "Yp";
                }
                
                // 画像と選択項目の正誤
                if($result == $select){
                    echo '正解！若いね','<br>','<br>','<a href="test1.php">余裕余裕！</a>';
                } else {
                    echo '違う、おっさんすぎる','<br>','<br>','<a href="test1.php">顔一緒やん！もう一回！</a>';
                }
            ?>
        </font></div>
    </body>
</html>