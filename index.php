<?php 

$blueprints = Dir::files(kirby()->roots()->blueprints() . DS . 'pages');
$defaultModels = [];

foreach ($blueprints as $bp) {
  $bp = str_replace('.yml', '', $bp);
  if (!file_exists(kirby()->roots()->models() . DS . $bp . '.php')) {
    $defaultModels[$bp] = 'DefaultModel';
  }
}

class DefaultModel extends DefaultPage
{
}

Kirby::plugin('reprovinci/defaultModels', [
  'pageModels' => $defaultModels
]);
