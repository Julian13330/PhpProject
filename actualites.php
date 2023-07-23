<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/article.php";

?>


<h1>Les actualités !!!!</h1>

<div class="row text-center">
    <!-- Première card-->
    <?php foreach ($articles as $key => $article) { 
        require __DIR__."/templates/article_part.php";
    } ?>
</div>
<?php require_once __DIR__ . "/templates/footer.php"; ?>