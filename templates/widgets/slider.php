<?php if (isset($slider) && !empty($slider)) { ?>
  <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php for ($i = 0; $i < count($slider); $i++) { ?>
        <li data-target="#myCarousel" data-slide-to="<?= $i ?>" <?= ($i === 0) ? 'class="active"' : '' ?>></li>
      <?php } ?>
    </ol>
    <div class="carousel-inner" role="listbox">
      <?php foreach ($slider as $index => $slide) { ?>
        <div class="item <?= ($index === 0) ? 'active' : '' ?>" style="background-image: url(/upload/<?= $slide['img'] ?>); background-size: cover;">
          <div class="container">
            <div class="carousel-caption">
              <div class="col-md-4">
                <img src="/upload/logo.png" class="img img-responsive" style="margin: auto;">
              </div>
              <div class="col-md-8">
                <h2><?= $slide['title'] ?></h2>
                <p><?= $slide['text'] ?></p>
              </div>
              <div class="col-md-12">
                <p><a class="btn btn-lg btn-primary" href="<?= $slide['action_href'] ?>" role="button"><?= $slide['action_text'] ?></a></p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->
<?php } ?>