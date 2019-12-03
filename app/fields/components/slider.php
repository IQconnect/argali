<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$slider = new FieldsBuilder('slider');

$slider
    ->addRepeater('slide')
        ->addWysiwyg('content')
        ->addImage('image')
    ;
return $slider;