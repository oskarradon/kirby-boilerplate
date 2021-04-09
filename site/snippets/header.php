<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devide-width, initial-scale=1">
  <?php echo $page->metaTags() ?>
  <?= css('/assets/css/main.css') ?>
  <?php echo css('@auto') ?> <!-- looks for stylesheet with same name as template in /assets/css/templates -->
  <?php if ($page->isHomePage()): ?>
    <title><?= $site->title() ?></title>
  <?php else: ?>
    <title><?= $page->seoTitle()->or($page->title()) ?> | <?= $site->title() ?></title>
  <?php endif ?>
</head>

<body>
  <header>
    <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
    <?php
      $links = $pages->listed();
      if($links->isNotEmpty()):
    ?>
    <nav id="header-nav">
      <?php foreach($links as $link): ?>
        <a<?php e($link->isOpen(), ' class="active"') ?> href="<?= $link->url() ?>">
          <?= $link->title()->html() ?>
        </a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>
  </header>