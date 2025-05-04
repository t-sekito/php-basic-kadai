<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_005</title>
</head>

<body>
  <p>
    <?php
    // 四則演算

    // $score1～$score10 の変数に生徒10人分の点数を代入
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // $total_score に $score1～$score10 の合計を計算
    $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
    
    // $average_score に合計を10で割った平均点を計算
    $average_score = $total_score / 10 ;

    // echo文を使ってブラウザに平均点を出力
    echo $average_score;
    ?>
  </p>
</body>

</html>