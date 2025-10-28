<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_line = trim(fgets(STDIN));
    // 移動する席数  列数 行数
    list($move_num, $line_table_num, $low_table_num) = array_map('intval', explode(" ", $input_line));
    // 自分の位置
    $input_line = trim(fgets(STDIN));
    list($line_place, $low_place) = array_map('intval', explode(" ", $input_line));
    // var_dump($line_place, $low_place);
    // 位置情報が必要なのは自分だけ？

    // 移動経路の数値化
    $moveRoute = str_split(trim(fgets(STDIN)));

    // 各席のチョコの数を取得
    $choco_table = [];
    // 初期化
    for ($i = 0; $i < $line_table_num; $i++) {
        $choco_num_by_line = trim(fgets(STDIN));
        for ($j = 0; $j < $low_table_num; $j++) {
          $choco_table[$i+1][$j+1] = array_map('intval', explode(" ", $choco_num_by_line))[$j];
        }
    }
    // var_dump($choco_table);

    // 移動経路に基づいて移動
    foreach ($moveRoute as $value) {
        switch ($value) {
            case 'F':
                $line_place -= 1;
                echo $choco_table[$line_place][$low_place] . "\n";
                break;
            case 'B':
                $line_place += 1;
                echo $choco_table[$line_place][$low_place] . "\n";
                break;
            case 'R':
                $low_place += 1;
                echo $choco_table[$line_place][$low_place] . "\n";
                break;
            case 'L':
                $low_place -= 1;
                echo $choco_table[$line_place][$low_place] . "\n";
                break;
        }
    }
    // 移動の度に受け取ったチョコの数をカウント
    // $choco_count = 0;
    // $input_line = trim(fgets(STDIN));






    // 移動順路
    // もらえるチョコの個数
    // 自分の位置の把握、移動経路の文字の解釈、移動経路に基づいて移動＜move_num
    // 盤面の再現無し　左上を1*1とする　lowかlineを+1して移動するイメージ
    // 自分の位置 (lowの数字, line数字)
    // 移動経路の文字の解釈 F = line - 1, R = low + 1 ,B = line + 1, L = low - 1
?>
