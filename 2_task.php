<?php

/** @var mixed $categoryId */
/** @var mysqli $mysqli */

$result = [];
$catalogQuestionsQuery = $mysqli->prepare("
    SELECT
        *
    FROM
        questions
    WHERE
        catalog_id = ?
");
$catalogQuestionsQuery->bind_param("i", $categoryId);
$catalogQuestionsResult = $catalogQuestionsQuery->get_result();

while ($question = $catalogQuestionsResult->fetch_assoc()) {
    $userId = (int)$question['user_id'];

    $questionUserQuery = $mysqli->prepare("
        SELECT
            name,
            gender
        FROM
            users
        WHERE
            id = ?
    ");
    $questionUserQuery->bind_param("i", $userId);
    $questionUserResult = $questionUserQuery->get_result();
    $user = $questionUserResult->fetch_assoc();

    $result[] = [
        'question' => $question,
        'user' => $user
    ];

    $questionUserResult->free();
}

$catalogQuestionsResult->free();
