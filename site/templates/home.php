<?php 

snippet('head', ['template' => $page->id()]);

foreach($pages->listed() as $section) {
  snippet($section->uid(), ['data' => $section]);
} 

snippet('footer'); 

?>