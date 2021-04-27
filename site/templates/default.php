<?php if ($page->toggle()->toBool() === true) : ?>
  <section id="about-me">
    <h1><?= $data->title() ?></h1>
    <?= $data->text()->kirbytext() ?>
  </section>
<?php else : ?>
  <?php snippet('header') ?>

  <article>
    <h1 class="h1"><?= $page->title()->html() ?></h1>
    <div class="text">
      <?= $page->text()->kt() ?>
    </div>
  </article>

  <?php snippet('footer') ?>
<?php endif ?>

<?php $page->modules() ?>


