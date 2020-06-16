<?php if (isset($prices) && !empty($prices)) { ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                <th>Услуга</th>
                <th>Цена от</th>
                </tr>
                <?php foreach ($prices as $name => $price) { ?>
                    <tr>
                        <td><?= $name ?></td>
                        <td>₽ <?= $price ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

<?php } ?>