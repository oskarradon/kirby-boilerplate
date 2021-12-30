<?php

$projects = $data->children()->listed();
;

?>
<main id="projects">
  <!-- <h1><?= $data->title() ?></h1> -->

    <?php foreach ($projects as $project): ?>
      <a href="<?= $project->url() ?>">
        <figure>
          <?= $project->image()->resize(400) ?>
          <figcaption>
            <span><?= $project->title() ?></span>
            <span><?= $project->category()->first() ?></span>
          </figcaption>
        </figure>
      </a>
    <?php endforeach ?>

</main>
