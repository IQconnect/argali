<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$imgIcons = new FieldsBuilder('img-icons');

$imgIcons
    ->addImage('image')
    ->addRepeater('icons')
        ->addImage('icon')
        ->addTextarea('title', ['new_lines'=>'br'])
    ;
return $imgIcons;