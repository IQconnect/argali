<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$Features = new FieldsBuilder('features');

$Features
    ->addText('features_label', ['label'=>'Label'])
    ->addText('features_title', ['label'=>'Tytuł'])
    ->addRepeater('features', ['label'=>'Text info'])
        ->addImage('img', ['label'=>'Zdjęcie'])
        ->addText('title', ['label'=>'Title'])
    ;
return $Features;