<?php if(isset($futures) && !empty($futures)){?>
<div class="row">
    <?php foreach($futures as $future){?>
    <div class="col-lg-4">
        <img class="img-circle" src="/upload/<?=$future['img']?>"  width="140" height="140" />
        <h2><?=$future['title']?></h2>
        <p>
        <?=$future['content']?>
        </p>
    </div>
    <?php }?>
</div>
<?php } ?>
