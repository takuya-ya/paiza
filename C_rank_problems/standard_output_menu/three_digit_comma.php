<?php
    // 標準入力から1行読み取る（例: "123456789\n"）
    $input = trim(fgets(STDIN)); // trim()で改行を除去

    // 入力された文字列の長さを取得
    $length = strlen($input);

    // 結果を格納する変数（最初は空）
    $result = '';

    // 文字列を末尾（右）から1文字ずつ処理
    for ($i = $length - 1; $i >= 0; $i--) {

        // 現在の文字を$resultの先頭に追加
        // 例）'9' → '89' → '789' → ...
        $result = $input[$i] . $result;

        // 何文字処理したか（右から数えて）
        $processed_count = $length - $i;

        // 3文字ごとにカンマを挿入する条件
        // ただし、先頭（i == 0）の前には入れない
        if ($processed_count % 3 === 0 && $i != 0) {
            $result = ',' . $result;
        }
    }

    // 最終結果を出力（末尾に改行）
    echo $result . "\n";

// 別解：組み込み関数を使う方法
// $input = trim(fgets(STDIN)); // 入力（例: 123456789）

// // 文字列を反転して3桁ごとにカンマを入れる
// $reversed = strrev($input);
// $formatted = implode(',', str_split($reversed, 3));

// // 再び反転して出力
// echo strrev($formatted) . "\n";
