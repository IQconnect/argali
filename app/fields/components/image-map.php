<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$map = new FieldsBuilder('image-map');

$map
    ->addText('shortcode', ['label'=>'Kod mapki'])
    ->addRepeater('tooltips')
        ->addTextarea('content', ['rows' => 3, 'new_lines' => 'br']);
    ;
return $map;