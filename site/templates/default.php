<main>
  <h1><?= $page->title() ?></h1>
  <?php foreach ($page->children()->listed() as $child) : ?>
    <a href=<?= $child->url() ?>>
      <?= $child->title() ?>
    </a>
  <?php endforeach ?>
</main>
