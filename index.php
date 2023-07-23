<?php require_once __DIR__."/templates/header.php";

$articles = [
    ["title" => "Php VS Python", "content" => "Test", "image" => "1-php-vs-python.jpg"],
    ["title" => "React vs React JS", "content" => "Test", "image" => "2-react-vs-react-native.jpg"],
    ["title" => "Les meilleurs outils Devops", "content" => "Test", "image" => "3-devops.png"],
];

?>

<main>

            <div class="container col-xxl-8 px-4 py-5">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="Logo techTrendz" width="700" height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Les cards-->
            <div class="row text-center">
                <!-- Première card-->
                <?php foreach($articles as $key=>$article){ ?>
                <div class="col-md-4 my-2">
                    <div class="card">
                        <img src="uploads/articles/<?=$article["image"] ?>" class="card-img-top" alt="<?=$article["title"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$article["title"] ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </main>

<?php require_once __DIR__."/templates/footer.php";?>