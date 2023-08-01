<?php

$articles = [
    ["title" => "Php VS Python", "content" => "Test", "image" => "1-php-vs-python.jpg"],
    ["title" => "React vs React JS", "content" => "Test", "image" => "2-react-vs-react-native.jpg"],
    ["title" => "Les meilleurs outils Devops", "content" => "Test", "image" => "3-devops.png"],
];

function getArticles(PDO $pdo, int $limit = null):array
{
    $sql = "SELECT * FROM articles ORDER BY id DESC";
        if($limit) {
        $sql .= " LIMIT :limit";
    }

    $query = $pdo->prepare($sql);
    if($limit) {
        $query->bindValue(":limit",$limit, PDO::PARAM_INT);
    }
    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}


?>