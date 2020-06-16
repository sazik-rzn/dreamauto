<?php if (isset($articles) && !empty($articles)) {
    foreach ($articles as $article) { ?>
        <!-- <hr class="featurette-divider" /> -->

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    <?= $article['title']?>
                    <span class="text-muted"><?= $article['subtitle']?> <span class="glyphicon glyphicon-<?= $article['icon']?>"></span>
                </h2>
                <p class="lead">
                <?= $article['content']?>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="/upload/<?= $article['img']?>" />
            </div>
        </div>
<?php }
} ?>