<?php if (isset($menu) && !empty($menu)) { ?>
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Меню</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><?= $site_name ?></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <?php foreach ($menu as $name => $value) {
                            ?>
                                <?php if (is_array($value)) { ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$name?> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <?php foreach($value as $_name=>$_value){?>
                                            <li><a href="<?=$_value?>"><?=$_name?></a></li>
                                            <?php }?>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li><a href="<?= $value ?>"><?= $name ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
<?php } ?>