<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devide-width, initial-scale=1">
  <?php echo $page->metaTags() ?>
  <?= css('assets/css/main.css') ?>
  <link rel="stylesheet" href="assets/css/templates/<?= $template ?>.css">
  
</head>

<body>
  <header>
    <a href="<?= $site->url() ?>" class="logo"><?= $site->title() ?></a>
    <?php
      $items = $pages->listed();
      if($items->isNotEmpty()):
    ?>
    <nav>
      <ul>
        <?php foreach($items as $item): ?>
          <li>
            <a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>">
              <?= $item->title()->html() ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </nav>
    <?php endif ?>
  </header>