<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
</head>

<body>
    <p>
        <?php

            function sort_2way($nums, $array) {   
            if($array === 'true') {
                echo "昇順にソートします。<br>";
                sort($nums);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }else {
                echo "降順にソートします。<br>";
                rsort($nums);
                foreach($nums as $num) {
                    echo $num . '<br>';
                }
            }
        }

        $nums = [15, 4, 8, 23, 10];
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>