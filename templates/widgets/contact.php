<div class="row">
    <div class="col-md-5">
        <?php foreach ($addresses as $address=>$descr) { ?>
            <div class="col-md-12">
                <h4><span class="glyphicon glyphicon-map-marker"></span> <a target="_blank" href="https://yandex.ru/maps/?text=<?= $address ?>"><?= $address ?></a>(<?=$descr?>)</h4>
            </div>
        <?php } ?>
        <?php foreach ($phones as $phone=>$descr) { ?>
            <div class="col-md-12">
                <h4><span class="glyphicon glyphicon-earphone"></span><a href="tel:<?= $APP->getClearPhone($phone) ?>"> <?= $phone ?> </a>(<?=$descr?>)</h4>
            </div>
        <?php } ?>
        <?php foreach ($emails as $email) { ?>
            <div class="col-md-12">
                <h4><span class="glyphicon glyphicon-send"></span><a href="mailto:<?= $email ?>"> <?= $email ?></a></h4>
            </div>
        <?php } ?>
        <div class="col-md-12">
            <h5><span class="glyphicon glyphicon-globe"></span><a target="_blank" href="https://luxul-solutions.com"> Сайт разработан в Luxul Solutions</a></h5>
        </div>
    </div>
    <div class="col-md-7"><?= $ya_map_code ?></div>
</div>