<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($array, $order) {
            if ($order == "true") {
                sort($array);
            } else if ($order == "false") {
                rsort($array);
            }
            return $array;
        }
    
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順にソートする（sort_2wayの呼び出し）
        echo "昇順にソートします。<br>";
        $sort_nums_asc = sort_2way($nums, "true");
        foreach ($sort_nums_true as $num) {
            echo $num . "<br>";
        }   

        // 降順にソート（sort_2wayの呼び出し）
        echo "降順にソートします。<br>";
        $rsort_nums_desc = sort_2way($nums, "false");
        foreach ($rsort_nums_false as $num) {
            echo $num . "<br>";
        }

        ?>
    </p>
</body>

</html>