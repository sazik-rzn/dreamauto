<?php if ((isset($phones) && !empty($phones)) || (isset($form_code) && $form_code != '')) { ?>
    <div class="row" style="position: fixed; right: 10px; bottom: 10px;">
        <div class="col-md-12">
            <a type="button" class="btn btn-success btn-lg" href="tel:<?= $APP->getClearPhone(array_key_first($phones)) ?>" style="margin-bottom: 10px;">
                <span class="glyphicon glyphicon-phone-alt"></span> <?= array_key_first($phones) ?>
            </a>
        </div>
        <div class="clearfix"></div>
        <?php if ($form_code != '') { ?>
            <div class="col-md-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-phone-alt"></span> Заказать обратный
                    звонок
                </button>
            </div>
        <?php } ?>
    </div>
    <?php if ($form_code != '') { ?>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Давайте мы вам перезвоним?
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?= $form_code ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Закрыть
                        </button>
                    </div>
                </div>
            </div>
        </div>
<?php }
} ?>