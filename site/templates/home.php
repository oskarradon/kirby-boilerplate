<?php snippet('header', ['template' => $page->id()]); ?>

<?php
  foreach($pages->listed() as $section) {
    if ($section->uid() == 'projects') {
      snippet('projects', ['data' => $section]);
    } else {
      snippet('section', ['data' => $section]);
    }
  }
?>

<?php snippet('footer'); ?>

