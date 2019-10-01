<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$homepage = new FieldsBuilder('homepage');

$homepage
    ->addTab('1st info')
        ->addGroup('1st', ['label'=> ' '])
            ->addFields(get_field_partial('components.text-info'))
            ->addImage('image', ['label'=> 'Zdjęcie'])
        ->endGroup()
    ->addTab('2nd info')
        ->addGroup('2nd', ['label'=> ' '])
            ->addFields(get_field_partial('components.text-info'))
            ->addRelationship('offert', ['label'=> 'oferta', 'post_type'=>'oferty'])
        ->endGroup();
return $homepage;