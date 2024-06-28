<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>昇順にソートします。<br>
        <?php
        $nums = [15, 4, 18, 23, 10];
        asort($nums);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }
        ?>
    </p>

    <p>降順にソートします。<br>
        <?php
        $nums = [15, 4, 18, 23, 10];
        arsort($nums);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }
        ?>
    </p>
</body>

</html>