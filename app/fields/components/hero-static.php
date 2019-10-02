<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$heroStatic = new FieldsBuilder('hero-static');

$heroStatic
    ->addGroup('text-info', ['label'=> ' '])
        ->addFields(get_field_partial('components.text-info'))
    ->endGroup()
    ->addImage('image', ['label'=> 'Zdjęcie']);
return $heroStatic;