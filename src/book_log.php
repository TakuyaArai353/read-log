<?PHP

function createReview()
{
    // 読書ログの登録
    echo '読書ログの登録' . PHP_EOL;
    echo '書籍名：';
    $title = trim(fgets(STDIN));

    echo '著者名：';
    $author = trim(fgets(STDIN));

    echo '読書状況：';
    $status = trim(fgets(STDIN));

    echo '評価：';
    $score = trim(fgets(STDIN));

    echo '感想：';
    $summary = trim(fgets(STDIN));

    echo '登録が完了しました。' . PHP_EOL;

    return [
        'title' => $title,
        'author' => $author,
        'status' => $status,
        'score' => $score,
        'summary' => $summary,
    ];
}

function listReviews($reviews)
{
    foreach ($reviews as $review) {
        echo '読書ログを表示します' . PHP_EOL;
        echo '-------------------' . PHP_EOL;
        echo '書籍名：' . $review['title'] . PHP_EOL;
        echo '著者名：' . $review['author'] . PHP_EOL;
        echo '読書状況：' . $review['status'] . PHP_EOL;
        echo '評価：' . $review['score'] . PHP_EOL;
        echo '感想：' . $review['summary'] . PHP_EOL;
        echo '-------------------' . PHP_EOL;
    }
}

$reviews = [];

while (true) {
    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください（１、２、９）：';
    $number = trim(fgets(STDIN));

    if ($number === '1') {
        $reviews[] = createReview();
    } elseif ($number === '2') {
        // 読書ログの表示
        listReviews($reviews);
    } elseif ($number === '9') {
        break;
    }
}
